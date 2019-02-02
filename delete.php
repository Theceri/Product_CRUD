<?php
include 'database.php';
if (isset($_GET['id'])) //If you click the button it has id in the url
{
//    var_dump($_POST);
    extract($_GET); //Creates a variable called id
    $sql = "delete from products where id=$id";
    mysqli_query($conn, $sql);
}

header("location: fetch.php"); //redirects the page back to fetch.php