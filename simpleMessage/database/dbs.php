<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=simple_basic_message;charset=utf8','root','');
}catch(PDOException $e){
    echo "Hata : " . $e->getMessage();
}

function FilterSecurity($db){
    $trim = trim($db);
    $striptag = strip_tags($trim);
    $character = htmlspecialchars($striptag ,ENT_QUOTES);
    $result = $character;
    return $result;
}


?>