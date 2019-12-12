<?php  
    include_once "../base.php";     
    
    foreach ($_POST['bid'] as $key => $bid) {
        if (!empty($_POST['del']) && in_array($bid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `bio` WHERE `bid`='$bid'";                    
            $pdo->exec($sql);

        }else { 
            //update            
            $data['bid']=$_POST['bid'][$key];
            $data['id']=$_POST['id'][$key];
            $data['content']=$_POST['content'][$key];                    
            $data['sh']=(in_array($bid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['bid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="bid" && $key!="id") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `bio` SET ".implode(",",$tmp)." WHERE `bid`='".$data['bid']."'"; 
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=bio"); 
    
?>