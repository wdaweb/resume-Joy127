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
            <tr>
                <td style="color:orange">職位名稱</td>
                <td style=""><?=$r['position'];?></td>
            </tr>
            <tr>
                <td style="">工作地點</td>
                <td style=""><?=$r['place'];?></td>
            </tr>
            <tr>
                <td style="">工作內容</td>
                <td style=""><?=$r['content'];?></td>
            </tr>
            <tr>
                <td style="">工作時間</td>
                <td style=""><?=$r['time'];?></td>
            </tr>
            <tr>
                <td style="">期望待遇</td>
                <td style=""><?=$r['salary'];?></td>
            </tr>
            <tr>
                <td style="">其他條件</td>
                <td style=""><?=$r['other'];?></td>
            </tr>
            <tr><td></td></tr>
        <?php
        }
        ?>       
        </tbody>           
    </table>