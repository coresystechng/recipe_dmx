<?php 

//Integer
$age = 30;

//Value of pi (float)
$pi = 3.142856;

$new_age = $age * 2;

// echo $new_age;

//Text/String

$student_name = 'John';

//Concatenation 
// echo 'My name is '. $student_name . ' and I am ' . $new_age . ' years old.';


//Indexed Arrays 

$studentNames = ['John', 'Stephen', 'Michael', 'Abigail'];

// print_r($studentNames);
// echo $studentNames[3];

//Associative Array

$studentData = [
    ['name' => 'John', 'age' => 16, 'schoolFees' => FALSE],
    ['name' => 'Peter', 'age' => 15, 'schoolFees' => TRUE],
    ['name' => 'Femi', 'age' => 17, 'schoolFees' => TRUE],
    ['name' => 'Haruna', 'age' => 20, 'schoolFees' => FALSE]
];
// print_r($studentData);
// echo $studentData['age'];




//for Loop


for($reg_num=100; $reg_num < 1000; $reg_num+=70) {
    // echo $reg_num . '</br>';
}


//foreach Loop
foreach ($studentData as $student) {
    echo 'Hello, my name is '.$student['name'] . 'of age ' .$student['age'] . ' </br>';
}



?>