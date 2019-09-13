<?php
    include('connect.php');
    $description = $_POST['car__description'];
    $price = $_POST['car__price'];
    $promo = $_POST['car__promo'];

    $sql = "INSERT INTO cars VALUES(null,'unknown.jpg','$description',$price,$promo)";
    $mysqli -> query($sql);
    header('location:index.php');
?>