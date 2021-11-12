<?php
   #mysqli_connect() 建立資料庫連結
   #連結資料庫 主機名或IP地址:localhost，用戶名：root，密碼：(null)，數據庫：mydb
   $conn=mysqli_connect("localhost","root","","mydb");
   #mysqli_query() 從資料庫查詢資料
   $result=mysqli_query($conn, "select * from user");
   #mysqli_fetch_array() 從查詢出來的資料抓出一筆
   $login=FALSE; #宣告login=false
   #while 迴圈
   #mysqli_fetch_array() 從查詢出來的資料抓出一筆
   while ($row=mysqli_fetch_array($result)) 
   {
     #假如post[id]取出資料=row[id]取出資料 和 post[pwd]取出資料=row[id]取出資料
     if (($_POST["id"]==$row["id"]) && ($_POST["pwd"]==$row["pwd"])) 
     {
       $login=TRUE;        #設定login=true
     }
   } 
   if ($login==TRUE)       #假如login=true
   {
    echo "帳號密碼正確";    #顯示"帳號密碼正確"
   }        
          
  else                     #否則
  {
    echo "帳號或密碼錯誤";  #顯示 "帳號或密碼錯誤"
  }            
     
?>