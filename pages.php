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
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Comments</title>
    <link href="css/adminbootstrap.min.css" rel="stylesheet">
    <link href="css/adminstyle.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><b>PRAYAS</b></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="admin.php">Dashboard</a></li>
            <li class="active"><a href="pages.php">Comments</a></li>
            <li><a href="posts.php">Provider</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Comments<small> Manage Comments</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="admin.php">Dashboard</a></li>
          <li class="active">Comments</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="admin.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Comments <span class="badge">
              <?php
                $count="SELECT count(*) as com from contact";
                $result = mysqli_query($con, $count);
                $row=mysqli_fetch_assoc($result);
                echo $row["com"];
              ?>

              </span></a>
              <a href="posts.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Provider <span class="badge">
              <?php
                $count="SELECT count(*) as p from prov";
                $result = mysqli_query($con, $count);
                $row=mysqli_fetch_assoc($result);
                echo $row["p"];
              ?>
              </span></a>

              <a href="users.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">
              <?php
                $count="SELECT count(*) as c from req";
                $result = mysqli_query($con, $count);
                $row=mysqli_fetch_assoc($result);
                echo $row["c"];
              ?>
              </span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Comments</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Pages...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
			<th>Phone</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th></th>
                        <th>Action</th>
                      </tr>

                        <?php
                          $com="SELECT * from contact";
                          $result = mysqli_query($con, $com);

                          if (mysqli_num_rows($result) > 0)
                          {
                            while($row = $result->fetch_assoc())
                            {
                              $field1name = $row["name"];
                              $field2name = $row["phone"];
                              $field3name = $row["email"];
                              $field4name = $row["subject"];
                              $field5name = $row["message"];

                              echo '<tr><td>'.$field1name.'</td><td>'.$field2name.'</td><td>'.$field3name.'</td><td>'.$field4name.'</td><td>'.$field5name.'</td><td>';

                              echo " <td>
				<form  action =".htmlentities($_SERVER['PHP_SELF'])." method='post'>
				<input type='submit' value='Accept' name='accept_admin' class='btn btn-default'> <input type='submit' value='Delete' name='delete_admin' class='btn btn-danger'></form></td>";

                            }
                          }
                        ?>

                      </tr>
                    </table>
                </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright PRAYAS, &copy; 2020</p>
    </footer>

    
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>

<?php
include 'contactus.php';
$con = mysqli_connect('127.0.0.1','root','','prayas');
  if(!$con)
  {
    echo 'Not connected to server!!';
  }
  if(!mysqli_select_db($con,'prayas'))
  {
    echo 'Database is not selected!!';
  }

  if(isset($_POST['accept_admin']))
  {
	//mysqli_query("UPDATE contact SET value=1 WHERE phone = '$Phone'");
    //$update="UPDATE contact SET value=1 WHERE phone = $Phone";
    //mysqli_query($con,$update);
  }
  else if(isset($_POST['delete_admin']))
  {
	//mysqli_query("DELETE FROM contact WHERE phone= $Phone");
    //$update="DELETE FROM contact WHERE phone= $Phone";
    //mysqli_query($con,$update);
  }
  //mysql_query($update,$con);
?>

</html>
