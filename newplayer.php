<html>
<head>
<title>insert data in database using mysqli</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="main">
<h1>SPSDGA New Player Form</h1>
<div id="login">
<h2>Enter yo shit</h2>
<hr/>
<form action="" method="post">
<label>First Name :</label>
<input type="text" name="FirstName" id="firstname" required="required" placeholder="Please Enter First Name"/><br /><br />
<label>Last Name :</label>
<input type="text" name="LastName" id="lastname" required="required" placeholder="Please Enter Last Name"/><br /><br />
<label>Email :</label>
<input type="email" name="Email" id="email" required="required" placeholder="john123@gmail.com"/><br/><br />
<label>Bag Tag # :</label>
<input type="number" name="BagTag" id="bagtag" required="required" placeholder="Please Enter Your Tag #"/><br/><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
<!-- Right side div -->


</div>
<?php
if(isset($_POST["submit"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "discapp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO testgolfers (FirstName, LastName, Email, BagTag)
VALUES ('".$_POST["FirstName"]."','".$_POST["LastName"]."','".$_POST["Email"]."','".$_POST["BagTag"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
</body>
</html>

