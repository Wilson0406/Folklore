<?php
  $con = mysqli_connect('127.0.0.1','root','','prayas');
  if(!$con)
  {
    echo 'Not connected to server!!';
  }
  if(!mysqli_select_db($con,'prayas'))
  {
    echo 'Database is not selected!!';
  }
include '../../contactus.php';

function accept()
  {$phone="SELECT phone from contact";
    $update="UPDATE table contact set value='1' where phone='$phone'";
    $con->query($update);
  }
function delete()
  {$phone="SELECT phone from contact";
    $update="UPDATE table contact set value='0' where phone='$phone'";
    $con->query($update);
  }

if(isset($_POST['accept_admin']))
  {
    accept();
  }
  if(isset($_POST['delete_admin']))
  {
    delete();
  }

$con->close();
?>