<?php
include 'db.php';

// yandex geocode token
$token = '334f77fd-ed61-4f8d-8b91-6b78273063bf';

// get data from form
$address = $_POST['address'];
$name = $_POST['name'];

// get address from yandex geocode
$ch = curl_init();
$query = curl_escape($ch, $address);
$url = "https://geocode-maps.yandex.ru/1.x/?format=json&apikey=$token&geocode=".$query;
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url);
$result=curl_exec($ch);
curl_close($ch);

$resAddress = json_decode($result, true)['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['metaDataProperty']['GeocoderMetaData']['text'];

// print data
echo $resAddress;

$data = array(
    'name' => $name,
    'address' => $resAddress
);

// add data in db
addData($data);
