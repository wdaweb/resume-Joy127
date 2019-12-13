<?php
    include_once "base.php";	
    if(empty($_SESSION['login'])){
        header("location:./index.php?err=1");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">   
    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/js.js"></script>
    <title>Resume_edit</title>
    <style>
      .cvr input{
        width:100px;
        height:15px;
        border:none;  
        font-size:12px;
        padding:1px;
        /* background: rgba(241, 247, 248, 0.925);  */       
      }

      .cl{
        display: block; 
        width: 30px; 
        height: 40px;
        padding: 5px;
        font-size: 20px; 
        color: #000; 
        margin: 5px auto;
        font-weight: bold;
        text-align: center; 
        position: relative; 
        border-radius: 5px; 
        box-sizing: border-box; 
        text-decoration: none;
        background-color: #fff;
      }

      a {
        display:block;
        width:180px;
        height:40px;           
        padding:5px;            
        font-size:25px;
        color:white;
        margin:5px auto;       
        font-weight:bold;
        text-align: center;  
        position: relative;
        border-radius: 5px;
        box-sizing: border-box;
        text-decoration: none;     
        background-color: rgba(170, 237, 253, 0.925);            
      }

      a:hover {
        color:green;
        cursor:pointer;
        background-color:#fafbc9;
      } 


    </style>
</head>
<body>
<div id="cover" style="display:none; ">
    <div id="coverr">
    <a class="cl" style="position:absolute; right:3px; top:4px; cursor:pointer; z-index:9999;"
        onclick="cl(&#39;#cover&#39;)">X</a>
      <div id="cvr" style="position:absolute; width:99%; height:100%; margin:auto; z-index:9898;"></div>
    </div>
</div>

  <div class="main">
      <div class="top">RESUME SYSTEM</div>

      <div class="middle">
        <div class="left">
            <div class="nav">
              <a href="?do=basic">基本資料</a>
              <a href="?do=edu">求學歷程</a>
              <a href="?do=workexp">工作經歷</a>
              <a href="?do=search">求職條件</a>
              <a href="?do=skill">技能專長</a>
              <a href="?do=bio">自傳附件</a>
              <a href="?do=photo">相片管理</a>
              <a href="./front/resume.php">履歷顯示</a>
              <a href="./api/logout.php">登出系統</a>
            </div>            
        </div> 

        <div class="right">
            <div class="content"> 
            <?php                
                $do=(!empty($_GET['do']))?$_GET['do']:"basic";
                $path="./admin/" . $do . ".php";
                if(file_exists($path)){
                  include $path;
                }else{
                  include "./admin/basic.php";
                }             
            ?>            
            </div> 
        </div>
                               
      </div>

      <?php include  "footer.php"; ?>  

      
    </div>
</body>
</html>