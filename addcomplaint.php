<?php include('includes/database.php');?>
<?php
	if($_POST)
	{
		$c_date = $_POST['c_date'];
		$description=$_POST['description'];
		$complaint=$_POST['complainer'];
		$address=$_POST['address'];
		$aadhar=$_POST['aadhar'];
		$status=$_POST['status'];
		//create customer query
		$query="INSERT INTO complaint(c_date,description,complainer,address,aadhar,status) 
				VALUES ('$c_date','$description','$complainer','$address','$aadhar','$status')";
		//Run query
		$mysqli->query($query);
		
		$msg='Complaint Info Added';
		header('Location: complaint.php?msg='.urlencode($msg).'');
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
<center><h2>Add Complaint</h2>
		<form method="POST" class="forms" action="addcomplaint.php">
			<div class="form-group">
				<label>Complaint Date</label>
				<input name="c_date" type="date" class="form-control" width="60%" placeholder="Enter the date of complaint">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input name="description" type="text" class="form-control" placeholder="Enter the complaint description">
			</div>
			<div class="form-group">
				<label>Complainer</label>
				<input name="complainer" type="text" class="form-control" placeholder="Enter the complainer name">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input name="address" type="text" class="form-control" placeholder="Enter the Complainer address">
			</div>
			<div class="form-group">
				<label>Aadhar No.</label>
				<input name="aadhar" type="text" class="form-control" placeholder="Enter the aadhar Number">
			</div>
			<div class="form-group">
				<label>Status</label>
				<input name="status" type="text" class="form-control" placeholder="Enter the status">
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
