<?php
include "header.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $latitude = $_POST['latitude'];
    $longitude = $_POST['longitude'];
    $photo = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
    $description = $_POST['description'];
    $password = $_POST['password'];
    $sql = "INSERT INTO destination (name,latitude,longitude,photo,description)
    VALUES ('{$name}','{$latitude}','{$longitude}','{$photo}','{$description}')";
    if (mysqli_query($conn, $sql)):
        phpMsg('It is saved');
    else:
        $Error = 'Query Error ' . mysqli_error($conn);
        phpMsg($Error);
    endif;
}
?>
<div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="card ">
          <div class="card-header text-center h3">
            Add New Destination
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-md-4 col-form-label">Name</label>
              <div class="col-md-8">
                <input type="text" name="name" class="form-control" placeholder="Enter Destination Name"
                  autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label">Latitude</label>
              <div class="col-md-8">
                <input type="text" name="latitude" class="form-control" placeholder="Enter Destination Latitude"
                  autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label">Longitude</label>
              <div class="col-md-8">
                <input type="text" name="longitude" class="form-control" placeholder="Enter longitude"
                  autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label">Photo</label>
              <div class="col-md-8">
                <input type="file" name="photo" class="form-control" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-4 col-form-label">Description</label>
              <div class="col-md-8">
                <textarea name="description" class="form-control" placeholder="Enter Destination Description"
                  autocomplete="off" required></textarea>
              </div>
            </div>
           <div class="row text-left">
              <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-outline-success btn-block">Save
                  Destination</button>
              </div>
              <div class="col">
                <a href="index.php" class="btn btn-outline-success btn-block">Close</a>
              </div> 
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php
include "footer.php"
?>