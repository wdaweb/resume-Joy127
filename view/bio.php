<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>

<h3>新增自傳</h3>
<hr>
<form action="./api/addbio_api.php" method="post" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>自傳內容</td>  
            <td><textarea name="content" id="" cols="55" rows="20"></textarea></td>
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