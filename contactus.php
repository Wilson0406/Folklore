<?php
if(isset($_POST['submit']))  
{ 
$con = mysqli_connect('127.0.0.1','root','','prayas');
if(!$con)
{
    echo 'Not connected to server!!';
}
if(!mysqli_select_db($con,'prayas'))
{
    echo 'Database is not selected!!';
}


$Name = $_POST['name'];
$Phone = $_POST['phone'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];


$ins = "INSERT INTO contact(name,phone,email,subject,message,value) VALUES ('$Name','$Phone','$Email','$Subject','$Message','0') ";

if(!mysqli_query($con,$ins))
{
    echo '<script>alert("Failed To Insert")</script>';
}
else
{ echo'<script>alert("Inserted Successfully")</script>';
}
}
?>
