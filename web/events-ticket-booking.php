<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<?php
    
    session_start();
	include_once 'dbh.php';

	// Retrieve the URL variables (using PHP).
		$eid = $_GET['id'];
		//echo "Event: ".$event;

?>


<!DOCTYPE html>
<html>
<head>
<title>TicketGo | Event</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="TicketGo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link rel="stylesheet" href="css/font-awesome.min.css" />
<link rel="stylesheet" href="css/menu.css" />
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
		    <script type="text/javascript">
			    $(document).ready(function () {
			        $('#horizontalTab').easyResponsiveTabs({
			            type: 'default', //Types: default, vertical, accordion           
			            width: 'auto', //auto or any width like 600px
			            fit: true   // 100% fit in a container
			        });
			    });
</script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
	<!-- header-section-starts -->
		
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<!--<p><a href="support.php">24/7 Customer Care</a> | <a class="play-icon popup-with-zoom-anim" href="#small-dialog" href="#"> Resend Booking Confirmation</a> </p>-->
				<div id="small-dialog" class="mfp-hide">
						<div class="select-city">
							<h3>Resend Confirmation</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
							<div class="confirmation">
							<form>
								<input type="text" class="email" placeholder="Email" required="required" pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" title="Enter a valid email"/>
								<input type="text" class="email" placeholder="Mobile Number" maxlength="10" pattern="[1-9]{1}\d{9}" title="Enter a valid mobile number" />
								<input type="submit" value="SEND">
							</form>
						</div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
				<div class="header-top-right">
				<div class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- Button trigger modal  -->
	<!--<a class="play-icon popup-with-zoom-anim" href="#small-dialog1">Select a Region</a>-->
	<!---pop-up-box---->  
					<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					<div id="small-dialog1" class="mfp-hide">
						<div class="select-city">
							<!--<h3>Select Your City</h3>-->
                            
                        
							<div class="clearfix"></div>
						</div>
					</div>	

                     
				<!-- Large modal -->
<h3>Hi 
<?php
include 'dbh.php';
$sql="SELECT * FROM user1 WHERE id='".$_SESSION['id']."'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['name'];
echo ',';
?>
 </h3> 
                  
 <form action="logout.php" align="right">               
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Logout</button>
</form>
<!--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                <h4 class="modal-title" id="myModalLabel">
                    Don't Wait, Login now!</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <!-- Nav tabs -->
                        <!--<ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <!--<div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form action="login.php" method="POST" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form action="signup.php" method="POST" role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" name="name" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="pwd" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" value="Submit" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="reset" value="Reset" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    
                            <!--make Facebook Google active-->
                        <!--<div id="OR" class="hidden-xs">
                            OR</div>
                    
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3 class="other-nw">
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google +</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
                <!--</div>
            </div>
        </div>
    </div>
