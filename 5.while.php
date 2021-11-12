<?php
   #mysqli_connect() 建立資料庫連結
   #連結資料庫 主機名或IP地址:localhost，用戶名：root，密碼：(null)，數據庫：mydb
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料抓出一筆
   #while 迴圈
   while ($row=mysqli_fetch_array($result)) 
   {
     #顯示row[id]內的資料 顯示[pwd]內的資料 <br>換行
     echo $row["id"]." ".$row["pwd"]."<br>"; 
   } 
?>