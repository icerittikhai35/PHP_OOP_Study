<?php 
//คำสั่ง import file จาก employee.php
require_once "employee.php";
//สร้าง class Programer โดยสือทอดจาก SuperClass ชื่อ Employee ในไฟล์ที่ import มา
class Programer extends Employee{
    function __construct($name,$salary)
    {
        //การเรียกใช้ Keyword Parent ในการแก้ไขเพิ่มค่าใน Attribute ที่จำเป็นต้องทำเมื่อใช้งานผ่าน SubClass โปรแกรมเมอร์
        parent::__construct($name,"โปรแกรมเมอร์",$salary);
    }

}
 
?>