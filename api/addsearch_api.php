<?php       
    include_once "../base.php";

    $id=$_POST["id"];
    $position=$_POST["position"];
    $place=$_POST["place"];
    $content=$_POST["content"];
    $time=$_POST["time"];
    $salary=$_POST["salary"];
    $other=$_POST["other"];
    $sh=$_POST["sh"];
   
    $sql="INSERT INTO `search`(`id`, `position`, `place`, `content`, `time`,`salary`,`other`,`sh`) 
          VALUES ('$id','$position','$place','$content','$time','$salary','$other','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=search&&s=5");
    }else {   
        header("location:../admin.php?do=search&&err=5");
    }

?>