<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>

<h3>新增求學歷程</h3>
<hr>
<form action="./api/addedu_api.php" method="post" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>教育程度</td>             
            <td><input type="text" name="level" value=""></td>
        </tr>
        <tr>
            <td>學校名稱</td>
            <td><input type="text" name="school" value=""></td>
        </tr>
        <tr>
            <td>研讀科系</td>
            <td><input type="text" name="dept" value=""></td>
        </tr>
        <tr>
            <td>研讀期間</td>  
            <td><input type="text" name="period" value=""></td>
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
