<!DOCTYPE html>
<html>
<head>
	<title>Company</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Company</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #ffb84d"> 


<!--navigation-->
		<nav class="navbar navbar-expand-lg fixed-top ">
   <a class="navbar-brand" href="#"><img src="img/wa2.jpg"  width="90"  height="50" style="padding-left: 30px" alt="logo" ></a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
<div class="collapse navbar-collapse " id="navbarSupportedContent">
     <ul class="navbar-nav mr-4">
       
      <li class="nav-item">
         <a class="nav-link" href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="about.php">About</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="contact.php">Contact</a>
       </li>
       <li class="nav-item">
         <a class="nav-link " href="#">Login</a>
       </li>
     </ul>     
   </div>
</nav>

  <div class="container-fluid" style="padding-top: 9%" >
        <div class="row">
            <div class="col-sm-2 col-xs-2 col-md-2 col-lg-2"></div>
            <div class="col-sm-9 col-xs-9 col-md-9 col-lg-9"><h1 Align="left">Contact</h1></div>
        </div>
    </div>




<div class="container">
    <form class="form-horizontal" action="contactadd.php" method="post">
        
        <div class="form-group">
            <label class="control-label col-sm-3">Name:</label>
            <div class="col-sm-5">
                <input type="name" class="form-control" id="email" placeholder="Enter Name" name="name" required>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
           
            <div class="col-sm-9">
                <label class="radio-inline">
                    <input type="radio" name="gender" value="1">Male
                </label>
                <label class="radio-inline">
                    <input type="radio" name="gender" value="2">Female
                </label>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="email">Email:</label>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3" for="phone">PhoneNo:</label>
            <div class="col-sm-5">          
                <input type="tel" class="form-control" id="ph" placeholder="Number" name="ph">
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-3">Country:</label>
            <div class="col-sm-5 ">          
                <select name="cont">
                   <option value="1">Myanmar</option>
                    <option value="2">Japan</option>
                    <option value="3" >Thailand</option>
                    <option value="4" >China</option>
                    <option value="5">USA</option>
                    <option value="6">UK</option>
                </select>
            </div>
            <div class="form-group">    
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">
                        <label><input type="checkbox" name="service" value="1"> Service</label>
                        <label><input type="checkbox" name="product" value="2"> Product</label>
                        <label><input type="checkbox" name="payment" value="3"> Payment term</label>
                        <label><input type="checkbox" name="other" value="4"> Other</label>
                    </div>
                </div>
            </div>
            <div class="form-group">        
                <div class="col-sm-offset-5 col-sm-7">
                    <button type="submit" class="btn btn-danger" name="submit" value="submit">Submit</button>
                </div>
            </div>
    </form>
</div>






<div class='b'>
  <div class="col-sm-4">
    <img src="img/wa.jpg"  width="80%" alt="Image" style="margin-left:50px"><hr>
    <h3>Paris</h3>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident,</p><hr>
 		 <button type="submit" class="btn btn-lg btn-danger" style="margin-left: 30%">Ask Me</button>
 		   </div>
    <div class="col-sm-4">
    <img src="img/wa.jpg"  width="80%" alt="Image" style="margin-left:50px"><hr>
    <h3>Paris</h3>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident,</p><hr>
 		 <button type="submit" class="btn btn-lg btn-danger" style="margin-left: 30%">Ask Me</button>
  </div>
    <div class="col-sm-4">
    <img src="img/wa.jpg"  width="80%" alt="Image" style="margin-left:50px"><hr>
    <h3>Paris</h3>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident,</p><hr>
 		 <button type="submit" class="btn btn-lg btn-danger" style="margin-left: 30%">Ask Me</button>
  </div>
 
   
    
</div>






<script type="text/javascript" src="js/main.js"></script>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>