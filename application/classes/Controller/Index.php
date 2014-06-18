<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller {

  public function action_index() {
    $this->renderWithHeaderAndFooter("index");
  }

  private function renderWithHeaderAndFooter($viewName) {
     echo View::factory('header');
     echo View::factory('index/'.$viewName);
     echo View::factory('footer');
  }

}