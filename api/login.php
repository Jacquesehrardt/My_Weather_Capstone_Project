<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/User.class.php");
require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/UserDAO.class.php");
require_once("./inc/Utilities/UserConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
   case "POST":
      $data = json_decode(file_get_contents('php://input'));
      $response = new stdClass;
      $response->success = false;
      $response->message = "Login failed";
      $response->sessionToken = null;
      UserDAO::startDb();
      $currentUser = UserDAO::getUserbyEmail($data->email);
      if(isset($currentUser)) {
         if( 
            $data->email == $currentUser->getEmail()
            &&
            $data->password == $currentUser->getPassword()
         ){
            session_start();
            $_SESSION["user_id"] = $currentUser->getUserId();
            $response->success = true;
            $response->message = "Login success - PHP";
            $response->sessionToken = session_id();
            $userLogged = UserConverter::convertToStd($currentUser);
            $response->user = $userLogged;
            $response->session = $_SESSION;  
               
         }
      }
      echo json_encode($response);
      break;
}
