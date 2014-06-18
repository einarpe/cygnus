<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

  public function action_index() {
    $viewData = array(
      "logged" => $this->getLoggedUserId() > 0
    );
    $this->renderWithHeaderAndFooter("index", $viewData);
  }

  public function action_result() {
    $viewData = array(
      "uploadResult" => Session::instance()->get("UploadResult"),
      "uploadError" => Session::instance()->get("UploadError")
    );
    $this->renderWithHeaderAndFooter("result", $viewData);
  }

  private function renderWithHeaderAndFooter($viewName, $bind = array()) {
    echo View::factory('header');

    $idx = View::factory('index/'.$viewName);
    foreach ($bind as $name => $value)
      $idx->set($name, $value);

    echo $idx;
    echo View::factory('footer');
  }

  private function getLoggedUserId() {
     $id = (int)Session::instance()->get("LoggedUserId");
     return $id;
  }

}