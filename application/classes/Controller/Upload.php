<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Upload extends Controller {
  
  public function action_index() {
    try
    {
      /*$a = print_r($_FILES, true);
      echo View::factory("upload/debug")->bind("data", $a);
      return;*/

      if (!isset($_FILES['cf']['error']) || is_array($_FILES['cf']['error']))
        throw new RuntimeException('Invalid parameters.');

      // Check $_FILES['cf']['error'] value.
      switch ($_FILES['cf']['error']) {
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

      if ($_FILES['cf']['size'] > 1000000) 
        throw new RuntimeException('Exceeded filesize limit.');

      $finfo = new finfo(FILEINFO_MIME_TYPE);
      if (false === $ext = array_search($finfo->file($_FILES['cf']['tmp_name']), array('jpg' => 'image/jpeg','png' => 'image/png', 'gif' => 'image/gif'), true))
        throw new RuntimeException('Invalid file format.');

      $newFileName = sprintf('./uploads/%s.%s', sha1_file($_FILES['cf']['tmp_name']), $ext);
      if (!move_uploaded_file($_FILES['cf']['tmp_name'], $newFileName)) 
        throw new RuntimeException('Failed to move uploaded file.');

      $result = true;


      /*
      $qry = db()->prepare("insert into cygnus_file(name, fileDate, fileSize, userId) values (:name, :fileDate, :fileSize, :userId)");
      $qry->execute(array(
        ":name" => $newFileName,
        ":fileDate" => date(),
        ":fileSize" => $_FILES['cf']['size'],
        ":userId" => $_SESSION["LoggedId"]
      ));
      */

    }
    catch (RuntimeException $e)
    {
      $result = false;
      echo $e->getMessage();
    }
  }

  private function insertToDb($fileData)
  {
    
  }


}