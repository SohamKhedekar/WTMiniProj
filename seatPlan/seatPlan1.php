
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	include_once '../web/dbh.php';
	session_start();
	// Retrieve the URL variables (using PHP).
		$eid = $_GET['eid'];
		$sid = $_GET['sid'];
		//echo "Movie: ".$movie;

?>

<!DOCTYPE html>
<html>
<head>
<title>Movie Ticket Booking Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Movie Ticket Booking Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- //for-mobile-apps -->
<link href='//fonts.googleapis.com/css?family=Kotta+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery.seat-charts.js"></script>
</head>
<body>
<div class="content">
	<h1>Movie Ticket Booking Widget</h1>
	<div class="main">
		<h2>Multiplex Theatre Showing Screen 1</h2>
		<div class="demo">
			<div id="seat-map">
				<div class="front">SCREEN</div>					
			</div>
			<div class="booking-details">
								<?php 

									$sql = "SELECT s.sdate, s.stime, m.name FROM screening AS s, Event1 AS m WHERE m.eid = '$eid' AND s.sid = '$sid';";
									$result = mysqli_query($conn, $sql);
									$resultCheck = mysqli_num_rows($result);

									if ($resultCheck > 0) {
										$row = mysqli_fetch_assoc($result);
										//echo $row["name"]."<br>";
									}

								?>
				<ul class="book-left">
					<li>Movie </li>
					<li>Time </li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: <?=$row["name"]?></li>
					<li>: <?=$row["sdate"]?>, <?=$row["stime"]?></li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>&#8377;</i><span id="total">0</span></b></li>
				</ul>
				<button class="checkout-button" onclick="myFunction()">Enter Seat</button>

				<script>

				var n = prompt("Select Number of seats:");
				var count = n;
				var total = 200*n;
				document.getElementById("counter").innerHTML = count;
				document.getElementById("total").innerHTML = total;
				function myFunction() {
				    for (var i = 0; i <n; i++) {
						var x = document.createElement("INPUT");
					    x.setAttribute("type", "text");
					    x.setAttribute("name", "myCheckbox[]");
					    x.setAttribute("placeholder", "1"+i+"(Row=1Seat="+i+")");
					    document.getElementById("selected-seats").appendChild(x);
					} 
				}

				
				</script>
				<div class="clear">
					
				</div>
				
				<form id="myform" action="../web/event-payment.php?uid=1&cost=total&qty=count&eid=<?php echo $eid ?>&sid=<?php echo $sid ?>" method="post"><ul id="selected-seats" class="scrollbar scrollbar1"></ul><input type="submit" value="Book Now" class="checkout-button"></form>
			
						
<!-- 				<button class="checkout-button" onclick="myF()">Book Now</button>	
 -->
				<script>
					var booked = ['1_2', '4_4','4_5','6_6','6_7','8_5','8_6','8_7','8_8', '10_1', '10_2'];
					for (var i = 0; i <n; i++) {
						function myF() {
						    var y = document.getElementsByName(i).value;
						    document.getElementById("selected-seats").innerHTML = y;
						}
					}
				
				</script>
				<div id="legend"></div>
			</div>
			<div style="clear:both"></div>
	    </div>

			<script type="text/javascript">
				var price = 10; //price
				var cart;
				
				$(document).ready(function() {
					// var $cart = $('#selected-seats'), //Sitting Area
					// $counter = $('#counter'), //Votes
					// $total = $('#total'); //Total money
					
					var sc = $('#seat-map').seatCharts({
						map: [  //Seating chart
							//'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaa__',
							'aaaaaaaa__',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'aaaaaaaaaa',
							'__aaaaaa__'
						],
						naming : {
							top : false,
							getLabel : function (character, row, column) {
								return column;
							}
						},
						legend : { //Definition legend
							node : $('#legend'),
							items : [
								[ 'a', 'available',   'Available' ],
								[ 'a', 'unavailable', 'Sold'],
								[ 'a', 'selected', 'Selected']
							]					
						},
						// click: function () { //Click event
						// 	if (this.status() == 'available') { //optional seat
						// 		$('<li>Row'+(this.settings.row+1)+' Seat'+this.settings.label+'</li>')
						// 			.attr('id', 'cart-item-'+this.settings.id)
						// 			.data('seatId', this.settings.id)
						// 			.appendTo($cart);

						// 		$counter.text(sc.find('selected').length+1);
						// 		$total.text(recalculateTotal(sc)+price);
						// 		cart = $cart;			
						// 		return 'selected';
						// 	} else if (this.status() == 'selected') { //Checked
						// 			//Update Number
						// 			$counter.text(sc.find('selected').length-1);
						// 			//update totalnum
						// 			$total.text(recalculateTotal(sc)-price);
										
						// 			//Delete reservation
						// 			$('#cart-item-'+this.settings.id).remove();
						// 			//optional
						// 			return 'available';
						// 	} else if (this.status() == 'unavailable') { //sold
						// 		return 'unavailable';
						// 	} else {
						// 		return this.style();
						// 	}
						// }


					});
					//sold seat
					sc.get(booked).status('unavailable');
						
				});
					
				// booked.push('<?php echo $row["name"]; ?>');
				// alert(booked);
				//sum total money
				function recalculateTotal(sc) {
					var total = 0;
					sc.find('selected').each(function () {
						total += price;
					});
							
					return total;
				}
			</script>
	</div>
	<p class="copy_rights">&copy; 2016 Movie Ticket Booking Widget. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank"> W3layouts</a></p>
</div>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
