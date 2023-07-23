<!DOCTYPE html>
<html lang="am">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>

    <?php
$servername="localhost";
$username="root";
$password="";
$databasename="registered";
$conn= mysqli_connect($servername,$username,$password,$databasename);
mysqli_set_charset($conn, 'utf8');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
$name=$educational_level=$age=$phone=$time_to_learn=$have_learnt_before=$the_name="";

    if(isset($_POST['submit'])){
      // Get form data
$name=$_POST["name"];
$educational_level = $_POST["educational_level"];
$age = $_POST["age"];
$phone = $_POST["phone"];
$time_to_learn= $_POST["time_to_learn"];
$have_learnt_before=$_POST["have_learnt_before"];
$the_name=$_POST["the_name"];
      // Validate name
        if(empty($name)){
          $nameError = "እባክዎ ስምዎን ያስገቡ";
        }
    
      // Validate school
        if(empty($educational_level)){
          $educational_levelError = "እባክዎ የትምህርት ደረጃዎን ያስገቡ";}
        // } elseif (!filter_var($school, FILTER_VALIDATE_EMAIL)) {
        //   $schoolError = "Please enter a valid school";
        // }
      
      // Validate age
      if(empty($age)){
        $ageError = "እባክዎ እድሜዎን ያስገቡ";   
      }
      if(empty($phone)){
        $phoneError = "እባክዎ ስልክ ቁጥርዎን ያስገቡ";   
      }
      if(empty($time_to_learn)){
        $time_to_learnError = "እባክዎ ከሁለቱ አንዱን የምረጡ";   
      }
      if(empty($have_learnt_before)){
        $have_learnt_beforeError = "እባክዎ ከሁለቱ አንዱን የምረጡ";   
      }
      if(empty($the_name)){
        $the_nameError = "እባክዎ የተማሩበትን ሰንበት ት/ቤት ስም ያስገቡ";   
      }
        
      // Check if validation errors are empty 
      if(empty($nameError) && empty($educational_levelError) && empty($ageError)&& empty($phoneError)&& empty( $time_to_learnError)&&empty(  $have_learnt_beforeError)&&empty($the_nameError)){
      
        // Prepare an insert statement
        $sql = "INSERT INTO students (name, educational_level, age, phone, time_to_learn, have_learnt_before,the_name) VALUES (?, ?, ?,?,?,?,?)";
          
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssiisss", $name,$educational_level,$age, $phone, $time_to_learn,$have_learnt_before,$the_name);
        $stmt->execute();
        $stmt = $conn->prepare($sql);
        
        // Redirect 
        header("Location: register_success.php");
        exit();
      }
      else
      {
        echo "እባክዎ ፎርሙን በአግባቡ ይሙሉ፤ሁሉም ክፍት ቦታዎች መሞላት አለባችው!";
      }
    }

  ?>
</body>

</html>