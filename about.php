<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
 <style>
 
.container{
	width:100%;
	height:auto;
	display: flex;
	align-items: flex-start;
	flex-wrap: wrap;
}
.about{
	width:100%;
    height: 350px;
   
	background: url(images/zzz.jpg); 
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-wrap: wrap;
}

.text{
	font-size: 30px;
	color:#fff;
	font-family: sans-serif;`
	text-shadow: 0px 15px 12px #000;
	text-align: center;
}
.line{
	width:170px;
	height: 8px;
	background-color: #17ff8d;
	display: block;
	position: relative;
	border-radius: 5px;
	left:0%;
	box-shadow: 0px 15px 12px 0px #000;
}
.content{
	width:100%;
	height:auto;
	background-color: #17ff8d;
	font-size: 23px;
	font-family: audiowide;
	color:#333;
	line-height: 30px;
	text-align: center;
}

</style>
</head>
<body>

<?php include'header.php';?>


	<div class="container mt-2">
		<div class="about">
			<div class="text">
				<h1>About Us</h1>
				<div class="line"></div>
			</div>
		</div>
    
		<div class="content mt-2 mb-5">
			<p><b>O</b>ur Website has been serving the marketing and technology needs of the real estate industry since very long time. We are a team of technology professionals with diverse backgrounds in all aspects of the industry providing a holistic approach to our clients' web marketing strategies.

                We continually monitor trends and economic conditions affecting the real estate industry, listen to the priorities our broker clients and users, and combine what we learn with our knowledge of web usability and architecture to present you best property in your budget.
                
                We consult with you to determine what is the most important factor of the property for your home or business and design a solution based on your individual needs and budget.
                
                Our primary concern is to suggest you the best property in the market according to your needs and we also ensure that our website has all the right features and tools to encourage a steady flow of users and leads. </p>
		</div>
		</div>
		
		<?php include'footer.php';?>
</body>
</html>

</body>
</html>