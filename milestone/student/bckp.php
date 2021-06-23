<?php 
    
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "root", "", "car");

	// insert 
	if (isset($_POST['submit'])) {
		if (empty($_POST['fname'])) {
			$errors = "You must fill in the First Name";
		}else{
            $username = $_POST['username'];
			$fname = $_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $contactno=$_POST['contactno'];
            $password=$_POST['password'];
            $sqli ="INSERT INTO user (`username`, `firstname`, `lastname`, `password`, `email`, `contactno`, `address`) VALUES ('[$username]','[$fname]','[$lname]','[$email]','[$address]','[$contactno]','[$password]')";
			$sql = "INSERT INTO user (username,firstname,lastname,email,address,contactno,password) VALUES ('$username','$fname','$lname','$email','$address','$contactno','$password')";
			mysqli_query($db, $sqli);
			header('location: register.php');
		}
	}	
?>