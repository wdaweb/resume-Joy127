<?php    
    include_once "../base.php";

    $id=$_POST["id"];
    // $text=$_POST["text"];    
    $sh=$_POST["sh"];

    if (!empty($_FILES['file']['tmp_name'])) {
        $data['file']=$_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'],"../img/".$data['file']);
    }

    if (!empty($_POST['text'])) {
        $data['text']=$_POST['text'];
    }
   
    $sql="INSERT INTO `photo`(`id`, `file`, `text`,`sh`) 
          VALUES ('$id','".$data['file']."','".$data['text']."','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=photo&&s=8");
    }else {   
        header("location:../admin.php?do=photo&&err=8");
    }

?>