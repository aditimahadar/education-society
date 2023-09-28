<?php
    include 'connect.php';
    if(isset($_POST['upload'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $number = $_POST['number'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }
  



   
   header("location:index.php");
?>