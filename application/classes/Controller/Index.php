<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

  public function action_index() {
    $viewData = array(
      "logged" => $this->getLoggedUserId() > 0,
      "loggedUserName" => Session::instance()->get("LoggedUserName")
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

  public function action_login() {
    var_dump(count($_POST));
    if (count($_POST) > 0) {

      $userlogin = trim($_POST["userlogin"]);
      $password = trim($_POST["password"]);

      Model_User::login($userlogin, $password);
      HTTP::Redirect("index");
    }
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