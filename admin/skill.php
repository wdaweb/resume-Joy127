<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">技能專長</p>
  <form method="post" action="./api/editskill_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `skid`, `id`, `lang`, `comp`, `other`, `cert`,`sh` 
              FROM `skill` WHERE `id`='$id'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        
        <tr>
            <td>資料序號</td>             
            <td><?=$r['skid'];?></td>
        </tr>
        <tr>
            <td>語文能力</td>             
            <td><input type="text" name="lang[]" value="<?=$r['lang'];?>"></td>
        </tr>
        <tr>
            <td>電腦能力</td>
            <td><input type="text" name="comp[]" value="<?=$r['comp'];?>"></td>
        </tr>
        <tr>
            <td>其他技能</td>
            <td><input type="text" name="other[]" value="<?=$r['other'];?>"></td>
        </tr>
        <tr>
            <td>專業證照</td>  
            <td><input type="text" name="cert[]" value="<?=$r['cert'];?>"></td>
        </tr>
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['skid'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        </tr>
        <tr>
            <td>資料刪除</td>
            <td><input type="checkbox" name="del[]" value="<?=$r['skid'];?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="skid[]" value="<?=$r['skid'];?>"></td>
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
                onclick="op('#cover','#cvr','./view/skill.php')" 
                value="新增技能專長">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 
  </form>
</div>