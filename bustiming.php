<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$sno = filter_input(INPUT_POST, 'sno');
$name = filter_input(INPUT_POST, 'name');

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
$sql = "INSERT INTO bustiming(sno,name)values ('$sno','$name')";
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
</body>
</html>