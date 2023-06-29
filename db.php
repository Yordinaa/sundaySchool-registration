<?php

$name =$school =$age =$phone =$learned ="";
$server_name= "localhost";
$user_name="root";
$password= "";
$db_name="registered";
$conn = new mysqli($server_name,$user_name,$password,$db_name);
if($conn->connect_error)
{
    die("connection failed: ".$conn->connect_error);
};

if(isset($_POST["submit"])){

   
$sql = "INSERT INTO students (name, school, age, phone, learned)
VALUES ('".$_POST["name"]."','".$_POST["school"]."','".$_POST["age"]."','".$_POST["phone"]."','".$_POST["learned"]."')";

if ($conn->query($sql) === TRUE) {
echo "
    <script type= 'text/javascript'>
        alert('New record created successfully');
    </script>";
// echo "new record created successfully";
} 
else 
{
    echo 
    "<script type= 'text/javascript'>
        alert('Error: " . $sql . "<br>" . $conn->error."');
    </script>";
    // "Error";
}

$conn->close();
}
?>
