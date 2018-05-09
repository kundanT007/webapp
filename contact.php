<!DOCTYPE HTML>
<?php include_once('includes/classes/inc_DisplayClass.php');


if($_SERVER['REQUEST_METHOD']=='POST')
    {
	  extract($_POST);

      $display=new display();

	    $display->usercomment($name,$email,$subject,$message);

    }

$display->pageCounter(); ?>
<html>
<head>
  
<title>Contact</title>
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php
	include('headsection.php');?>
   <div class="header-home">
<?php include('header.php');?>
   <div class="grid_4">
		<div class="container">
			<h1 class="blog_head">Contact</h1>
		    <div class="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3531.3568395114594!2d85.32871047539523!3d27.73713766140129!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3a127fdedd85470!2sHistoryfeed+Nepal!5e0!3m2!1sen!2snp!4v1498024658181" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="contact">
				<div class="col-md-4 contact_left">
					<h3>Contact info</h3>
          <?php $display-> showContactinfo(); ?>

				</div>
				<div class="col-md-8 contact_right">
					<h3>Catch me</h3>
					<form method="post" action="">
									<div class="text">
										<div class="text-fild">
											<span>Name:</span>
											<input type="text"  name="name"class="text" value="Your Name here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name here';}" required>
										</div>
										<div class="text-fild">
											<span>Email:</span>
											<input type="text"  name="email" class="text" value="Your Email here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email here';}" required>
										</div>
										<div class="clearfix"> </div>
									</div>
									<div class="msg-fild">
											<span>Subject:</span>
											<input type="text"  name="subject" class="text" value="Your Subject here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Subject here';}">
									</div>
									<div class="message-fild">
											<span>Message:</span>
											<textarea  name="message" required> </textarea>
									</div>
									<div class="g-recaptcha" data-sitekey="6LfuvE8UAAAAAMmyHKbjZOU3eVeMOsbAQTp9-Cic"></div>

									
									<label class="btn1 btn2 btn-8 btn-8c"><input type="submit" value="Send"></label>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
<?php include('footer.php') ?>
</body>
</html>
