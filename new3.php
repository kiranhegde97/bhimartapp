<!DOCTYPE html>
<html>
<head>
<?php
//include ('connectdb.php');
session_start();
$gtin=$_POST["gtin"];

$conn=mysqli_connect('localhost','root','','final data');
$result=mysqli_query($conn,"SELECT * FROM product_master,food_additional_details,product_case_configuration,product_images where Product_GTIN='$gtin'");
$row=mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
//$row=mysqli_fetch_assoc($result);
//$count=mysqli_num_rows($result);
if($count>0){ 
?>

	<title>my project - <?php echo $gtin;?></title>

 <link rel="stylesheet" href="vieww.css">
<link rel="shortcut icon" href="https://www.bhimart.com/images/favicon.ICO">
<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
	   <link rel="stylesheet" href="Login.css">
         <link rel="stylesheet" href="loginn.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
<script src="login.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
.set {
	    width: 260px;
    /* width: 309px; */
    height: 100%;
    top: 76px;
    z-index: 1000;
    background-color: #CD2022;
    padding: 2em 0;
}
.scroll1 {
    top: 130px;
    bottom: 0;
    left: 0;
    right: -17px;
    overflow-y: auto;
    background-color: #eeeeee;
    #position: fixed;
    
}
.scroll1 > li {
    position: relative;
    display: block;
    list-style: none;
}
.scroll1 > li > a {
    position: relative;
    display: block;
    padding: 1px 1px;
}
#submit{
	height: 40px;
	width: 150px;
}

