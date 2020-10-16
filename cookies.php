<?php
//date_default_timezone_set("Asia/Bangkok");
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS");
// header("Access-Control-Allow-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    $cookies = array
    (
        array("Have a beautiful day","positive"),
        array("Practice makes perfect","positive"),
        array("Wish you happiness","positive"),
        array("You look pretty","positive"),
        array("You love challenge","positive"),
        array("You have a bad day","negative"),
        array("Your secret will be exposed","negative"),
        array("You have no luck","negative"),
        array("You are working hard","negative"),
        array("You are busy","negative"),

    );

    $num = rand(0,9);
   
    echo "{\"message\":\"" . $cookies[$num][0] . "\",\"status\":\"".$cookies[$num][1]."\"}";


?>