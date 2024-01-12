<?php

class Citymark {

    private int $citymarkId;
    private int $userId;
    private string $cityName;
    private string $region;
    private string $country;
    private string $url;
    

    public function getCitymarkId() {
        return $this->citymarkId;
    }

    public function setCitymarkId($citymarkId) {
        $this->citymarkId = $citymarkId;
    }

    public function getUserId() {
        return $this->userId;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

    public function getCityName() {
        return $this->cityName;
    }

    public function setCityName($cityName) {
        $this->cityName = $cityName;
    }

    public function getRegion() {
        return $this->region;
    }

    public function setRegion($region) {
        $this->region = $region;
    }

    public function getCountry() {
        return $this->country;
    }

    public function setCountry($country) {
        $this->country = $country;
    }

    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }
}
