<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script2.js"></script>
    <title>Sign Up</title>
</head>
<body>
    <div class="Box">
        <div class="form">
            <h1>Registration form</h1>
            <div id="error_message"></div>
            <form action="Register.php" method="post" id="myform" onsubmit="return validate();">
                   
        </div>
        <div class="input_field">
            <input type="text" class="input1" placeholder="Enter your name" size="52px" name="name" id="name">
        </div>
        <br>
        <div class="input_field">
            <input type="text" class="input1" placeholder="Phone Number(10 digit)" size="52px" name="contact" id="contact">
        </div>
        <br>
        <div class="input_field">
            <input type="text" class="input1" placeholder="Enter your Address" size="52px" name="address" id="address">
        </div>
        <br>
        <div class="input_field">
            <input type="password" class="input1" placeholder="Enter your password" size="52px" name="password1" id="password1">
        </div>
        <br>
        <div class="input_field">
            <input type="password" class="input1" placeholder="confirm your password" size="52px" name="password2" id="password2">
        </div>
        <br>
        <div>
            <button type="submit">Sign Up</button>
        </div>
    </form> 
    </div>
	<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name = $_POST['name'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
	$password = $_POST['password1'];

	$sql= "SELECT * FROM `registration` WHERE `name`='$name'";
        $result= mysqli_query($conn,$sql);
        $num= mysqli_num_rows($result);
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		if($num==1){
			echo "<script>alert('Change Username and try again')</script>";

			$conn->close();
	}
	else{
		
		$stmt = $conn->prepare("INSERT INTO `registration` (`NAME`, `CONTACT_NO`, `ADDRESS`, `PASSWORD`) VALUES (?,?,?,?);");
		$stmt->bind_param("ssss", $name, $contact, $address, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>alert('Registered Successfully')</script>";
        header('Location:loginprocess.php');
		$stmt->close();
		$conn->close();
	}
 }
}
?>
</body>
</html>