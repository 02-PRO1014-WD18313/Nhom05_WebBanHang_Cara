<?php
function connect()
{
    $conn=new PDO("mysql:hostname=localhost;post=3306;dbname=du_an_1",'root',"");
    $conn->exec("set names utf8");
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
    return $conn;
}
?>