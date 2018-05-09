
<!DOCTYPE HTML>
<?php
//$display->pageCounter();
 include_once('includes/classes/inc_DisplayClass.php'); ?>
<html>
<head>
	<title>Courses</title>
  <?php
	include('headsection.php');?>
   <div class="header-home">
<?php include('header.php');?>
   <div class="grid_4">
		<div class="container" style="margin-top:30px;">
			<h1 class="blog_head">Courses</h1>

      		<?php $display->displaycourse(); ?>





</div></div>
<?php include('footer.php') ?>
</body>
</html>
