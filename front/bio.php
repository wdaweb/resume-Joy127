<div > 
    <table width="98%">
      <tbody>        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];

        ?>
        <tr>
          <td>關於我</td>
        </tr> 
        <?php   
        $sql="SELECT `bid`, `id`, `content`, `sh` 
              FROM `bio` WHERE `id`='$id' && `sh`='1'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>    
        
        <tr>   
            <td><textarea name="content" cols="100" rows="35"><?=$r['content'];?></textarea></td> 
        </tr>       
                          
        <?php
        }
        ?>       
      </tbody>
    </table> 
</div>