<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.01/api/v1/chats/36734bf8aee011ef9eb50242ac120003/sessions/b745827eaee411efa65f0242ac120003',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'PUT',
  CURLOPT_POSTFIELDS =>'
     {
          "name": "change session name"
     }',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: Bearer ragflow-hjNzA4ODI4YWM5MTExZWY5YzUyMDI0Mm'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
