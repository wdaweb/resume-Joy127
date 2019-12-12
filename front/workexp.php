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
        <tr></tr>         
        <tr>                      
            <td><?=$r['coname'];?></td>
        </tr>
        <tr>           
            <td><?=$r['position'];?></td>
        </tr>
        <tr>            
            <td><?=$r['period'];?></td>
        </tr>        
        <tr>                      
            <td><textarea name="content" cols="100" rows="3"><?=$r['content'];?></textarea></td> 
        </tr> 
        <tr></tr>                           
      <?php
        }
      ?> 
    </table>

     <!-- 插入一個DIV用來放置分頁及頁碼-->
    <div>   
      <?php
          // if(($p-1)>0){   
                 
          //   echo "<a href='resume.php?p=".($p-1)."' style='text-decoration:none'> < </a>";
          // }
          for($i=1;$i<=$pages;$i++){
            $fontSize=($i==$p)?"24px":"16px";
            echo "<a href='resume.php?&p=$i#tab3' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
            // echo "<a href='resume.php?p=$i#tab3' style='font-size:$fontSize;text-decoration:none'> ".$i." </a>";
          }
          // if(($p+1)<=$pages){
          //   echo "<a href='resume.php?p=".($p+1)."' style='text-decoration:none'> > </a>";
          // }
      ?>
    </div> 
</div>