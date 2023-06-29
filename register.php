<?php
   $name=$school=$age =$phone =$learned ="";
   $nameErr =$schoolErr =$ageErr =$phoneErr =$learnedErr ="";
function test_input($data)
{
    $data = trim ($data);
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    return $data;
}
    if (isset($_POST['name']) && isset($_POST['school']) &&
        isset($_POST['age']) && isset($_POST['phone']) &&
         isset($_POST['learned'])) 
        {
        $name = $_POST['name'];
        $school = $_POST['school'];
        $age = $_POST['age'];
        $phone = $_POST['phone'];
        $learned = $_POST['learned'];

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    include 'db.php';
    if(empty($_POST["name"]))
    {
        $nameErr="name is required";
    }else{
        $name= test_input($_POST["name"]);
    }
    if(empty($_POST["school"]))
    {
        $schoolErr="school is required";
    }else{
        $school= test_input($_POST["school"]);
    }if(empty($_POST["age"]))
    {
        $ageErr= "age is required";
    }
    else{
        $age = test_input($_POST["age"]);
    }
    if(empty($_POST["phone"]))
    {
        $phoneErr= "phone is required";
    }
    else{
        $phone = test_input($_POST["phone"]);}
        if(empty($_POST["learned"]))
    {
        $learnedErr= "learned or not is required";
    }
    else{
        $learned = test_input($_POST["learned"]);

}}}?>