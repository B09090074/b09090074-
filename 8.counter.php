<?php
    #啟用一個新的或開啟正在使用中的session
    session_start();
    if (!isset($_SESSION["counter"]))
    {
        $_SESSION["counter"]=1;
    }
    else
    {
        $_SESSION["counter"]++;
    }
    echo "counter=".$_SESSION["counter"];
    echo "<br><a href=reset_counter.php>重置counter</a>";
?>