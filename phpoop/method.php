<?php 

class Student
{
    public function sayHello() 
    {
        echo "Hello from " . get_class($this);
    }
}

$student = new Student;
$student->sayHello();