<?php
include 'db.php';
include 'register.php';
?><!DOCTYPE html>
<html >
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Student registration form</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1 class="h">Student Registration Form</h1>
    <p class="note"> Dear students we are happy to announce that you can join and participate in every course'd discussions.
    If you are new and haven't took any of the courses you will join the first level(kedamay) class.
        If you were the member of our sunday school and you have started but couldn't finishe the courses you can bring your data(files) that can prove you were the member or you have took the courses you can continue learning from where you have stopped.</p>
   
    <p class="fill">Please fill the form appropriately!</p>
    <form action="register.php" method="post" class="form-data">
       
         <span class="error">*<?php echo $nameErr?>  </span><label for="name">Full Name:</label>
       
        <input type="text" name="name" placeholder=" your name"><br><br/>
       
       
        <span class="error">*<?php echo $schoolErr?>  </span> <label for="school">school/Job:</label>
       
        <input type="text" name="school" placeholder=" your School level"><br><br/>
        
       
        <span class="error">*<?php echo $ageErr?>  </span>   <label for="age">Age:</label>
        <input type="text" name="age" placeholder=" your age"><br><br>
        

       
        
          <span class="error">*<?php echo $phoneErr?>  </span> <label for="phone">Phone Number:</label>
         <input type="text" name="phone" placeholder=" your phone number "><br><br/>
      
       
        
          <span class="error">*<?php echo $learnedErr?>  </span><label class="radio">Have you learned before?</label>  <br/>
       <input class="radio" type="radio" id="yes" name="learned" value="yes">
         <label for="yes">Yes</label>
         <input class="radio" type="radio" id="no" name="learned" value="no">
         <label for="no">No</label><br/>
        
        <input type="submit" name="submit" class="submit">
    </form>
    <?php
// if(isset($_POST["submit"])){

   
// $sql = "INSERT INTO students (name, school, age, phone, learned)
// VALUES ('".$_POST["name"]."','".$_POST["school"]."','".$_POST["age"]."','".$_POST["phone"]."','".$_POST["learned"]."')";

// if ($conn->query($sql) === TRUE) {
// echo "
//     <script type= 'text/javascript'>
//         alert('New record created successfully');
//     </script>";
// // echo "new record created successfully";
// } 
// else 
// {
//     echo 
//     "<script type= 'text/javascript'>
//         alert('Error: " . $sql . "<br>" . $conn->error."');
//     </script>";
//     // "Error";
// }

// $conn->close();
// }
?>
    </body>
    </html>