<?php
include_once('aptech.dbConnect.php');
include_once('inc_session.php');
class aboutandcontact extends dbConnect
{
  function displayAbout()
  {
    $sql="SELECT * FROM `aboutandcontact`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>First Paragraph</label>
      <textarea  class="form-control" rows="4" cols="50" name="firstabout" required>
      '.$row['firstabout'].'
      </textarea>

      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>Second Paragraph</label>
      <textarea  class="form-control" rows="4" cols="50" name="secondabout" required>
      '.$row['secondabout'].'
      </textarea>
      </div>
      </div>


      </div>';
    }
  }

  function displayContact()
  {
    $sql="SELECT * FROM `aboutandcontact`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>First Paragraph</label>
      <textarea  class="form-control" rows="4" cols="50" name="firstcontact" required>
      '.$row['firstcontact'].'
      </textarea>

      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>Second Paragraph</label>
      <textarea  class="form-control" rows="4" cols="50" name="secondcontact" required>
      '.$row['secondcontact'].'
      </textarea>

      </div>
      </div>


      </div>';
    }
  }

  function displayOffice()
  {
    $sql="SELECT * FROM `aboutandcontact`";
    $result=(mysqli_query($this->db,$sql));
    while($row=mysqli_fetch_array($result))
    {echo'
      <div class="row">
      <div class="col-md-3">
      <div class="form-group">
      <label>Office Time</label>
      <input type="text" class="form-control" value="'.$row['officetime'].'" name="officetime" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Contact Number</label>
      <input type="text" class="form-control" value="'.$row['contactnumber'].'" name="contactnumber" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Facebook Link</label>
      <input type="text" class="form-control" value="'.$row['facebook'].'" name="facebook" required>
      </div>
      </div>
      <div class="col-md-3">
      <div class="form-group">
      <label>Twitter Link</label>
      <input type="text" class="form-control" value="'.$row['twitter'].'" name="twitter" required>
      </div>
      </div>

      <div class="col-md-3">
      <div class="form-group">
      <label>Email</label>
      <input type="text" class="form-control" value="'.$row['mail'].'" name="mail" required>
      </div>
      </div>



      </div>';
    }
  }
  function editAbout($first,$second)
  {
    $sql="UPDATE aboutandcontact set firstabout='$first',secondabout='$second' where id='0' ";
    mysqli_query($this->db,$sql);
    header("Location: main.php?id=6");
  }

  function editContact($first,$second)
  {
    $sql="UPDATE aboutandcontact set firstcontact='$first',secondcontact='$second' where id='0' ";
    mysqli_query($this->db,$sql);
    header("Location: main.php?id=6");
  }

  function editOffice($officetime,$contactnumber,$facebook,$twitter,$mail)
  {
    $sql="UPDATE aboutandcontact set officetime='$officetime',contactnumber='$contactnumber',facebook='$facebook',twitter='$twitter',mail='$mail' where id='0' ";
    mysqli_query($this->db,$sql);
    header("Location: main.php?id=6");
  }

  function displayPhoto()
  {
    $sql="SELECT * FROM aboutandcontact where id='0' ";
    $result=mysqli_query($this->db,$sql);
    while($row=mysqli_fetch_array($result))
    {
      echo'
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">


      <img src="'.$row['imagepath'].'" style="height:100px; width:100px;">


      </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
      <div class="form-group">
      <label>  Select png or jpg file to upload:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">


      </div>
      </div>


      </div>';

    }
  }

  public function aboutphoto()
  {
    if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {

      echo"no file selected";
    }
    else {
      $target_dir = "../gallery/about/";
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
          $sqldel="SELECT * FROM aboutandcontact where id='0'";
          $result=  mysqli_query($this->db,$sqldel);
          while($row=mysqli_fetch_array($result))
          {
            unlink($row["imagepath"]);
          }

          $a=basename( $_FILES["fileToUpload"]["name"]);

          $sql="UPDATE aboutandcontact SET imagepath='$target_file',imagename='$a' where id='0'";
          mysqli_query($this->db,$sql);
          header("Location: main.php?id=6");

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }
  }

}
?>
