<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<?php include('nav.php'); ?>

<div class="container">
    <?php
                include 'config.php';
				
				// Fetching the user details
				$userid = $_GET['id'];
				$sqlstatement = "SELECT * from users where id=$userid";
                $query = mysqli_query($conn,$sqlstatement);
                $sql1 = mysqli_fetch_array($query);
	?>
    <div class="row">
        <div class="col-md-4 mt-1">
            <div class="card text-centre sidebar">
	            <div class="card-body">
		            <img src="img/user.jpg" alt="user" class="rounded-circle" width="150">
			        <div class="mt-3">
			            <h2><?php echo $sql1['name'] ?></h2>
			        </div>
	            </div>
            </div>
        </div>
        <div class="col-md-8 mt-1">
                <div class="card mb-3 content">
                    <h1 class="m-3 pt-3">Personal Details</h1>
					<div class="card-body">
					    <div class="row"> 
						    <div class="col-md-3">
                                <h3>Name :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['name'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>E-mail :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['email'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Phone :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['contact'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Occupation :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['occupation'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Balance :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['balance'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Blood Group :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['bloodgroup'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Marital Status :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['maritalstatus'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>City :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['city'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>State :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['state'] ?></h5>
						    </div>
						</div>
						<hr>
						<div class="row"> 
						    <div class="col-md-3">
                                <h3>Country :</h3>
						    </div>
							<div class="col-md-9 text-secondary">
                                <h5><?php echo $sql1['country'] ?></h5>
						    </div>
						</div>
						<hr>
						
					</div>
                </div>
        </div>
    </div>
</div>
<br><br>

<div class="text-center">
    <a href="all_users.php"><button  class="btn btn-primary">Back</button></a>
</div>
<br><br>
<?php include('footer.php'); ?>
</body>
</html>
