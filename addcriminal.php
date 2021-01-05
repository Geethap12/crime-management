<?php include('includes/database.php');?>
<?php
	if($_POST)
	{
		
		$cname = $_POST['cname'];
		$age=$_POST['age'];
		$gender=$_POST['gender'];
		$offence=$_POST['offence'];
		$offence_date=$_POST['offence_date'];
		$place=$_POST['place'];
		$description=$_POST['description'];
		//create customer query
		$query="INSERT INTO criminal(cname,age,gender,offence,offence_date,place,description) 
				VALUES ('$cname','$age','$gender','$offence','$offence_date','$place','$description')";
		//Run query
		$mysqli->query($query);
		
		$msg='Criminal Info Added';
		header('Location: criminal.php?msg='.urlencode($msg).'');
		exit;
	}
	?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Crime Records Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar-top.css" rel="stylesheet">
	    <link href="css/forms.css" rel="stylesheet">
    <link href="css/tables.css" rel="stylesheet">

  </head>

  <body>
 <p align="right"> <img src="images/horn.gif" width="5%"><img src="images/index.jpg" width="30%"></p>

 <nav class="navbar navbar-dark bg-primary">
  
  <div class="collapse navbar-collapse" id="navbarNav">
     <center>  <ul class="navbar-nav">
        <a class="nav-link" href="#" style="color:white;font-size:medium;">Home <span class="sr-only">(current)</span></a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
    
        <a class="nav-link" href="station.php" style="color:white;font-size:medium;">Station</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
      
        <a class="nav-link" href="police.php" style="color:white;font-size:medium;">Police</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
    
        <a class="nav-link disabled" href="criminal.php" style="color:white;font-size:medium;">Criminal</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="complaint.php" style="color:white;font-size:medium;">Complaint</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
        <a class="nav-link disabled" href="fir.php" style="color:white;font-size:medium;">FIR</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
       <a class="nav-link disabled" href="search.php" style="color:white;font-size:medium;">Search</a>

     </ul></center>
  </div>
</nav>
<img src="images/logo.jpg" width="20%" align="left">
<center><h2>Add Criminal Info</h2>
		<form method="POST" class="forms" action="addcriminal.php">
			<div class="form-group">
				<label>Criminal Name</label>
				<input name="cname" type="text" class="form-control" width="60%" placeholder="Enter the criminal name">
			</div>
			<div class="form-group">
				<label>Age</label>
				<input name="age" type="text" class="form-control" placeholder="Enter the criminal age">
			</div>
			<div class="form-group">
				<label>Gender</label>
				<input name="gender" type="text" class="form-control" placeholder="Enter the criminal gender">
			</div>
			<div class="form-group">
				<label>Offence</label>
				<input name="offence" type="text" class="form-control" placeholder="Enter the type of offence">
			</div>
			<div class="form-group">
				<label>Offence Date</label>
				<input name="offence_date" type="date" class="form-control" placeholder="Enter the date offence happened">
			</div>
			<div class="form-group">
				<label>Place</label>
				<input name="place" type="text" class="form-control" placeholder="Enter the place of crime">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input name="description" type="text" class="form-control" placeholder="Enter the description">
			</div>
  <input type="submit" class="btn btn-success" value="Add Complaint">
</form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
