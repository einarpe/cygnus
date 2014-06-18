<?php defined('SYSPATH') or die('No direct script access.');

class Model_File extends ORM {

  protected $_table_name = "cygnus_file";

  public static function upload(&$filesData) {
    if (!isset($filesData['error']) || is_array($filesData['error']))
      throw new RuntimeException('Invalid parameters.');

    // Check $filesData['error'] value.
    switch ($filesData['error']) {
      case UPLOAD_ERR_OK:
      break;
      case UPLOAD_ERR_NO_FILE:
        throw new RuntimeException('No file sent.');
      case UPLOAD_ERR_INI_SIZE:
      case UPLOAD_ERR_FORM_SIZE:
        throw new RuntimeException('Exceeded filesize limit.');
      default:
        throw new RuntimeException('Unknown errors.');
    }

    if ($filesData['size'] > 1000000) 
      throw new RuntimeException('Exceeded filesize limit.');
    /*
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    if (false === $ext = array_search($finfo->file($filesData['tmp_name']), array('jpg' => 'image/jpeg','png' => 'image/png', 'gif' => 'image/gif'), true))
      throw new RuntimeException('Invalid file format.');
    */
    $newFileName = sprintf('./uploads/%s.%s', sha1_file($filesData['tmp_name']), 'tmp');
    if (!move_uploaded_file($filesData['tmp_name'], $newFileName)) 
      throw new RuntimeException('Failed to move uploaded file.');

    $result = self::insertToDb($newFileName, $filesData);
      
    unlink($newFileName);
    return $result;
  }

  /**
   * Store just uploaded file to database.
   * 
   */
  private static function insertToDb($uploadedFileName, $fileInfo) {
    // insert record to cygnus_file table
    $cf = ORM::factory("File");
    $cf->Name = $fileInfo["name"];
    $cf->Size = $fileInfo["size"];
    $cf->UploadDate = date('Y-m-d H:i:s');
    $cf->MimeType = null;
    $cf->UserId = null;
    
    $cf->save();
    $id = $cf->id;

    // save data to separate table named cygnus_data
    $cd = ORM::factory("Data");
    $cd->FileData = file_get_contents($uploadedFileName);
    $cd->FileId = $id;

    $cd->save();
    $id_data = $cd->id;

    return $id > 0 && $id_data > 0;
  }
}