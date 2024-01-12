<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/User.class.php");
require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/UserConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
   case "POST":
      $data = json_decode(file_get_contents('php://input'));
      $response = new stdClass;

      UserDAO::startDb();
      session_start();
      $newUser = new User;
      $newUser->setUserName($data->username);
      $newUser->setEmail($data->email);
      $newUser->setPassword($data->password);
      $userId = UserDAO::insertUser($newUser);
      $newUser->setUserId($userId);

      $_SESSION["user_id"] = $userId;
      $response->success = true;
      $response->message = "Registration success";
      $response->sessionToken = session_id();
      $userLogged = UserConverter::convertToStd($newUser);
      $response->user = $userLogged;
      $response->session = $_SESSION;

      echo json_encode($response);
      break;
}
?>
