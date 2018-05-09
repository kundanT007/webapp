<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class happy extends dbConnect
{
  public function displayHappy()
  {
    $sql="SELECT * FROM `happystudents`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      $a=$row['created'];
      $b=$row['edited'];
      $sql1="SELECT * FROM `adminlogin` where id='$a'";
      $results=(mysqli_query($this->db,$sql1));
      $created="No One";
      while($rows=mysqli_fetch_array($results))
      {
        $created=$rows['name'];
      }

      $sql2="SELECT * FROM `adminlogin` where id='$b'";
      $result2=(mysqli_query($this->db,$sql2));
      $edited="No One";
      while($row2=mysqli_fetch_array($result2))
      {
        $edited=$row2['name'];
      }

      if($row['status']==1)
      {
        $status="Shown";
      }
      else {
        $status="Not Shown";
      }

      echo'
      <tr>

      <td>'.$row['hname'].'</td>
      <td>'.$row['hcomment'].'</td>
      <td>'.$created.'</td>
      <td>'.$edited.'</td>
      <td>'.$status.'</td>
      <td><img src='.$row['himagepath'].' height=100 width=100></td>
      <td class="td-actions text-right">
      <a href="main.php?id=happy&h=hedit&hid='.$row["hid"].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
      <i class="fa fa-edit"></i>
      </button> </a>
      <a href="main.php?id=happy&h=hdelete&hid='.$row["hid"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
      <i class="fa fa-times"></i>
      </button> </a>
      </td>
      </tr>';
    }
  }

  public function edithappy($id)
  {
    $sqledit="SELECT * FROM `happystudents` WHERE `hid`= $id";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {
      $hid=$row['hid'];
      $hname=$row['hname'];
      $hcomment=$row['hcomment'];
      $hstatus=$row['status'];
      if($hstatus==1)
      {
        $a=1;
        @$b="Show";
        $c=0;
        @$d="Dont Show";
      }
      else {
        $a=0;
        @$b="Dont Show";
        $c=1;
        @$d="Show";
      }


      echo'
      <div class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-8">
      <div class="card">
      <div class="header">
      <h4 class="title">Edit Profile</h4>
      </div>
      <div class="content">
      <form method="post" action="main.php?id=happy&h=happy" enctype="multipart/form-data">
      <input type="hidden" value="'.$hid.'" name="hid">

      <div class="row">

      <div class="col-md-4">
      <div class="form-group">
      <label>Student Name</label>
      <input type="text" class="form-control" value="'.$hname.'" name="hname">
      </div>
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>Student Comment</label>
      <input type="text" class="form-control" value="'.$hcomment.'" name="hcomment">
      </div>
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label for="sel1">Visibility</label>
      <select class="form-control" id="sel1" name="status">

      <option value="'.$a.'">'.$b.'</option>
      <option value="'.$c.'">'.$d.'</option>

      </select>
      </div>
      </div>


      <div class="col-md-4">
      <div class="form-group">
      <label>  Select png or jpg file to upload:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      </div>

      </div>

      <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Edit Details</button>
      <div class="clearfix"></div>


      </form>
      </div>
      </div>
      </div>

      </div>
      </div>
      </div>';
    }
  }

  public function happyEdit($hid,$hname,$hcomment,$status)
  {
    $b=$_SESSION['uid'];
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql="UPDATE `happystudents` SET `hid`='$hid', `hname`='$hname',`hcomment`='$hcomment',edited='$b',status='$status' WHERE `hid`=$hid";
      mysqli_query($this->db,$sql);
      header("Location: main.php?id=5");
    }
    else {
      $target_dir = "../gallery/happy/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      // Check file size
      if ($_FILES["fileToUpload"]["size"] > 50000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
      }
      // Allow certain file formats
      if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
        echo "Sorry, only jpg, png files are allowed.";
        $uploadOk = 0;
      }
      // Check if $uploadOk is set to 0 by an error
      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          $sqldel="SELECT * FROM happystudents where hid=$hid";
          $result=  mysqli_query($this->db,$sqldel);
          while($row=mysqli_fetch_array($result))
          {
            unlink($row["himagepath"]);
          }

          $a=basename( $_FILES["fileToUpload"]["name"]);
          //$teacher->storeUploads($a,$imageFileType);
          $sql="UPDATE happystudents SET `hid`='$hid', `hname`='$hname',`hcomment`='$hcomment',himagepath='$target_file',himagename='$a',edited='$b',status='$status'  where hid='$hid'";
          mysqli_query($this->db,$sql);
          header("Location: main.php?id=5");

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
  }

  public function happyForm()
  {
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="header">
    <h4 class="title">Add Student</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=happy&h=happyadd" enctype="multipart/form-data">

    <div class="row">

    <div class="col-md-2">
    <div class="form-group">
    <label>Student Name</label>
    <input type="text" class="form-control"  name="hname">
    </div>
    </div>

    <div class="col-md-8">
    <div class="form-group">
    <label>Student Comment</label>
    <input type="text" class="form-control"  name="hcomment">
    </div>
    </div>

    <div class="col-md-2">
    <div class="form-group">
    <label for="sel1">Visibility</label>
    <select class="form-control" id="sel1" name="status">

    <option value="1">Show</option>
    <option value="0">Dont Show</option>

    </select>
    </div>
    </div>


    <div class="col-md-4">
    <div class="form-group">
    <label>  Select png or jpg file:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    </div>
    </div>
    </div>
    <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Add Student</button>
    <div class="clearfix"></div>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>';
  }
  public function happyAdd($hname,$hcomment,$status)
  {

    $target_dir = "../gallery/happy/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png" ) {
      echo "Sorry, only jpg, png files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {

      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $b=$_SESSION['uid'];
        $a=basename( $_FILES["fileToUpload"]["name"]);
        $sql1="INSERT INTO happystudents SET hname='$hname',hcomment='$hcomment',himagename='$a',himagepath='$target_file',created='$b',status='$status'";
        $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
        if($result)
        {
          header('Location: main.php?id=5');
          echo"data inserted";
        }
        else {
          echo"ID already exists";
        }
      }
      else {
        echo "Sorry, there was an error uploading your file.";
      }
    }

  }


  public function deleteHappy($id)
  {
    $sql="SELECT * FROM `happystudents` where hid=$id";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      unlink($row['himagepath']);
    }
    $sqldel="DELETE  FROM happystudents WHERE hid=$id";
    $result=mysqli_query($this->db,$sqldel);
    if($result)
    {
      header('location: main.php?id=5');
    }
    else
    {
      echo"Something Wrong here yes!";

    }
  }

  public function displayOutHappy()
  {
    $sql="SELECT * FROM `happystudents` where hid=2";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))

    {
      $a="../APtech/gallery/happy/";
      echo"
      <div class='custom_testimonials_wrap_inner'>
      <address><img src='$a".$row['himagename'].".".$row['himageextension']."' style='height:250px;width:250px;'></address>
      <div class='extra-wrap'>
      <i class='fa quote fa-quote-left'></i>
      <p>".$row['hcomment']."</p>
      <p class='m_2'><a href='#'>-&nbsp;&nbsp; ".$row['hname']."</a></p>
      </div>
      <div class='clearfix'></div>
      ";
    }
  }
}
?>
