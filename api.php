<?php
// Set headers for CORS and JSON response
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Prepare the response data
$response = [
    "email" => "abdullateefdauda01.com", 
    "current_datetime" => gmdate('Y-m-d\TH:i:s\Z'),
    "github_url" => "https://github.com/abdul-o/info_api.git" 
];

// Send the JSON response with HTTP 200 status code
http_response_code(200);
echo json_encode($response, JSON_PRETTY_PRINT);
?>