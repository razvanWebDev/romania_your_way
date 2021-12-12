<?php
$site_key = '6LcP9C8cAAAAAJpfFjJmPLDaPZysdEUFrvfaiT4e';
$secret_key = '6LcP9C8cAAAAALWcIr5gGzpBi2EcbtYfEsI5V1gD';

// ONLINE (infinityfree)=============

// $server = 'sql308.epizy.com';
// $username = 'epiz_30575221';
// $password = '1NnkZTaho7';
// $dbname = 'epiz_30575221_romania_your_way'; 

$website_url = "www.romania-your-way.great-site.net";

//LOCAL=================================
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'romania_your_way';    

  $connection = mysqli_connect($server, $username, $password, $dbname);

if (!$connection) {
  die("Failed to connect to MySQL: " . mysqli_connect_error()) ;
}
?>