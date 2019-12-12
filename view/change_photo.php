<?php 
    include_once "../base.php"; 
    // $id=$_SESSION['id'];
?>

<h3 class="cent">更換相片</h3>
<hr>
<form action="./api/change_photo_api.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto">
<table>
    <tr>
        <td>更換相片：</td>
        <td><input type="file" name="file" id="file"></td>
    </tr>
    <tr>
        <td>
            <input type="hidden" name="id" value="<?=$_SESSION['id'];?>">
            <input type="hidden" name="pid" value="<?=$_GET['pid'];?>">
            <input type="submit" value="更換">
            <input type="reset" value="重置">
        </td>
        <td></td>
    </tr>
</table>
</form>