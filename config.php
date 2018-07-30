<?php
require 'environment.php';

$config=array();

if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/MVC/");
    $config['dbname']='';
    $config['host']='localhost';
    $config['dbuser']='root';
    $config['dbpass']='';




} else {

    define("BASE_URL", 'http://localhost/MVC/');
    $config['dbname']='';
    $config['host']='localhost';
    $confi['dbuser']='root';
    $confi['dbpass']='';


}

global $pdo;

try{


    $pdo = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch (PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}


