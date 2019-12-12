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
            <tr></tr>                             
            <tr>
                <td style="width:100px text-align:right">語文能力</td>
                <td style="width:200px text-align:left"><?=$r['lang'];?></td>
            </tr>
            <tr>
                <td style="width:100px text-align:right">電腦專長</td>
                <td style="width:200px text-align:left"><?=$r['comp'];?></td>
            </tr>
            <tr>
                <td style="width:100px text-align:right">其他技能</td>
                <td style="width:200px text-align:left"><?=$r['other'];?></td>
            </tr>
            <tr>
                <td style="width:100px text-align:right">專業證照</td>
                <td style="width:200px text-align:left"><?=$r['cert'];?></td>
            </tr>
            <tr></tr>             
        <?php
        }
        ?>       
        </tbody>           
    </table>