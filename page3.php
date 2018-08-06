<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>page3| <?php echo $_SESSION['user']['role']; ?> edit </title>
	<link rel="shortcut icon" href="https://www.bhimart.com/images/favicon.ICO">
	<link rel="stylesheet" href="loginn.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
<script src="login.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.width60{width: 60% !important ;}
th, td {
    text-align: center;
    padding: 8px;
    padding-left: 50px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>
</head>
<body>
<?php include 'header.php';?>

<!-- <h1 align="center"><b>REVIEWER</b></h1> -->

<div style="overflow-x:auto; text-align:-webkit-center; padding-top: 30px;"  class="table-responsive">
<table class="table width60 text-center table-hover" style="
    background-color: white;">
   
  <tr>
    <th><b><h5>Product Name</b></h5></th>
    <th><b><h5>GTIN</b></h5></th>
  </tr>
    <tr>
    <tr> <?php

include('connectdb.php');
/*SELECT DISTINCT(User_Name), User_id FROM product_master p,user_master u WHERE p.Editor=u.User_id*/

$uid=$_GET['uid'];
//echo "<tr><th>User_id</th>";

$result = mysqli_query($con,"SELECT Product_GTIN, Product_Name FROM product_master WHERE Editor='".$uid."'")
or die(mysqli_error($con));

while($row = mysqli_fetch_array( $result )) {

echo '<td><h4>' . $row['Product_Name'].'</h4><td>'.'<a href="review.php?Product_GTIN=' . $row['Product_GTIN'].'"<h4> '. $row['Product_GTIN'] .' </h4></a>'.'<tr>';

}

?> </tr>

    
  </tr>
  
  </form>
</table>
</div>  </div>
<div sytle: align="center" id="logout">
  <button><a href="logout.php">Please Click To Logout</a>  </button> 


 			
 	</div>			 


	</div>
</div>



            
<?php include 'footer.php';?>
</body>
</html>