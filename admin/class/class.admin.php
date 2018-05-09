<?php
include_once('inc_session.php');
include_once('aptech.dbConnect.php');

class admin extends dbConnect
{

  function adminLogin($name, $password)
  {
    $sql1="SELECT * FROM `adminlogin` WHERE `email`='$name' or `name`='$name' AND `password`='$password'";
    $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
    $row=mysqli_num_rows($result);
    if($row>=1)
    {
      while($inthis=mysqli_fetch_array($result))
      {
        header('Location: main.php?id=100');
        $_SESSION['login']=true;
        $_SESSION['uname']=$inthis['name'];
        $_SESSION['uid']=$inthis['id'];
        $_SESSION['upassword']=$inthis['password'];
        $_SESSION['uemail']=$inthis['email'];

header('Location: main.php');
       //echo"Logged IN";

      }
    }
    else
    {
      echo"Wrong email or password";
    }

  }

  function dispuser()
  {
    $a=$_SESSION['uid'];
    $b=$_SESSION['uemail'];
    $c=$_SESSION['upassword'];
    $sqledit="SELECT * FROM `adminlogin` WHERE `id`= $a";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-3">
      <div class="form-group">
      <label>Username</label>
      <input type="text" class="form-control" value="'.$row['name'].'" name="name" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Contact</label>
      <input type="text" class="form-control" value="'.$row['contact'].'" name="contact" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" value="'.$b.'" name="email" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Password</label>
      <input type="text" class="form-control" value="'.$c.'" name="password" required>
      </div>
      </div>
      <input type="hidden" value="'.$a.'" name="id">
      </div>';
    }
  }

  function editProfile($id,$name,$contact,$email,$password)
  {
    $sql1="UPDATE `adminlogin` SET  `name`='$name',`contact`='$contact', `email`='$email',`password`='$password' WHERE `id`=$id";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      $_SESSION['uname']=$name;

      $_SESSION['upassword']=$password;
      $_SESSION['uemail']=$email;

      header('Location: main.php?id=2');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }
}

?>