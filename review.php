<!DOCTYPE HTML>
<html>
<head>
<title>bhimart</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- start slider -->
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript">
			$(function() {

				$('#da-slider').cslider({
					autoplay : true,
					bgincrement : 450
				});

			});
		</script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
* {
    box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 10px;
    height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
<!--
.style5 {font-size: 18px; font-weight: bold; }
.style6 {color: #FF9900}
.style8 {font-size: 18px}
.style9 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
}

-->
</style>
</head>
<body>
<hr>
<div class="header_bg">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1 align="left"><a href="index.html"><span class="style6">BHIMART</span></a></h1>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</hr>
</div><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 50%;
    padding: 10px;
    height: 1400px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
.centerse{
    text-align: center;
    margin: 25px 0px;
    font-size: 20px;
  }
</style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <form action="review_upload.php" method="post">
          <table class="table">

      
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="final data";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
die('connection error:'.mysqli_connect_error);
}
  $Product_GTIN='2111';
$connectDB=mysqli_select_db($conn,'final data');


//$hs_org=mysqli_query($conn,"select * from hs_code_gst where  hs_code=(select hs_code from product_master
    //where Product_GTIN='$Product_GTIN')");


$product_org=mysqli_query($conn,"select * from product_master where Product_GTIN ='$Product_GTIN'");
 $Product_GTIN_EDIT = $Product_GTIN . "-E";
$Review_result=mysqli_query($conn,"select * from product_master where Product_GTIN='$Product_GTIN_EDIT'");
$msg ="";

$data_org=mysqli_fetch_array($product_org);
$data_edit=mysqli_fetch_array($Review_result);
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Brand_Name]'disabled></td>
  <td><label class='centerse'>Brand Name</label></td>
  <td><input type='text' class='form-control' value='$data_edit[Brand_Name]' name='Brand_Name2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Product_Name]' disabled></td>
    <td><label class='centerse'>Product_Name</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Product_Name]' name='Product_Name2'></td>
  </tr>";
  
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Product_Description]' disabled></td>
    <td><label class='centerse'>Product_Description</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Product_Description]' name='Product_Description2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Product_GTIN]' disabled></td>
    <td><label class='centerse'>Product_GTIN</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Product_GTIN]' name='Product_GTIN2'></td>
  </tr>";

  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[SKU_Number]' disabled></td>
    <td><label class='centerse'>SKU_Number</label></td>
    <td><input type='text' class='form-control' value='$data_edit[SKU_Number]' name='SKU_Number2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Primary_GTIN]' disabled></td>
    <td><label class='centerse'>Primary_GTIN</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Primary_GTIN]' name='Primary_GTIN2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Category]' disabled></td>
    <td><label class='centerse'>Category</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Category]' name='Category2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Sub_Category]' disabled></td>
    <td><label class='centerse'>Sub_Category </label></td>
    <td><input type='text' class='form-control' value='$data_edit[Sub_Category]' name='Sub_Category2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Marketing_Information]' disabled></td>
    <td><label class='centerse'>Marketing_Information</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Marketing_Information]' name='Marketing_Information2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Product_WebpageUrl]' disabled></td>
    <td><label class='centerse'>Product_WebpageUrl</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Product_WebpageUrl]' name='Product_WebpageUrl2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Date_of_Activation]' disabled></td>
    <td><label class='centerse'>Date_of_Activation</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Date_of_Activation]' name='Date_of_Activation2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Date_of_Deactivation]' disabled></td>
    <td><label class='centerse'>Date_of_Deactivation </label></td>
    <td><input type='text' class='form-control' value='$data_edit[Date_of_Deactivation]' name='Date_of_Deactivation2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Date_Of_Creation]' disabled></td>
    <td><label class='centerse'>Date_Of_Creation</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Date_Of_Creation]' name='Date_Of_Creation2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Date_of_Modification]' disabled></td>
    <td><label class='centerse'>Date_of_Modification</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Date_of_Modification]' name='Date_of_Modification2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Notification_Type]' disabled></td>
    <td><label class='centerse'>Notification_Type</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Notification_Type]' name='Notification_Type2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Company_Name]' disabled></td>
    <td><label class='centerse'>Company_Name</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Company_Name]' name='Company_Name2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[weight_measurement_unit]' disabled></td>
    <td><label class='centerse'>weight_measurement_unit</label></td>
    <td><input type='text' class='form-control' value='$data_edit[weight_measurement_unit]' name='weight_measurement_unit2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[net_weight]' disabled></td>
    <td><label class='centerse'>net_weight</label></td>
    <td><input type='text' class='form-control' value='$data_edit[net_weight]' name='net_weight2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[gross_weight]' disabled></td>
    <td><label class='centerse'>gross_weight</label></td>
    <td><input type='text' class='form-control' value='$data_edit[gross_weight]' name='gross_weight2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[net_content]' disabled></td>
    <td><label class='centerse'>net_content</label></td>
    <td><input type='text' class='form-control' value='$data_edit[net_content]' name='net_content2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[MRP]' disabled></td>
    <td><label class='centerse'>MRP</label></td>
    <td><input type='text' class='form-control' value='$data_edit[MRP]' name='MRP2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[MRP_Activation_date]' disabled></td>
    <td><label class='centerse'>MRP_Activation_date</label></td>
    <td><input type='text' class='form-control' value='$data_edit[MRP_Activation_date]' name='MRP_Activation_date2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Currency]' disabled></td>
    <td><label class='centerse'>Currency</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Currency]' name='Currency2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[hs_code]' disabled></td>
    <td><label class='centerse'>hs_code</label></td>
    <td><input type='text' class='form-control' value='$data_edit[hs_code]' name='hs_code2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Margin]' disabled></td>
    <td><label class='centerse'>Margin</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Margin]' name='Margin2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[available_states]' disabled></td>
    <td><label class='centerse'>available_states</label></td>
    <td><input type='text' class='form-control' value='$data_edit[available_states]' name='available_states2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[dimension_measurement_unit]' disabled></td>
    <td><label class='centerse'>dimension_measurement_unit</label></td>
    <td><input type='text' class='form-control' value='$data_edit[dimension_measurement_unit]' name='dimension_measurement_unit2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[height]' disabled></td>
    <td><label class='centerse'>height</label></td>
    <td><input type='text' class='form-control' value='$data_edit[height]' name='height2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[width]' disabled></td>
    <td><label class='centerse'>width</label></td>
    <td><input type='text' class='form-control' value='$data_edit[width]' name='width2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[depth]' disabled></td>
    <td><label class='centerse'>depth</label></td>
    <td><input type='text' class='form-control' value='$data_edit[depth]' name='depth2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Edit_Status]' disabled></td>
    <td><label class='centerse'>Edit_Status</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Edit_Status]' name='Edit_Status2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Editor]' disabled></td>
    <td><label class='centerse'>Editor</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Editor]' name='Editor2'></td>
  </tr>";
echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Reviewer]' disabled></td>
    <td><label class='centerse'>Reviewer</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Reviewer]' name='Reviewer2'></td>
  </tr>";
$food_org=mysqli_query($conn,"select * from food_additional_details where  gtin='$Product_GTIN'");
$Product_GTIN_EDIT = $Product_GTIN . "-E";
$Review_result2=mysqli_query($conn,"select * from food_additional_details where gtin='$Product_GTIN_EDIT'");
$data_org=mysqli_fetch_array($food_org);
$data_edit=mysqli_fetch_array($Review_result2);

echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[gtin]' disabled></td>
    <td><label class='centerse'>gtin</label></td>
    <td><input type='text' class='form-control' value='$data_edit[gtin]' name='gtin2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[nutritional_information]' disabled></td>
    <td><label class='centerse'>nutritional_information</label></td>
    <td><input type='text' class='form-control' value='$data_edit[nutritional_information]' name='nutritional_information2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[ingredients]' disabled></td>
    <td><label class='centerse'>ingredients</label></td>
    <td><input type='text' class='form-control' value='$data_edit[ingredients]' name='ingredients2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[allergen_information]' disabled></td>
    <td><label class='centerse'>allergen_information</label></td>
    <td><input type='text' class='form-control' value='$data_edit[allergen_information]' name='allergen_information2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[fssai_lic]' disabled></td>
    <td><label class='centerse'>fssai_lic</label></td>
    <td><input type='text' class='form-control' value='$data_edit[fssai_lic]' name='fssai_lic2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[isi_no]' disabled></td>
    <td><label class='centerse'>isi_no</label></td>
    <td><input type='text' class='form-control' value='$data_edit[isi_no]' name='isi_no2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[food_type]' disabled></td>
    <td><label class='centerse'>food_type</label></td>
    <td><input type='text' class='form-control' value='$data_edit[food_type]' name='food_type2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[storage_condition]' disabled></td>
    <td><label class='centerse'>storage_condition</label></td>
    <td><input type='text' class='form-control' value='$data_edit[storage_condition]' name='storage_condition2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[storage_instruction]' disabled></td>
    <td><label class='centerse'>storage_instruction</label></td>
    <td><input type='text' class='form-control' value='$data_edit[storage_instruction]' name='storage_instruction2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[shelf_life_Value]' disabled></td>
    <td><label class='centerse'>shelf_life_Value</label></td>
    <td><input type='text' class='form-control' value='$data_edit[shelf_life_Value]' name='shelf_life_Value2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[shelf_lifeUnit]' disabled></td>
    <td><label class='centerse'>shelf_lifeUnit</label></td>
    <td><input type='text' class='form-control' value='$data_edit[shelf_lifeUnit]' name='shelf_lifeUnit2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[shelf_lifeBased_On]' disabled></td>
    <td><label class='centerse'>shelf_lifeBased_On</label></td>
    <td><input type='text' class='form-control' value='$data_edit[shelf_lifeBased_On]' name='shelf_lifeBased_On2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[caution]' disabled></td>
    <td><label class='centerse'>caution</label></td>
    <td><input type='text' class='form-control' value='$data_edit[caution]' name='caution2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[direction]' disabled></td>
    <td><label class='centerse'>direction</label></td>
    <td><input type='text' class='form-control' value='$data_edit[direction]' name='direction2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[product_on_recall]' disabled></td>
    <td><label class='centerse'>product_on_recall
