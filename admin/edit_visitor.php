<?php
include "header.php";
if (isset($_POST['submit'])) {
    $visitorid = $_POST['visitorid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "UPDATE visitor SET firstname='{$firstname}',lastname='{$lastname}',phone='{$phone}',email='{$email}',username='{$username}',password='{$password}'
    WHERE visitorid=$visitorid";
    if (mysqli_query($conn, $sql)):
        phpMsg('It is updated');
    else:
        $Error = 'Query Error ' . mysqli_error($conn);
        phpMsg($Error);
    endif;
}
$visitorid = $_GET['visitorid'];
$sql = "SELECT * FROM visitor WHERE visitorid=$visitorid";
$result = mysqli_query($conn, $sql);
$visitor = mysqli_fetch_assoc($result);
?>
<div class="container" style="margin-top: 120px;">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="POST">
        <div class="card ">
          <div class="card-header text-center h2">
            Edit Visitor
          </div>
          <div class="card-body">
            <div class="form-group row">
              <input type="hidden" name="visitorid" value="<?=$visitor['visitorid']?>">
              <label class="col-md-3 col-form-label">First Name</label>
              <div class="col-md-9">
                <input type="text" name="firstname" value="<?=$visitor['firstname']?>" class="form-control"
                  placeholder="Enter First Name" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Last Name</label>
              <div class="col-md-9">
                <input type="text" name="lastname" value="<?=$visitor['lastname']?>" class="form-control"
                  placeholder="Enter Last Name" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Phone</label>
              <div class="col-md-9">
                <input type="text" name="phone" value="<?=$visitor['phone']?>" class="form-control"
                  placeholder="Enter Phone" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Email</label>
              <div class="col-md-9">
                <input type="email" name="email" value="<?=$visitor['email']?>" class="form-control"
                  placeholder="Enter Email" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Username</label>
              <div class="col-md-9">
                <input type="text" name="username" value="<?=$visitor['username']?>" class="form-control"
                  placeholder="Enter Username" autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Password</label>
              <div class="col-md-9">
                <input type="password" name="password" value="<?=$visitor['password']?>" class="form-control"
                  placeholder="Enter Password" autocomplete="off" required>
              </div>
            </div>
            <div class="row text-left">
              <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-outline-success btn-block">Update
                  Visitor</button>
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