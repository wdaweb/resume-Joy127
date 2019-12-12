<div style="width:99%; height:87%; margin:auto; overflow:auto;">
<p style="margin:auto">相片管理</p>
  <form method="post" action="./api/editphoto_api.php">
    <table width="98%">
      <tbody>
        
        <?php 
        $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
        $id=$_SESSION['id'];  

        $sql="SELECT `pid`, `id`, `file`, `text`, `sh` 
              FROM `photo` WHERE `id`='$id' ORDER BY `text`";
        $rows=$pdo->query($sql)->fetchAll();
        foreach ($rows as $key => $r) {
        ?>         
        
        <tr>
            <td>資料序號</td>             
            <td><?=$r['pid'];?></td>
        </tr>
        <tr>
            <td>相片</td>             
            <td><img src="./img/<?=$r['file'];?>" style='width:100px; height:100px'></td>
        </tr>
        <tr>
            <td>影像說明</td>
            <td><input type="text" name="text[]" value="<?=$r['text'];?>"></td>
        </tr>       
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh[]" value="<?=$r['pid'];?>" <?=($r['sh']==1)?"checked":"";?>></td>
        </tr>
        <tr>
            <td>資料刪除</td>
            <td><input type="checkbox" name="del[]" value="<?=$r['pid'];?>"></td>
        </tr>
        <tr>            
            <td>               
                <input type="button" value="更換圖片" 
                       onclick="op('#cover','#cvr','./view/change_photo.php?pid=<?=$r['pid'];?>')" > 
            </td>
        </tr>        
        <tr>
            <td><input type="hidden" name="pid[]" value="<?=$r['pid'];?>"></td>
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
          <input type="hidden" name="photo" value="<?=$photo;?>" >                 
          <td>
              <input type="button"  value="新增相片"
                     onclick="op('#cover','#cvr','./view/photo.php')">
          </td>
          <td style="text-decoration:none">
              <input type="submit" value="修改確定"><input type="reset" value="重置">              
          </td>
        </tr>
      </tbody>
    </table> 

  </form>
</div>