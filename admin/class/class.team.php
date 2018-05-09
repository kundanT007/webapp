<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class team extends dbConnect
{
  public function displayTeam()
  {
    $sql="SELECT * FROM `teacherdetails`";
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

      <td>'.$row['tfname'].'</td>
      <td>'.$row['tlname'].'</td>
      <td>'.$row['tcourse'].'</td>
      <td>'.$created.'</td>
      <td>'.$edited.'</td>
      <td>'.$status.'</td>
      <td><img src='.$row['timagepath'].' height=100 width=100></td>
      <td class="td-actions text-right">
      <a href="main.php?id=team&t=tedit&tid='.$row["tid"].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
      <i class="fa fa-edit"></i>
      </button> </a>
      <a href="main.php?id=team&t=tdelete&tid='.$row["tid"].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
      <i class="fa fa-times"></i>
      </button> </a>
      </td>
      </tr>';
    }
  }
  public function teamForm()
  {
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="header">
    <h4 class="title">Add Teacher</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=team&t=teamadd" enctype="multipart/form-data">

    <div class="row">

    <div class="col-md-3">
    <div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control"  name="tfname">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control"  name="tlname">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Course</label>
    <input type="text" class="form-control"  name="tcourse">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>Status</label>
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
    <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Add Teacher</button>
    <div class="clearfix"></div>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>';
  }

  public function teamAdd($tfname,$tlname,$tcourse,$status)
  {
    $b=$_SESSION['uid'];
    $target_dir = "../gallery/teacher/";
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
      $sql0="SELECT * from teacherdetails WHERE tid=$tid";
      $result0= mysqli_query($this->db,$sql0);
      $user_data0=mysqli_fetch_array($result0);
      $count_row0=$result0->num_rows;
      if($count_row0==0)
      {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
          $a=basename( $_FILES["fileToUpload"]["name"]);
          $sql1="INSERT INTO teacherdetails SET tfname='$tfname',tlname='$tlname',tcourse='$tcourse',timage='$a',timagepath='$target_file',created='$b',status='$status'";
          $result=mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."data cannot be inserted");
          if($result)
          {
            header('Location: main.php?id=4');
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
      else {
        echo"ID already exists";
      }
    }
  }

  public function deleteTeam($id)
  {
    $sql="SELECT * FROM `teacherdetails` where tid=$id";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      unlink($row['timagepath']);
    }
    $sqldel="DELETE  FROM teacherdetails WHERE tid=$id";
    $result=mysqli_query($this->db,$sqldel);
    if($result)
    {
      header('location: main.php?id=4');
    }
    else
    {
      echo"Something Wrong here yes!";

    }
  }

  public function editteam($id)
  {
    $sqledit="SELECT * FROM `teacherdetails` WHERE `tid`= $id";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {

      $status=$row['status'];
      if($status==1)
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
      <h4 class="title">Edit Teacher</h4>
      </div>
      <div class="content">
      <form method="post" action="main.php?id=team&t=team" enctype="multipart/form-data">
      <input type="hidden" value='.$row['tid'].' name="tid">
      <div class="row">

      <div class="col-md-3">
      <div class="form-group">
      <label>First Name</label>
      <input type="text" class="form-control"  value='.$row['tfname'].' name="tfname">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Last Name</label>
      <input type="text" class="form-control" value='.$row['tlname'].'  name="tlname">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Course</label>
      <input type="text" class="form-control" value='.$row['tcourse'].' name="tcourse">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Status</label>
      <select class="form-control" id="sel1" name="status">

      <option value="'.$a.'">'.$b.'</option>
      <option value="'.$c.'">'.$d.'</option>

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
      <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Edit Teacher</button>
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

  public function teamEdit($tid,$tfname,$tlname,$tcourse,$status)
  {
    $b=$_SESSION['uid'];
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql="UPDATE `teacherdetails` SET  `tfname`='$tfname',`tlname`='$tlname', `tcourse`='$tcourse',edited='$b',status='$status' WHERE `tid`=$tid";
      mysqli_query($this->db,$sql);
      header("Location: main.php?id=4");
    }
    else {
      $target_dir = "../gallery/teacher/";
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
          $sqldel="SELECT * FROM teacherdetails where tid=$tid";
          $result=  mysqli_query($this->db,$sqldel);
          while($row=mysqli_fetch_array($result))
          {
            unlink($row["timagepath"]);
          }

          $a=basename( $_FILES["fileToUpload"]["name"]);
          //$teacher->storeUploads($a,$imageFileType);
          $sql="UPDATE teacherdetails SET `tfname`='$tfname',`tlname`='$tlname', `tcourse`='$tcourse',timagepath='$target_file',timage='$a',edited='$b',status='$status' where tid='$tid'";
          mysqli_query($this->db,$sql);
          header("Location: main.php?id=4");

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
  }

}
?>
