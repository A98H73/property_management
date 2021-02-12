<?php

$con = mysqli_connect('localhost','root');
if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}


//  Selecting the database

mysqli_select_db($con, 'propertymanagement');


$propertytitle=$_POST['propertytitle'];
$propertydescription=$_POST['propertydescription'];
$selecttype=$_POST['selecttype'];
$status=$_POST['status'];
$location=$_POST['location'];
$bedrooms=$_POST['bedrooms'];
$bathrooms=$_POST['bathrooms'];
$floors=$_POST['floors'];
$area=$_POST['area'];
$size=$_POST['size'];
$salerentprice=$_POST['salerentprice'];
if(isset($_POST['balcony']))
    $balcony=$_POST['balcony'];
else    
    $balcony=0;   
if(isset($_POST['firealarm']))     
    $firealarm=$_POST['firealarm'];
else    
    $firealarm=0;
if(isset($_POST['storage']))        
    $storage=$_POST['storage'];
else
    $storage=0;
if(isset($_POST['pool']))    
    $pool=$_POST['pool'];
else
    $pool=0;
if(isset($_POST['laundry']))    
    $laundry=$_POST['laundry'];
else
    $laundry=0;
if(isset($_POST['gym']))    
    $gym=$_POST['gym'];
else
    $gym=0;
if(isset($_POST['elevator']))    
    $elevator=$_POST['elevator'];
else
    $elevator=0;
if(isset($_POST['eexit']))    
    $eexit=$_POST['eexit'];
else    
    $eexit=0;    
$galleryimage1=$_FILES['galleryimage1']['name'];
$galleryimage2=$_FILES['galleryimage2']['name'];
$galleryimage3=$_FILES['galleryimage3']['name'];
$galleryimage4=$_FILES['galleryimage4']['name'];
$galleryimage5=$_FILES['galleryimage5']['name'];
$galleryimage6=$_FILES['galleryimage6']['name'];
$address=$_POST['address'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$zipcode=$_POST['zipcode'];
$neighborhood=$_POST['neighborhood'];


$query = "insert into property_info (propertytitle,propertydescription,	selecttype,status,location,bedrooms,
            bathrooms,floors,area,size,salerentprice,balcony,firealarm,storage,pool,laundry,gym,elevator,eexit,
            galleryimage1,galleryimage2,galleryimage3,galleryimage4,galleryimage5,galleryimage6,address,country,
            state,city,zipcode,neighborhood )
         values ('$propertytitle','$propertydescription','$selecttype','$status','$location','$bedrooms','$bathrooms',
         '$floors','$area','$size','$salerentprice','$balcony','$firealarm','$storage','$pool','$laundry',
         '$gym','$elevator','$eexit','$galleryimage1','$galleryimage2','$galleryimage3','$galleryimage4',
         '$galleryimage5','$galleryimage6','$address','$country','$state','$city','$zipcode','$neighborhood');";

if(isset($_POST['submit'])){
    // the path to store the uploaded image

    $target1="images/p_images/".basename($_FILES['galleryimage1']['name']);
    $target2="images/p_images/".basename($_FILES['galleryimage2']['name']);
    $target3="images/p_images/".basename($_FILES['galleryimage3']['name']);
    $target4="images/p_images/".basename($_FILES['galleryimage4']['name']);
    $target5="images/p_images/".basename($_FILES['galleryimage5']['name']);
    $target6="images/p_images/".basename($_FILES['galleryimage6']['name']);

    // Now lets move the uploaded image in the images/p_images folder

    if(move_uploaded_file($_FILES['galleryimage1']['tmp_name'],$target1) && move_uploaded_file($_FILES['galleryimage2']['tmp_name'],$target2) &&
    move_uploaded_file($_FILES['galleryimage3']['tmp_name'],$target3) && move_uploaded_file($_FILES['galleryimage4']['tmp_name'],$target4) &&
    move_uploaded_file($_FILES['galleryimage5']['tmp_name'],$target5) && move_uploaded_file($_FILES['galleryimage6']['tmp_name'],$target6))
        echo "\nImage imported successfully\n";
    else    
        echo "there is problem ";    
}        

echo "$query";
mysqli_query($con, $query);
header('location:index.php');

?>