<?php

class UserConverter{
   public static function convertToStd($user){
      $stdObject = new stdClass;
      $stdObject->userId = $user->getUserId();
      $stdObject->userName = $user->getUserName();
      $stdObject->email = $user->getEmail();

      return $stdObject;
   }
}