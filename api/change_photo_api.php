<?php
include_once "../base.php";

$pid=$_POST['pid'];

if(!empty($_FILES['file']['tmp_name'])){
    $data['file']=$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);

    $sql="UPDATE `photo` SET `file`='".$data['file']."' WHERE `pid`='$pid'";
    echo $sql;             
    $pdo->exec($sql);  
}

header("location:../admin.php?do=photo"); 
?>