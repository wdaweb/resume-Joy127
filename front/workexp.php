<?php
  include_once "../base.php";  
?>
<div>
    <table width="98%">            
      <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];         
        
        $sql="select count(*) from `workexp` where `id`='$id' && `sh`='1'";
        $sum=$pdo->query($sql)->fetchColumn();
        $div=3;
        $pages=ceil($sum/$div);
        $p=(!empty($_GET['p']))?$_GET['p']:1;
        $start=($p-1)*$div;

        $sql1="SELECT `wid`, `id`, `coname`, `position`, `period`, `salary`, `content`,`sh` 
              FROM `workexp` WHERE `id`='$id' && `sh`='1' LIMIT $start, $div";

        $rows=$pdo->query($sql1)->fetchAll();
        foreach ($rows as $key => $r) {
      ?>        
        <tr> 
            <td style="color:orange">公司名稱</td>                     
            <td><?=$r['coname'];?></td>
        </tr>
        <tr>
            <td>職位名稱</td>           
            <td><?=$r['position'];?></td>
        </tr>
        <tr> 
            <td>工作期間</td>           
            <td><?=$r['period'];?></td>
        </tr>        
        <tr> 
            <td>工作內容</td>                      
            <td><textarea name="content" cols="85" rows="4"><?=$r['content'];?></textarea></td> 
        </tr> 
        <tr><td></td></tr>                           
      <?php
        }
      ?> 
    </table>

     <!-- 插入一個DIV用來放置分頁及頁碼-->
    <div>   
      <?php
        if(($p-1)>0){ 
          echo "<a href='resume.php?do=workexp&p=".($p-1)."' style='text-decoration:none'> < </a>";
        }
        for($i=1;$i<=$pages;$i++){
          $fontSize=($i==$p)?"24px":"16px";            
          echo "<a href='resume.php?do=workexp&p=$i' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
        }
        if(($p+1)<=$pages){
          echo "<a href='resume.php?do=workexp&p=".($p+1)."' style='text-decoration:none'> > </a>";
        }
      ?>
    </div> 
</div>
     