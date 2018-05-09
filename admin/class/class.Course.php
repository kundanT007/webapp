<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');

class course extends dbConnect
{
  public function displayCourse()
  {
    $sql="SELECT * FROM `course`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      $a='gallery/';
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

      if($row['cstatus']==1)
      {
        $status="Shown";
      }
      else {
        $status="Not Shown";
      }
      echo'
      <tr>

      <td>'.$row['cname'].'</td>
      <td>'.$row['cheader'].'</td>
      <td>'.$row['clong'].'</td>
      <td>'.$created.'</td>
      <td>'.$edited.'</td>

      <td>'.$status.'</td>
      <td>'.$row['counter'].'</td>

      <td><img src='.$row['cimagepath'].' height=100 width=100></td>

      <td class="td-actions text-right">
      <a href="main.php?id=courses&c=cedit&cid='.$row['cid'].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
      <i class="fa fa-edit"></i>
      </button> </a>
      <a href="main.php?id=courses&c=cdelete&cid='.$row['cid'].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
      <i class="fa fa-times"></i>
      </button> </a>
      </td>
      </tr>';
    }
  }

  public function editCourse($cid)
  {
    $sqledit="SELECT * FROM `course` WHERE `cid`= $cid";
    $result=mysqli_query($this->db,$sqledit);
    while($row=mysqli_fetch_array($result))
    {
      $cid=$row['cid'];
      $cname=$row['cname'];
      $cheader=$row['cheader'];
      $clong=$row['clong'];
      $counter=$row['counter'];
      $cstatus=$row['cstatus'];
      if($cstatus==1)
      {
        $a=1;
        @$b=Show;
        $c=0;
        @$d=Dont;
      }
      else {
        $a=0;
        @$b=Dont;
        $c=1;
        @$d=Show;
      }
      echo'
      <div class="content">
      <div class="container-fluid">
      <div class="row">
      <div class="col-md-8">
      <div class="card">
      <div class="header">
      <h4 class="title">Edit Course</h4>
      </div>
      <div class="content">
      <form method="post" action="main.php?id=courses&c=courses"  enctype="multipart/form-data">
      <input type="hidden"  value="'.$cid.'" name="cid">
      <div class="row">

      <div class="col-md-4">
      <div class="form-group">
      <label>Course Name</label>
      <input type="text" class="form-control" value="'.$cname.'" name="cname">
      </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">
      <label>Course Short Description</label>
      <input type="text" class="form-control" value="'.$cheader.'" name="cheader">
      </div>
      </div>
      <div class="col-md-4">
      <div class="form-group">


      </div>
      </div>
      <div class="col-md-12">
      <div class="form-group">
      <label>Course Long</label>
      <input type="text" class="form-control" value="'.$clong.'" name="clong">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Counter</label>
      <input type="text" class="form-control" value="'.$counter.'" name="counter">
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label for="sel1">Visibility</label>
      <select class="form-control" id="sel1" name="cstatus">

      <option value="'.$a.'">'.$b.'</option>
      <option value="'.$c.'">'.$d.'</option>

      </select>
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>  Select png or jpg file:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      </div>
      </div>

      </div>

      <button type="submit"  value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Edit Details</button>
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

  public function courseEdit($cid,$cname,$cheader,$clong,$cstatus,$counter)
  {
    $b=$_SESSION['uid'];
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql1="UPDATE `course` SET  `cname`='$cname',`cheader`='$cheader',`clong`='$clong',`cstatus`='$cstatus',`counter`='$counter',edited='$b' WHERE `cid`=$cid ";
      $result=mysqli_query($this->db,$sql1);
      if($result)
      {
        header('Location: main.php?id=3');
        echo"succesful";
      }
      else {
        echo"not successful";
      }

    }


    else {
      $target_dir = "../gallery/course/";
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
          $sqldel="SELECT * FROM course where cid=$cid";
          $result=  mysqli_query($this->db,$sqldel);
          while($row=mysqli_fetch_array($result))
          {
            unlink($row["cimagepath"]);
          }

          $a=basename( $_FILES["fileToUpload"]["name"]);
          //$teacher->storeUploads($a,$imageFileType);
          $sql="UPDATE course SET `cid`='$cid', `cname`='$cname',`cheader`='$cheader',`clong`='$clong',cimagename='$a',cimagepath='$target_file',`cstatus`='$cstatus',`counter`='$counter',edited='$b'  where cid='$cid'";
          mysqli_query($this->db,$sql);
          header("Location: main.php?id=3");

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }

  }

  public function courseForm()
  {
    echo'
    <div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-8">
    <div class="card">
    <div class="header">
    <h4 class="title">Add Course</h4>
    </div>
    <div class="content">
    <form method="post" action="main.php?id=courses&c=courseadd" enctype="multipart/form-data">
    <div class="row">

    <div class="col-md-4">
    <div class="form-group">
    <label>Course Name</label>
    <input type="text" class="form-control"  name="cname">
    </div>
    </div>
    <div class="col-md-4">
    <div class="form-group">
    <label>Course Short Description</label>
    <input type="text" class="form-control"  name="cheader">
    </div>
    </div>
    <div class="col-md-12">
    <div class="form-group">
    <label>Course Long</label>
    <input type="text" class="form-control"  name="clong">
    </div>
    </div>





    <div class="col-md-3">
    <div class="form-group">
    <label>Counter</label>
    <input type="text" class="form-control"  name="counter">
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label for="sel1">Visibility</label>
    <select class="form-control" id="sel1" name="cstatus">

    <option value="1">Show</option>
    <option value="0">Dont</option>

    </select>
    </div>
    </div>

    <div class="col-md-3">
    <div class="form-group">
    <label>  Select png or jpg :</label>
    <input type="file" name="courseToUpload" id="fileToUpload">
    </div>
    </div>

    </div>
    <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">Add Course</button>
    <div class="clearfix"></div>


    </form>

    </div>

    </div>
    </div>

    </div>
    </div>
    </div>';
  }
  public function courseAdd($cname,$cheader,$clong,$cstatus,$counter)
  {


    $target_dir = "../gallery/course/";
    $target_file = $target_dir . basename($_FILES["courseToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["courseToUpload"]["size"] > 50000000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "png"  && $imageFileType != "JPEG" && $imageFileType != "jpeg" ) {
      echo "Sorry, only jpg, png files are allowed.";
      $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
      // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["courseToUpload"]["tmp_name"], $target_file)) {
        $b=$_SESSION['uid'];

        echo "The file ". basename( $_FILES["courseToUpload"]["name"]). " has been uploaded.";
        $a=basename( $_FILES["courseToUpload"]["name"]);
        $sql="INSERT INTO course SET cname='$cname',cheader='$cheader',clong='$clong',cimagename='$a',cimagepath='$target_file',cstatus='$cstatus',counter='$counter',created='$b'";
        mysqli_query($this->db,$sql);
        header("Location: main.php?id=3");

      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }


  public function deleteCourse($id)
  {
    $sql="SELECT *  FROM course WHERE cid=$id";
    $re=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($re))
    {
      unlink($row['cimagepath']);
    }
    $sqldel="DELETE  FROM course WHERE cid=$id";
    $result=mysqli_query($this->db,$sqldel);
    if($result)
    {
      header('location: main.php?id=3');
    }
    else
    {
      echo"Something Wrong here yes!";

    }
  }

  public function displayoutpopCourse()
  {
    $sql="SELECT * FROM `course` ORDER BY `counter` DESC LIMIT 0,3 ";
    $result=(mysqli_query($this->db,$sql));
    $count=0;

    while($row=mysqli_fetch_array($result))
    {
      $count=$count+1 ;
      $a='gallery/';
      switch($count)
      {
        case '1':
        {
          $anime="rotateInDownLeft";
          break;
        }
        case '2':
        {
          $anime="lightSpeedIn";
          break;
        }
        case '3':
        {
          $anime="rotateIn";
          break;
        }
        default:
        {
          echo"error";
          break;
        }
      }
      echo'

      <div class="col-md-4 box_6 wow '.$anime.' " data-wow-delay="0.4s">
      <img src='.$a.''.$row['cimagename'].".".$row['cimageexten'].' class="img-responsive" style="height:220px;width:450px;" alt=""/>
      <div class="desc">
      <h4>'.$row['cname'].'</h4>
      <p>'.$row['cheader'].'</p>
      <div class="more"><a href="#"><img src="images/more.png" alt=""></a></div>
      </div>
      </div>
      ';
    }
  }
}
?>
