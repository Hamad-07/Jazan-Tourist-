<?php
include "header.php";
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $login = mysqli_fetch_assoc($result);
    if ($login):
        $_SESSION['adminid'] = $login['adminid'];
        header("Location: admin/index.php");
    endif;

    $sql = "SELECT * FROM visitor WHERE username='{$username}' AND password='{$password}'";
    $result = mysqli_query($conn, $sql);
    $login = mysqli_fetch_assoc($result);
    if ($login):
        $_SESSION['visitorid'] = $login['visitorid'];
        header("Location: visitor/index.php");
    endif;
    phpMsg('Invalid  Username and  Password');

}

?>
<div class="container" style="margin-top: 180px;">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <form action="" method="POST">
        <div class="card ">
          <div class="card-header text-center h2">
            Login Page
          </div>
          <div class="card-body">
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
                <button type="submit" name="submit" value="submit"
                  class="btn btn-outline-success btn-block">Login</button>
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