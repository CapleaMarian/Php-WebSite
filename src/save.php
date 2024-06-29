<?php

require_once "connection.php";
$msg="";
if(isset($_POST['upload'])){
    $target="./images/". md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['PhotoName'];
    $sql="INSERT INTO images (title, image) VALUES ('$text','$target')";
    mysqli_query($con,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        header('location:admin.php');
    }else{
        $msq="VAi! Vai! Vai!!!";
        echo $msg;
    }
}
?>