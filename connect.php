<?php

$user = 'root';
$pass = '';
$db = 'test';

$db = new mysqli('localhost',$user,$pass,$db) or die("Not ok")

echo "Cool";

?>