<?php
include 'database.php';
if (isset($_POST['price']))
{
//    var_dump($_POST);
    extract($_POST);
    $sql = "UPDATE `products` SET `name`='$name',`price`=$price,`quantity`=$quantity WHERE  id = $id";
    mysqli_query($conn, $sql);
}

header("Location: fetch.php");