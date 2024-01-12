<?php

class CitymarkDAO {
    
    private static $db;

    public static function startDb() {
        self::$db = new PDOAgent("Citymark");
    }

    public static function insertCitymark(Citymark $newCitymark) {
        $sql = "INSERT INTO citymarks(userId, cityName, region, country, url) VALUES (:userId, :cityName, :region, :country, :url)";

        self::$db->query($sql);
        
        self::$db->bind(":userId",$newCitymark->getUserId());
        self::$db->bind(":cityName",$newCitymark->getCityName());
        self::$db->bind(":region",$newCitymark->getRegion());
        self::$db->bind(":country",$newCitymark->getCountry());
        self::$db->bind(":url",$newCitymark->getUrl());

        self::$db->execute();

        return self::$db->lastInsertId();
    }

    static function getCitymarkByUserId(int $userId)  {
        $sql = "SELECT * FROM citymarks WHERE userId=:userId";

        self::$db->query($sql);

        self::$db->bind(":userId",$userId);

        self::$db->execute();
      
        return self::$db->resultSet();
    }

    static function deleteCitymarkById(int $citymarkId){
        $sql = "DELETE FROM citymarks WHERE citymarkId = :citymarkId";

        self::$db->query($sql);
        
        self::$db->bind(":citymarkId",$citymarkId);

        self::$db->execute();

        return self::$db->rowCount();
    }
}