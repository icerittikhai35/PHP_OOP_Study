<?php 
//คำสั่ง import Class จาก accounting.php และ programer.php
require_once "accounting.php";
require_once "programer.php";
//สร้างตัวแปร emp1 เป็น new Object โดยใช้ Attribute จากClass Accounting 
//โดยส่งค่า Parameter ("เจน","บัญชี",20000) 
$emp1 = new Accounting("เจน",20000);
//เรียกใช้ Method setSalary จาก Class Accounting และส่งค่า Parameter ไปยัง Construct
$emp1->setSalary(25000);
//เรียกใช้ Method ShowData จาก Class แม่ เพือเเสดงข้อมูล
$emp1->showData();


//Object สำหรับเพิ่มข้อมูลและเรียกใช้ Method ที่สร้างขึ้นมา
$emp2 = new Programer("บอล",12000);
$emp2->showData();

?>