.col-md-9{
background-image: url("shatered.png");
}
</style>
</head>
<body>
 <?php include 'header.php';?>
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-3">
 			<nav class="nav">
 				<ul class="scroll1">

 					<li><a href="#Product Basic Details" >Product Basic Details</a></li>
 					<li><a href="#Marketing Information" >Marketing Information</a></li>
 					<li><a href="#Weights And Dimensions" >Weights And Dimensions</a> </li> 
					<li><a href="#Pricing" >Pricing</a> </li> 
					<li><a href="#HS Code" >HS Code</a> </li> 
					<li><a href="#Food Additional Details" >Food Additional Details</a> </li> 
					<li><a href="#Product Case Configuration" >Product Case Configuration</a></li>
				
 				</ul> 				
 			</nav>
 		</div>
 		<div class="col-md-9" >
 			<form action="editoredit.php" method="post">
 				<div class="table-responsive" style="background-color: #eeeeee;">
 					<table id="Product Basic Details" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Product Basic Details</font></h3></th></tr>
 <tr><th>GTIN</th> 
 <td><input type="text" value="<?php echo $row['Product_GTIN']; ?>"name="Product_GTIN"></td>
 <th>Product_Name</th> 
 <td><input type="text" value="<?php echo $row['Product_Name'];?>"name="Product_name"></td></tr> 
 <tr><th>Product_Description</th> 
 <td colspan="3"><input  type="textarea" class="form-control" value="<?php echo $row['Product_Description'];?>"name="Product_Description"></td></tr> 
 <tr><th>Brand_Name</th> 
 <td><input type="text" value="<?php echo $row['Brand_Name'];?>"name="Brand_name"></td>
 <th>Company_Name</th> 
 <td><input type="text" value="<?php echo $row['Company_Name'];?>"name="Company_name"></td></tr> 
 <tr><th>Category</th> 
 <td><input type="text" value="<?php echo $row['Category'];?>"name="Category"></td>
 <th>Sub_Category</th> 
 <td><input type="text" value="<?php echo $row['Sub_Category'];?>"name="Sub_Category"></td></tr>  
 					</table>
 				 
 <table id="Marketing Information" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Marketing Information</font></h3></th></tr>
 <tr><th>Marketing_Information</th> 
 <td colspan="3"><input type="textarea" class="form-control" value="<?php echo $row['Marketing_Information'];?>"name="Marketing_Information"></td></tr> 
 <tr><th>Product_WebpageUrl</th> 
 <td><input type="text" value="<?php echo $row['Product_WebpageUrl'];?>"name="Product_WebpageUrl"></td></tr>
 					</table>
 				 
 					<table id="Weights And Dimensions" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Weights And Dimensions</font></h3></th></tr>
 <tr><th>Weight_Measurement_Unit</th> 
 <td><input type="text" value="<?php echo $row['weight_measurement_unit'];?>"name="weight_measurement_unit"></td> 
 <th>Net_Weight</th> 
 <td><input type="text" value="<?php echo $row['net_weight'];?>"name="net_weight"></td></tr> 
 <tr><th>Gross_Weight</th> 
 <td><input type="text" value="<?php echo $row['gross_weight'];?>"name="gross_weight"></td>
 <th>Net_Content</th> 
 <td><input type="text" value="<?php echo $row['net_content'];?>"name="net_content"></td></tr> 
 <tr><th>Dimension_Measurement_Unit</th> 
 <td><input type="text" value="<?php echo $row['dimension_measurement_unit'];?>"name="dimension_measurement_unit"></td>
 <th>Height</th> 
 <td><input type="text" value="<?php echo $row['height'];?>"name="height"></td></tr>  
 <tr><th>Width</th> 
 <td><input type="text" value="<?php echo $row['width'];?>"name="width"></td>
 <th>Depth</th> 
 <td><input type="text" value="<?php echo $row['depth'];?>"name="depth"></td></tr>  
 					</table>
 				 
 					<table id="Pricing" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Pricing</font></h3></th></tr>
 <tr><th>MRP</th> 
 <td><input type="text" value="<?php echo $row['MRP'];?>"name="MRP"></td> 
 <th>Currency</th> 
 <td><input type="text" value="<?php echo $row['Currency'];?>"name="Currency"></td></tr> 
 <tr><th>Available_States</th> 
 <td><input type="text" value="<?php echo $row['available_states'];?>"name="available_states"></td></tr>
 				
 					<table id="HS Code" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">HS Code</font></h3></th></tr>
 <tr><th>HS_Code</th> 
 <td><input type="text" value="<?php echo $row['hs_code'];?>"name="hs_code"></td></tr>
 					</table>
 				
 					<table id="Food Additional Details" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Food Additional Details</font></h3></th></tr>
 <tr><th>Nutritional_Information</th> 
 <td><input type="text" value="<?php echo $row['nutritional_information'];?>"name="nutritional_information"></td> 
 <th>Ingredients</th> 
 <td><input type="text" value="<?php echo $row['ingredients'];?>"name="ingredients"></td></tr> 
 <tr><th>Allergen_Information</th> 
 <td><input type="text" value="<?php echo $row['allergen_information'];?>"name="allergen_information"></td>
 <th>fssai_lic</th> 
 <td><input type="text" value="<?php echo $row['fssai_lic'];?>"name="fssai_lic"></td></tr> 
 <tr><th>isi_no</th> 
 <td><input type="text" value="<?php echo $row['isi_no'];?>"name="isi_no"></td>
 <th>Food_Type</th> 
 <td><input type="text" value="<?php echo $row['food_type'];?>"name="food_type"></td></tr>  
 <tr><th>Storage_Condition</th> 
 <td><input type="text" value="<?php echo $row['storage_condition'];?>"name="storage_condition"></td>
 <th>Storage_Instruction</th> 
 <td><input type="text" value="<?php echo $row['storage_instruction'];?>"name="storage_instruction"></td></tr> 
 <tr><th>Shelf_Life_Value</th> 
 <td><input type="text" value="<?php echo $row['nutritional_information'];?>"name="nutritional_information"></td> 
 <th>Shelf_Life_Unit</th> 
 <td><input type="text" value="<?php echo $row['shelf_lifeUnit'];?>"name="shelf_lifeUnit"></td></tr> 
 <tr><th>Shelf_Life_Based_On</th> 
 <td><input type="text" value="<?php echo $row['shelf_lifeBased_On'];?>"name="shelf_lifeBased_On"></td>
 <th>Caution</th> 
 <td><input type="text" value="<?php echo $row['caution'];?>"name="caution"></td></tr> 
 <tr><th>Direction</th> 
 <td><input type="text" value="<?php echo $row['direction'];?>"name="direction"></td>
 <th>Product_On_Recall</th> 
 <td><input type="text" value="<?php echo $row['product_on_recall'];?>"name="product_on_recall"></td></tr><tr><th>Batch_No</th> 
 <td><input type="text" value="<?php echo $row['batch_no'];?>"name="batch_no"></td>
 <th>Variant</th> 
 <td><input type="text" value="<?php echo $row['variant'];?>"name="variant"></td></tr> 
 <tr><th>Gender</th> 
 <td><input type="text" value="<?php echo $row['gender'];?>"name="gender"></td></tr>
 					</table>
 				
 					<table id="Product Case Configuration" border="" class="table table-hover"  color="black" cellpadding="5" >
 						<tr><th colspan="4"><h3><font color="blue">Product Case Configuration</font></h3></th></tr>
 <tr><th>Gtin_Prefix</th> 
 <td><input type="text" value="<?php echo $row['gtin_prefix'];?>"name="gtin_prefix"></td> 
 <th>Case_Pack_Id</th> 
 <td><input type="text" value="<?php echo $row['case_packid'];?>"name="case_packid"></td></tr> 
 <tr><th>Case_Pack</th> 
 <td><input type="text" value="<?php echo $row['Case_pack'];?>"name="Case_pack"></td>
 <th>Pack_Type</th> 
 <td><input type="text" value="<?php echo $row['pack_type'];?>"name="pack_type"></td></tr> 
 <tr><th>Quantity</th> 
 <td><input type="text" value="<?php echo $row['quantity'];?>"name="quantity"></td>
 <th>Depth</th> 
 <td><input type="text" value="<?php echo $row['pc_depth'];?>"name="pc_depth"></td></tr>  
 <tr><th>Height</th> 
 <td><input type="text" value="<?php echo $row['pc_height'];?>"name="pc_height"></td>
 <th>Width</th> 
 <td><input type="text" value="<?php echo $row['pc_width'];?>"name="pc_width"></td></tr>  
<?php } 
else{

	$message = "<script>alert('Product does not exist');</script>";   
	echo $message; 
	echo  "<script> window.location.href=\"editorhome.php\";  </script>"; 
	//header("location: editorhome.php");//Go on Index page
}?>
 					</table>
 				</div>


 				<div class="text-center">
 					
 					<button id="submit" name="submit" class="btn btn-primary">Submit</button>
 				</div> 

 			</form>
 		</div>


 	</div>


 </div>
 <?php include 'footer.php';?>
</body>
</html>
