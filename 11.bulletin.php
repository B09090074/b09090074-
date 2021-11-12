<?php
    #error_reporting(0) 不回報錯誤
    error_reporting(0);
    #啟用一個新的或開啟正在使用中的session
    session_start();
    if (!$_SESSION["id"]) 
    {
        echo "請先登入帳號";     //顯示"請先登入帳號"
        echo "<meta http-equiv=REFRESH content='3, url=login.html'>";
    }
    else   //否則
    {       
        echo "歡迎, ".$_SESSION["id"]."[<a href=logout.php>logout</a>]<br>";
        #mysqli_connect() 建立資料庫連結
        #連結資料庫 主機名或IP地址:localhost，用戶名：root，密碼：(null)，數據庫：mydb
        $conn=mysqli_connect("localhost","root","", "mydb");
        #mysqli_query() 從資料庫查詢資料
        $result=mysqli_query($conn, "select * from bulletin");
        //建立表格
        echo "<table border=2> 
        <tr>
        <td>佈告編號 </td><td> 佈告類別 </td><td> 標題 </td><td> 佈告內容 </td><td> 發佈時間 </td>
        </tr>";
        # 佈告編號 | 佈告類別 | 標題 | 佈告內容 | 發佈時間
        #mysqli_fetch_array() 從查詢出來的資料抓出一筆
        #while 迴圈
        while ($row=mysqli_fetch_array($result))
        {
            echo "<tr><td>";
            echo $row["bid"];
            echo "</td><td>";
            echo $row["type"];
            echo "</td><td>"; 
            echo $row["title"];
            echo "</td><td>";
            echo $row["content"]; 
            echo "</td><td>";
            echo $row["time"];
            echo "</td></tr>";
        }
        echo "</table>";  //表格結束
    
        # 佈告編號 | 佈告類別 | 標題 | 佈告內容 | 發佈時間
        # bid         type    title  content     time
        # bid         type    title  content     time
        # bid         type    title  content     time
        # bid         type    title  content     time
        # bid         type    title  content     time
        # bid         type    title  content     time
    }

?>
