<?php
$name=$_POST['name'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$email=$_POST['email'];
$pincode=$_POST['pincode'];
$card_type=$_POST['card_type'];
$card_number= $_POST['card_number'] ;
$exp_date= $_POST['exp_date'] ;
$cvv = $_POST['cvv'] ;

if (!empty($name) || !empty($gender) || !empty($address) || !empty($email) || !empty($card_type) || !empty($card_number) || !empty($exp_date) || !empty($cvv)){
$host = "localhost" ;
$dbUsername = "root" ;
$dbPassword = "" ;
$dbname = "project" ;
$conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);
if (mysqli_connect_error()){
 die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}else{
$SELECT = "SELECT name From payment where email = ? LIMIT 1" ;
$INSERT = "INSERT Into payment(name,gender,address,email,pincode,card_type,card_number,exp_date,cvv) values (?,?,?,?,?,?,?,?,?)" ;
$stmt = $conn ->prepare($SELECT) ;
$stmt->bind_param("i",$cvv) ;
$stmt->execute();
$stmt->bind_result($cvv);
$stmt->store_result();
$rnum = $stmt->num_rows;
if($rnum == 0){
$stmt -> close() ;
$stmt = $conn -> prepare($INSERT);
$stmt ->bind_param("ssssisiii",$name,$gender,$address,$email,$pincode,$card_type,$card_number,$exp_date,$cvv) ;
$stmt->execute();
echo "NEW RECORD INSERTED SUCCESFULLY" ;
}else{
echo "someone already registered" ;
}
$stmt ->close();
$conn ->close(); 
}
}else{
echo "ALL FIELD ARE REQUIRED" ;
 die();
}
?>