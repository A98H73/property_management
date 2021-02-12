
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CPoppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets
    ============================================= -->
    <link href="css/external.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
 
 
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Propert Mangaement System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="properties.php">Properties</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addproperty.php">Add Property</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
  
         
    </ul>
    <form class="form-inline my-2 my-lg-0">
      
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Add Property</button>
     
    </form>
  </div>
</nav>



  <!-- Page Title #1
============================================ -->
<section id="page-title" class="page-title bg-overlay bg-overlay-dark2">
            
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                        <div class="title title-1 text-center">
                            <div class="title--content">
                                <div class="title--heading">
                                    <h1>Add Property</h1>
                                </div>
                                <ol class="breadcrumb">
                                    <li><a href="index.php">Home</a></li>
                                   
                                </ol>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- .title end -->
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
           
        </section>
        <!-- #page-title end -->

        <!-- #Add Property
============================================= -->

        <section id="add-property" class="add-property">
            
            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <form class="mb-0" action="property_info.php" method="post"  enctype="multipart/form-data" >
                            <p style="font-size:16px; color:red" align="center"> 
                             </p>
                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <h4 class="form--title">Property Description</h4>
                                        <hr>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="property-title">Property Title*</label>
                                            <input type="text" class="form-control" name="propertytitle" id="propertytitle" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="property-description">Property Description*</label>
                                            <textarea class="form-control" name="propertydescription" id="propertydescription" rows="2"></textarea>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="select-type">Type</label>
                                            <div class="select--box">
                                                
                                                <select id="selecttype" name="selecttype" required="true" class="text-black">
                                            <option value="">Select Property Type</option>
                                            <option value="">Single Family</option>
                                            <option value="">Multi Family</option>
                                            <option value="">Ranch style house</option>
                                            <option value="">Bungalow</option>
                                            <option value="">Mansions and McMantions</option>
                                            <option value="">Select Property Type</option>
                                            <option value="">Appartments</option>
                                            <option value="">Condominiums and Co-Ops</option>
                                            <option value="">TownHouse</option>
                                            <option value="">Manufactured House</option>
                                            <option value="">Tiny House</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="select-status">Status</label>
                                            <div class="select--box">
                                                
                                                <select id="status" name="status">
                                            <option>Sale</option>
                                            <option>Rent</option>
                                        </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" name="location" id="location">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Bedrooms">Bedrooms</label>
                                            <input type="text" class="form-control" name="bedrooms" id="bedrooms">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Bathrooms">Bathrooms</label>
                                            <input type="text" class="form-control" name="bathrooms" id="bathrooms">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Floors">Floors</label>
                                            <input type="text" class="form-control" name="floors" id="floors">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                               
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Area">Area</label>
                                            <input type="text" class="form-control" name="area" id="area" placeholder="sq ft">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Size">Size</label>
                                            <input type="text" class="form-control" name="size" id="size" placeholder="sq ft">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Sale-Rent-Price">Sale or Rent Price*</label>
                                            <input type="text" class="form-control" name="salerentprice" id="salerentprice" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                   
                                    <!-- .col-md-4 end -->
                                    
                                    
                                </div>
                                <!-- .row end -->
                            </div>
                            <hr>
                            <!-- .form-box end -->
                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br><br>
                                        <h4 class="form--title">Property Features</h4>
                                        <hr>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Balcony</span>
                                        <input type="checkbox" name="balcony" id="balcony" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Fire Alarm</span>
                                        <input type="checkbox" name="firealarm" id="firealarm" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Parking</span>
                                        <input type="checkbox" name="storage" id="storage" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                   
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Pool</span>
                                        <input type="checkbox" name="pool" id="pool" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Laundry</span>
                                        <input type="checkbox" name="laundry" id="laundry" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Gym</span>
                                        <input type="checkbox" name="gym" id="gym" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Elevator</span>
                                        <input type="checkbox" name="elevator" id="elevator" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                    
                                    <!-- .col-md-3 end -->
                                    <div class="col-xs-12 col-sm-6 col-md-3">
                                        <div class="input-checkbox">
                                            <label class="label-checkbox">
                                        <span>Emergency Exit</span>
                                        <input type="checkbox" name="eexit" id="eexit" value="1">
                                        <span class="check-indicator"></span>
                                    </label>
                                        </div>
                                    </div>
                                    <!-- .col-md-3 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <hr>
                            <!-- .form-box end -->

                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br><br>
                                        <h4 class="form--title">Property Gallery</h4><br>
                                        <h5><label for="address">Featured Image</label></h5>
                                        <hr>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 1</label>
                                            <input type="file" class="form-control" name="galleryimage1" required>
                                        </div>
                                    </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 2</label>
                                            <input type="file" class="form-control" name="galleryimage2" required>
                                        </div>
                                    </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 3</label>
                                            <input type="file" class="form-control" name="galleryimage3" required>
                                        </div>
                                    </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 4</label>
                                            <input type="file" class="form-control" name="galleryimage4" required>
                                        </div>
                                    </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 5</label>
                                            <input type="file" class="form-control" name="galleryimage5" required>
                                        </div>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Gallery Image 6</label>
                                            <input type="file" class="form-control" name="galleryimage6" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-12 end -->

                                </div>

                                <!-- .row end -->
                            </div>
                            <hr>
                            <!-- .form-box end -->

                            <div class="form-box">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <br><br>
                                        <h4 class="form--title">Property Location</h4>
                                        <hr>
                                    </div>
                                    <!-- .col-md-12 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="address">Address*</label>
                                            <input type="text" class="form-control" name="address" id="address" placeholder="Enter your property address" required>
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="select-country">Country</label>
                                            <div class="select--box">
                                                
                                     <select type="text" name="country" id="country" required="true" onChange="getsate(this.value)" class="form-control">
                                             <option value="">Select Country</option>
                                             <option value="">India</option>
                                         </select>
                                            </div>
                                        </div>
                                    </div>


            <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                             <div class="select--box">
                                                
                                            <select type="text" class="form-control" name="state" id="state" onChange="getcity(this.value)" >
                                                <option value="">Select State</option>
                                                <option>Andhra Pradesh (AP)</option>
                                                <option>Arunachal Pradesh (AR)</option>
                                                <option>Assam (AS)</option>
                                                <option>Bihar (BR)</option>
                                                <option>Chhattisgarh (CG)</option>
                                                <option>Goa (GA)</option>
                                                <option>Gujarat (GJ)</option>
                                                <option>Haryana (HR)</option>
                                                <option>Himachal Pradesh (HP)</option>
                                                <option>Jammu and Kashmir (JK)</option>
                                                <option>Jharkhand (JH)</option>
                                                <option>Karnataka (KA)</option>
                                                <option>Kerala (KL)</option>
                                                <option>Madhya Pradesh (MP)</option>
                                                <option>Maharashtra (MH)</option>
                                                <option>Manipur (MN)</option>
                                                <option>Meghalaya (ML)</option>
                                                <option>Mizoram (MZ)</option>
                                                <option>Nagaland (NL)</option>
                                                <option>Odisha(OR)</option>
                                                <option>Punjab (PB)</option>
                                                <option>Rajasthan (RJ)</option>
                                                <option>Sikkim (SK)</option>
                                                <option>Tamil Nadu (TN)</option>
                                                <option>Telangana (TS)</option>
                                                <option>Tripura (TR)</option>
                                                <option>Uttar Pradesh (UP)</option>
                                                <option>Uttarakhand (UK)</option>
                                                <option>West Bengal (WB)</option>
                                                <option>Andaman and Nicobar Islands(AN)</option>
                                                <option>Chandigarh (CH)</option>
                                                <option>Dadra and Nagar Haveli (DN)</option>
                                                <option>Daman and Diu (DD)</option>
                                                <option>National Capital Territory of Delhi (DL)</option>
                                                <option>Lakshadweep (LD)</option>
                                                <option>Pondicherry (PY)</option>

                                            </select>
                                        </div>
                                    </div>
                                    </div>


                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" name="city" id="city">
                                        
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                        
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="Zip/Postal-code">Zip/Postal Code</label>
                                            <input type="text" class="form-control" name="zipcode" id="zipcode">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                    <div class="col-xs-12 col-sm-4 col-md-4">
                                        <div class="form-group">
                                            <label for="neighborhood">Neighborhood</label>
                                            <input type="text" class="form-control" name="neighborhood" id="neighborhood">
                                        </div>
                                    </div>
                                    <!-- .col-md-4 end -->
                                 
                                    <!-- .col-md-12 end -->
                                </div>
                                <!-- .row end -->
                            </div>
                            <hr>
                            <!-- .form-box end -->
                            <input type="submit" value="Submit" name="submit" class="btn btn-success mb-5">
                        </form>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
                <!-- .row end -->
            </div>
        </section>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>

        </header>


<?php include'footer.php';?>
</body>
</html>





 