<?php
class Place
{

    private $name;
    private $picture;
    private $stay;

    function __construct($city_name, $city_image, $length_of_stay) {
        $this->name = $city_name;
        $this->picture = $city_image;
        $this->stay = $length_of_stay;
    }

    function setName($new_name)
    {
        $this->name = $new_name;
    }
    function getName()
    {
        return $this->name;
    }
    function setPicture($new_city_image)
    {
        $this->picture = $new_city_image;
    }
    function getPicture()
    {
        return $this->picture;
    }
    function setStay($new_length_of_stay)
    {
        $this->stay = $new_length_of_stay;
    }
    function getStay()
    {
        return $this->stay;
    }

    function save()
    {
        array_push($_SESSION['list_of_places'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_places'];
    }

    static function deleteLast()
    {
        array_pop($_SESSION['list_of_places']);
    }












}

 ?>
