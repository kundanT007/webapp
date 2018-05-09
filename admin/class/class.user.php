<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class user extends dbConnect
{
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
      <input type="text" class="form-control" placeholder="'.$row['name'].'" name="name" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Contact</label>
      <input type="password" class="form-control" placeholder="'.$row['contact'].'" name="contact" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" placeholder="'.$b.'" name="email" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="'.$c.'" name="password" required>
      </div>
      </div>

      </div>';
    }
  }

  function editProfile($name,$contact,$email,$password)
  {
    $sql1="UPDATE `studentdetails` SET `sid`='$sid', `sname`='$sname',`sgender`=$sgender, `scontact`='$scontact' WHERE `sid`=$id ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('Location: main.php?id=1');
      echo"succesful";
    }
    else {
      echo"not successful";
    }
  }

  public function display()
  {
    $sql="SELECT * FROM `contact`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      echo'
      <tr>
      <td>'.$row['cid'].'</td>
      <td>'.$row['cname'].'</td>
      <td>'.$row['cemail'].'</td>
      <td>'.$row['csubject'].'</td>
      <td>'.$row['cmessage'].'</td>
      </tr>';
    }
  }

  public function displayadmin()
  {
    $sql="SELECT * FROM `adminlogin`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      $a=$row['added'];
      $sql1="SELECT * FROM `adminlogin` where id='$a'";
      $results=(mysqli_query($this->db,$sql1));
      $adder="No One";
      while($rows=mysqli_fetch_array($results))
      {
        $adder=$rows['name'];
      }


        echo'
        <tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['contact'].'</td>
        <td>'.$adder.'</td>
        <td>
        <a href="main.php?id=admindelete&adid='.$row["id"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
        <i class="fa fa-times"></i>
        </button> </a>
        </td>

        </tr>';

    }
  }

  function adminform()
  {
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="header">
    <h4 class="title">Add Admin</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=addadmin">
    <div class="row">

    <div class="col-md-3">
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Contact</label>
    <input type="text" class="form-control" name="contact">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Password</label>
    <input type="text" class="form-control" name="password">
    </div>
    </div>


    </div>

    <button type="submit" class="btn btn-info btn-fill pull-right">Add</button>

    <div class="clearfix"></div>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>';
  }

  public function addadmindelete($id)
  {
    $b=$_SESSION['uid'];
    if($id==1)
    {
      echo"Sorry this account cannot be deleted";
    }
    else {
    if($b==1)
    {
      $sqldel="DELETE  FROM adminlogin WHERE id=$id";
      $result=mysqli_query($this->db,$sqldel);
      if($result)
      {
        header('location: main.php?id=100');
      }
    }
    else {
      echo'Access Denied';
    }
  }
}

  public function adminfinal($name,$contact,$email,$password)
  {
    $b=$_SESSION['uid'];
    if($b==1)
    {
      $sql="INSERT INTO adminlogin SET name='$name',contact='$contact',email='$email',password='$password',added='$b'";
      $result=mysqli_query($this->db,$sql);
      if($result)
      {
        header('location: main.php?id=100');
      }
    }
    else {
      echo'Access Denied';
    }
  }

}
?>
