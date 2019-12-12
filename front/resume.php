<?php
    include_once "../base.php";	
    if(empty($_SESSION['login'])){
        header("location:../index.php?err=5");
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
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/js.js"></script>
    <title>RESUME</title>    
</head>
    <style>
    body {
        list-style-type: none;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Microsoft JhengHei", Arial, Helvetica, sans-serif;
    }

    .main {
        width: 800px;
        height: 800px;
        margin: auto;
        background: rgba(241, 247, 248, 0.925);
    }

    .top {
        width: 100%;
        height: 80px;
        color: white;
        font-size: 30px;
        line-height: 80px;
        text-align: center;
        background: rgba(170, 237, 253, 0.925);
    }

    .footer {
        width: 100%;
        height: 80px;
        color: white;
        line-height: 80px;
        text-align: center;
        background: rgba(170, 237, 253, 0.925);
    }

    .middle {
        width: 100%;
        /* overflow:auto;       */
        height: calc(100% - 80px - 80px);
        background: rgba(241, 247, 248, 0.925);           
        overflow-y: scroll;
        overflow-x: hidden;
        /* overflow:hidden; */
    }

    table{  
        padding:10px;
        box-sizing: border-box; 
    }

    td{          
        height:30px; 
        margin:1px;
        padding:1px ;
        font-size:20px;
        box-sizing: border-box;    
    }

    td:nth-child(1){
        width:90px; 
        text-align:left;
    }

    td:nth-child(2){
        text-align:left;
        border-bottom: 1px solid #ddd; 
    }

    ul,
    li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .abgne_tab {
        clear: left;
        width: 800px;
        height: 700px;
        margin:20px 0px 0px 20px;  
        overflow-y: scroll;
        overflow-x: hidden;
    }

    ul.tabs {
        width: 100%;
        height: 32px;
        border-bottom: 1px solid #999;
        border-left: 1px solid #999;
    }

    ul.tabs li {
        float: left;
        height: 31px;
        line-height: 31px;
        overflow: hidden;
        position: relative;
        margin-bottom: -1px;       
        border: 1px solid #999;
        border-left: none;
        background: #e1e1e1;
    }

    ul.tabs li a {
        width: 80px;
        display: block;
        padding: 0px 10px;
        color: #000;
        border: 1px solid #fff;
        text-decoration: none;
        text-align: center;
    }

    ul.tabs li a:hover {
        background: #ccc;
    }

    ul.tabs li.active {
        background: #fff;
        border-bottom: 1px solid#fff;
    }

    ul.tabs li.active a:hover {
        background: #fff;
    }

    div.tab_container {
        clear: left;
        width: 100%;
        border: 1px solid #999;
        border-top: none;
        background: #fff;
    }

    div.tab_container .tab_content {
        padding: 10px;
    }

    div.tab_container .tab_content h2 {
        margin: 0px;
    }

    div.tab_container .tab_content h3 {
        padding: 0px;
        margin: 0px;       
    }  
    </style>
<body>
    <div class="main">
        <div class="top">RESUME SYSTEM</div>

        <div class="middle">
            <div class="abgne_tab">
                <ul class="tabs">
                    <li><a href="#tab1">基本資料</a></li>
                    <li><a href="#tab2">求學歷程</a></li>
                    <li><a href="#tab3">工作經歷</a></li>
                    <li><a href="#tab4">求職條件</a></li>
                    <li><a href="#tab5">技能專長</a></li>
                    <li><a href="#tab6">自傳</a></li>
                </ul>

                <div class="tab_container">

                    <div id="tab1" class="tab_content">
                        <h3>基本資料</h3>
                        <?php include "./basic.php"; ?>
                    </div>

                    <div id="tab2" class="tab_content">
                        <h3>求學歷程</h3> 
                        <?php include "./edu.php"; ?>              
                    </div>

                    <div id="tab3" class="tab_content">
                        <h3>工作經歷</h3>                        
                        <?php include "./workexp.php"; ?>                   
                    </div>

                    <div id="tab4" class="tab_content"> 
                        <h3>求職條件</h3>                    
                        <?php include "./search.php"; ?>
                    </div>

                    <div id="tab5" class="tab_content"> 
                        <h3>技能專長</h3>                      
                        <?php include "./skill.php"; ?>                       
                    </div>

                    <div id="tab6" class="tab_content">
                        <!-- <h3>自傳</h3> -->
                        <?php include "./bio.php"; ?>                      
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="footer">       
            <p>
               <a href="../admin.php?do=basic" style="float:left">履歷維護管理</a>
               <a href="./displayResume.php" style="float:right">履歷表預覽</a> 
            </p> 
        </div>
    </div>
    <script>
        $(function () {
            var _showTab = 0;
            var $defaultLi = $('ul.tabs li').eq(_showTab).addClass('active');
            $($defaultLi.find('a').attr('href')).siblings().hide();
            $('ul.tabs li').click(function () {
                var $this = $(this),
                    _clickTab = $this.find('a').attr('href');
                $this.addClass('active').siblings('.active').removeClass('active');
                $(_clickTab).stop(false, true).fadeIn().siblings().hide();
            })
        });
    </script>
</body>
</html>