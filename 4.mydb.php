<?php
    #mysqli_connect() 建立資料庫連結
    #連結資料庫 主機名或IP地址:localhost，用戶名：root，密碼：(null)，數據庫：mydb
    $conn = mysqli_connect("localhost", "root", "", "mydb"); 
    #如果$conn=false代表連結不成功
    if (empty($conn))
    {
        #顯示"無法連結資料庫"
        die ("無法連結資料庫");
    }
    #mysqli_query() 從資料庫查詢資料
    $result=mysqli_query($conn, "select * from user");
    #mysqli_fetch_array() 從查詢出來的資料抓出一筆
    #$result 資料庫名稱
    $row=mysqli_fetch_array($result);

    echo $row["id"] . " " . $row["pwd"]; #顯示row[id]內的資料 顯示[pwd]內的資料
    echo $row["id"] . " " . $row["pwd"]; #顯示row[id]內的資料 顯示[pwd]內的資料
?>
 <!--
     connection 規定要使用的 MySQL 連接
     query      規定查詢字符串
 -->