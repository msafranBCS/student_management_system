<?php
$server="localhost";
$user="root";
$password="";
$dbname="s_m_systerm";

$connection= new mysqli($server,$user,$password,$dbname);

if ($connection->connect_error){
    die("could not connect with database".$connection->connect_error);
}
?>