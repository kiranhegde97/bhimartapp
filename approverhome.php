<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Approver | <?php echo $_SESSION['user']['role']; ?> edit </title>
	<link rel="shortcut icon" href="https://www.bhimart.com/images/favicon.ICO">
	<link rel="stylesheet" href="loginn.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
<script src="login.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
table {
/*  border-collapse: collapse;
    border-spacing: 5px;*/

    width: 100%;
    border: 1px solid #ddd;

}
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
<div class="container-fluid">
  <div class="row">
			<div class="col-lg-12">
    
                
                    <div class="span4offset3">


                    <center>  <form action="new3.php" method="post" id="gtin" class="form-horizontal">
                          <div class="control-group row width60">
                            <label class="control-label col-md-3" style="text-align: right;" ><b>Enter GTIN</b></label>
                             <div class="col-md-6">
                            <input type="tel" class="form-control "  pattern="^\d{14}$" name="gtin" placeholder="Enter 14 digit gtin" required></div>
		<button type="submit" style="line-height:0.25; name="GO" value="GO" class="btn-primary btn-lg col-md-3" onclick="">Search</button></div>
		<!-- </div> -->
                          </div>
                      </div>
					</center>   
            </form>
        </div><!--/span4-->
    </div>

    <form method="post" action="view_con.php">

<!-- <h1 align="center"><b>REVIEWER</b></h1> -->

<div style="overflow-x:auto;text-align: -webkit-center;"  class="table-responsive">
<table class="table width60 text-center" style="    background-color: white;">
  <tr bgcolor=#ffffff>
    <th><b><h5>Reviewers</b></h5></th>
    <th><b><h5>Product count</b></h5></th>
  </tr>
    <tr>
    <tr> <?php

include('connectdb.php');

$result = mysqli_query($con,"
SELECT DISTINCT(User_Name), User_id, COUNT(u.User_id) as c  FROM product_master p,user_master u WHERE p.Reviewer=u.User_id GROUP by p.Reviewer")

or die(mysqli_error($con));

while($row = mysqli_fetch_array( $result )) {


echo '<td><h4>' . $row['User_Name'] . '</h4><td>'.'<a href="page3.php?uid='.$row['User_id'].'"<h4>'. $row['c'].'</h4></a>'.'<tr>';

}
  
?> </tr>

    
  </tr>
  
  </form>
</table>
</div>  </div>
<div sytle: align="center" id="logout" >
   <a class="btn btn-danger" href="logout.php">Click To Logout</a> 


 			
 	</div>			 


	</div>
</div>



            
<?php include 'footer.php';?>
</body>
</html>