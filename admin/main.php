<?php
include_once('class/inc_session.php');
include_once('inc_class.php');

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel='SHORTCUT ICON' href='../gallery/logo/favicon.ico' type='image/x-icon' />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>NHNEPALAdmin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="assets/css/animate.min.css" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="assets/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

			<!--

			Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
			Tip 2: you can also add an image using data-image tag

		-->

		<div class="sidebar-wrapper">
			<!--php yeata -->
			<div class="logo">
				<a href="main.php?id=2" class="simple-text">
					<?php echo $_SESSION['uname']; ?>
				</a>
			</div>
			<?php
			$id=$_GET['id'];
			switch($id)
			{
				case '100':
				{
					echo'<ul class="nav">
					<li class="active">
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '1':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '2':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>


					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li class="active">
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '3':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li  class="active">
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '4':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li  class="active">
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '5':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li  class="active">
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case '6':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li  >
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About And Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'admindelete':
				{
					echo'<ul class="nav">
					<li class="active">
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'aboutphoto':
				{
					echo'<ul class="nav"><li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li  >
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About And Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'addadminnow':
				{
					echo'<ul class="nav">
					<li class="active">
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'about':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li  >
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About And Contact</p>
					</a>
					</li>

					';
					break;
				}

				case 'contact':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li  >
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About And Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'team':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li  class="active">
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'editprofile':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>

					<li class="active">
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}
				case 'adminadd':
				{
					echo'<ul class="nav">
					<li class="active">
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}

				case 'courses':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li  class="active">
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}

				case 'happy':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li >
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;

				}

				case 'headerpage':
				{
					echo'<ul class="nav">
					<li>
					<a href="main.php?id=100">
					<i class="pe-7s-graph"></i>
					<p>Dashboard</p>
					</a>
					</li>
					<li class="active">
					<a href="main.php?id=1">
					<i class="pe-7s-helm"></i>
					<p>Header and Page views</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=2">
					<i class="pe-7s-user"></i>
					<p>My Profile</p>
					</a>
					</li>

					<li>
					<a href="main.php?id=3">
					<i class="pe-7s-notebook"></i>
					<p>Courses</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=4">
					<i class="pe-7s-users"></i>
					<p>Our Team</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=5">
					<i class="pe-7s-study"></i>
					<p>Happy Students</p>
					</a>
					</li>
					<li>
					<a href="main.php?id=6">
					<i class="pe-7s-server"></i>
					<p>About and Contact</p>
					</a>
					</li>

					';
					break;
				}



			}
			?>

		</ul>
	</div>
</div>

