<div id="in">
    <h3>會員登入</h3>
    <p style="text-align:center">
        <?php
            $id=$_SESSION['id'];
            $sql="select * from `member` where id='$id'";                        
            $data=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);                        
            $name=$data['name'];
            echo "HI！ $name 歡迎登入本系統！<br>以下是您個人的基本資料："; 
        ?>
    </p>
    <hr>                           
    <form action="./api/editbasic_api.php" method="post">
        <table>
            <tr>
                <td>會員代號</td>
                <td><?=$data['id'];?>
                    <input type="hidden" name="id" value="<?=$data['id'];?>">
                </td>
            </tr>
            <tr>
                <td>會員帳號</td>
                <td><?=$data['acc'];?></td>
            </tr>
            <tr>
                <td>會員密碼</td>
                <td><input type="text" name="pw" id="" value="<?=$data['pw'];?>"></td>
            </tr>
            <tr>
                <td>會員姓名</td>
                <td><input type="text" name="name" id="" value="<?=$data['name'];?>"></td>
            </tr>
            <tr>
                <td>出生日期</td>
                <td><input type="date" name="birthday" id="" value="<?=$data['birthday'];?>"></td>
            </tr>
            <tr>
                <td>電子信箱</td>
                <td><input type="text" name="email" id="" value="<?=$data['email'];?>"></td>
            </tr>
            <tr>
                <td>聯絡電話</td>
                <td><input type="text" name="tel" id="" value="<?=$data['tel'];?>"></td>
            </tr>
            <tr>
                <td>聯絡地址</td>
                <td><input type="text" name="addr" id="" value="<?=$data['addr'];?>"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="編輯基本資料">
                </td>
            </tr>
        </table>
    </form>

</div> 
    