</label></td>
    <td><input type='text' class='form-control' value='$data_edit[product_on_recall]' name='product_on_recall2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[batch_no]' disabled></td>
    <td><label class='centerse'>batch_no</label></td>
    <td><input type='text' class='form-control' value='$data_edit[batch_no]' name='batch_no2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[variant]' disabled></td>
    <td><label class='centerse'>variant</label></td>
    <td><input type='text' class='form-control' value='$data_edit[variant]' name='variant2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[gender]' disabled></td>
    <td><label class='centerse'>gender</label></td>
    <td><input type='text' class='form-control' value='$data_edit[gender]' name='gender2'></td>
  </tr>";
  
  $case_org=mysqli_query($conn,"select * from product_case_configuration where  gtin='$Product_GTIN'");
$Product_GTIN_EDIT = $Product_GTIN . "-E";
$Review_result4=mysqli_query($conn,"select * from product_case_configuration where gtin='$Product_GTIN_EDIT'");
$data_org=mysqli_fetch_array($case_org);
$data_edit=mysqli_fetch_array($Review_result4);

echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[gtin]' disabled></td>
    <td><label class='centerse'>gtin</label></td>
    <td><input type='text' class='form-control' value='$data_edit[gtin]' name='gtin2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[gtin_prefix]' disabled></td>
    <td><label class='centerse'>gtin_prefix</label></td>
    <td><input type='text' class='form-control' value='$data_edit[gtin_prefix]' name='gtin_prefix2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[case_packid]' disabled></td>
    <td><label class='centerse'>case_packid</label></td>
    <td><input type='text' class='form-control' value='$data_edit[case_packid]' name='case_packid2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[Case_pack]' disabled></td>
    <td><label class='centerse'>Case_pack</label></td>
    <td><input type='text' class='form-control' value='$data_edit[Case_pack]' name='Case_pack2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[pack_type]' disabled></td>
    <td><label class='centerse'>pack_type</label></td>
    <td><input type='text' class='form-control' value='$data_edit[pack_type]' name='pack_type2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[quantity]' disabled></td>
    <td><label class='centerse'>quantity</label></td>
    <td><input type='text' class='form-control' value='$data_edit[quantity]' name='quantity2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[dimension_measurementunit]' disabled></td>
    <td><label class='centerse'>dimension_measurementunit</label></td>
    <td><input type='text' class='form-control' value='$data_edit[dimension_measurementunit]' name='dimension_measurementunit2'></td>
  </tr>";

  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[pc_depth]' disabled></td>
    <td><label class='centerse'>pc_depth</label></td>
    <td><input type='text' class='form-control' value='$data_edit[pc_depth]' name='pc_depth2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[pc_height]' disabled></td>
    <td><label class='centerse'>pc_height</label></td>
    <td><input type='text' class='form-control' value='$data_edit[pc_height]' name='pc_height2'></td>
  </tr>";
  echo "<tr>
    <td><input type='text' class='form-control' value='$data_org[pc_width]' disabled></td>
    <td><label class='centerse'>pc_width</label></td>
    <td><input type='text' class='form-control' value='$data_edit[pc_width]' name='pc_width2'></td>
  </tr>";

  
      
?>


          </table>
          <div class="text-center">
            <button class="btn btn-success" name="review"> Reviewed </button>
           <!--  <button class="btn btn-fail" name="reject"> Rejected </button> -->
            <button class="btn btn-fail" name="reject"><a href='reviewerhome.'>Rejected</a></button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>


