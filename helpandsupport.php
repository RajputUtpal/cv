<html>
<head></head>
<body bgcolor="#1E90FF" style="color: white;">
<p style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight : 200; font-size: 100px; color : white; margin-left:200px;"> APTICH </p><center>
<?php
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$message = filter_input(INPUT_POST, 'message');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

else{
$sql = "INSERT INTO help(name,email,message) values ('$name','$email','$message')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}

?>
</b><br><br>
<div class="btn-group">
    <button onclick="window.location.href = 'signup.html';">Previous</button>
    <button onclick="window.location.href = 'bustiming.html';">Next</button>
    <button onclick="window.location.href = 'index.html';">Home</button>
</div>
</center>
<br><br><br><br><br>
<div style="color: white; margin-left : 700px">
    <p style="margin-right: 500px; font-size: 50px;">
        :(
        </p>
    <p style="font-size: 25px;">Your Problem is Saved in our DataBase.</p>
    <p>We will resolve it soon.</p>
    <p> Happy Ride. </p>
</div>
</body>
</html>