<?php      
    include_once "../base.php";

    $id=$_POST["id"];
    $content=$_POST["content"];    
    $sh=$_POST["sh"];
   
    $sql="INSERT INTO `bio`(`id`, `content`,`sh`) 
          VALUES ('$id','$content','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=bio&&s=7");
    }else {   
        header("location:../admin.php?do=bio&&err=7");
    }

?>