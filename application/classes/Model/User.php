<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends ORM {

  protected $_table_name = "cygnus_user";

  public static function login($userlogin, $password) {

    $qry = DB::query(Database::SELECT, "
      Select Id, Name from cygnus_user
      where userlogin=:userlogin and password=sha1(concat(:password, salt))");

    $qry->parameters(array(":userlogin" => $userlogin, ":password" => $password));

    if ($row = $qry->execute()) {
      Session::instance()->set("LoggedUserId", (int)$row[0]["Id"]);
      Session::instance()->set("LoggedUserName", (int)$row[0]["Name"]);
    }
  }

}
