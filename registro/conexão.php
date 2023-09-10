<?php 

$username = "root";
$senha = "";
$database = "base_usuarios";
$host="localhost";

$coon = new mysqli($host,$username,$senha,$database);

if($coon -> connect_error){

    echo "erro";

}



?>