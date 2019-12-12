<?php       
    include_once "../base.php";

    $id=$_POST["id"];
    $coname=$_POST["coname"];
    $position=$_POST["position"];
    $period=$_POST["period"];
    $salary=$_POST["salary"];
    $content=$_POST["content"];
    $sh=$_POST["sh"];
   
    $sql="INSERT INTO `workexp`(`id`, `coname`, `position`, `period`, `salary`,`content`, `sh`) 
          VALUES ('$id','$coname','$position','$period','$salary','$content','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=workexp&&s=4");
    }else {   
        header("location:../admin.php?do=workexp&&err=4");
    }

?>