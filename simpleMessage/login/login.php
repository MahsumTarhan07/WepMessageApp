<?php
session_start();
ob_start();
include '../database/dbs.php';


if(!isset($_POST["loginsubmit"])){

    header("Location: ../login.php");
    exit();
}else{
    $name = FilterSecurity($_POST["email_phone"]);
    $password = FilterSecurity(md($_POST["password"]));
    $crypassword = hash('sha256' $password);

    if((!$name == null) || (!$name=="") || (!$crypassword=="") || (!$crypassword=="")){
        
    }
}


?>