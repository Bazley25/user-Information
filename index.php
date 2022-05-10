<?php
include('UserInformation.php');

$ip="123.253.65.153";
$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.ipgeolocation.io/ipgeo?apiKey=c3fcb409ce824e28b5cb5fa0b27134c0&ip=".$ip);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

print_r($result);

  echo "Continent Name:" ." " .$result->continent_name.'<br>'.'<br>';
  echo "Country Name:" ." " .$result->country_name.'<br>'.'<br>';
  echo "Region:" ." " .$result->state_prov.'<br>'.'<br>';
  echo "City:" ." " .$result->city.'<br>'.'<br>';
  echo "Time:" .isset($result->time_zone->current_time) ? date('d-m-Y, h:i:s A',strtotime($result->time_zone->current_time)) :"";
  echo "<br>";
  echo "<br>";
  echo "IP Address:" ." " .$result->ip.'<br>'.'<br>';
  echo "District:" ." " .$result->district.'<br>'.'<br>';
  echo "ISP Name:" ." " .$result->isp.'<br>'.'<br>';
  echo "OS Name:" ." " .UserInfo::get_os();
  echo "<br>";
  echo "<br>";
  echo "Browser:" ." " .UserInfo::get_browser();
  echo "<br>";
  echo "<br>";
  echo "Device:"." " .UserInfo::get_device();


 ?>
