<?php
     $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');     
    // include "base.php";

    $id=$_POST["id"];    
    $pw=$_POST["pw"];
    $name=$_POST["name"];
    $birthday=$_POST["birthday"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $addr=$_POST["addr"];

    $sql="UPDATE `member` 
          SET `pw`='$pw',`name`='$name',`birthday`='$birthday',
              `email`='$email',`tel`='$tel',`addr`='$addr' 
          WHERE `id`='$id'";

    if ($pdo->exec($sql)) {
        header("location:../admin.php?do=basic&&s=2");
    }else {   
        header("location:../admin.php?do=basic&&err=2");
    }
?>