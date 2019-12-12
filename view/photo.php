<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>
<h3>新增相片檔</h3>
<hr>
<form action="./api/addphoto_api.php" method="post" enctype="multipart/form-data" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>相片來源</td>             
            <td><input type="file" name="file" id="file"></td>
        </tr>
        <tr>
            <td>相片說明</td>
            <td><input type="text" name="text" value=""></td>
        </tr>        
        <tr>
            <td>資料顯示</td>
            <td><input type="checkbox" name="sh" value="1"></td>
        </tr> 
        <tr>
            <td colspan="2">
                <input type="hidden" name="id" value="<?=$id;?>">
                <input type="submit" value="新增" >
                <input type="reset" value="重置">
            </td>        
        </tr>
    </table>
</form>


