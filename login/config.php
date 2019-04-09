<?php
session_start();
spl_autoload_register(function($ClassName){
    $filename = "Class" . DIRECTORY_SEPARATOR . $ClassName . ".php";

    if(file_exists($filename)){
        require_once($filename);
    }
});