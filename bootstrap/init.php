<?php
session_start();
include "constant.php";
include "config.php";
include base_path. "/libs/helper.php";
include base_path. "/libs/lib_user.php";


try{

    $pdo = new PDO("mysql:host={$database_config->host};dbname={$database_config->dbname}",$database_config->username,$database_config->password);

    $pdo->exec('set names utf8');



}catch(PDOException $e){


    echo "PDOException Happened => " . $e->getMessage() . "\n in line =>" . $e->getLine() ;



}

include base_path. "/libs/lib_location.php";

