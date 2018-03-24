<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>TicketGO | About</title>
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
					<a href="index_1.php"><h1>TicketGO</h1></a>
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

	<ol class="breadcrumb">
			  <li><a href="index_1.php">Home</a></li>
			  <li class="active">About</li>
			</ol>
	<!---->
	<div class="about-section">
		
		<div class="tabs-box">
			<ul class="tabs-menu">
				<li><a href="#tab1"><span> </span>About-us</a></li>
				<!-- <li><a href="#tab2"><span> </span>Our History</a></li>
				<li><a href="#tab3"><span> </span>Our Work</a></li>
				<li><a href="#tab4"><span> </span>Careers</a></li> -->
			</ul>
			<div class="clearfix"> </div>
			<div class="tab-grids">
				<div id="tab1" class="tab-grid">
					<h5>About-us</h5>
					<p>TicketGo is a new curated lifestyle platform that gives you access to a handpicked selection of events and products. It’s a marketplace to find cool stuff to do and interesting products to buy.</p>
					<!-- <div class="about-grids">
							<div class="about-bottom-grids">
								<div class="col-sm-6 about-left">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-clock-o"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">When We Started</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-sm-6 about-right">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-users"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">Community Guidelines</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="about-bottom-grids">
								<div class="col-sm-6 about-left">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-sitemap"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">About Our Site</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-sm-6 about-right">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-pencil-square-o"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">New Update</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="about-bottom-grids">
								<div class="col-sm-6 about-left">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-book"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">Careers</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="col-sm-6 about-right">
									<div class="about-left-grids">
										<div class="col-md-2 about-left-img">
											<i class="fa fa-mobile"></i>
										</div>
										<div class="col-md-10 about-left-info">
											<a href="#">Contact Us</a>
											<p>Suspendisse cursus tempus ullamcorper Praesent molestie urna a metus auctor vulputate molestie urna a metus auctor molestie urna a metus auctor.</p>
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div> -->
				</div>
				<!-- <div id="tab2" class="tab-grid">
					<h5>History - May 2013</h5>
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority </a>
					<a href="#">It is a long established fact that a reader will be distracted by the readable</a>
					<a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
					<p>Duis iaculis justo nec tellus bibendum rhoncus. Phasellus quis pretium leo, sed porta ligula. Mauris vitae ornare nisi, et dapibus elit. Vestibulum vel urna malesuada, bibendum orci sed, venenatis nunc. Morbi dignissim est tortor, ac aliquam augue blandit at. Pellentesque pulvinar convallis augue, in sodales risus feugiat et. Ut viverra pellentesque tellus eu consectetur. Maecenas eget massa nulla. Fusce convallis et sapien a hendrerit. Etiam viverra maximus dolor, ac tempor sapien.</p>
				</div>
				<div id="tab3" class="tab-grid">
					<h5>December 2012</h5>
					<a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority </a>
					<a href="#">It is a long established fact that a reader will be distracted by the readable</a>
					<a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry</a>
					<a href="#">There are many variations of passages of Lorem Ipsum available, but the majority </a>
					<a href="#">It is a long established fact that a reader will be distracted by the readable</a>
				</div>
				<div id="tab4" class="tab-grid">
					<div class="tb-one">
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Nulla tincidunt adipiscing aliquet. Suspendisse vitae mi at diam tempus imperdiet. Aliquam erat volutpat. Duis pharetra nibh sit amet augue porta, quis mattis massa aliquet. Morbi in consectetur ipsum rhoncus risus. Pellentesque quam felis, vulte. Aliquam erat volutpat. Curabitur varius gravida bibendum. </p>
					</div>
					<div class="tb-one">
						<h3>Proin tincidunt id dui et ullamcorper</h3>
						<p>In hac habitasse platea dictumst. Etiam tincidunt vulputate feugiat. Ut nulla libero, bibendum sed mauris in, faucibus tincidunt arcu. Praesent lobortis pretium nibh a faucibus. Vivamus ac nibh convallis, euismod velit ac, feugiat magna. Vivamus nunc purus, ornare eget ante eget, luctus convallis magna. Ut augue elit, pellentesque in nisi sit amet, sodales convallis sapien. Proin imperdiet orci vitae vehicula convallis. In sit amet adipiscing nisi. Pellentesque et nibh volutpat, dignissim enim quis, mattis ipsum. Integer molestie id purus sed tempor. Sed mollis iaculis odio, nec tincidunt odio. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer in nisi nulla. Vivamus placerat ligula libero, vitae gravida lectus facilisis et.</p>
					</div>
					<div class="tb-one">
						<h3>Integer eleifend facilisis arcu sit amet consequat</h3>
						<p>Aenean gravida enim ut diam pulvinar, in imperdiet felis consectetur. Cras arcu diam, ullamcorper ultricies faucibus vel, aliquet eget lacus. Aenean quis adipiscing orci. Nulla non aliquet nibh. Maecenas et est sodales, scelerisque mi in, tincidunt mauris. Donec sem metus, tincidunt vel luctus quis, scelerisque tempus ante. Praesent quis diam sollicitudin, eleifend ipsum ac, imperdiet dui. Nulla lobortis at nulla laoreet ultrices. </p>
					</div>
					<div class="tb-one">
						<h3>Apply for this position:</h3>
							<div class="tb-two">
								<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}">
								<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
						        <input type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}">
								<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
									<div class="t-btn">
										<form>
											<input type="submit" value="SEND MESSAGE">
								    	</form>
								    </div>
						    </div>				
					</div>
				</div> -->
				</div>
			
			<div class="clearfix"> </div>
		</div>
	<!--start-carrer-->
	<!----- Comman-js-files ---->
		<script>
			$(document).ready(function() {
				$("#tab2").hide();
				$("#tab3").hide();
				$("#tab4").hide();
				$(".tabs-menu a").click(function(event){
					event.preventDefault();
					var tab=$(this).attr("href");
					$(".tab-grid").not(tab).css("display","none");
					$(tab).fadeIn("slow");
				});
			});
		</script>
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