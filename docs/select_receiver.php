<?php
include('config.php');

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to"; // returns array or output of receiver.
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // checks whether the entered amount is non-negative by user.
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative Funds can not be Transfer!!!!")';  // showing an alert box.
        echo '</script>';
    }


  
    // checks whether if user has the appopriate amount or not in their account.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Insufficient Balance!!!!")';  // showing an alert box.
        echo '</script>';
    }
    


    // checks whether the entered amount is zero or not.
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Enter Appropriate Amount')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Hurrayy!!! Transaction Successful');</script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>
 
<?php
  include 'nav.php';
?>

	<div class="container">
        <h1>Money Transfer Panel</h1>
            <?php
                include 'config.php';
				
				// Fetching the sender name
				$from = $_GET['id'];
				$sqlstatement = "SELECT * from users where id=$from";
                $query = mysqli_query($conn,$sqlstatement);
                $sql1 = mysqli_fetch_array($query);
				
				// fetching the sender details
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br>
        <label>The Sender :</label>
		<input type="text" class="form-control" value="<?php echo $sql1['name'] ?>" readonly></input>
		<br><br>
		<label>Select the Reciever :</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Enter appropriate Amount :</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
            <button class="btn btn-primary" name="submit" type="submit" id="btn">Proceed to Transfer</button><br><br>
			
            </div>
        </form>
		<div class="text-center">
		<a href="transaction_history.php"><button  class="btn btn-primary">History</button></a>
		</div>
    </div>
	<br><br>
<?php include('footer.php'); ?>
</body>
</html>