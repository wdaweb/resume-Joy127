<?php
    session_start();
    if (!empty($_SESSION['login'])) {
        header("location:admin.php?do=basic");   
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
    <title>RESUME_LOGIN</title>
    <style>
    .in{
        width:400px;
        height:200px;  
        margin:auto;
        color:#ccc;
        font-size:30px;
        text-align:center;
      }   
            
      table{  
         padding:10px;
         margin:auto;
         box-sizing: border-box;   
      }

      td{
         height:40px; 
         margin:1px;
         padding:1px;
         font-size:25px;
         box-sizing: border-box;    
      }

      td:nth-child(2){
         border-bottom: 1px solid #ddd; 
      }

      input{  
         border:none;  
         font-size:25px;
         padding:1px;
      }

      h2{
        padding:10px;
        margin:auto;
        color:#ccc;
        text-align:center;
      }

      .connect{    
        float:right
        padding: 4px;       
        color:#000;
        font-size: 20px;
        font-weight:none;
        cursor: pointer;
        border-radius: 10px;
        border: 1px solid #ddd;
        text-align:center;
        text-decoration:none;
        background: rgba(241, 247, 248, 0.925);
      }

    </style>
</head>
<body>   
   <div class="main">
      <div class="top">RESUME SYSTEM</div>

      <div class="middle">        
            <div id="in">
                <h2>會員登入</h2>
               <form action="./api/login_api.php" name="loginform" method="post" id="loginform" >
                  <table>                                          
                      <tr>
                          <td>帳號</td>
                          <td><input type="text" name="acc" id="acc" required></td>                    
                      </tr>
                      <tr>
                          <td>密碼</td>
                          <td> <input type="password" name="pw" id="pw" required></td>                    
                      </tr>
                      <tr>                        
                          <td colspan="2">
                            <input type="submit" value="登入">
                            <input type="reset" value="重置">
                            <!-- <a href="reg.php" class="connect">加入會員</a> -->
                          </td>                    
                      </tr>    
                      <tr>                        
                          <td colspan="2"><a href="reg.php" class="connect">加入會員</a></td>                    
                      </tr>                                    
                  </table>             
              </form>
            </div>        
      </div>       
         <?php include  "footer.php"; ?> 
      </div> 

</body>
</html>