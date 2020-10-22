<?php
require_once "vendor/autoload.php";
$client = new \GuzzleHttp\Client();
$res = $client->request('POST', 'https://api.pondokprogrammer.com/api/student_login', [
    'form_params' => [
        'email' => 'nurihsancahgft@gmail.com',
        'password' => 'Nu190401'
    ]
]);
// echo $res->getStatusCode();

//  // buat di web
// var_dump($res->getBody()->getContents());


$array = json_decode($res->getBody());
// var_dump($array);
$token = $array->token;
// var_dump($token);
$client->request('POST', 'https://api.pondokprogrammer.com/api/class/qr?class_id=85', [
    'headers' => [
        'Authorization' => "bearer $token"
    ]
 ]);


?>
