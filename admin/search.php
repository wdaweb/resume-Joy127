<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">求職條件</p>
  <form method="post" action="./api/editsearch_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `sid`, `id`, `position`, `place`, `content`, `time`, `salary`,`other`,`sh` 
              FROM `search` WHERE `id`='$id'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        
        <tr>
            <td>資料序號</td>             
            <td><?=$r['sid'];?></td>
        </tr>
        <tr>
            <td>職位名稱</td>             
            <td><input type="text" name="position[]" value="<?=$r['position'];?>"></td>
        </tr>
        <tr>
            <td>工作地點</td>
            <td><input type="text" name="place[]" value="<?=$r['place'];?>"></td>
        </tr>
        <tr>
            <td>工作內容</td>
            <td><input type="text" name="content[]" value="<?=$r['content'];?>"></td>
        </tr>
        <tr>
            <td>工作時間</td>  
            <td><input type="text" name="time[]" value="<?=$r['time'];?>"></td>
        </tr>
        <tr>
            <td>工作待遇</td>  
            <td><input type="text" name="salary[]" value="<?=$r['salary'];?>"></td>            
        </tr>
        <tr>
            <td>其他條件</td>  
            <td><input type="text" name="other[]" value="<?=$r['other'];?>"></td>
        </tr>
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['sid'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        </tr>
        <tr>
            <td>資料刪除</td>
            <td><input type="checkbox" name="del[]" value="<?=$r['sid'];?>"></td>
        </tr>
        <tr>
            <td><input type="hidden" name="sid[]" value="<?=$r['sid'];?>"></td>
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
                onclick="op('#cover','#cvr','./view/search.php')" 
                value="新增求職條件">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 
  </form>
</div>