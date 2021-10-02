<html>
<head>
<style>
a {
  background-color: #4CAF50;
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
$Age = $_POST['age'];
$Comp = $_POST['comp'];
if($Comp == "Private")
{
$Cname = $_POST['cname'];
}
else{
$Cname = "-";
}
$Locality = $_POST['locality'];
$State = $_POST['state'];
$error = "";
if(!isset($_POST['state']))
{
  $errorMessage .= "<li>You forgot to select your State!</li>";
}
$ser = $_POST['service'];
$Service="";
foreach($ser as $ser1)
{
$Service .= $ser1.",";
}
$License = $_POST['license'];

$ins = "INSERT INTO prov(name,age,type,company,locality,state,service,license) VALUES ('$Name','$Age','$Comp','$Cname','$Locality','$State','$Service','$License') ";

if(!mysqli_query($con,$ins))
{
    echo '<script>alert("Failed To Insert")</script>';
}
else
{ echo'<script>alert("Inserted Successfully")</script>';
}
echo "<br><a href=\"javascript:history.go(-1)\">Go back to Forms</a><br><br>";
    echo '<a href="index.php">Go back to Homepage</a>';
}
?>
