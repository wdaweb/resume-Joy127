<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">求學歷程</p>
  <form method="post" action="./api/editedu_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `eid`, `id`, `level`, `school`, `dept`, `period`, `sh` 
              FROM `edu` WHERE `id`='$id'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        
        <tr>
            <td>資料序號</td>             
            <td><?=$r['eid'];?></td>
        </tr>
        <tr>
            <td>教育程度</td>             
            <td><input type="text" name="level[]" value="<?=$r['level'];?>"></td>
        </tr>
        <tr>
            <td>學校名稱</td>
            <td><input type="text" name="school[]" value="<?=$r['school'];?>"></td>
        </tr>
        <tr>
            <td>研讀科系</td>
            <td><input type="text" name="dept[]" value="<?=$r['dept'];?>"></td>
        </tr>
        <tr>
            <td>研讀期間</td>  
            <td><input type="text" name="period[]" value="<?=$r['period'];?>"></td>
        </tr>
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['eid'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        </tr>
        <tr>
            <td>資料刪除</td>
            <td><input type="checkbox" name="del[]" value="<?=$r['eid'];?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="eid[]" value="<?=$r['eid'];?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
        </tr>                
        <?php
        }
        ?>       
      </tbody>
    </table>

    <!-- <table style="margin-top:40px; width:90%;"> -->
    <table style="">
      <tbody>                                                         
        <tr>          
          <td>
                <input type="button" 
                onclick="op('#cover','#cvr','./view/edu.php')" 
                value="新增求學歷程">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 

  </form>
</div>