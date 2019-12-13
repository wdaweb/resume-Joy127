<?php
    include_once "../base.php";    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="../css/style2.css">
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
    <title>Document</title>
    <style>
        .item {
            width: 200px;
            margin: auto;
            padding: 50px;
            font-size: 30px;
            color: blue;
            box-sizing: border-box;
        }

        hr {
            height: 2px;
            background-color: rgba(170, 237, 253, 0.925);
        }
    </style>
</head>

<body>
    <div class="main">
        <div class="top">RESUME SYSTEM</div>
        <div class="middle">
            <div id="block1">
                <table>
                    <?php
                    $id=$_SESSION['id'];
                    $sql="select * from `member` where id='$id'";                        
                    $data=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);

                    $sql1="select `file` from `photo` where id='$id' && `text`='證件照' && `sh`=1";                        
                    $data1=$pdo->query($sql1)->fetch(PDO::FETCH_ASSOC);
                ?>
                    <tr>
                        <td class="item" rowspan="6">
                            <img src="../img/<?=$data1['file'];?>" style='width:100px; height:150px; float:right'>
                        </td>
                    </tr>
                    <tr>
                        <td>求&nbsp;&nbsp;職&nbsp;&nbsp;者</td>
                        <td><?=$data['name'];?></td>
                    </tr>
                    <tr>
                        <td>出生日期</td>
                        <td><?=$data['birthday'];?></td>
                    </tr>
                    <tr>
                        <td>電子信箱</td>
                        <td><?=$data['email'];?></td>
                    </tr>
                    <tr>
                        <td>聯絡電話</td>
                        <td><?=$data['tel'];?></td>
                    </tr>
                    <tr>
                        <td>聯絡地址</td>
                        <td><?=$data['addr'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </table>
            </div>

            <hr>
            <div class="block2">
                <table>
                    <tr>
                        <td style="font-size:20px; color:burlywood; font-weight:bold; text-align:center">求學歷程</td>
                    </tr>
                    <?php 
                    $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
                    $id=$_SESSION['id'];

                    $sql="SELECT `eid`, `id`, `level`, `school`, `dept`, `period`, `sh` 
                        FROM `edu` WHERE `id`='$id' && `sh`='1'";
                    $rows=$pdo->query($sql)->fetchAll(); 
                    foreach ($rows as $key => $r) {
                ?>
                    <tr>
                        <td class="item" rowspan="5" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="color:orange">教育程度</td>
                        <td colspan="2"><?=$r['level'];?></td>
                    </tr>
                    <tr>
                        <td>學校名稱</td>
                        <td><?=$r['school'];?></td>
                    </tr>
                    <tr>
                        <td>研讀科系</td>
                        <td><?=$r['dept'];?></td>
                    </tr>
                    <tr>
                        <td>研讀期間</td>
                        <td><?=$r['period'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>

            <hr>
            <div class="block3">
                <table>
                    <tr>
                        <td style="font-size:20px; color:burlywood; font-weight:bold; text-align:center">求職條件</td>
                    </tr>
                    <?php 
                    $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
                    $id=$_SESSION['id']; 
                    $sql="SELECT `sid`, `id`, `position`, `place`, `content`, `time`, `salary`,`other`,`sh` 
                        FROM `search` WHERE `id`='$id' && `sh`='1'";                        
                    $rows=$pdo->query($sql)->fetchAll();
                    foreach ($rows as $key => $r) {
                ?>
                    <tr>
                        <td class="item" rowspan="7" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="color:orange">職位名稱</td>
                        <td><?=$r['position'];?></td>
                    </tr>
                    <tr>
                        <td>工作地點</td>
                        <td><?=$r['place'];?></td>
                    </tr>
                    <tr>
                        <td>工作內容</td>
                        <td><?=$r['content'];?></td>
                    </tr>
                    <tr>
                        <td>工作時間</td>
                        <td><?=$r['time'];?></td>
                    </tr>
                    <tr>
                        <td>期望待遇</td>
                        <td><?=$r['salary'];?></td>
                    </tr>
                    <tr>
                        <td>其他條件</td>
                        <td><?=$r['other'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>

            <hr>
            <div class="block4">
                <table>
                    <tr>
                        <td style="font-size:20px; color:burlywood; font-weight:bold; text-align:center">工作經歷</td>
                    </tr>
                    <?php 
                    $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
                    $id=$_SESSION['id'];  

                    $sql="SELECT `wid`, `id`, `coname`, `position`, `period`, `salary`, `content`,`sh` 
                        FROM `workexp` WHERE `id`='$id' && `sh`='1'";

                    $rows=$pdo->query($sql)->fetchAll();
                    foreach ($rows as $key => $r) {
                ?>
                    <tr>
                        <td class="item" rowspan="5" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="color:orange">公司名稱</td>
                        <td><?=$r['coname'];?></td>
                    </tr>
                    <tr>
                        <td>職位名稱</td>
                        <td><?=$r['position'];?></td>
                    </tr>
                    <tr>
                        <td>工作期間</td>
                        <td><?=$r['period'];?></td>
                    </tr>
                    <tr>
                        <td>工作內容</td>
                        <td style="width:500px"><?=$r['content'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>

            <hr>
            <div class="block5">
                <table>
                    <tr>
                        <td style="font-size:20px; color:burlywood; font-weight:bold; text-align:center">技能專長</td>
                    </tr>
                    <?php 
                    $pdo=new PDO("mysql:host=localhost; charset=utf8; dbname=resume", 'root', '');
                    $id=$_SESSION['id'];  

                    $sql="SELECT `sKid`, `id`, `lang`, `comp`, `other`, `cert`,`sh` 
                        FROM `skill` WHERE `id`='$id' && `sh`='1'";

                    $rows=$pdo->query($sql)->fetchAll();
                    foreach ($rows as $key => $r) {
                ?>
                    <tr>
                        <td class="item" rowspan="5" colspan="2"></td>
                    </tr>
                    <tr>
                        <td style="color:orange">語文能力</td>
                        <td><?=$r['lang'];?></td>
                    </tr>
                    <tr>
                        <td>電腦專長</td>
                        <td><?=$r['comp'];?></td>
                    </tr>
                    <tr>
                        <td>其他技能</td>
                        <td><?=$r['other'];?></td>
                    </tr>
                    <tr>
                        <td>專業證照</td>
                        <td><?=$r['cert'];?></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>

            <hr>
            <div class="block6">
                <table>
                    <tr>
                        <td style="font-size:20px; color:burlywood; font-weight:bold; text-align:center">
                            自傳</td>
                            <!-- 自&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;傳</td> -->
                    </tr>
                <?php 
                    $sql="SELECT `bid`, `id`, `content`, `sh` 
                    FROM `bio` WHERE `id`='$id' && `sh`='1'";
                    $rows=$pdo->query($sql)->fetchAll();
                    foreach ($rows as $key => $r) {
                ?>
                    <tr>
                        <td class="item" rowspan="2"></td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="content" cols="60" rows="40"
                                style="font-size:16px; background: rgba(241, 247, 248, 0.925); overflow:hidden; border:none">
                                <?=$r['content'];?>
                            </textarea>
                        </td>
                    </tr>
                    <?php
                }
                ?>
                </table>
            </div>
        </div>
        <div class="footer">
            <a href="../admin.php?do=basic" style="float:left">履歷維護管理</a>
            <a href="./resume.php" style="float:right">上一頁</a>
            <p>THANK YOU FOR YOUR ATTENTION</p>

        </div>
    </div>
</body>
</html>