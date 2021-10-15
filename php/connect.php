<?php


    // error_reporting(0); //ปิด Error ในกรณีที่เราต้องการแสดง Error ของเราเอง
    error_reporting(E_ALL); //เปิดแสดง Error 


    // เชื่อมต่อ Database
    $conn = new mysqli('localhost','root','','blog');
    $conn->set_charset('utf8'); //ตั้งค่าภาษาไทย

    if ($conn->connect_errno) {
        echo "connect error :" .$conn->connect_error;
    exit();
   }

?>