<?php
    #啟用一個新的或開啟正在使用中的session
    session_start();
    unset($_SESSION["counter"]);
    echo "counter重置成功....";    //顯示counter重置成功....
    echo "<meta http-equiv=REFRESH content='2; url=counter.php'>";

?>