<?php
   #mysqli_connect() 建立資料庫連結
   #連結資料庫 主機名或IP地址:localhost，用戶名：root，密碼：(null)，數據庫：mydb
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料一筆一筆抓出來
   $login=FALSE;
   #while 迴圈
   #mysqli_fetch_array() 從查詢出來的資料抓出一筆
   while ($row=mysqli_fetch_array($result)) 
   {
     #假如post[id]取出資料=row[id]取出資料 和 post[pwd]取出資料=row[id]取出資料
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) 
     {
       $login=TRUE;    #設定login=true
     }
   } 
   if ($login==TRUE)   #假如login=true
   {
     #啟用一個新的或開啟正在使用中的session
    session_start();
    $_SESSION["id"]=$_POST["id"];
    echo "歡迎!";    //顯示"歡迎!"
    echo "<meta http-equiv=REFRESH content='3, url=bulletin.php'>";
   }

  else                     //否則
  {
    echo "帳號或密碼錯誤"; //顯示"帳號或密碼錯誤"
    echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
  }
?>