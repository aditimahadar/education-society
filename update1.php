<?php
include 'connect.php';
    $id = $_POST['id'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image'] ['tmp_name'];
    $img_name = $_FILES['image'] ['name'];
    $img_des= "images/".$img_name;
    move_uploaded_file($img_loc,'images/'.$img_name);

    mysqli_query($con,"UPDATE `gallery` SET `image`=' $img_des',`meta_title`='[value-4]',`meta_desc`='[value-5]',`meta_keyword`='[value-6]' WHERE id='$id' ");
    header("location:photocrud.php");

?>