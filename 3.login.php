<?php 
    if (($_POST[id] == "john") && ($_POST[pwd]=="john1234"))  #假如post[id]取出資料=john 和 post[pwd]取出資料=john1234
        echo "帳號密碼正確";                                   #顯示"帳號密碼正確"
    else                                                      #否則
        echo "帳號或密碼錯誤";                                 #顯示 "帳號或密碼錯誤"
?>
