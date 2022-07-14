<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
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
$id = $_POST['id'];
$type = $_POST['type'];
$cname = $_POST['cname'];
$phone = $_POST['phone'];
$state = $_POST['state'];
$license = $_POST['license'];


$ins = "INSERT INTO req(name,id,type,cname,phone,state,license) VALUES ('$Name','$id','$type','$cname','$phone','$state','$license') ";

if(!mysqli_query($con,$ins))
{
    echo '<script>alert("Failed To Insert")</script>';
}
else
{ 
    echo'<script>alert("Inserted Successfully")</script>';

   // $count="SELECT count(*) from prov where state='$state'";
    
       // echo 'Displaying '.$_POST['count'].' results ';

    echo '<center><h1><u>Search Results</u></h1>
    <table class="center" border="2" cellspacing="2" cellpadding="5">';

 
        $sql="SELECT * from prov where state='$state'";
        $result = $con->query($sql);
        if (mysqli_num_rows($result) > 0) 
        {
            echo '<tr><td>Name</td><td>Id</td><td>Type</td><td>Comp Name</td><td>Phone No</td><td>State</td><td>License</td>';
            while($row = $result->fetch_assoc())
            {

                $field1name = $row["name"];
                $field2name = $row["id"];
                $field3name = $row["type"];
                $field4name = $row["cname"];
                $field5name = $row["phone"];
                $field6name = $row["state"];
                $field7name = $row["license"];

                echo '<tr><td>'.$field1name.'</td><td>'.$field2name.'</td><td>'.$field3name.'</td><td>'.$field4name.'</td><td>'.$field5name.'</td><td>'.$field6name.'</td><td>'.$field7name.'</td></tr>
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
header("refresh:400; url=form.html")
?>
</body>
<html>