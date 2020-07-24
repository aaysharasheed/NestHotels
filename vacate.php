<?php

if(isset($_POST['Check_out'])) {
	
	$f_name=trim($_POST['firstname']);
	$l_name=trim($_POST['lastname']);
	$ch_out=trim($_POST['checkout']);
	$rm_no=trim($_POST['roomno']);
	

    require_once('./booking/connect.php');
    $Checkout_Successful=1;

	$query=mysqli_query($conn, "select first_name, last_name, check_out from room where roomNo='$rm_no' ");
    $res=mysqli_fetch_array($query);
    if($res[0]!=$f_name || $res[1]!=$l_name || $res[2]!=$ch_out){
        $Checkout_Successful=0;
        
    }
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
<link rel="stylesheet" href="booking/css/style.css" type="text/css" media="all" /><!-- Style-CSS -->
<link rel="stylesheet" href="booking/css/font-awesome.min.css"><!--fontawesome-css--> 
<script src="booking/js/jquery-2.1.4.min.js"></script>

</head>
<body>
   <header>
        <div class="main">
            <div class="logo">
            <img src="logo.png">
            </div> 
            <ul>
        <li><a href="index.html">Home</a></li>
		<li><a href="booking.html">BOOKINGS</a></li>
		<li class="active"><a href="#">Checkout</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="about.html">About</a></li>
        </ul>
        </div>
    </header>
<section class="booking-agile">
<h1>NEST HOTEL CHECKOUT FORM</h1>
<div class="headbooking-agile">
			<div class="bookingleft-agile">
				<h2>Checkout</h2>
				<form action="./vacate.php" method="post">
				<div class="clear"></div>
				<div class="name-agile">
					<p>First name</p>
					<input type="text" name="firstname" value="<?php echo $f_name ?>" placeholder="first name">
				</div>
				<div class="last-agile">
					<p>last name	</p>
					<input type="text" name="lastname" value="<?php echo $l_name ?>"  placeholder="last name" >
				</div>
				<div class="clear"></div>
				<div class="arrival-agile">
					<p>check-out date</p>
					<input placeholder="Check out" class="date" id="datepicker1" type="text" value="<?php echo $ch_out ?>" name="checkout" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="" />
				</div>
                <div class="clear"></div>
                <div class="last-agile">
                    <p>room no	</p>
                    <input type="text" name="roomno" value="<?php echo $rm_no ?>"  placeholder="room no" >
                </div>
                <div class="clear"></div>
				
                </form>
                <div class="response-agile" style="color:white;">
                
                    <?php
                        if($Checkout_Successful==1){
	                        $query=mysqli_query($conn,"update room set first_name = 'NULL',last_name='NULL',check_in='NULL',check_out='NULL',occ='0' where roomNo='$rm_no'");
                            echo "Your are checked out";
                        }else{
                            echo 'There is some mistake in your entry. Please try again.';
                        }
                    }
                    ?>

                </div>
                <div class="submit-agile">
                    <a href="./checkout.html" style='text-decoration: none'><input type="submit" value="Go Back" name="Go back"></a>					
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