<!DOCTYPE >
<html >
<head>

<title>10</title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


</head>
<body style="background-image:url(image/bg5.jpg); min-height:430px;>
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo"> Nmaskar brother </span></div>
<div class="col-md-2 col-md-offset-4">
<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:orange">Log In</span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
		</fieldset>
</form>
      </div>
    </div>
  </div>
</div>

</div>
</div>

<div class="bg5">
<div class="row">

<div class="col-md-7"></div>
<div class="col-md-4 panel">
  <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<div class="form-group">
  <label class="col-md-12 control-label" for="name"></label>  
  <div class="col-md-12">
  <input id="name" name="name" placeholder="Enter your username" class="form-control input-md" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="gender"></label>
  <div class="col-md-12">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>



<div class="form-group">
  <label class="col-md-12 control-label title1" for="email"></label>
  <div class="col-md-12">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>







<div class="form-group">
  <label class="col-md-12 control-label" for="password"></label>
  <div class="col-md-12">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-12control-label" for="cpassword"></label>
  <div class="col-md-12">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>

<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>

<div class="form-group">
  <label class="col-md-12 control-label" for=""></label>
  <div class="col-md-12"> 
    <input  type="submit" class="sub" value="sign up" class="btn btn-primary"/>
  </div>
</div>

</fieldset>
</form>
</div>
</div></div>
</div>

<div class="row footer">


<div class="col-md-3 box">
<a href="#" data-toggle="modal" data-target="#developers">Developers</a>
</div>
<div class="col-md-3 box">

<div class="modal fade title1" id="developers">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" style="font-family:'typo' "><span style="color:orange">Developers</span></h4>
      </div>

      <div class="modal-body">
        <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="pp1.jpg" width=170 height=150 class="img-rounded">
		</div>
		 <div class="col-md-5">
		
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">SHREYAS K</h4>
		<h4 style="font-family:'typo' ">nu24mca142@nmamit.in</h4>
		<h4 style="font-family:'typo' ">MCA 'C'</h4>
  </div>
</div>
		</p>
      </div>

      <div class="modal-body">
      <p>
      <div class="row">
		<div class="col-md-4">
		 <img src="pp2.jpg" width=150 height=150 class="img-rounded">
		 </div>
		 <div class="col-md-5">
		
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">SHUBHALAXMI</h4>
		<h4 style="font-family:'typo' ">nu24mca146@nmamit.in</h4>
		<h4 style="font-family:'typo' ">MCA 'C'</h4></div></div>
		</p>
      </div>

      <div class="modal-body">
      <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="pp3.jpg" width=150 height=150 class="img-rounded">
		 </div>
		 <div class="col-md-5">
		
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">SRIJAN</h4>
		<h4 style="font-family:'typo' ">nu24mca151@nmamit.in</h4>
		<h4 style="font-family:'typo' ">MCA 'C'</h4>
  </div></div>
		</p>
      </div>

      <div class="modal-body">
      <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="pp4.jpg" width=150 height=150 class="img-rounded">
		 </div>
		 <div class="col-md-5">
		
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">VARUN</h4>
		<h4 style="font-family:'typo' ">nu24mca163@nmamit.in</h4>
		<h4 style="font-family:'typo' ">MCA 'C'</h4>
  </div></div>
		</p>
      </div>

      <div class="modal-body">
      <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="pp5.jpg" width=150 height=150 class="img-rounded">
		 </div>
		 <div class="col-md-5">
		
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">VARADARAJ D GANIGA</h4>
		<h4 style="font-family:'typo' ">nu24mca160@nmamit.in</h4>
		<h4 style="font-family:'typo' ">MCA 'C'</h4>
  </div></div>
		</p>
      </div>
    
    </div>
  </div>
</div>

	 

    </div>
  </div>
</div>


</body>
</html>
