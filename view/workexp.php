<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>

<h3>新增工作經歷</h3>
<hr>
<form action="./api/addworkexp_api.php" method="post" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>公司名稱</td>
            <td><input type="text" name="coname" value="" id=""></td>
        </tr>                              
        <tr>
            <td>職位名稱</td>
            <td><input type="text" name="position" value="" id=""></td>
        </tr>
        <tr>
            <td>工作期間</td>
            <td><input type="text" name="period" value="" id=""></td>
        </tr>
        <tr>
            <td>工作待遇</td>
            <td><input type="text" name="salary" value="" id=""></td>
        </tr>
        <tr>
            <td>工作內容</td>           
            <td><textarea name="content" cols="50" rows="6" wrap="hard"></textarea></td>
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
