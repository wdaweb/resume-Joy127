<?php
  include_once "../base.php";  
?>

    <table width="98%">
      <tbody>        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `sKid`, `id`, `lang`, `comp`, `other`, `cert`,`sh` 
              FROM `skill` WHERE `id`='$id' && `sh`='1'";

        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>                                         
            <tr>
                <td style="color:orange">語文能力</td>
                <td style=""><?=$r['lang'];?></td>
            </tr>
            <tr>
                <td style="">電腦專長</td>
                <td style=""><?=$r['comp'];?></td>
            </tr>
            <tr>
                <td style="">其他技能</td>
                <td style=""><?=$r['other'];?></td>
            </tr>
            <tr>
                <td style="">專業證照</td>
                <td style=""><?=$r['cert'];?></td>
            </tr>
            <tr><td></td></tr>             
        <?php
        }
        ?>       
        </tbody>           
    </table>