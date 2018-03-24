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
<title>TicketGO | Coming Soon</title>
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
	<!-- <div class="m-tickets-instantly">
		<h4>Book tickets instantly</h4>
		<div class="fleft m-select">
                        <label><input id="rdbMovie" name="rdbMovieSearch" type="radio" class="checkins" onclick="fnOcCriteria('ET', 'MT');" checked="checked">
                        <span class="fleft mr20">Movies</span></label>
                        <label><input id="rdbCinema" name="rdbMovieSearch" type="radio" class="checkins" onclick="fnOcCriteria('VN', 'MT');" checked="checked">
                        <span class="fleft mr20">Cinemas</span></label>
                    </div>
		<div class="m-select-movie">
					<select class="list_of_movies"><option value="">Select Movie</option><optgroup label="Telugu"><option style="padding-left: 10px;" value="ANAN">Asura (U/A)</option><option style="padding-left: 10px;" value="CHDM">Jurassic World (2D Telugu) (U/A)</option><option style="padding-left: 10px;" value="GUDR">Jurassic World (3D Telugu) (U/A)</option><option style="padding-left: 10px;" value="GUNT">Jyothi Lakshmi (U/A)</option><option style="padding-left: 10px;" value="JANG">Kerintha (U)</option><option style="padding-left: 10px;" value="KAKI">Krishnamma Kalipindi Iddarini (U/A)</option><option style="padding-left: 10px;" value="KURN">Lava Kusa (A)</option><option style="padding-left: 10px;" value="MART">Pandaga Chesko (U/A)</option><option style="padding-left: 10px;" value="PRVT">Tippu (A)</option><option style="padding-left: 10px;" value="RAJA">Vinavayya Ramayya (U/A)</option></optgroup><optgroup label="Hindi"><option style="padding-left: 10px;" value="TAWA">ABCD 2 (3D) (U)</option><option style="padding-left: 10px;" value="ZIRO">ABCD 2 (2D) (U)</option></optgroup><optgroup label="English"><option style="padding-left: 10px;" value="DIB">Jurassic World (3D) (U/A)</option><option style="padding-left: 10px;" value="GUW">Guwahati</option></optgroup></select>
                    </div>
		<div class="m-select-date">
					<select class="list_of_movies"><option value="">Select Date</option><option style="padding-left: 10px;" value="ANAN">Today, 18 jun</option><option style="padding-left: 10px;" value="CHDM">Tomorrow, 19 jun</option><option style="padding-left: 10px;" value="CHDM">saturday, 20 jun</option><option style="padding-left: 10px;" value="CHDM">sunday, 21 jun</option></select>
		</div>
		<div class="clearfix"></div>
	</div> -->
	<div class="now-showing-list">
		<!-- <div class="col-md-4 movies-by-category">
			<h5>Refine Your Search</h5>
			<input type="text" class="text" value="Search for a movie name" onfocus="this.value = '';" onblur="if (this.value == 'Enter email...') {this.value = 'Search for a movie name';}">
			<div class="search-by-lang">
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">All Dates</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Jul 2015</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Aug 2015</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Sep 2015</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Oct 2015</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Nov 2015</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Dec 2015</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Jan 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Feb 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Mar 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Apr 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">May 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Jul 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Oct 2016</label>		
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Dec 2016</label>		
				</div>
			</div>
			
			<div class="search-by-lang">
			<div class="c-lang">
				<input type="checkbox" id="c1" name="cc" />
				<label class="lang">All languages</label>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Bengali</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">English</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Hindi</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Kannada</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Malayalam</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Marathi</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Punjabi</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Tamil</label>
				</div>
				<div class="c-lang">
					<input type="checkbox" id="c1" name="cc" />
					<label class="lang">Telugu</label>
				</div>
			</div>
			
			</div>
			</div> -->
		<div class="col-md-12 movies-now-playing">			
			<h3 class="m-head">Coming Soon Movies</h3>			
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m12.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Baby</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>87</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m9.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Baby</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>87</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m10.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Bezubaan Ishq (U)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>75</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m11.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Guddu Rangeela (U/A)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>94</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m12.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">James Bond</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>91</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m13.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Malupu</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>90</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m14.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Online Binline</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m2.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Krishnamma Kalipindi Iddarini (U/A)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>19 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m4.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">ABCD 2 (3D) (U)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>19 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m3.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Kerintha (U)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>12 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m5.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Insidious: Chapter 3 (A)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>25 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m6.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Jurassic World (3D) (U/A)</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>11 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m7.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Magic Mike XXL</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>11 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m15.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Oru Thozan Oru Thozi</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>11 Jun, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="col-md-6 movie-preview">
			<a href="movie-single.php" class="mask">
				<img src="images/m8.jpg" class="img-responsive zoom-img" alt="" />
				<div class="m-movie-title">
					<a class="m-movie-link" href="#">Amy</a>
					<div class="clearfix"></div>
					<div class="m-r-date">
						<p><i class="fa fa-calendar-o"></i>3 Jul, 2015</p>
					</div>
					<div class="m-r-like">
						<p>want to see <span>92</span>%</p>
					</div>
					 <div class="clearfix"></div>
				</div>
			</a>
		</div>
		<div class="clearfix"></div>
		</div>
		<div class="blog-pagimation">
	<ul class="pagination sint">
			<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
			<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">2 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">3 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">4 <span class="sr-only">(current)</span></a></li>
			<li><a href="#">5 <span class="sr-only">(current)</span></a></li>
			<li class="abled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
		  </ul>
		  </div>
		<div class="clearfix"></div>
	</div>	
	<!-- <div class="footer-top-strip">
			<p><span>Next Change <i>(Friday, 19 Jun) </i>: </span><a href="movie-single.php">Disney's ABCD 2 (3D) (U)</a>, <a href="movie-single.php"> 2 Premi Premache</a> , <a href="movie-single.php">Dekh Ke (Bhojpuri)</a> , <a href="movie-single.php">Disney's ABCD 2 (2D) (U)</a>, <a href="movie-single.php">Dekh Ke (Bhojpuri)</a></p>
			<p><span>Coming Soon :</span><a href="movie-single.php"> 2 Premi Premache</a>, <a href="movie-single.php">Acharam, Dekh Ke (Bhojpuri)</a>, <a href="movie-single.php">Entourage</a>, <a href="movie-single.php">Kuttram Kadithal</a></p>
		</div> -->

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
								<li style="display: inline;"><a href="now-showing.php">Now Showing</a></li>
								<li style="display: inline;"><a href="comming-soon.php">Coming Soon</a></li>
								<!-- <li><a href="celebrities.php">Movie Celebrities</a></li> -->
							</ul>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- <div class="f-mov-list">
					<h4>Movie Reviews</h4>
					<ul>
						<li><a href="404.php" target="target_blank">Entertainment News</a></li>
						<li><a href="blog.php" target="target_blank">Rajeev Masand</a></li>
						<li><a href="blog.php" target="target_blank">Film Reviews</a></li>
						<li><a href="write-us.php" target="target_blank">Guest Blogging</a></li>
					</ul>
					<div class="clearfix"></div>
				</div> -->
				<!-- <div class="f-mov-list">
					<h4>Movie Trailers</h4>
					<ul>
						<li><a href="trailers-now-showing.php">Now Showing</a></li>
						<li><a href="trailers-comming-soon.php">Coming Soon</a></li>						
					</ul>
					<div class="clearfix"></div>
				</div> -->
				
			<!-- <div class="col-md-3 footer-left"> -->
				<!-- <div class="f-mov-list">
					<h4>Cinemas & Regions</h4>
					<ul>
						<li><a href="regions.php">All Regions</a></li>
						<li><a href="cinema-chain.php">Cinema Chains</a></li>
						<li><a href="cinemas.php">Cinemas</a></li>						
					</ul>
					<div class="clearfix"></div>
				</div> -->
				<!-- <div class="f-mov-list">
					<h4>Movies by Language</h4>
					<ul>
						<li><a href="movies.php">Hindi</a></li>
						<li><a href="movies.php">English</a></li>
						<li><a href="movies.php">Marathi</a></li>
						<li><a href="movies.php">Bengali</a></li>
						<li><a href="movies.php">Tamil</a></li>
						<li><a href="movies.php">Telugu</a></li>
						<li><a href="movies.php">Malayalam</a></li>
						<li><a href="movies.php">Bhojpuri</a></li>
						<li><a href="movies.php">Kannada</a></li>					
					</ul>
					<div class="clearfix"></div>
				</div> -->
				<!-- </div> -->
			<!-- <div class="col-md-6 footer-left"> -->
				<!-- <div class="f-mov-list">
					<h4>Exclusives</h4>
					<ul>
						<li><a href="donate.php">Book A Smile</a></li>
						<li><a href="vochers.php">Corporate Vouchers</a></li>
						<li><a href="gift-cards.php">Gift Cards</a></li>
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
								<!-- <li><a href="site-map.php">Sitemap</a></li> -->
								<li style="display: inline;"><a href="feed-back.php">Feedback</a></li>
								<li style="display: inline;"><a href="faq.php">FAQs</a></li>
								<li style="display: inline;"><a href="terms-and-conditions.php">Terms and Conditions</a></li>
								<li style="display: inline;"><a href="privacy-policy.php">Privacy Policy</a></li>
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
						<li><a href="movies.php">Action</a></li>
						<li><a href="movies.php">Romance</a></li>
						<li><a href="movies.php">Comedy</a></li>
						<li><a href="movies.php">Adult</a></li>
						<li><a href="movies.php">Adventure</a></li>
						<li><a href="movies.php">Classic</a></li>
						<li><a href="movies.php">Crime</a></li>
						<li><a href="movies.php">Drama</a></li>
						<li><a href="movies.php">Family </a></li>
						<li><a href="movies.php">Fantasy</a></li>
						<li><a href="movies.php">Musical</a></li>
						<li><a href="movies.php">Mystery</a></li>
						<li><a href="movies.php">Suspense</a></li>
						<li><a href="movies.php">Thriller</a></li>
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
					<a href="support.php"><i class="fa fa-question"></i>24/7 Customer Care</a>
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