<div class="main-panel">
	<nav class="navbar navbar-default navbar-fixed">
		<div class="container-fluid">

			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">


					<li>
						<a href="main.php?id=100">
							<p>NEW HORIZON ADMIN PANEL</p>
						</a>
					</li>
					<li class="separator hidden-lg hidden-md"></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">


					<li>
						<a href="logout.php">
							<p>Log out</p>
						</a>
					</li>
					<li class="separator hidden-lg hidden-md"></li>
				</ul>
			</div>
		</div>
	</nav>

	<?php
	switch($id)
	{
		case '100':
		{
			include_once('inc_dashboard.php');
			break;
		}
		case '1':
		{
			include_once('inc_headerpage.php');
			break;
		}
		case '2':
		{
			include_once('inc_profile.php');
			break;
		}
		case '3':
		{
			include_once('inc_course.php');
			break;
		}
		case '4':
		{
			include_once('inc_team.php');
			break;
		}
		case '5':
		{
			include_once('inc_happystudent.php');
			break;
		}
		case '6':
		{
			include_once('inc_aboutandcontact.php');
			break;
		}

		case 'about':
		{
				extract($_POST);
					$aac->editAbout($firstabout,$secondabout);
					break;
		}
		case 'contact':
		{
				extract($_POST);
					$aac->editContact($firstcontact,$secondcontact);
					break;
		}

		case 'office':
		{
				extract($_POST);
					$aac->editOffice($officetime,$contactnumber,$facebook,$twitter,$mail);
					break;
		}

		case 'aboutphoto':
		{
				extract($_POST);
					$aac->aboutphoto();
					break;
		}
		case 'adminadd':
		{
			$user->adminform();
			break;
		 }

		case 'addadmin':
		{
		  	extract($_POST);
			 $user->adminfinal($name,$contact,$email,$password);
		}

		case 'admindelete':
		{
			@$aid=$_GET['adid'];
			 $user->addadmindelete($aid);
		}




		case 'editprofile':
		{
			@$q=$_GET['q'];
			switch($q)
			{
				case 'editprofile':
				{ extract($_POST);
					$admin->editProfile($id,$name,$contact,$email,$password);
					break;
				}

			}
		}

		case 'courses':
		{
			@ $cid=$_GET['cid'];
			@ $c=$_GET['c'];
			switch($c)
			{
				case 'cedit':
				{ $cs->editCourse($cid);
					break;
				}
				case 'courses':
				{
					extract($_POST);
					$cs->courseEdit($cid,$cname,$cheader,$clong,$cstatus,$counter);
					break;
				}
				case 'cdelete':
				{
					$cs->deleteCourse($cid);
					break;
				}
				case 'cadd':
				{
					$cs->courseForm();
					break;
				}
				case 'courseadd':
				{ extract($_POST);
					$cs->courseAdd($cname,$cheader,$clong,$cstatus,$counter);
					break;
				}
				default:
				{
					break;
				}
			}
		}

		case 'happy':
		{
			@ $hid=$_GET['hid'];
			@$h=$_GET['h'];
			switch($h)
			{
				case 'hedit':
				{ $hs->editHappy($hid);
					break;
				}
				case 'happy':
				{
					extract($_POST);
					$hs->happyEdit($hid,$hname,$hcomment,$status);
					break;
				}
				case 'hdelete':
				{
					$hs->deleteHappy($hid);
					break;
				}
				case 'hadd':
				{
					$hs->happyForm();
					break;
				}
				case 'happyadd':
				{
					extract($_POST);
					$hs->happyAdd($hname,$hcomment,$status);
					break;
				}
				default:
				{
					break;
				}
			}
		}

		case 'team':
		{
			@ $tid=$_GET['tid'];
			@$t=$_GET['t'];
			switch($t)
			{
				case 'tedit':
				{ $team->editteam($tid);
					break;
				}
				case 'team':
				{
					extract($_POST);
					$team->teamEdit($tid,$tfname,$tlname,$tcourse,$status);
					break;
				}
				case 'tdelete':
				{
					$team->deleteTeam($tid);
					break;
				}
				case 'tadd':
				{
					$team->teamForm();
					break;
				}
				case 'teamadd':
				{
					extract($_POST);
					$team->teamAdd($tfname,$tlname,$tcourse,$status);
					break;
				}
				default:
				{
					break;
				}
			}
		}


		case 'headerpage':
		{

			@ $q=$_GET['q'];
			switch($q)
			{
				case 'header':
				{
					echo"1";
					extract($_POST);

					$header->headeredit($head,$body);
					break;
				}
				case 'page':
				{
					extract($_POST);
					$header->pageedit($page);
					break;
				}
				case 'menuedit':
				{
					extract($_POST);
					$header->menuedit($first,$second,$third,$fourth,$firstaddress,$secondaddress,$thirdaddress,$fourthaddress);
					break;
				}
				case 'newslider':
				{

					$header->sliderForm();
					break;
				}
				case 'upload':
				{
					extract($_POST);
					$header->uploadForm($sposition);
					break;
				}
				case 'deleteslider':
				{
					@$sid=$_GET['sid'];

					$header->deleteUpload($sid);
					break;
				}
				case 'editslider':
				{
					@$sid=$_GET['sid'];

					$header->editsliderform($sid);
					break;
				}

				case 'uploadslider':
				{
					extract($_POST);
					$header->uploadSlider($sid,$sposition);
					break;
				}


				default:
				{
					break;
				}
			}
		}
	}
	?>


</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>


<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
</html>