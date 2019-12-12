<?php
     $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
     
    // include "base.php";

    $acc=$_POST["acc"];
    $pw=$_POST["pw"];
    $name=$_POST["name"];
    $birthday=$_POST["birthday"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $addr=$_POST["addr"];

    $sql="insert into member (`acc`,`pw`,`name`,`birthday`,`email`,`tel`,`addr`) 
          values('$acc','$pw','$name','$birthday','$email','$tel','$addr')";
   
    echo $pdo->exec($sql); 

?>