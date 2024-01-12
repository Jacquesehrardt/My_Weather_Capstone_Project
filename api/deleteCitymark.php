<?php

require_once("./inc/config.inc.php");
require_once("./inc/Entities/Citymark.class.php");
require_once("./inc/Utilities/PDOAgent.class.php");
require_once("./inc/Utilities/DAO/CitymarkDAO.class.php");
require_once("./inc/Utilities/CitymarkConverter.class.php");

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Content-type: application/json; charset=utf-8");

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
   case "POST":
      $data = json_decode(file_get_contents('php://input'));
      
      CitymarkDAO::startDb();
      $citymarkId = $data->citymarkId;
      CitymarkDAO::deleteCitymarkById($citymarkId);

      $response = new stdClass;
      $response->success = true;
      $response->message = "Delete Citymark success - PHP";
      echo json_encode($response);
      break;
}