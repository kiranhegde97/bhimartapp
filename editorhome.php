<?php 
	session_start();
	include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>editor | <?php echo $_SESSION['user']['role']; ?> </title>
	<link rel="shortcut icon" href="https://www.bhimart.com/images/favicon.ICO">
	<link rel="stylesheet" href="loginn.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
<script src="login.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style >   .width60{width: 60% !important ;}     </style>
</head>
<body>
<?php include 'header.php';?>
		 

<div class="container-fluid">
  <div class="row">
			<div class="col-lg-12">
    
                
                    <div class="span4offset3">


                    <center>  <form action="new3.php" method="post" id="gtin" class="form-horizontal">
                          <div class="control-group row width60">
                            <label class="control-label col-md-3" style="text-align: right;" ><b>Enter GTIN</b></label>
                             <div class="col-md-6">
                            <input type="tel" class="form-control " name="gtin" placeholder="Enter 14 digit gtin" required></div>
		<button type="submit" style="line-height:0.25; name="GO" value="GO" class="btn-primary btn-lg col-md-3" onclick="">Search</button></div>
		<!-- </div> -->
                          </div>
                      </div>
				</center> 
            </form>
        </div><!--/span4-->
    </div>
<form action="submitadd.php" method="post">
<div class="table-responsive">
<table id="" border="" class="table table-hover"  color="black" cellpadding="5" >
<tr >
	<th> Product Edited list : </th> 
	<th> Product Rejected list : </th>
</tr>
</table>
<table class="table table-hover " style=" width: 47%"  color="black" cellpadding="5" >
 <tr>
 	<th>Product missing mrp</th> 
    <td> <?php

$result = mysqli_query($con,"SELECT  COUNT(*) as c FROM product_master WHERE MRP IS NULL;
")
or die(mysqli_error($con));
while($row = mysqli_fetch_array( $result )) {
echo '<a href="page3.php?countofmrp='.$row['c'].'"<h4>'. $row['c'].'</h4></a>'.'<tr>';
} 
?></td>

 <th>Product missing Brand Name</th> 
 <td>    <?php

$result = mysqli_query($con,"SELECT  COUNT(*) as d FROM product_master WHERE Brand_Name = '';
")
or die(mysqli_error($con));
while($row = mysqli_fetch_array( $result )) {
echo '<a href="page3.php?countofbname='.$row['d'].'"<h4>'. $row['d'].'</h4></a>'.'<tr>';
} 
?>        </td></tr>  
 <tr><th>Product missing Category</th> 
 <td>     <?php

$result = mysqli_query($con,"SELECT  COUNT(*) as d FROM product_master WHERE Category = '';
")
or die(mysqli_error($con));
while($row = mysqli_fetch_array( $result )) {
echo '<a href="page3.php?countocat='.$row['d'].'"<h4>'. $row['d'].'</h4></a>'.'<tr>';
} 
?>       </td> 
 <th>product missing Sub category</th> 
 <td>     <?php

$result = mysqli_query($con,"SELECT  COUNT(*) as d FROM product_master WHERE Sub_Category = '' ;
")
or die(mysqli_error($con));
while($row = mysqli_fetch_array( $result )) {
echo '<a href="page3.php?countofsubcat='.$row['d'].'"<h4>'. $row['d'].'</h4></a>'.'<tr>';
} 
?>    </td> 
</tr> 
 					</table>
 				 

`

	</div>
</div>



            
<?php include 'footer.php';?>
</body>
</html>