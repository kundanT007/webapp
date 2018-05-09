<!DOCTYPE HTML>
<?php include_once('includes/classes/inc_DisplayClass.php');
$display->pageCounter(); ?>
<html>
<head>
	<title>About</title>
	<?php
	include('headsection.php');?>
</head>
<body>
	<div class="header-home">

								<?php include('header.php');?>
	<div class="grid_1">
	   <div class="container">
		  <div class="box_1">
			<h3>Who we are</h3>
		  </div>
		  <div class="col-md-12 about_banner"><?php $display->getImage(); ?></div>
		  <div class="box_20">
				<?php $display-> aboutinfo(); ?>

		      <div class="clearfix"> </div>
		  </div>
	   </div>
	</div>
	<div class="grid_3">
		<div class="container">
			<h3>Our Staff</h3>
		  <div
					<?php $display->displayFullTeam(); ?>

				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div>

<?php include('footer.php') ?>
</body>
</html>
