<?php 
    include "db.php";   
    session_start();
    $role = $_SESSION['userrole'];
    if(!isset($_SESSION['sess_admin_name']) && $role!="raj"){
    header('Location: index.php?err=2');
    }
?>
<html>
<head lang="en">
    <title>Registration system PHP and MySQL</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css"> 
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body id="body">
<div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><?php echo $_SESSION['admin_name'];?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
<div class="table-scrol">
    <h1 align="center">All the Users</h1>

<div class="table-responsive">


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>Id</th>
            <th>Name</th>
            <th>mail</th>
            <th>Contect</th>
            <th>Address</th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        include "db.php";        
        $query="select * from raj";        
        $run=mysqli_query($conn,$query);

        while($row=mysqli_fetch_array($run))
        {
            $id=$row[0];
            $name=$row[1];
            $email=$row[2];
            $contect=$row[3];
            $address=$row[4];


        ?>

        <tr>

            <td><?php echo $id;  ?></td>
            <td><?php echo $name;  ?></td>
            <td><?php echo $email;  ?></td>
            <td><?php echo $contect;  ?></td>
            <td><?php echo $address;  ?></td>
            <td><a href="delete.php?del=<?php echo $id ?>"><button class="btn btn-danger">Delete</button></a></td>
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>
