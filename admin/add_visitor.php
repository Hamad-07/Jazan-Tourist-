<?php
include "header.php";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO visitor (firstname,lastname,phone,email,username,password)
    VALUES ('{$firstname}','{$lastname}','{$phone}','{$email}','{$username}','{$password}')";
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
      <form action="" method="POST">
        <div class="card ">
          <div class="card-header text-center h2">
            Add New Visitor
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-md-3 col-form-label">First Name</label>
              <div class="col-md-9">
                <input type="text" name="firstname" class="form-control" placeholder="Enter First Name"
                  autocomplete="off" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Last Name</label>
              <div class="col-md-9">
                <input type="text" name="lastname" class="form-control" placeholder="Enter Last Name" autocomplete="off"
                  required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Phone</label>
              <div class="col-md-9">
                <input type="text" name="phone" class="form-control" placeholder="Enter Phone" autocomplete="off"
                  required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Email</label>
              <div class="col-md-9">
                <input type="email" name="email" class="form-control" placeholder="Enter Email" autocomplete="off"
                  required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Username</label>
              <div class="col-md-9">
                <input type="text" name="username" class="form-control" placeholder="Enter Username" autocomplete="off"
                  required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Password</label>
              <div class="col-md-9">
                <input type="password" name="password" class="form-control" placeholder="Enter Password"
                  autocomplete="off" required>
              </div>
            </div>
            <div class="row text-left">
              <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-outline-success btn-block">Save
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