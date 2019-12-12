<?php   
    include "../base.php";   

    $acc=$_POST['acc'];  
    $pw=$_POST['pw']; 
   
    $sql="SELECT id FROM `member` where acc='$acc' && pw='$pw'";      
    $data=$pdo->query($sql)->fetch();

    if (!empty($data)) {           
        $_SESSION['login']=1;                    
        $_SESSION['id']=$data['id']; 
        header("location:../admin.php?do=basic&&s=9"); 
    }else {
        header("location:../index.php?err=9");
    }
?>
</body>
</html>