<?php       
    include_once "../base.php";

    $id=$_POST["id"];
    $lang=$_POST["lang"];
    $comp=$_POST["comp"];
    $other=$_POST["other"];
    $cert=$_POST["cert"];   
    $sh=$_POST["sh"];
   
    $sql="INSERT INTO `skill`(`id`, `lang`, `comp`, `other`, `cert`,`sh`) 
          VALUES ('$id','$lang','$comp','$other','$cert','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=skill&&s=6");
    }else {   
        header("location:../admin.php?do=skill&&err=6");
    }

?>