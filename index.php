<?php
  $submit = false ;
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$database="trip";

$con =mysqli_connect($server,$username,$password,$database);
if(!$con ){
  die("connection to this database failed due to ". mysqli_connect_error());
}
 $name=$_POST['name'];
 $gender=$_POST['gender'];
 $age=$_POST['age'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $desc=$_POST['desc'];

$query ="INSERT INTO `record`  ( `Name`, `Age`, `Gender`, `Email`, `Phone_no`, `other`, `DT`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
 $result=mysqli_query($con, $query);
if($result){
    $submit=true;
 }
else{
    echo "ERROR: $query <br> $con->error ";
}
 $con->close();
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra&display=swap" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h2>Welcome to IIIt Kharagpur Travel Form.</h2>
        <p> Enter your details and submit this form to confirm your participation in the trip .</p>
        <?php 
         if($submit == true){
           echo "<p class='submit-msg'>Thanks for submit your form we are happy to see you joining for the US trip.</p>";
         }
         ?>
        <form action ="index.php" method ="post">
         <input  type="text" name="name" id="name" placeholder="Enter Your name" required >
         <input  type="text" name="age" id="age" placeholder="Enter Your age" required >
         <input  type="text" name="gender" id="gender" placeholder="Enter Your gender" required >
         <input type="email" name="email" id="email" placeholder="Enter your email" required>
         <input type="tel" name="phone"id="phone" placeholder="Enter your phone no" required>
         <textarea name="desc" id="desc" cols="100" rows="10" required placeholder= "Enter any other information here"></textarea>
          <button class="btn">Submit</button> 
        
        </form>
    </div>
    <script src="index.js"> </script>
    
</body>
</html>
