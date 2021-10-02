<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body bgcolor="tomato">

<?php
if(isset($_POST['subm']))  
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
$Locality = $_POST['locality'];
$State = $_POST['state'];
$ser = $_POST['service'];
$Service="";
foreach($ser as $ser1)
{
    $Service .= $ser1.",";
}


$ins = "INSERT INTO req(name,age,locality,state,service) VALUES ('$Name','$Age','$Locality','$State','$Service') ";

if(!mysqli_query($con,$ins))
{
    echo '<script>alert("Failed To Insert")</script>';
}
else
{ 
    echo'<script>alert("Inserted Successfully")</script>';

    echo '<center><h1><u>Search Results</u></h1>
    <table class="center" border="2" cellspacing="2" cellpadding="5">';

 
        $sql="SELECT * from prov where state='$State'";
        $result = $con->query($sql);
        if (mysqli_num_rows($result) > 0) 
        {
            echo '<tr><td>Name</td><td>Age</td><td>Type</td><td>Comp Name</td><td>Phone No</td><td>State</td><td>Service</td><td>License</td>';
            while($row = $result->fetch_assoc())
            {

                $field1name = $row["name"];
                $field2name = $row["age"];
                $field3name = $row["type"];
                $field4name = $row["company"];
                $field5name = $row["locality"];
                $field6name = $row["state"];
                $field7name = $row["service"];
                $field8name = $row["license"];

                echo '<tr><td>'.$field1name.'</td><td>'.$field2name.'</td><td>'.$field3name.'</td><td>'.$field4name.'</td><td>'.$field5name.'</td><td>'.$field6name.'</td><td>'.$field7name.'</td><td>'.$field8name.'</td></tr>
                </center>';
        
            }
        } 
    else 
    {
        echo "0 results<br>";
	echo "Try again after some time!";
    }
    }
    echo "<br><a href=\"javascript:history.go(-1)\">Go back to Forms</a><br><br>";
    echo '<a href="index.php">Go back to Homepage</a><br><br>';
}
?>
</body>
<html>