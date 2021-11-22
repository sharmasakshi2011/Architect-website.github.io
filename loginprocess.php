<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script1.js"></script>
</head>
<body>
    <div class="Box">
        <div class="form">
            <h1>Welcome to </h1>
            <div id="error_message"></div>
            <form action="loginprocess.php" method="post" id="myform" onsubmit="return validate();">
                   
        </div>
        <div class="input_field">
            <input type="text" class="input1" placeholder="Enter your username" size="53px" name="username" id="username">
        </div>
        <br>
        <div class="input_field">
            <input type="password" class="input1" placeholder="Enter your password" size="53px" name="password" id="password1">
        </div>
        <br>
        <div class="input2"> 
            <button type="submit" style="width: 200px;" >Login</button>
        </div>
    </form> 
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username= $_POST['username'];
    $password= $_POST['password'];
    $host ="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="DB";
	$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
    else{
        $sql= "SELECT * FROM `registration` WHERE `name`='$username' AND `Password`='$password'";
        $result= mysqli_query($conn,$sql);
        $num= mysqli_num_rows($result);
        if($num==1){

        session_start();
        header('Location:Second.php');
        
    }
        else{
            echo "invalid username or password";
            echo "<script>alert('Register yourself first')</script>";
            header('Location:Register.php');
        }
 }
}
?>
