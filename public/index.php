<?php
//to use the cities array
include_once "config.php"; 
//to  use the APIResponse
include_once "APIResponse.php";  

//iterate all the cities
foreach($cities as $city){
    //access the api from "weatherapi.com" website for the frist city for the frist div
    $url = "http://api.weatherapi.com/v1/current.json?key=09222453c2524d42b07213530251502&q=" . $city;
    
    //get the response of the API
    $APIArray = APIResponse($url);
  
    //include the view file
    include (dirname(__DIR__) . "/views/weatherView.php");
}