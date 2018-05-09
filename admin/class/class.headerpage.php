<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class header extends dbConnect
{
  function heading()
  {
    $sql1="SELECT * FROM startingtext";
    $result=mysqli_query($this->db,$sql1);
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>Header</label>
      <input type="text" class="form-control" value="'.$row['header'].'" name="head" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>Description</label>
      <textarea class="form-control " rows="10" name="body" required >'.$row['body'].'</textarea>

      </div>
      </div>

      </div>';
    }
  }
  function displayMenu()
  {
    $sql="SELECT * FROM `menu`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-3">
      <div class="form-group">
      <label>First Tab</label>
      <input type="text" class="form-control" value="'.$row['first'].'" name="first" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Second Tab</label>
      <input type="text" class="form-control" value="'.$row['second'].'" name="second" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Third Tab</label>
      <input type="text" class="form-control" value="'.$row['third'].'" name="third" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Fourth Tab</label>
      <input type="text" class="form-control" value="'.$row['fourth'].'" name="fourth" required>
      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-3">
      <div class="form-group">
      <label>First Link</label>
      <input type="text" class="form-control" value="'.$row['firstaddress'].'" name="firstaddress" required>
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Second Link</label>
      <input type="text" class="form-control" value="'.$row['secondaddress'].'" name="secondaddress" required>
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Third Link</label>
      <input type="text" class="form-control" value="'.$row['thirdaddress'].'" name="thirdaddress" required>
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Fourth Link</label>
      <input type="text" class="form-control" value="'.$row['fourthaddress'].'" name="fourthaddress" required>
      </div>
      </div>

      </div>';
    }
  }

  function menuedit($first,$second,$third,$fourth,$firstaddress,$secondaddress,$thirdaddress,$fourthaddress)
  {
    $sql1="UPDATE `menu` SET `first`='$first',`second`='$second',`third`='$third',`fourth`='$fourth',`firstaddress`='$firstaddress',`secondaddress`='$secondaddress',`thirdaddress`='$thirdaddress',`fourthaddress`='$fourthaddress' WHERE `menuid`='1' ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('location: main.php?id=1');
    }
    else {
      echo"error";
    }

  }

  function pageview()
  {
    $sql1="SELECT * FROM page";
    $result=mysqli_query($this->db,$sql1);
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>Pageview</label>
      <input type="text" class="form-control" value="'.$row['pageview'].'" name="page" required>
      </div>
      </div>

      </div>';
    }
  }

  function pageedit($page)
  {
    $sql1="UPDATE `page` SET `pageview`='$page' WHERE `pid`='1' ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('location: main.php?id=1');
    }
    else {
      echo"error";
    }

  }

  function headeredit($header,$body)
  {
    $sql1="UPDATE `startingtext` SET `header`='$header',`body`='$body' WHERE `id`='1' ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('location: main.php?id=1');
    }
    else {
      echo"error";
    }
  }

  function menu()
  {
    $sql1="UPDATE `startingtext` SET `header`='$header',`body`='$body' WHERE `id`='1' ";
    $result=mysqli_query($this->db,$sql1);
    if($result)
    {
      header('location: main.php?id=1');
    }
    else {
      echo"error";
    }
  }

  function sliderform()
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
    <form method="post" action="main.php?id=headerpage&q=upload" enctype="multipart/form-data">
    <div class="row">

    <div class="col-md-4">
    <div class="form-group">
    <label>Slider Position</label>
    <input type="text" class="form-control" name="sposition">
    </div>
    </div>

    <div class="col-md-4">
    <div class="form-group">
    <label>  Select png or jpg file to upload:</label>

    <input type="file" name="fileToUpload" id="fileToUpload">

    </div>
    </div>

    </div>

    <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">upload</button>

    <div class="clearfix"></div>


    </form>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div>';
  }

  public function uploadForm($sposition)
  {
    $target_dir = "../gallery/slider/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2100000 ) {
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
        $a=basename( $_FILES["fileToUpload"]["name"]);
        //$teacher->storeUploads($a,$imageFileType);
        $sql="INSERT INTO slider SET simagepath='$target_file',simagename='$a',sextension='$imageFileType', sposition='$sposition'";
        mysqli_query($this->db,$sql);
        header("Location: main.php?id=1");

      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }

  public function displaySlider()
  {
    $sql="SELECT * FROM `slider` ORDER BY sposition ASC ";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {
      echo'
      <tr>

      <td>'.$row['sposition'].'</td>
      <td><img src='.$row['simagepath'].' height=100 width=100></td>
      <td class="td-actions text-left">
      <a href="main.php?id=headerpage&q=editslider&sid='.$row['sid'].'"> <button type="button" rel="tooltip" title="Edit" class="btn btn-success btn-simple btn-xs">
      <i class="fa fa-edit"></i>
      </button> </a>
      <a href="main.php?id=headerpage&q=deleteslider&sid='.$row['sid'].'"><button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
      <i class="fa fa-times"></i>
      </button> </a>
      </td>
      </tr>';
    }
  }
  public function deleteUpload($sid)
  {
    $sql="SELECT * FROM slider where sid=$sid";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      unlink($row['simagepath']);
    }


    $sql="DELETE FROM slider where sid=$sid";
    mysqli_query($this->db,$sql);
    header("Location: main.php?id=1");

  }

  public function editsliderform($sid)
  {
    $sql="SELECT * FROM slider where sid=$sid";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
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
      <form method="post" action="main.php?id=headerpage&q=uploadslider" enctype="multipart/form-data">
      <div class="row">

      <div class="col-md-4">
      <div class="form-group">
      <label>Slider Position</label>
      <input type="text" class="form-control" name="sposition" value="'.$row['sposition'].'">
      <input type="hidden" name="sid" value="'.$sid.'">
      </div>
      </div>

      <div class="col-md-4">
      <div class="form-group">
      <label>  Select png or jpg file to upload:</label>

      <input type="file" name="fileToUpload" id="fileToUpload">

      </div>
      </div>

      </div>

      <button type="submit" value="Upload Image" name="submit" class="btn btn-info btn-fill pull-right">upload</button>

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

  public function uploadSlider($sid,$sposition)
  {
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      $sql="UPDATE slider SET sposition='$sposition' where sid='$sid'";
      mysqli_query($this->db,$sql);
      header("Location: main.php?id=1");
    }
    else {
      $target_dir = "../gallery/slider/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

      // Check if file already exists
      /* if (file_exists($target_file)) {
      echo "Sorry, file name already exists.";
      $uploadOk = 0;
    } */
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 2100000 ) {
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
        $sqldel="SELECT * FROM slider where sid=$sid";
        $result=  mysqli_query($this->db,$sqldel);
        while($row=mysqli_fetch_array($result))
        {
          unlink($row["simagepath"]);
        }

        $a=basename( $_FILES["fileToUpload"]["name"]);
        //$teacher->storeUploads($a,$imageFileType);
        $sql="UPDATE slider SET simagepath='$target_file',simagename='$a',sextension='$imageFileType', sposition='$sposition' where sid='$sid'";
        mysqli_query($this->db,$sql);
        header("Location: main.php?id=1");

      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }


  }
}

}
?>
