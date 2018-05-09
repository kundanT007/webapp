<?php
@session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
    {
     include_once('class/class.admin.php');
extract($_POST);
      $admin=new admin();
	    $admin->adminLogin($name,$password);
    }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Admin</title>



      <link rel="stylesheet" href="css/admin.css">


</head>

<body>
  <div class="login-page">

  <div class="form">

    </form>
    <form class="login-form" method="post" action="">
      <input type="text" placeholder="username" name="name"/>
      <input type="password" placeholder="password" name="password"/>

      <button>login</button>

    </form>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>