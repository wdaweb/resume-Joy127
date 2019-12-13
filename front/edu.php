<div > 
    <table width="98%">             
        <?php 
            $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
            $id=$_SESSION['id'];

            $sql="SELECT `eid`, `id`, `level`, `school`, `dept`, `period`, `sh` 
                FROM `edu` WHERE `id`='$id' && `sh`='1'";
            $rows=$pdo->query($sql)->fetchAll();
            foreach ($rows as $key => $r) {
        ?>
        <tr>
            <td style="color:orange">教育程度</td> 
            <td><?=$r['level'];?></td>
        </tr>
        <tr>
            <td>學校名稱</td>
            <td><?=$r['school'];?></td>
        </tr>
        <tr>
            <td>研讀科系</td>
            <td><?=$r['dept'];?></td>
        </tr>
        <tr>
            <td>研讀期間</td>  
            <td><?=$r['period'];?></td>
        </tr> 
        <tr><td></td></tr>                 
        <?php
        }
        ?> 
    </table> 
</div>