</div>-->
<script>
$('#myModal').modal('show');
</script>
</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="container">
		  <div class="main-content">
			<div class="header">
				<div class="logo">
					<a href="index_1.php"><h1>TicketGo</h1></a>
				</div>
				<!-- <div class="search">
					<div class="search2">
					  <form>
						<i class="fa fa-search"></i>
						 <input type="text" value="Search for a movie, play, event, sport or more" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search for a movie, play, event, sport or more';}"/>
					  </form>
					</div>
				</div> -->
				<div class="clearfix"></div>
			</div>
	<div class="bootstrap_container">
            <nav class="navbar navbar-default w3_megamenu" role="navigation">
                <!--<div class="navbar-header">
          			<button type="button" data-toggle="collapse" data-target="#defaultmenu" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="index_1.php" class="navbar-brand"><i class="fa fa-home"></i></a>
				</div>--><!-- end navbar-header -->

        
            <div id="defaultmenu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index_1.php">Home</a></li>	
                    <!-- Mega Menu -->
					<li class="dropdown w3_megamenu-fw"><a href="movies.php" class="dropdown-toggle">Movies<b></b></a>
                        <!--<ul class="dropdown-menu fullwidth">
                            <li class="w3_megamenu-content">
                                <div class="row">
								<h5 class="movies-page">for movies page - <a href="movies.php">Click here</a> </h5>
                                    <div class="col-sm-4">
                                  		<h3 class="title">Now Showing</h3>
										<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM movie1 WHERE mid='1'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="movie-single.php?id=1"><?=$row["name"]?></a></li>
					</ul><br>
					<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM movie1 WHERE mid='2'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="movie-single.php?id=2"><?=$row["name"]?></a></li>
					</ul><br>
					<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM movie1 WHERE mid='3'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="movie-single.php?id=3"><?=$row["name"]?></a></li>
					</ul><br>
					<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM movie1 WHERE mid='4'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="movie-single.php?id=4"><?=$row["name"]?></a></li>
					</ul><br>
					<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM movie1 WHERE mid='5'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="movie-single.php?id=5"><?=$row["name"]?></a></li>
					</ul>
                                    </div><!-- end col-4 -->
                                    <!--<div class="col-sm-4 movie-dd">
                                  		<h3 class="title">Next Change</h3>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
                                    </div><!-- end col-4 -->
                                    <!--<div class="col-sm-4 movie-dd">
                                  		<h3 class="title">Comming Soon</h3>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>
										<p><a href="movie-single.php">ABCD 2 (3D) (4DX)</a><span>... (Tomorrow, 19 Jun)</span></p>                                    		
                                    </div><!-- end col-4 -->
									<!--<div class="clearfix"></div>-->
									<!--<div class="menu-featured-movies">
										<h3 class="title">Featured Trailers</h3>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf1.jpg" alt="" /></a>
										</div>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf2.jpg" alt="" /></a>
										</div>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf3.jpg" alt="" /></a>
										</div>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf3.jpg" alt="" /></a>
										</div>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf3.jpg" alt="" /></a>
										</div>
										<div class="col-md-2 menu-featured-movies-img">
											<a href="movie-single.php"><img src="images/mf3.jpg" alt="" /></a>
										</div>
										<div class="clearfix"></div>
									</div>-->
                                <!--</div><!-- end row 
                                <hr>
                    
							</li>
                        <!--</ul>-->
                    </li>
					<li class="dropdown w3_megamenu-fw"><a href="events.php" class="dropdown-toggle">Events<b></b></a>
                        <!--<ul class="dropdown-menu half">
                            <li class="w3_megamenu-content withdesc">
                                <div class="row">
					<h5 class="movies-page">for events page - <a href="events.php">Click here</a> </h5>
								<h3 class="title">NOW PLAYING</h3>
                                    <ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM event1 WHERE eid='1'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="events-ticket-booking.php?id=1"><?=$row["name"]?></a></li>
					</ul>
                                    <ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM event1 WHERE eid='2'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="events-ticket-booking.php?id=2"><?=$row["name"]?></a></li>
					</ul>
                                    <ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM event1 WHERE eid='3'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="events-ticket-booking.php?id=3"><?=$row["name"]?></a></li>
					</ul>
                                    <ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM event1 WHERE eid='4'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="events-ticket-booking.php?id=4"><?=$row["name"]?></a></li>
					</ul>
					<ul class="mov_list">
						<?php
						include 'dbh.php';
