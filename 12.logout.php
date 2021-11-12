<?php
    #啟用一個新的或開啟正在使用中的session
    session_start(); 
    unset($_SESSION["id"]);
    echo "登出成功....";        #顯示"登出成功...."
    echo "<meta http-equiv=REFRESH content='3; url=login.html'>";

?>