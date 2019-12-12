<?php
  include_once "../base.php";  
?>

    <table width="98%">
      <tbody>        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `sid`, `id`, `position`, `place`, `content`, `time`, `salary`,`other`,`sh` 
              FROM `search` WHERE `id`='$id' && `sh`='1'";
              
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>   
             <tr></tr>                           
            <tr>
                <td style="width:90px text-align:right">職位名稱</td>
                <td style="width:200px text-align:left"><?=$r['position'];?></td>
            </tr>
            <tr>
                <td style="width:90px text-align:right">工作地點</td>
                <td style="width:200px text-align:left"><?=$r['place'];?></td>
            </tr>
            <tr>
                <td style="width:90px text-align:right">工作內容</td>
                <td style="width:200px text-align:left"><?=$r['content'];?></td>
            </tr>
            <tr>
                <td style="width:90px text-align:right">工作時間</td>
                <td style="width:200px text-align:left"><?=$r['time'];?></td>
            </tr>
            <tr>
                <td style="width:90px text-align:right">期望待遇</td>
                <td style="width:200px text-align:left"><?=$r['salary'];?></td>
            </tr>
            <tr>
                <td style="width:90px text-align:right">其他條件</td>
                <td style="width:50px text-align:left"><?=$r['other'];?></td>
            </tr>
            <tr></tr>
        <?php
        }
        ?>       
        </tbody>           
    </table>