$sql="SELECT name FROM event1 WHERE eid='5'";
$result = mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
?>
						<li><a href="events-ticket-booking.php?id=5"><?=$row["name"]?></a></li>
					</ul><br>
                                </div>
                            </li>
                        </ul>-->
					</li>
					<!--<li class="dropdown w3_megamenu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Plays<b class="caret"></b></a>
                        <ul class="dropdown-menu half3">
                            <li class="w3_megamenu-content withoutdesc">
                                <div class="row">
								<h5 class="movies-page">for plays page - <a href="plays.php">Click here</a> </h5>
								<h3 class="title">Featured Events</h3>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="plays.php"><img src="images/f2.jpg" alt="" /></a>
								</div>
								<div class="e-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="plays.php"><img src="images/f3.jpg" alt=""></a>
								</div>
								<div class="e-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="plays.php"><img src="images/f4.jpg" alt="" /></a>
								</div>
								<div class="e-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="plays.php"><img src="images/f1.jpg" alt="" /></a>
								</div>
								<div class="e-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
					</li>
					<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Sports<b class="caret"></b></a>
							 <ul class="dropdown-menu half3">
                            <li class="w3_megamenu-content withoutdesc">
                                <div class="row">
								<h5 class="movies-page">for sports page - <a href="sports.php">Click here</a> </h5>
								<h3 class="title">Featured Sports</h3>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.php"><img src="images/me1.jpg" alt="" /></a>
									<a class="plays-go" href="#">Volleyball is a team sport</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.php"><img src="images/me2.jpg" alt="" /></a>
									<a class="plays-go" href="#">Chase, we're going to win races.</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.php"><img src="images/me3.jpg" alt="" /></a>
									<a class="plays-go" href="#">2015 The action or activity of skating on ice skates</a>
								</div>
							</div>
                                    </div>
                                    <div class="col-sm-3">
                                    	<div class="e-movie">
								<div class="e-movie-img">
									<a href="sports.php"><img src="images/me4.jpg" alt="" /></a>
									<a class="plays-go" href="#">SVM Bowling & Gaming</a>
								</div>
							</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                       <!-- end dropdown-menu -->
					<!--</li>
					<!--<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages<b class="caret"></b></a>
							 <ul class="dropdown-menu" role="menu">

	<li><a href="about.php">About</a></li>
	<li><a href="blog.php">Blog</a></li>
	<li><a href="404.php">404</a></li>
	<li><a href="contact.php">Contact us</a></li>
	<li><a href="faq.php">FAQs</a></li>
	<li><a href="about.php">Current Openings</a></li>
                            <li class="dropdown-submenu">
                                <a href="#">News</a>
								<ul class="dropdown-menu">
																	<li><a href="press.php">Press Release</a></li>
	<li><a href="public-relations.php">Public Relations</a></li>
	<li><a href="press.php">Press Coverage</a></li>
								</ul><!-- end dropdown-menu -->
                            </li><!-- end dropdown-submenu -->
                        </ul>
                       <!-- end dropdown-menu -->
					</li><!-- end standard drop down -->
					<!-- end dropdown w3_megamenu-fw -->
                </ul><!-- end nav navbar-nav -->
                
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown"><a href="contact.php"  class="dropdown-toggle">Contact Us<b></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <!--<form id="contact1" action="#" name="contactform" method="post">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="name" id="name1" class="form-control" placeholder="Name"> 
                                        <input type="text" name="email" id="email1" class="form-control" placeholder="Email"> 
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <input type="text" name="phone" id="phone1" class="form-control" placeholder="Phone">
                                        <input type="text" name="subject" id="subject1" class="form-control" placeholder="Subject"> 
                                    </div>                 
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" name="comments" id="comments1" rows="6" placeholder="Your Message ..."></textarea>
                                    </div>   
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="pull-right">
                                            <input type="submit" value="SEND" id="submit1" class="btn btn-primary small">
                                        </div>  
                                    </div>
									<div class="clearfix"></div>  
                                </form>-->
                            </li>
                        </ul>
					</li>
				</ul><!-- end nav navbar-nav navbar-right -->
			</div><!-- end #navbar-collapse-1 -->
            
			</nav><!-- end navbar navbar-default w3_megamenu -->
		</div><!-- end container -->
    
<!-- AddThis Smart Layers END -->
								
								<?php 

									$sql = "SELECT * FROM Event1 WHERE eid = '$eid';";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}

								?>


<div class="event-single">
	<img src="images/<?php echo $row["name"] ?>.jpg" title="<?php echo $row["name"] ?>" />
