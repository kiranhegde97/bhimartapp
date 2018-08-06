<?php
$servername="localhost";
$username="root";
$password="";
$dbname="final data";

$conn=mysqli_connect($servername,$username,$password,$dbname);

if(isset($_POST['review'])){

	//echo $hs_code2= substr($_POST['hs_code2'],0,(STRLEN($_POST['hs_code2'])-2))."-R";
	//echo $igst2= $_POST['igst2'];
	//echo $cgst2= $_POST['cgst2'];
	//echo $sgst2= $_POST['sgst2'];	

	echo $Brand_Name2 = $_POST['Brand_Name2'] ;
	echo $Product_Name2 = $_POST['Product_Name2'];
	echo $Product_Description2= $_POST['Product_Description2']; 
	echo $Product_GTIN2 = substr($_POST['Product_GTIN2'],0,(STRLEN($_POST['Product_GTIN2'])-2))."-R";
	echo $SKU_Number2= $_POST['SKU_Number2']; 
	echo $Primary_GTIN2= $_POST['Primary_GTIN2'];
	echo $Category2= $_POST['Category2'];
	echo $Sub_Category2= $_POST['Sub_Category2'];
	echo $Marketing_Information2= $_POST['Marketing_Information2'];
	echo $Product_WebpageUrl2= $_POST['Product_WebpageUrl2']; 
	echo $Date_of_Activation2= $_POST['Date_of_Activation2']; 
	echo $Date_of_Deactivation2= $_POST['Date_of_Deactivation2']; 
	echo $Date_Of_Creation2= $_POST['Date_Of_Creation2'];
	echo $Date_of_Modification2= $_POST['Date_of_Modification2']; 
	echo $Notification_Type2= $_POST['Notification_Type2'];
	echo $Company_Name2= $_POST['Company_Name2']; 
	echo $weight_measurement_unit2= $_POST['weight_measurement_unit2'];
	echo $net_weight2= $_POST['net_weight2'];
	echo $gross_weight2= $_POST['gross_weight2'];
	echo $net_content2= $_POST['net_content2'];
	echo $MRP2= $_POST['MRP2'];
	echo $MRP_Activation_date2= $_POST['MRP_Activation_date2'];
	echo $Currency2= $_POST['Currency2'];
	echo $hs_code2= $_POST['hs_code2'];
	echo $Margin2= $_POST['Margin2']; 
	echo $available_states2= $_POST['available_states2'];
	echo $dimension_measurement_unit2= $_POST['dimension_measurement_unit2'];
	echo $height2= $_POST['height2'];
	echo $width2= $_POST['width2'];
	echo $depth2= $_POST['depth2'];
	echo $Edit_Status2= $_POST['Edit_Status2'];
	echo $Editor2= $_POST['Editor2'];
	echo $Reviewer2= $_POST['Reviewer2'];

	echo $gtin2= substr($_POST['gtin2'],0,(STRLEN($_POST['gtin2'])-2))."-R";
	echo $nutritional_information2= $_POST['nutritional_information2'];
	echo $ingredients2= $_POST['ingredients2'];
	echo $allergen_information2= $_POST['allergen_information2'];
	echo $fssai_lic2= $_POST['fssai_lic2'];
	echo $isi_no2= $_POST['isi_no2'];
     echo $food_type2= $_POST['food_type2'];
	echo $storage_condition2= $_POST['storage_condition2'];
	echo $storage_instruction2= $_POST['storage_instruction2'];
	echo $shelf_life_Value2= $_POST['shelf_life_Value2'];
	echo $shelf_lifeUnit2= $_POST['shelf_lifeUnit2'];
	echo $shelf_lifeBased_On2= $_POST['shelf_lifeBased_On2'];
	echo $caution2= $_POST['caution2'];
	echo $direction2= $_POST['direction2'];
	echo $product_on_recall2= $_POST['product_on_recall2'];
	echo $batch_no2= $_POST['batch_no2'];
	echo $variant2= $_POST['variant2'];
	echo $gender2= $_POST['gender2'];

	echo $gtin= substr($_POST['gtin2'],0,(STRLEN($_POST['gtin2'])-2))."-R";
	echo $gtin_prefix2= $_POST['gtin_prefix2'];
	echo $case_packid2= $_POST['case_packid2'];
	echo $Case_pack2= $_POST['Case_pack2'];	
	echo $pack_type2= $_POST['pack_type2'];
	echo $quantity2= $_POST['quantity2'];
	echo $dimension_measurementunit2= $_POST['dimension_measurementunit2'];
	echo $pc_depth2= $_POST['pc_depth2'];
	echo $pc_height2= $_POST['pc_height2'];
	echo $pc_width2= $_POST['pc_width2'];

	

	//$efg = "INSERT INTO 'hs_code_gst' ('hs_code','igst','cgst','sgst') VALUES ('$hs_code2','$igst2','$cgst2','$sgst2') ";


$shu = "INSERT INTO `product_master`(`Brand_Name`, `Product_Name`, `Product_Description`, `Product_GTIN`, `SKU_Number`, `Primary_GTIN`, `Category`, `Sub_Category`, `Marketing_Information`, `Product_WebpageUrl`, `Date_of_Activation`, `Date_of_Deactivation`, `Date_Of_Creation`, `Date_of_Modification`, `Notification_Type`, `Company_Name`, `weight_measurement_unit`, `net_weight`, `gross_weight`, `net_content`, `MRP`, `MRP_Activation_date`, `Currency`, `hs_code`, `Margin`, `available_states`, `dimension_measurement_unit`, `height`, `width`, `depth`, `Edit_Status`, `Editor`, `Reviewer`)
	 VALUES 
	 ('$Brand_Name2','$Product_Name2','$Product_Description2','$Product_GTIN2','$SKU_Number2','$Primary_GTIN2','$Category2','$Sub_Category2','$Marketing_Information2','$Product_WebpageUrl2','$Date_of_Activation2','$Date_of_Deactivation2','$Date_Of_Creation2','$Date_of_Modification2','$Notification_Type2','$Company_Name2','$weight_measurement_unit2','$net_weight2','$gross_weight2','$net_content2','$MRP2','$MRP_Activation_date2','$Currency2','$hs_code2','$Margin2','$available_states2','$dimension_measurement_unit2','$height2','$width2','$depth2','$Edit_Status2','$Editor2','$Reviewer2')";

$som =  "INSERT INTO `food_additional_details`(`gtin`, `nutritional_information`, `ingredients`, `allergen_information`, `fssai_lic`, `isi_no`, `food_type`, `storage_condition`, `storage_instruction`, `shelf_life_Value`, `shelf_lifeUnit`, `shelf_lifeBased_On`, `caution`, `direction`, `product_on_recall`, `batch_no`, `variant`, `gender`) VALUES 
	('$gtin2','$nutritional_information2','$ingredients2','$allergen_information2','$fssai_lic2','$isi_no2','$food_type2','$storage_condition2','$storage_instruction2','$shelf_life_Value2','$shelf_lifeUnit2','$shelf_lifeBased_On2','$caution2','$direction2','$product_on_recall2','$batch_no2','$variant2','$gender2')"; 
	$abc = "INSERT INTO `product_case_configuration` (`gtin`,`gtin_prefix`,`case_packid`,`Case_pack`,`pack_type`,`quantity`,`dimension_measurementunit`,`pc_depth`,`pc_height`,`pc_width`) VALUES ('$gtin2','$gtin_prefix2','$case_packid2','$Case_pack2','$pack_type2','$quantity2','$dimension_measurementunit2','$pc_depth2','$pc_height2','$pc_width2')";


//if( mysqli_query($conn,$efg)){
	//echo "<script>alert('Record inserted');</script>";
//}else {
  //  echo "Error: " . $efg . "<br>" . mysqli_error($conn);
//}


if( mysqli_query($conn,$shu)){
	echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $shu . "<br>" . mysqli_error($conn);
}
if( mysqli_query($conn,$som)){
	echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $som . "<br>" . mysqli_error($conn);
}
if( mysqli_query($conn,$abc)){
	echo "<script>alert('Record inserted');</script>";
}else {
    echo "Error: " . $abc . "<br>" . mysqli_error($conn);
}
 header('location:reviewerhome.php');
mysqli_close($conn);
}
?>