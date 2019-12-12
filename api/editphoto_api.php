<?php 
    include_once "../base.php";     
    
    foreach ($_POST['pid'] as $key => $pid) {
        if (!empty($_POST['del']) && in_array($pid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `photo` WHERE `pid`='$pid'";
            echo $sql;
            $pdo->exec($sql);

        }else { 
            //update
            
            $data['pid']=$_POST['pid'][$key];
            $data['id']=$_POST['id'][$key];           
            $data['text']=$_POST['text'][$key];                   
            $data['sh']=(in_array($pid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['pid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="pid" && $key!="id") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `photo` SET ".implode(",",$tmp)." WHERE `pid`='".$data['pid']."'";   
                echo $sql;             
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=photo"); 
    
?>