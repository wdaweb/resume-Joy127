<?php    
    include_once "../base.php";

    $id=$_POST["id"];
    $level=$_POST["level"];
    $school=$_POST["school"];
    $dept=$_POST["dept"];
    $period=$_POST["period"];
    $sh=$_POST["sh"];
   
    $sql="INSERT INTO `edu`(`id`, `level`, `school`, `dept`, `period`, `sh`) 
          VALUES ('$id','$level','$school','$dept','$period','$sh')";
   
    if($pdo->exec($sql)) {
        header("location:../admin.php?do=edu&&s=3");
    }else {   
        header("location:../admin.php?do=edu&&err=3");
    }

?>