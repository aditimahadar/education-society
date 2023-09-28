<?php
    include 'connect.php';
    if(isset($_POST['upload'])){
        $image = $_FILES['image'];
        $img_loc = $_FILES['image'] ['tmp_name'];
        $img_name = $_FILES['image'] ['name'];
        $img_des= "images/".$img_name;
        move_uploaded_file($img_loc,'images/'.$img_name);

        //insert data

        mysqli_query($con,"INSERT INTO `gallery`(`image`) VALUES ('$img_des')");
        header("location:photocrud.php");
    }
?>