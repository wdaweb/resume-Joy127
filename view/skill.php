<?php
    include_once "../base.php";
    $id=$_SESSION['id'];
?>

<h3>新增技能專長</h3>
<hr>
<form action="./api/addskill_api.php" method="post" style="width:70%;margin:auto">
    <table>        
        <tr>
            <td>語文能力</td>
            <td><input type="text" name="lang" value="" id=""></td>
        </tr>                              
        <tr>
            <td>電腦專長</td>
            <td><input type="text" name="comp" value="" id=""></td>
        </tr>
        <tr>
            <td>其他技能</td>
            <td><input type="text" name="other" value="" id=""></td>
        </tr>
        <tr>
            <td>專業證照</td>
            <td><input type="text" name="cert" value="" id=""></td>
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
