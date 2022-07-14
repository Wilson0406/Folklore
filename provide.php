<html>
<head>
<style>
a {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
</html>
<?php
if(isset($_POST['sub']))
{
$con = mysqli_connect('127.0.0.1','root','','folklore');
if(!$con)
{
    echo 'Not connected to server!!';
}
if(!mysqli_select_db($con,'folklore'))
{
    echo 'Database is not selected!!';
}


$Name = $_POST['name'];
$gname = $_POST['gname'];
$id = $_POST['id'];
$link = $_POST['link'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$error = "";
if(!isset($_POST['state']))
{
  $errorMessage .= "<li>You forgot to select your State!</li>";
}


$ins = "INSERT INTO prov(name,gname,id,link,phone,state) VALUES ('$Name','$gname','$id','$link','$phone','$state')";

if(!mysqli_query($con,$ins))
{
    echo '<script>alert("Failed To Insert")</script>';
}
else
{ echo'<script>alert("Inserted Successfully")</script>';
}
echo "<br><a href=\"javascript:history.go(-1)\">Go back to Forms</a><br><br>";
    echo '<a href="index.php">Go back to Homepage</a>';
header("refresh:400; url=form.html");
}
?>
