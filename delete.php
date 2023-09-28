<?php
    include 'connect.php';
   $id = $_GET['id'];
   mysqli_query($con,"DELETE FROM `gallery` WHERE id = $id");
   header('location:photocrud.php');
?>