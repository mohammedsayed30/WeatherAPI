<?php

/** 
 * 
 * FunctionName:APIResponse
 * this function used to return the respons of the API weather in array format
 * @param string $url to access the api end point request
 * @return array $respons_array that contain all information of the weather in Egypt
 **/

if(!function_exists('APIResponse')){
    function APIResponse(string $url):array{
         // Initialize CURL session to use them to access webpages or APIs
        $ch = curl_init(); 
        // Set the URL              
        curl_setopt($ch, CURLOPT_URL, $url);  
         // Return the result as a string    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // Execute the request
        $response = curl_exec($ch); 
         // Close the session      
        curl_close($ch);                 
        //decode the response to convert them into array
        $respons_array = json_decode($response,true);
        //return the array that contain all things needed for the weather
        return $respons_array ;
    }
}

?>
