<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">工作經歷</p>
  <form method="post" action="./api/editworkexp_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `wid`, `id`, `coname`, `position`, `period`, `salary`, `content`,`sh` 
              FROM `workexp` WHERE `id`='$id'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        
        <tr>
            <td>資料序號</td>             
            <td><?=$r['wid'];?></td>
        </tr>
        <tr>
            <td>公司名稱</td>             
            <td><input type="text" name="coname[]" value="<?=$r['coname'];?>"></td>
        </tr>
        <tr>
            <td>職位名稱</td>
            <td><input type="text" name="position[]" value="<?=$r['position'];?>"></td>
        </tr>
        <tr>
            <td>工作期間</td>
            <td><input type="text" name="period[]" value="<?=$r['period'];?>"></td>
        </tr>
        <tr>
            <td>工作待遇</td>  
            <td><input type="text" name="salary[]" value="<?=$r['salary'];?>"></td>
        </tr>
        <tr>
            <td>工作內容</td> 
            <td><textarea name="content[]"  cols="50" rows="6" wrap="hard"><?=$r['content'];?></textarea></td>
        </tr>
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['wid'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        </tr>
        <tr>
            <td>資料刪除</td>
            <td><input type="checkbox" name="del[]" value="<?=$r['wid'];?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="wid[]" value="<?=$r['wid'];?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
        </tr>                
        <?php
        }
        ?>       
      </tbody>
    </table>
    
    <table>
      <tbody>                                                         
        <tr>          
          <td>
              <input type="button" 
              onclick="op('#cover','#cvr','./view/workexp.php')" 
              value="新增工作經歷">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 

  </form>
</div>