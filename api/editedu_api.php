<?php 
    include_once "../base.php";     
    
    foreach ($_POST['eid'] as $key => $eid) {
        if (!empty($_POST['del']) && in_array($eid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `edu` WHERE `eid`='$eid'";           
            $pdo->exec($sql);            

        }else { 
            //update            
            $data['eid']=$_POST['eid'][$key];
            $data['id']=$_POST['id'][$key];
            $data['level']=$_POST['level'][$key];
            $data['school']=$_POST['school'][$key];
            $data['dept']=$_POST['dept'][$key];
            $data['period']=$_POST['period'][$key];           
            $data['sh']=(in_array($eid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['eid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="eid" && $key!="eid") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `edu` SET ".implode(",",$tmp)." WHERE `eid`='".$data['eid']."'";                
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=edu");     
?>