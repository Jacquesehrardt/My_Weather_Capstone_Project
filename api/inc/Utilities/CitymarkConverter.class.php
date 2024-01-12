<?php

class CitymarkConverter {

    public static function convertToStd($citymark) {
        if ( ! is_array($citymark) ) {
            $stdObject = new stdClass;
            $stdObject->citymarkId = $citymark->getCitymarkId();
            $stdObject->userId = $citymark->getUserId();
            $stdObject->cityName = $citymark->getCityName();
            $stdObject->region = $citymark->getRegion();
            $stdObject->country = $citymark->getCountry();
            $stdObject->url = $citymark->getUrl();
            
            return $stdObject;
        } else {
            $stdObjectList = [];
            foreach($citymark as $newCitymark) {
                $stdObject = new stdClass;
                $stdObject->citymarkId = $newCitymark->getcitymarkId();
                $stdObject->userId = $newCitymark->getUserId();
                $stdObject->cityName = $newCitymark->getCityName();
                $stdObject->region = $newCitymark->getRegion();
                $stdObject->country = $newCitymark->getCountry();
                $stdObject->url = $newCitymark->getUrl();
                $stdObjectList[] = $stdObject;
            }
            return $stdObjectList;
        }
    }
}
