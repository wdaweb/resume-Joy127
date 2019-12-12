<div class="footer">
        <p>
            <?php
                if (empty($_GET['s'])) {
                    $s=0;
                    echo "";
                }else {
                    if (($_GET['s'])==1) {
                        echo "註冊會員成功！";
                    }
                    if (($_GET['s'])==2) {
                        echo "基本資料編輯成功！";
                    }
                    if (($_GET['s'])==3) {
                        echo "求學歷程新增成功！";
                    }                     
                    if (($_GET['s'])==4) {
                        echo "工作經歷新增成功！";
                    } 
                    if (($_GET['s'])==5) {
                        echo "求職條件新增成功！";
                    }
                    if (($_GET['s'])==6) {
                        echo "技能專長新增成功！";
                    }
                    if (($_GET['s'])==7) {
                        echo "自傳新增成功！";
                    } 
                    if (($_GET['s'])==8) {
                        echo "相片新增成功！";
                    } 
                    if (($_GET['s'])==9) {
                        echo "登入成功！";
                    }             
                } 

                if (empty($_GET['err'])) {
                    $err=0;
                    echo "";
                }else {
                    if (($_GET['err'])==1) {
                        echo "註冊會員失敗！";
                    }
                    if (($_GET['err'])==2) {
                        echo "基本資料編輯失敗！"; 
                    }
                    if (($_GET['err'])==3) {
                        echo "求學歷程新增失敗！";
                    }
                    if (($_GET['err'])==4) {
                        echo "工作經歷新增失敗！";
                    }
                    if (($_GET['err'])==5) {
                        echo "求職條件新增失敗！";
                    }
                    if (($_GET['err'])==6) {
                        echo "技能專長新增失敗！";
                    }
                    if (($_GET['err'])==7) {
                        echo "自傳新增失敗！";
                    }
                    if (($_GET['err'])==8) {
                        echo "相片新增失敗！";
                    } 
                    if (($_GET['err'])==9) {
                        echo "帳號密碼有誤，登入失敗！";
                    }                       
                } 
            ?>               
        </p>
       
    </div>