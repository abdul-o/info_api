<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");



$age = [
    "email" => "abdullateefdauda01@gmail.com", 
    "current_datetime" => gmdate('Y-m-d\TH:i:s\Z'), 
    "github_url" => "https://github.com/abdul-o/info_api.git", 
];
http_response_code(200);
echo json_encode($age, JSON_PRETTY_PRINT);




?>