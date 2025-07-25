<?php
//declare connection
$servername="localhost";
$username="root";
$password="";
$dbname="demo";
//create connection
$conn = new mysqli($servername,$username,$password,$dbname);

//check connection error
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}

//take attributes from form

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
 
$sql = "insert into otable(name, email, phone, product, quantity)
        values('$name', '$email', '$phone', '$product', '$quantity');";
     
if($conn->query($sql)==TRUE){
    echo "Order Placed.";
}
else{
echo "invalid: " . $conn->error;
}
$conn->close();
?>