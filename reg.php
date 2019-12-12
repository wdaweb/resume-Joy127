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
    <title>RESUME</title>
       
    <style>
        .in {
            /* width: 50vw;
            height: 550px; */
            color:#ccc;
            padding: 10px;
            font-size: 30px;
            margin: 10px auto;
            text-align: center;
            box-sizing: border-box;
        }

        table{  
         margin:auto;
        }       

    </style>
</head>

<body>
<div class="main">
      <div class="top">RESUME SYSTEM</div>

      <div class="middle">         
            <div id="in"> 
            <h2>加入會員</h2>            
            <form method="post" id="addmbrform">
                <table>                
                    <tr>
                        <td>身分證號</td>
                        <td><input type="text" name="acc" id="acc" pattern="[A-Za-z]{1}[12]{1}[0-9]{8}" 
                                    placeholder="請輸入您的身分證字號" required>
                        </td>
                    </tr>
                    <tr>
                        <td>自訂密碼</td>
                        <td> <input type="password" name="pw" id="pw" pattern="[A-Za-z0-9]{6,}"
                                placeholder="請輸入至少6碼英數字" required></td>
                    </tr>
                    <tr>
                        <td>確認密碼</td>
                        <td> <input type="password" name="cpw" id="cpw" pattern="[A-Za-z0-9]{6,}"
                                placeholder="輸入與上列相同英數字" required></td>
                    </tr> 
                    <tr>
                        <td>真實姓名</td>
                        <td> <input type="text" name="name" id="name" placeholder="必填欄位" required></td>
                    </tr>
                    <tr>
                        <td>出生日期</td>
                        <td> <input type="date" name="birthday" id="birthday" required></td>
                    </tr>
                    <tr>
                        <td>電子郵件</td>
                        <td> <input type="text" name="email" id="email" placeholder="必填欄位" required></td>
                    </tr>
                    <tr>
                        <td>聯絡電話</td>
                        <td> <input type="text" name="tel" id="tel" placeholder="必填欄位" required></td>
                    </tr>
                    <tr>
                        <td>聯絡地址</td>
                        <td> <input type="text" name="addr" id="addr" placeholder="必填欄位" required></td>
                    </tr>
                    <tr>                       
                        <td colspan="2">
                            <input type="button" value="註冊" id="addmbrbtn">
                            <input type="button" value="清除" id="clearbtn">                            
                        </td>
                    </tr>                    
                </table>
            </form>
        </div>
    </div>

    <!--建立傾聽事件-->
    <script>    
        $(document).ready(function () {
            // 清空欄位，供使用者輸入資料
            $("#acc").val("")
            $("#pw").val("")
            $("#cpw").val("")
            $("#name").val("")
            $("#birthday").val("")
            $("#email").val("")
            $("#tel").val("")
            $("#addr").val("")     

            // 2次密碼輸入不同
            $("#cpw").blur(function () {
                if ($.trim($("#pw").val())!='' && $.trim($("#cpw").val())!='') {
                    var pwd = $.trim($("#pw").val())
                    var pwd1 = $.trim($("#cpw").val())
                    console.log(pwd,pwd1)
                    if (pwd != pwd1) {
                        alert("您兩次輸入的密碼不一樣，請重新輸入!")
                        $("#pw").focus()
                    }
                }
            })


            $("#addmbrbtn").on("click",function () {
                // 檢查是否有欄位空白
                // if (empty($("#acc").val())) {
                //     alert("請輸入身分證字號！")
                //     $("#acc").focus()
                // }else if (empty($("#pw").val())) {
                //     alert("請輸入至少6碼英數字！")
                //     $("#pw").focus()
                // }else if (empty($("#cpw").val())) {
                //     alert("請輸入與密碼相同英數字！")
                //     $("#cpw").focus()
                // }else if (empty($("#name").val())) {
                //     alert("請輸入您的姓名！")
                //     $("#name").focus()
                // }else if (empty($("#birthday").val())) {
                //     alert("請選擇您的出生年月日！")
                //     $("#birthday").focus()
                // }else if (empty($("#email").val())) {
                //     alert("請輸入您的電子信箱！")
                //     $("#email").focus()
                // }else if (empty($("#tel").val())) {
                //     alert("請輸入您的聯絡電話！")
                //     $("#tel").focus()
                // }else if (empty($("#addr").val())) {
                //     alert("請輸入您的聯絡電話！")
                //     $("#addr").focus()
                // }

                // 檢查2次密碼輸入是否相同
                if ($.trim($("#pw").val())!='' && $.trim($("#cpw").val())!='') {
                    var pwd = $.trim($("#pw").val())
                    var pwd1 = $.trim($("#cpw").val())
                    console.log(pwd,pwd1)
                    if (pwd != pwd1) {
                        alert("您兩次輸入的密碼不一樣，請重新輸入!")
                        $("#pw").val("")
                        $("#cpw").val("")
                        $("#pw").focus()
                    }else{
                        let acc=$("#acc").val()
                        let pw=$("#pw").val()
                        let name=$("#name").val()
                        let birthday=$("#birthday").val()
                        let email=$("#email").val()
                        let tel=$("#tel").val()
                        let addr=$("#addr").val()

                        console.log(acc, pw, name, birthday, email, tel, addr);
                      
                        $.post("./api/reg_api.php", {acc, pw, name, birthday, email, tel, addr}, function (res) {
                            if (res==1) {
                                // 清空欄位，將使用者導向首頁登入
                                $("#acc").val("")
                                $("#pw").val("")
                                $("#cpw").val("")
                                $("#name").val("")
                                $("#birthday").val("")
                                $("#email").val("")
                                $("#tel").val("")
                                $("#addr").val("") 
                                // $(".footer").html("註冊成功！")
                                console.log("註冊成功！") 
                                window.open("./index.php?s=1")

                            }else{
                                console.log("新增異常")
                                // 清空欄位，供使用者輸入資料
                                $("#acc").val("")
                                $("#pw").val("")
                                $("#cpw").val("")
                                $("#name").val("")
                                $("#birthday").val("")
                                $("#email").val("")
                                $("#tel").val("")
                                $("#addr").val("")  

                                $("#acc").focus()                                 
                            }
                        })
                    }
                }                    
            })



            $("#clearbtn").on("click",function () {
                // 清空欄位，供使用者輸入資料
                $("#acc").val("")
                $("#pw").val("")
                $("#cpw").val("")
                $("#name").val("")
                $("#birthday").val("")
                $("#email").val("")
                $("#tel").val("")
                $("#addr").val("")  

                $("#acc").focus()  
            })

        })  

        </script>
    
    <div class="footer">
       
    </div>
</div>
</body>
</html>