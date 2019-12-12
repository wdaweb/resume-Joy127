<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">關於我</p>
  <form method="post" action="./api/editbio_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `bid`, `id`, `content`, `sh` 
              FROM `bio` WHERE `id`='$id'";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        <tr>
          <td>資料序號</td>
          <td><?=$r['bid'];?></td>
        </tr>
        <tr>
            <td>自傳內容</td>
            <td>
              <textarea name="content[]" cols="60" rows="20"><?=$r['content'];?></textarea>
            </td> 
        </tr>
        <tr>
          <td>資料顯示</td>
          <td>
            <input type="checkbox" name="sh[]" value="<?=$r['bid'];?>" <?=($r['sh']==1)?"checked":"";?>>
          </td>
        </tr>
        <tr>
          <td>資料刪除</td>
          <td>
            <input type="checkbox" name="del[]" value="<?=$r['bid'];?>">
          </td>
        </tr>
        <tr>
            <td><input type="hidden" name="bid[]" value="<?=$r['bid'];?>"></td>
            <td><input type="hidden" name="id[]" value="<?=$r['id'];?>"></td>
        </tr>                
        <?php
        }
        ?>       
      </tbody>
    </table>

    <table style="">
      <tbody>                                                         
        <tr>          
          <td>
              <input type="button" 
              onclick="op('#cover','#cvr','./view/bio.php')" 
              value="新增自傳">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 

  </form>
</div>
