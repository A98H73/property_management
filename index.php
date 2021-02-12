

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


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image4.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Gumla</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/image5.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Ranchi</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

  <section class="my-5">
    <div class="py-5">
    <hr>
      <h2 class="text-center">About Us</h2>
      <hr>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="images/ab1.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2> Proprty Management System</h2>
      <p class="py-1"><b>O</b>ur Website has been serving the marketing and technology needs of the real estate industry since very long time. We are a team of technology professionals with diverse backgrounds in all aspects of the industry providing a holistic approach to our clients' web marketing strategies.

      We continually monitor trends and economic conditions affecting the real estate industry, listen to the priorities our broker clients and users, and combine what we learn with our knowledge of web usability and architecture to present you best property in your budget.

       </p>
      <a href="about.php" class="btn btn-success"> Know More </a>
      </div>
    </div>
    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <hr>
      <h2 class="text-center">Contact Us</h2>
      <hr>
    </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>E-mail Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Mobile No.</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comments">
        </textarea>
      </div>
      <button type="submit" class="btn btn-success mb-4">Submit</button>
    </form>
  </div>
  </div>
  </section>
  
  <?php include'footer.php';?>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>