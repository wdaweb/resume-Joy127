<div>    
    <?php
        $id=$_SESSION['id'];
        $sql="select * from `member` where id='$id'";                        
        $data=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

        $sql1="select `file` from `photo` where id='$id' && `text`='證件照' && `sh`=1";                      
        $data1=$pdo->query($sql1)->fetch(PDO::FETCH_ASSOC);
    

    ?> 
    <table>            
        <tr>
            <td>姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</td>
            <td><?=$data['name'];?></td>
            <td rowspan="5"><img src="../img/<?=$data1['file'];?>" style="width:100px; height:150px;"></td> 
        </tr>
        <tr>
            <td>出生日期</td>
            <td><?=$data['birthday'];?></td>
        </tr>
        <tr>
            <td>電子信箱</td>
            <td><?=$data['email'];?></td>
        </tr>
        <tr>
            <td>聯絡電話</td>
            <td><?=$data['tel'];?></td>
        </tr>
        <tr>
            <td>聯絡地址</td>
            <td><?=$data['addr'];?></td>
        </tr>
        
    </table>   

</div> 
    
