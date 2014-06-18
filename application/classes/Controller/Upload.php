<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Upload extends Controller {


  public function action_index() {
    try
    {
      $result = Model_File::upload($_FILES["cf"]);
    }
    catch (Exception $e) {
      Session::instance()->set("UploadError", $e);
    }

    Session::instance()->set("UploadResult", !!$result);
    Session::instance()->set("LastUploadTime", time());

    HTTP::redirect("index/result");
  }
  
}