<?php
include('UserInformation.php');

$ip="202.4.126.210";
$ch =curl_init();
curl_setopt($ch,CURLOPT_URL,"https://api.ipgeolocation.io/ipgeo?apiKey=c3fcb409ce824e28b5cb5fa0b27134c0&ip=".$ip);

curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$result=curl_exec($ch);
$result=json_decode($result);

 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title>User Side Information</title>
   </head>
   <body>

     <div class="container">
       <div class="row">
         <h2>Client Side Information</h2>
         <table class="table">
           <tbody>
                <tr>
                  <td>Continent Name:</td>
                  <td><?php echo  $result->continent_name;?></td>
                  </tr>
                  <tr>
                  <td>Country Name:</td>
                  <td><?php echo  $result->country_name;?></td>
                    </tr>
                    <tr>
                  <td>Region:</td>
                  <td><?php echo  $result->state_prov;?></td>
                  </tr>
                  <tr>
                  <td>City:</td>
                  <td><?php echo  $result->city;?></td>
                  </tr>
                  <tr>
                  <td>Time Zone:</td>
                  <td><?php echo  $result->time_zone->name;?></td>
                  </tr>
                  <tr>
                  <td>Time:</td>
                  <td><?php echo  isset($result->time_zone->current_time) ? date('h:i A, d-M-Y',strtotime($result->time_zone->current_time)) :"";?></td>
                  </tr>
                  <tr>
                  <td>IP Address:</td>
                  <td><?php echo  $result->ip;?></td>
                  </tr>
                  <tr>
                  <td>District:</td>
                  <td><?php echo  $result->district;?></td>
                  </tr>
                  <tr>
                  <td>ISP Name:</td>
                  <td><?php echo  $result->isp;?></td>
                  </tr>
                  <tr>
                  <td>OS Name:</td>
                  <td><?php echo  UserInfo::get_os();?></td>
                  </tr>

                  <tr>
                  <td>Browser:</td>
                  <td><?php echo  UserInfo::get_browser();?></td>
                  </tr>
                  <tr>
                  <td>Device:</td>
                  <td><?php echo  UserInfo::get_device();?></td>
                </tr>
              </tbody>
            </table>
       </div>
     </div>


     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
 </html>
