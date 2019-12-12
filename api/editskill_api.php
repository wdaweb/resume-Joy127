<?php
    include_once "../base.php";     
    
    foreach ($_POST['skid'] as $key => $skid) {
        if (!empty($_POST['del']) && in_array($skid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `skill` WHERE `skid`='$skid'";
            echo $sql;
            $pdo->exec($sql);

        }else { 
            //update            
            $data['skid']=$_POST['skid'][$key];
            $data['id']=$_POST['id'][$key];
            $data['lang']=$_POST['lang'][$key];
            $data['comp']=$_POST['comp'][$key];
            $data['other']=$_POST['other'][$key];           
            $data['cert']=$_POST['cert'][$key];           
            $data['sh']=(in_array($skid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['skid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="skid" && $key!="id") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `skill` SET ".implode(",",$tmp)." WHERE `skid`='".$data['skid']."'";                
                echo $sql;
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=skill"); 
    
?>