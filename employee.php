<?php 
class Employee{
    //คือ Attribute การเรียกใช้มี2วิธี
    //ใช้ใน class ตัวอย่างเช่น  $this->name = $nameParam;
    //ใช้นอก class ตัวอย่างเช่น  $Employee->name = $nameParam;

    
    //private = Modifier
    //$name = Attribute
    private $name;
    private $department;
    private $salary;

    //การนิยาม Construct
    function __construct($name,$department,$salary){ 
            //Attribute ไม่มี$
            //มี$ จะเป็น Parameter
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
       
     }



    //ในclassนี้มี method 4ตัวที่สร้างขึ้นมา โดยมี setEmpName,setDepartment,setSalary,showData
    public function setEmpName($nameParam)
    {
        $this->name = $nameParam;
    }
    public function setDepartment($nameDepartment)
    {
        $this->department = $nameDepartment;
    }
    public function setSalary($nameSalary)
    {
        $this->salary = $nameSalary;
    }
    public function showData()
    {
        echo "ชื่อพนักงาน = " . $this->name . "<br/>";
        echo "แผนก = " . $this->department . "<br/>";
        echo "เงินเดือน = " . $this->salary . "<br/>";
        echo "<hr>";
    }
}
?>