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

$studentData = ['name' => 'John', 'age' => 16, 'schoolFees' => FALSE];
// print_r($studentData);
// echo $studentData['age'];

//Multidiemensional Array

$studentBioData = [
                    ['name' => 'John', 'age' => 16, 'schoolFees' => 'no'],
                    ['name' => 'Stephen', 'age' => 15, 'schoolFees' => 'yes'],
                    ['name' => 'Michael', 'age' => 17, 'schoolFees' => 'no'],
                    ['name' => 'Abigail', 'age' => 16, 'schoolFees' => 'no']
];

print_r($studentBioData);

// print_r ($studentBioData[2]);

echo $studentBioData[2]['age'];
?>