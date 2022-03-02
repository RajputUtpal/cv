<html>
<head></head>
<body bgcolor="pink"><center></b><br><br>
<?php
$currlocation = filter_input(INPUT_POST, 'currlocation');
$finallocation = filter_input(INPUT_POST, 'finallocation');
$mode = filter_input(INPUT_POST, 'mode');

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
$sql = "INSERT INTO output(currlocation,finallocation,mode) values ('$currlocation','$finallocation','$mode')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
echo "\n";
echo " Your current location is " . $currlocation ;
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