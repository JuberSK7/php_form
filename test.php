<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
///retrive the data
    $name = $_POST['name'];
    $email =$_POST['email'];
    $message =$_POST['message'];


    echo $name;
    echo $email;
    echo $message;
    echo "retrive";

}
?>