<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 
 
</head>
<body>
<?php include'header.php';?>
<?php

    $con = mysqli_connect('localhost','root');
    if($con){
        //echo "Connection successful";
    }
    else{
        echo "No connection";
    }

    mysqli_select_db($con, 'propertymanagement');

    $sql="select * from property_info";
    $result=mysqli_query($con,$sql);
    
    while($row = mysqli_fetch_array($result)) {
        echo "<div id='img_div'>";
     //   echo "<img src='images/".$row['images']."'>";
        echo "<p>".$row['propertytitle']."<br>
                  ".$row['propertydescription']."</p>";
        echo "</div>";
    }




?>

<?php include'footer.php';?>
</body>
</html>