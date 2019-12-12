<?php
    include_once "../base.php";     
    
    foreach ($_POST['sid'] as $key => $sid) {
        if (!empty($_POST['del']) && in_array($sid,$_POST['del'])) {                        
            //del           
            $sql="DELETE FROM `search` WHERE `sid`='$sid'";
            echo $sql;
            $pdo->exec($sql);

        }else { 
            //update            
            $data['sid']=$_POST['sid'][$key];
            $data['id']=$_POST['id'][$key];
            $data['position']=$_POST['position'][$key];
            $data['place']=$_POST['place'][$key];
            $data['content']=$_POST['content'][$key];           
            $data['time']=$_POST['time'][$key];
            $data['salary']=$_POST['salary'][$key];
            $data['other']=$_POST['other'][$key];
            $data['sh']=(in_array($sid,$_POST['sh']))?1:0; 
            //save 
            if (!empty($data['sid'])) { 
                foreach ($data as $key => $value) {
                    if ($key!="sid" && $key!="id") {
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                }
                $sql="UPDATE `search` SET ".implode(",",$tmp)." WHERE `sid`='".$data['sid']."'";                
                echo $sql;
                $pdo->exec($sql);                           
            }            
        }
    }

    header("location:../admin.php?do=search"); 
    
?>