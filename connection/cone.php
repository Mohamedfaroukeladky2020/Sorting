<?php
function connectiondatabase()
{
    $info = ("mysql:host=localhost;dbname=ecommerce");
    $username = "root";
    $password = "";
    $conn = new PDO($info, $username, $password);

    return  $conn;
}
