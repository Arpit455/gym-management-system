<!DOCTYPE html>
<?php

// php select option value from database

$hostname = "localhost";
$username = "root";
$password = "";
$databaseName = "gym2";

// connect to mysql database

$connect = mysqli_connect($hostname, $username, $password, $databaseName);

// mysql select query
$query = "SELECT * FROM `Trainer`";

// for method 1

$result1 = mysqli_query($connect, $query);



?>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
      
   
       
 <div class="jumbotron" style="border-radius:0;background:url('images/3.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="add_customer.php" class="list-group-item ">add customer</a>
                <a href="customer_details.php" class="list-group-item">Customer details</a>
		<a href="update_customer.php" class="list-group-item">update customer</a>
		<a href="customer_delete.php" class="list-group-item ">delete customer</a>
                <a href="package.php" class="list-group-item">equipment details</a>
		<a href="equipment.php" class="list-group-item">add equipment</a>
		<a href="update_equipment.php" class="list-group-item">update equipment</a>
		<a href="equipment_delete.php" class="list-group-item">delete equipment</a>
                
            </div>
            <hr>
            <div class="list-group">
<a href="trainer_details.php" class="list-group-item active">Trainer details</a>             
<a href="trainer.php" class="list-group-item active">Add new Trainer</a>
<a href="trainer_delete.php" class="list-group-item active">delete trainer</a>
<a href="update_trainer.php" class="list-group-item active">update trainer</a>
<a href="manager_details.php" class="list-group-item active">manager details</a>
<a href="manager.php" class="list-group-item active">Add new manager</a>
<a href="manager_delete.php" class="list-group-item active">delete manager</a>
<a href="update_manager.php" class="list-group-item active">update manager</a>
            </div>        
        </div>
      <div class="col-md-1"></div>
      </div>
    <header>
 <nav>
     <div class="main-wrapper">
		       <div class="nav-login">
			       <?php
				        if (isset($_SESSION['u_id'])) {
						  echo '<form action="arpit.html" method="POST">
					            <button type="submit" name="submit">logout</button>
					              </form>';	
                                 } else{
							
							echo '<form action="arpit.html" method="POST">
                              
                               						
				                </form>
				              <a href="arpit.html" class="btn btn-light" style="background-color:#3498DB;color:FFFFFF">Logout</a>';
							
						}
				   
				    ?>
					
				
		       </div>
	 </div>
 </nav>

</header>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

     </body>
    
</html>
   