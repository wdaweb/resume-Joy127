<?php
    include_once "../base.php";     
    
    foreach ($_POST['wid'] as $key => $wid) {
        if (!empty($_POST['del']) && in_array($wid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `workexp` WHERE `wid`='$wid'";            
            $pdo->exec($sql);

        }else { 
            //update            
            $data['wid']=$_POST['wid'][$key];
            $data['id']=$_POST['id'][$key];
            $data['coname']=$_POST['coname'][$key];
            $data['position']=$_POST['position'][$key];
            $data['period']=$_POST['period'][$key];           
            $data['salary']=$_POST['salary'][$key];
            $data['content']=$_POST['content'][$key];
            $data['sh']=(in_array($wid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['wid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="wid" && $key!="id") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `workexp` SET ".implode(",",$tmp)." WHERE `wid`='".$data['wid']."'";                
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=workexp"); 
    
?>