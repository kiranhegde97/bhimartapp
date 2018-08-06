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
$connectDB=mysqli_select_db($conn,'final data');

$product_org=mysqli_query($conn,'select * from product_master where Product_GTIN="$gtin"');
$Review_result=mysqli_query($conn,'select * from product_master where Product_GTIN="$gtin"');
$msg ="";

$product_org=mysqli_query($conn,'select * from food_additional_details where gtin="$gtin"');
$REVIEW_result=mysqli_query($conn,'select * from product_master where Product_GTIN="$gtin"');
$msg ="";

$product_org=mysqli_query($conn,'select * from product_case_configuration where gtin="$gtin"');
$REVIEW_result=mysqli_query($conn,'select * from product_master where Product_GTIN="$gtin"');
$msg ="";

$product_org=mysqli_query($conn,'select * from product_images where gtin="$gtin"');
$REVIEW_result=mysqli_query($conn,'select * from product_master where Product_GTIN="$gtin"');
$msg ="";

if(isset($_POST['submit']))
{

	 $Brand_Name2 = $_POST['Brand_name'] ;
	 $Product_Name2 = $_POST['Product_name'];
	 $Product_Description2= $_POST['Product_Description']; 
	 $Product_GTIN2 = $_POST['Product_GTIN']."-E";
	// $SKU_Number2= $_POST['SKU_Number2']; 
	// $Primary_GTIN2= $_POST['Primary_GTIN2'];
	 $Category2= $_POST['Category'];
	 $Sub_Category2= $_POST['Sub_Category'];
	 $Marketing_Information2= $_POST['Marketing_Information'];
	 $Product_WebpageUrl2= $_POST['Product_WebpageUrl']; 
	// $Date_of_Activation2= $_POST['Date_of_Activation']; 
	// $Date_of_Deactivation2= $_POST['Date_of_Deactivation']; 
	// $Date_Of_Creation2= $_POST['Date_Of_Creation'];
	// $Date_of_Modification2= $_POST['Date_of_Modification']; 
	// $Notification_Type2= $_POST['Notification_Type'];
	 $Company_Name2= $_POST['Company_name']; 
	 $weight_measurement_unit2= $_POST['weight_measurement_unit'];
	 $net_weight2= $_POST['net_weight'];
	 $gross_weight2= $_POST['gross_weight'];
	 $net_content2= $_POST['net_content'];
	 $MRP2= $_POST['MRP'];
	// $MRP_Activation_date2= $_POST['MRP_Activation_date'];
	 $Currency2= $_POST['Currency'];
	 $hs_code2= $_POST['hs_code'];
	// $Margin2= $_POST['Margin']; 
	 $available_states2= $_POST['available_states'];
	 $dimension_measurement_unit2= $_POST['dimension_measurement_unit'];
	 $height2= $_POST['height'];
	 $width2= $_POST['width'];
	 $depth2= $_POST['depth'];
	// $Edit_Status2= $_POST['Edit_Status'];
	 /*$Reviewer2= $_POST['Reviewer'];
	 $Editor2= $_POST['Editor'];
	*/// $gtin2= $_POST['gtin2']."-E";
	 $case_packid = $_POST['case_packid'];
	 $Quantity = $_POST['quantity'];
	 $pc_depth = $_POST['pc_depth'];
	 $pc_height = $_POST['pc_height'];
	 $pc_width = $_POST['pc_width'];
	// $gtin= $_POST['gtin']."-E";
	// $gtin_prefix = $_POST['gtin_prefix'];
	// $gtin_prefix1 = $_POST['gtin_prefix']."-E";
	 $nutritional_information2= $_POST['nutritional_information'];
	 $ingredients2= $_POST['ingredients'];
	//echo $Front = $_POST['Front'];
	//echo $Back = $_POST['Back'];
	//echo $Top = $_POST['Top'];
	//echo $Bottom = $_POST['Bottom'];
	//echo $Left_view = $_POST['Left_view'];
	//echo $Right_view = $_POST['Right_view'];
	//echo $Top_Left = $_POST['Top_Left'];
	//echo $Top_right = $_POST['Top_right'];

$que1 = "INSERT INTO product_master (Brand_Name,Product_Name,Product_Description,Product_GTIN,SKU_Number,Primary_GTIN,Category,Sub_Category,Marketing_Information,Product_WebpageUrl,Date_of_Activation,Date_of_Deactivation,Date_Of_Creation,Date_of_Modification,Notification_Type,Company_Name,weight_measurement_unit,net_weight,gross_weight,net_content,MRP,MRP_Activation_date,Currency,hs_code,Margin,available_states,dimension_measurement_unit,height,width,depth,Edit_Status,Editor,Reviewer)
	 VALUES 
	 ('$Brand_Name2','$Product_Name2','$Product_Description2','$Product_GTIN2','','','','$Sub_Category2','$Marketing_Information2','$Product_WebpageUrl2',now(),now(),now(),now(),now(),'$Company_Name2','$weight_measurement_unit2','$net_weight2','$gross_weight2','$net_content2','$MRP2',now(),'$Currency2','$hs_code2','','$available_states2','$dimension_measurement_unit2','$height2','$width2','$depth2','','11','12')";

$que2 = "INSERT INTO `food_additional_details`(`gtin`, `nutritional_information`, `ingredients`, `allergen_information`, `fssai_lic`, `isi_no`, `food_type`, `storage_condition`, `storage_instruction`, `shelf_life_Value`, `shelf_lifeUnit`, `shelf_lifeBased_On`, `caution`, `direction`, `product_on_recall`, `batch_no`, `variant`, `gender`) VALUES ('$Product_GTIN2','$nutritional_information2','$ingredients2','','','','','','','','','','','','','','','')"; 

$que3 = "INSERT INTO product_case_configuration(gtin,gtin_prefix,case_packid,Case_pack,pack_type,quantity,dimension_measurementunit,pc_depth,pc_height,pc_width) VALUES ('$Product_GTIN2','','$case_packid','','','$Quantity','$dimension_measurement_unit2','$pc_depth','$pc_height','$pc_width')"; 

$que4 = "INSERT INTO product_images(gtin,Front,Back,Top,Bottom,Left_view,Right_view,Top_Left,Top_right) VALUES ('$Product_GTIN2','','','','','','','','')"; 




if( mysqli_query($conn,$que1)){
	//echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $que1 . "<br>" . mysqli_error($conn);
}
if( mysqli_query($conn,$que2)){
	//echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $que2 . "<br>" . mysqli_error($conn);
}
if( mysqli_query($conn,$que3)){
	//echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $que3 . "<br>" . mysqli_error($conn);
}
if( mysqli_query($conn,$que4)){
	//echo "<script>alert('Record inserted successfully');</script>";

	
}
else {
    echo "Error: " . $que4 . "<br>" . mysqli_error($conn);
}
echo "<script>alert('successful');</script>";

	echo "<script> window.location.href=\"editorhome.php\"; </script>";

mysqli_close($conn);
}
?>