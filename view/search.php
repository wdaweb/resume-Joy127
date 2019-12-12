<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>

<h3>新增求職條件</h3>
<hr>
<form action="./api/addsearch_api.php" method="post" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>職位名稱</td>
            <td><input type="text" name="position" value="" id=""></td>
        </tr>                              
        <tr>
            <td>工作地點</td>
            <td><input type="text" name="place" value="" id=""></td>
        </tr>
        <tr>
            <td>工作內容</td>
            <td><input type="text" name="content" value="" id=""></td>
        </tr>
        <tr>
            <td>工作時間</td>
            <td><input type="text" name="time" value="" id=""></td>
        </tr>
        <tr>
            <td>期望待遇</td>
            <td><input type="text" name="salary" value="" id=""></td>           
        </tr>
        <tr>
            <td>其他條件</td>
            <td><input type="text" name="other" value="" id=""></td>
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