</div>
	<div class="event-single--page-tabs">
			 <div class="sap_tabs">	
			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						  <ul class="resp-tabs-list">
						  	  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Tickets</span></li>
							  <!-- <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Venue Details</span></li>
							  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Terms and Conditions</span></li> -->
							  <div class="clearfix"></div>
						  </ul>				  	 
							<div class="resp-tabs-container">
							    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
									<div class="e-t-b-s">
										<div class="col-md-6 e-t-b-s-left">
											<h3><?=$row["name"]?></h3>
			<p><a class="m-green" href="#"><?=$row["genre"]?></a><a class="m-orange" href="#"><?=$row["lang"]?></a></p>
			<div class="clearfix"></div>
			<div class="article-time-strip">
				<div class="article-time-strip-left">
					<p>Duration <span><i class="fa fa-clock-o"></i><?=$row["duration"]?> minutes</span> <!--  &nbsp;&nbsp; Release Date <span><i class="fa fa-calendar"></i>Jun 26, 2015</span> --></p>
				</div>
				<div class="event-booking-selection">


					<!-- FRI, 3rd
					SAT, 4th
					SUN, 5th
					MON, 6th
					TUE, 7th -->



					<!-- <div class="event-details">
						<h4>It is a long established fact that a reader by the readable </h4>
						<p>The standard chunk of Lorem Ipsum used since the interested. Sections 1.10.32 and 1.10.33 from. The standard chunk of Lorem Ipsum. </p>
					</div> -->
					<div class="event-date-on">
						<div > <!-- class="d-t" -->
								<?php 

									$sql = "SELECT s.sid, s.aid, s.stime, a.theatrename FROM screening AS s, auditorium AS a WHERE s.eid = '$eid' AND s.sdate = '2017-11-03' AND a.aid = s.aid;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}
									else {
										$row["theatrename"] = "NO SHOW, check a different date";
										$row["stime"] = "";
									}

								?>
							<p>Friday 3rd November, <a style="color: blue;" href="../seatPlan/seatPlan1.php?eid=<?php echo $eid ?>&sid=<?php echo $row["sid"] ?>"><?=$row["stime"]?></a> at <?=$row["theatrename"]?></p>
								<?php 

									$sql = "SELECT s.sid, s.aid, s.stime, a.theatrename FROM screening AS s, auditorium AS a WHERE s.eid = '$eid' AND s.sdate = '2017-11-04' AND a.aid = s.aid;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}
									else {
										$row["theatrename"] = "NO SHOW, check a different date";
										$row["stime"] = "";
									}

								?>
							<p>Saturday 4rd November, <a style="color: blue;" href="../seatPlan/seatPlan1.php?eid=<?php echo $eid ?>&sid=<?php echo $row["sid"] ?>"><?=$row["stime"]?></a> at <?=$row["theatrename"]?></p>
								<?php 

									$sql = "SELECT s.sid, s.aid, s.stime, a.theatrename FROM screening AS s, auditorium AS a WHERE s.eid = '$eid' AND s.sdate = '2017-11-05' AND a.aid = s.aid;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}
									else {
										$row["theatrename"] = "NO SHOW, check a different date";
										$row["stime"] = "";
									}

								?>
							<p>Sunday 5rd November, <a style="color: blue;" href="../seatPlan/seatPlan1.php?eid=<?php echo $eid ?>&sid=<?php echo $row["sid"] ?>"><?=$row["stime"]?></a> at <?=$row["theatrename"]?></p>
								<?php 

									$sql = "SELECT s.sid, s.aid, s.stime, a.theatrename FROM screening AS s, auditorium AS a WHERE s.eid = '$eid' AND s.sdate = '2017-11-06' AND a.aid = s.aid;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}
									else {
										$row["theatrename"] = "NO SHOW, check a different date";
										$row["stime"] = "";
									}

								?>
							<p>Monday 6rd November, <a style="color: blue;" href="../seatPlan/seatPlan1.php?eid=<?php echo $eid ?>&sid=<?php echo $row["sid"] ?>"><?=$row["stime"]?></a> at <?=$row["theatrename"]?></p>
								<?php 

									$sql = "SELECT s.sid, s.aid, s.stime, a.theatrename FROM screening AS s, auditorium AS a WHERE s.eid = '$eid' AND s.sdate = '2017-11-07' AND a.aid = s.aid;";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}
									else {
										$row["theatrename"] = "NO SHOW, check a different date";
										$row["stime"] = "";
									}

								?>
							<p>Tueday 7rd November, <a style="color: blue;" href="../seatPlan/seatPlan1.php?eid=<?php echo $eid ?>&sid=<?php echo $row["sid"] ?>"><?=$row["stime"]?></a> at <?=$row["theatrename"]?></p>
						</div>
						<!-- <div class="d-t-event">
							<a href="event-payment.php">It is a long established<span>$150.5</span></a>
							<a href="event-payment.php">There are many variations<span>$120.5</span></a>
							<a href="event-payment.php">Lorem Ipsum is simply dummy<span>$50.5</span></a>
							<a href="event-payment.php">The standard chunk of Lorem<span>$250.5</span></a>
						</div> -->
						<div class="clearfix"></div>
								<?php 

									$sql = "SELECT * FROM Event1 WHERE eid = '$eid';";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}

								?>
					</div>
				</div>

										</div>
										</div>
										<div class="col-md-6 e-t-b-s-right" style="padding-top: 60px;">
											<!-- <ul class="share">
						<li>share:</li>
						<li>							
							<div id="fb-root"></div>
							<script>(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) return;
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));</script>
	   						
	   						<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div></li>
						<li><a href="https://twitter.com/w3layouts" class="twitter-share-button" data-dnt="true">Tweet</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></li>
					</ul> -->

											<p class="info"><strong>CAST</strong>: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row["cast"]?></p>
											<p class="info"><strong>DIRECTION</strong>: &nbsp;&nbsp;&nbsp;&nbsp;<?=$row["director"]?></p>
											<p class="info"><strong>DURATION</strong>:&nbsp;&nbsp;&nbsp; &nbsp; <?=$row["duration"]?> minutes</p>
											<p class="info" style="overflow: initial;"><strong>STORY</strong>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?=$row["story"]?></p>
										</div>
										<div class="clearfix"></div>
									</div>
									<!-- <div class="event-featured">
					<h4>Featured</h4>
					<ul>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f4.jpg" alt="" />
									</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f5.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f6.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f1.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f2.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f3.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
 -->
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
									<div class="venue-map">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423389.36041315965!2d78!3d33.99948425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38fe0149043f98e1%3A0x6608a515a47bb75e!2sLadakh+Range%2C+194201!5e0!3m2!1sen!2sin!4v1435749478472" frameborder="0" style="border:0" allowfullscreen></iframe>
									 </div>
									 <div class="event-featured">
					<h4>Featured</h4>
					<ul>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f4.jpg" alt="" />
									</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f5.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f6.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f1.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f2.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f3.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
									  <h3 class="event-tab-head">Terms & Conditions</h3>
									 <ul class="t-c">
										<li>Age limit to buy a ticket: 18 years and above.</li>
										<li>There are many variations of passages of Lorem Ipsum available, but the majority.</li>
										<li>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000.</li>
										<li>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</li>
										<li>There are many variations of passages of Lorem Ipsum available, but the majority</li>
									 </ul>
									 <div class="event-featured">
					<h4>Featured</h4>
					<ul>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f4.jpg" alt="" />
									</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
								
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f5.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f6.jpg" alt="" />
								</div>
									<div class="ef-movie-name">
									<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f1.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f2.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Multi-city</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<li>
							<div class="ef-movie">
								<div class="ef-movie-img">
									<img src="images/f3.jpg" alt="">
								</div>
									<div class="ef-movie-name">
										<a href="events.php">Lorem Ipsum since</a>
										<p>Mumbai</p>
									</div>
								<div class="ef-buy-tickets">
									<a href="event-payment.php">BUY TICKETS</a>
								</div>
							</div>
						</li>
						<div class="clearfix"></div>
					</ul>
				</div>
							     </div>	
							     <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
									
						    	</div>		        					 	        					 
			     		    </div>	
                        </div>

		</div>
		<!-- <div class="footer-top-strip">
		<p><span>Showing in cities : </span><a href="movies.php">Bengaluru</a>, <a href="movies.php">Hyderabad</a>, <a href="movies.php">Khammam</a>, <a href="movies.php">Kurnool</a>, <a href="movies.php">Nizamabad</a>, <a href="movies.php">Vijayawada</a>, <a href="#">Vizag</a>, <a href="movies.php">Vizianagaram</a>, <a href="movies.php">Warangal</a></p>
		<p><span>Cinemas Nearby : </span><a href="movie-single.php"> INOX: Jyoti Mall, Kurnool </a>|
			<p><span>Next Change <i>(Friday, 19 Jun) </i>: </span><a href="movie-single.php">Disney's ABCD 2 (3D) (U)</a>, <a href="movie-single.php"> 2 Premi Premache</a> , <a href="movie-single.php">Dekh Ke (Bhojpuri)</a> , <a href="movie-single.php">Disney's ABCD 2 (2D) (U)</a>, <a href="movie-single.php">Dekh Ke (Bhojpuri)</a></p>
			<p><span>Coming Soon :</span><a href="movie-single.php"> 2 Premi Premache</a>, <a href="movie-single.php">Acharam, Dekh Ke (Bhojpuri)</a>, <a href="movie-single.php">Entourage</a>, <a href="movie-single.php">Kuttram Kadithal</a></p>
		</div> -->
		</div>
		</div>
		<div class="footer">
            <div style="padding-left: 15px;">
                <div class="f-mov-list">
                    <div class="row">
                        <div class="col-md-1">
                            <h4>Latest</h4>
                        </div>
                        <div class="col-md-9">
                            <ul>
                                <li style="display: inline;"><a href="now-showing.html">Now Showing</a></li>
                                <li style="display: inline;"><a href="comming-soon.html">Coming Soon</a></li>
                                <!-- <li><a href="celebrities.html">Movie Celebrities</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- <div class="f-mov-list">
                    <h4>Movie Reviews</h4>
                    <ul>
                        <li><a href="404.html" target="target_blank">Entertainment News</a></li>
                        <li><a href="blog.html" target="target_blank">Rajeev Masand</a></li>
                        <li><a href="blog.html" target="target_blank">Film Reviews</a></li>
                        <li><a href="write-us.html" target="target_blank">Guest Blogging</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div> -->
                <!-- <div class="f-mov-list">
                    <h4>Movie Trailers</h4>
                    <ul>
                        <li><a href="trailers-now-showing.html">Now Showing</a></li>
                        <li><a href="trailers-comming-soon.html">Coming Soon</a></li>                       
                    </ul>
                    <div class="clearfix"></div>
                </div> -->
                
            <!-- <div class="col-md-3 footer-left"> -->
                <!-- <div class="f-mov-list">
                    <h4>Cinemas & Regions</h4>
                    <ul>
                        <li><a href="regions.html">All Regions</a></li>
                        <li><a href="cinema-chain.html">Cinema Chains</a></li>
                        <li><a href="cinemas.html">Cinemas</a></li>                     
                    </ul>
                    <div class="clearfix"></div>
                </div> -->
                <!-- <div class="f-mov-list">
                    <h4>Movies by Language</h4>
                    <ul>
                        <li><a href="movies.html">Hindi</a></li>
                        <li><a href="movies.html">English</a></li>
                        <li><a href="movies.html">Marathi</a></li>
                        <li><a href="movies.html">Bengali</a></li>
                        <li><a href="movies.html">Tamil</a></li>
                        <li><a href="movies.html">Telugu</a></li>
                        <li><a href="movies.html">Malayalam</a></li>
                        <li><a href="movies.html">Bhojpuri</a></li>
                        <li><a href="movies.html">Kannada</a></li>                  
                    </ul>
                    <div class="clearfix"></div>
                </div> -->
                <!-- </div> -->
            <!-- <div class="col-md-6 footer-left"> -->
                <!-- <div class="f-mov-list">
                    <h4>Exclusives</h4>
                    <ul>
                        <li><a href="donate.html">Book A Smile</a></li>
                        <li><a href="vochers.html">Corporate Vouchers</a></li>
                        <li><a href="gift-cards.html">Gift Cards</a></li>
                    </ul>
                    <div class="clearfix"></div>                    
                </div> -->  
                <div class="f-mov-list">
                    <div class="row">
                        <div class="col-md-1">
                            <h4>Help</h4>
                        </div>
                        <div class="col-md-11">
                            <ul>
                                <!-- <li><a href="site-map.html">Sitemap</a></li> -->
                                <li style="display: inline;"><a href="feed-back.html">Feedback</a></li>
                                <li style="display: inline;"><a href="faq.html">FAQs</a></li>
                                <li style="display: inline;"><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                <li style="display: inline;"><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>

                    
                    <div class="clearfix"></div>
                </div>  
                </div>      
            
            <!-- <div class="col-md-3 footer-left"> -->
                <!-- <div class="f-mov-list">
                    <h4>Movies by Genre</h4>
                    <ul>
                        <li><a href="movies.html">Action</a></li>
                        <li><a href="movies.html">Romance</a></li>
                        <li><a href="movies.html">Comedy</a></li>
                        <li><a href="movies.html">Adult</a></li>
                        <li><a href="movies.html">Adventure</a></li>
                        <li><a href="movies.html">Classic</a></li>
                        <li><a href="movies.html">Crime</a></li>
                        <li><a href="movies.html">Drama</a></li>
                        <li><a href="movies.html">Family </a></li>
                        <li><a href="movies.html">Fantasy</a></li>
                        <li><a href="movies.html">Musical</a></li>
                        <li><a href="movies.html">Mystery</a></li>
                        <li><a href="movies.html">Suspense</a></li>
                        <li><a href="movies.html">Thriller</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div> -->
            <!-- </div> -->
            <div class="clearfix"></div>
            <div class="col-md-12">
            <div class="footer-right">
                <div class="follow-us">
                    <h5 class="f-head">Follow us</h5>
                    <ul class="social-icons">
                        <li><a href="https://www.facebook.com/dogmaticblog/"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/sohamkhedekar?lang=en"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/user/TheSoham97"><i class="fa fa-youtube"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-pinterest"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-google-plus"></i></a></li> -->
                        <li><a href="https://www.instagram.com/sohamkhedekar/"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="subscribe" style="padding-top: 5px;">
                    <h5 class="f-head">Subscribe to our Newsletters</h5>
                    <a href="subscribe.php"><p>Get a subscription</p></a>
                    <!-- <input type="text" class="text" value="Enter Email ID" onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') {this.value = 'Enter Email ID';}">
                    <input type="submit" value="submit"> -->
                    <div class="clearfix"></div>
                </div>
                <div class="recent_24by7">
                    <!-- <a class="play-icon popup-with-zoom-anim" href="#small-dialog" href="#"><i class="fa fa-calendar-o"></i>Resend Booking Confirmation</a> -->
                    <a href="support.html"><i class="fa fa-question"></i>24/7 Customer Care</a>
                </div>
                    <div class="clearfix"></div>
            </div>
            </div>
            <div class="clearfix"></div>
            </div>
			<div class="clearfix"></div>
		</div>
			<div class="copy-rights text-center">
				<p>© 2017 TicketGo. All Rights Reserved</p>
			</div>
	</div>
 <script src="js/responsive-tabs.js"></script>
    <script type="text/javascript">
      $( '#myTab a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      $( '#moreTabs a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );

    </script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
				<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>