<div > 
    <table width="98%">             
      <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];
      ?>
        <!-- <tr>
          <td></td>
        </tr>  -->
      <?php   
        $sql="SELECT `bid`, `id`, `content`, `sh` 
              FROM `bio` WHERE `id`='$id' && `sh`='1'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
      ?> 
        <tr>   
            <td><textarea name="content" cols="100" rows="35" style="text-align:left"><?=$r['content'];?></textarea></td> 
        </tr>       
        <tr><td></td></tr>                 
      <?php
        }
      ?> 
    </table> 
</div>