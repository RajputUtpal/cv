<html>
<head>
<script>
    function save(){
        var a = document.getElementById('1').value;
        var b = document.getElementById('7').value;
        var c = document.getElementById('9').value;
        var d = document.getElementById('0').value;
        if (a==1 && b==7 && c==9 && d==0)
        {               
        alert("Number Verified!"); 
        $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO phone(y_n) values ('yes')";
    }
        else{
            alert("Number is Not Verifird");
            $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$sql = "INSERT INTO phone(y_n)values ('no')";
        }
    }
</script>
<style>
  
  * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    ::-webkit-scrollbar {
        width: 0;
        display: none;
    }
    body {
        position: relative;
    }
    .containar {
        position: relative;
        height: 100vh;
        background-color: black;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        color: rgb(212, 211, 211);
        overflow: hidden;
    }
    .wrapper {
        height: 570px;
        width: 400px;
        background-color: rgba(106, 112, 112, 0.226);
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(3px);
        z-index: 1;
    }
    h1 {
        font-size: 25px;
        text-transform: capitalize;
    }
    p {
        font-size: 15px;
    }
    h1, p {
        text-align: center;
        margin: 0 auto;
    }
    form img {
        display: block;
        margin: 15px auto;
        height: 200px;
        width: 300px;
    }
    form input[type="text"], form input[type="password"], button {
        display: block;
        margin: 20px auto;
    }
    .code {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    form input[type="number"] {
        text-align: center;
        width: 15%;
        margin: 10px 5px;
        padding: 5px ;
        background: none;
        border: none;
        border-bottom: 2px solid rgb(0, 40, 158);
        outline: none;
        color: whitesmoke;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        font-size: large;
    }
    ::placeholder {
        color: rgb(136, 136, 156);
    }
    button {
        margin: 10px auto;
        padding: 8px 30px;
        font-size: small;
        font-weight: 500;
        border-radius: 10px;
        background: rgb(0, 40, 158);
        text-transform: uppercase;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        color: rgb(212, 211, 211);
        border: none;
        transition: 0.12s ease-in-out;
    }
    .cancel {
        background: none;
        border: 1px solid rgb(0, 40, 158);
    }
    button:hover {
        background-color: blue;
        padding: 8px 38px;
    }
    .cancel:hover {
        padding: 8px 25px;
        background: rgb(35, 70, 173);
        border: 1px solid rgba(106, 112, 112, 0.226);
    }
    .shape {
        position: absolute;
        top: 100%;
        left: 0;
        height: 100px;
        width: 100px;
        border-radius: 5px;
        animation: animate 40s infinite;
    }
    .shape:nth-child(1) {
        left: 50%;
        height: 100px;
        width: 100px;
        background-color: crimson;
        animation-delay: 6s;
    }
    .shape:nth-child(2) {
        left: 20%;
        height: 70px;
        width: 70px;
        background-color: red;
        animation-delay: 12s;
    }
    .shape:nth-child(3) {
        left: 40%;
        height: 50px;
        width: 50px;
        background-color: yellow;
    }
    .shape:nth-child(4) {
        left: 60%;
        height: 120px;
        width: 120px;
        background-color: green;
        animation-delay: 2s;
    }
    .shape:nth-child(5) {
        left: 10%;
        height: 40px;
        width: 40px;
        background-color: darkcyan;
        animation-delay: 9s;
    }
    .shape:nth-child(6) {
        left: 70%;
        height: 100px;
        width: 100px;
        background-color: salmon;
        animation-delay: 10s;
    }
    .shape:nth-child(7) {
        left: 33%;
        height: 60px;
        width: 60px;
        background-color: hotpink;
        animation-delay: 8s;
    }
    .shape:nth-child(8) {
        left: 80%;
        height: 100px;
        width: 100px;
        background-color: orangered;
        animation-delay: 17s;
    }
    .shape:nth-child(9) {
        left: 90%;
        height: 70px;
        width: 70px;
        background-color: lawngreen;
        animation-delay: 5s;
    }
    .shape:nth-child(10) {
        background-color: aliceblue;
        left: 10%;
        border-radius:50%;
        height:10px;
        width:10px;
        animation-delay: 5s;
    }
    .shape:nth-child(11) {
        background-color: aliceblue;
        left: 20%;
        border-radius:50%;
        height:10px;
        width:10px;
        animation-delay: 10s;
    }
    .shape:nth-child(12) {
        background-color: aliceblue;
        left: 20%;
        border-radius:50%;
        height:5px;
        width:5px;
        animation-delay: 7s;
    }
    .shape:nth-child(13) {
        left: 50%;
        background-color: aliceblue;
        border-radius:50%;
        height:7px;
        width:7px;
        animation-delay: 3s;
    }
    .shape:nth-child(14) {
        left: 70%;
        background-color: aliceblue;
        border-radius:50%;
        height:10px;
        width:10px;
        animation-delay: 15s;
    }
    .shape:nth-child(15) {
        left: 75%;
        background-color: aliceblue;
        border-radius:50%;
        height:6px;
        width:6px;
        animation-delay: 8s;
    }
    .shape:nth-child(16) {
        left: 90%;
        background-color: aliceblue;
        border-radius:50%;
        height:10px;
        width:10px;
        animation-delay: 5s;
    }
    .shape:nth-child(17) {
        left: 88%;
        background-color: aliceblue;
        border-radius:50%;
        height:3px;
        width:3px;
        animation-delay: 10s;
    }
    .shape:nth-child(18) {
        left: 40%;
        background-color: aliceblue;
        border-radius:50%;
        height:3px;
        width:3px;
        animation-delay: 7s;
    }
    .shape:nth-child(19) {
        left: 60%;
        background-color: aliceblue;
        border-radius:50%;
        height:7px;
        width:7px;
        animation-delay: 12s;
    }
    .shape:nth-child(20) {
        left: 45%;
        background-color: aliceblue;
        border-radius:50%;
        height:3px;
        width:3px;
        animation-delay: 4s;
    }
    
    @keyframes animate {
        0% {
            transform: translateY(0px) rotate(0deg);
        }
        100% {
            transform: translateY(-800px) rotate(1080deg);
        }
    }
</style>
<title>Verification</title>

</head>
<body><center></b><br><br>
<?php
$number = filter_input(INPUT_POST, 'number');
$email = filter_input(INPUT_POST, 'email');


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
$sql = "INSERT INTO phone(number,email)values ('$number','$email')";
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
</center>
<div class="containar">
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="shape"></div>
  <div class="wrapper">
      <form action="">
          <h1>OTP verification</h1>
          <img src="https://images.unsplash.com/photo-1548021029-d6cf339a5ce4?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
          <p>4 digit OTP is send to mobile number +91********94</p>
          <div class="code">
              <input type = "number" maxlength = "1" id="1">
              <input type = "number" maxlength = "1" id="7">
              <input type = "number" maxlength = "1" id="9">
              <input type = "number" maxlength = "1" id="0">
          </div>
          <button onclick="save();">Submit</button>
          <button class="cancel">Cancel</button>
      </form>
  </div>
</div>
</body>
</html>