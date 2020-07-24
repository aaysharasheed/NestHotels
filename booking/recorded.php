<?php

if(isset($_POST['Check_Availibility'])) {
	
	$f_name=trim($_POST['firstname']);
	$l_name=trim($_POST['lastname']);
	$ch_in=trim($_POST['checkin']);
	$ch_out=trim($_POST['checkout']);
	$gt=$_POST['guest'];
	$room=$_POST['rooms'];
	$preference=$_POST['pref'];
	$children=$_POST['child'];
	

	require_once('./connect.php');

	$query=mysqli_query($conn, "select roomNo from room where occ='0' ");
	$res=mysqli_fetch_array($query);
	$count=mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Nest hotel booking</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nest hotel booking form Widget a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<!-- Meta tag Keywords -->
<link rel="stylesheet" href="./css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
<link rel="stylesheet" href="./css/font-awesome.min.css"><!--fontawesome-css--> 
<script src="booking/js/jquery-2.1.4.min.js"></script>

</head>
<body>
   <header>
        <div class="main">
            <div class="logo">
            <img src="../logo.png">
            </div> 
            <ul>
        <li><a href="../index.html">Home</a></li>
        <li class="active"><a href="#">BOOKINGS</a></li>
        <li><a href="../gallery.html">Gallery</a></li>
        <li><a href="../about.html">About</a></li>
        </ul>
        </div>
    </header>
<section class="booking-agile">
<h1>NEST HOTEL BOOKING FORM</h1>
<div class="headbooking-agile">
			<div class="bookingleft-agile">
				<h2>make a reservation</h2>
					<form action="#" method="post">
						<div class="name-agile">
							<p>check-in date</p>
							<input type="text" value="<?php echo $ch_in;?>" placeholder="Check in">
						</div>
						<div class="name-agile">
							<p>check-out date</p>
							<input type="text" value="<?php echo $ch_out;?>" placeholder="Check out">
						</div>
						<div class="clear"></div>
							<div class="name-agile">
								<p>guest</p>
									<input type="text" value="<?php echo $gt;?>" placeholder="Guest">
							</div>
							<div class="name-agile">
								<p>rooms</p>
									<input type="text" value="<?php echo $room;?>" placeholder="Room">
							</div>
							<div class="clear"></div>
							<div class="name-agile">
									<p>room preference</p>
								<input type="text" value="<?php echo $preference;?>" placeholder="Room preference">
							</div>
							<div class="name-agile">
								<p>no of children</p>
							<input type="text" value="<?php echo $children;?>" placeholder="No of Children">
							</div>
							<div class="clear"></div>
							<div class="name-agile">
								<p>First name</p>
								<input type="text" value="<?php echo $f_name;?>" placeholder="first name">
							</div>
							<div class="last-agile">
								<p>last name	</p>
								<input type="text" value="<?php echo $l_name;?>" placeholder="last name" >
							</div>
							
								<div class="clear"></div>
						</form>
				
<div class="response-agile" style="color:white;">
	<?php

		if($count==0) {
		echo 'Sorry, there are no rooms available at the time. ';
	} else {
		$rno=$res[0];
		$query=mysqli_query($conn,"update room set first_name = '$f_name',last_name='$l_name',check_in='$ch_in',check_out='$ch_out',occ='1' where roomNo='$rno'");
		
			echo "Your are checked into ".$rno;
		
		
	}
}
?>
</div>
<div class="submit-agile">
<a href="../booking.html" style='text-decoration: none'><input type="submit" value="Go Back" name="Go back"></a>
									
								</div>
</div>
<div class="bookingright-agile">
<h3>get in touch</h3>
			<div class="mobile-agile">
				<div class="icon-agile">
					<span><i class="fa fa-phone" aria-hidden="true"></i></span>
				</div>
				<div class="contact-agile">
					<p>phone</p>
					<span>+91-8078005990</span>
				</div>
			</div>
			<div class="clear"></div>
			<div class="email-agile">
				<div class="mail-agile">
					<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
				</div>
				<div class="address-agile">
					<p>email</p>
					<span><a href="mailto:support@example.com">nesthotels@pacifictavern.com</a>
						</span>
				</div>
				<div class="clear"></div>
				<div class="offers-agile">


				</div>
			</div>
</div>
<div class="clear"></div>
</div>
</section>
<!--start-date-piker-->
		<link rel="stylesheet" href="booking/css/jquery-ui.css" />
		<script src="booking/js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- /End-date-piker -->
</body>
</html>
	
	