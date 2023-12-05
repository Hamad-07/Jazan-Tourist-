<?php
include "header.php";
if (isset($_POST['submit'])) {
    $visitorid = $_SESSION['visitorid'];
    $destinationid = $_POST['destinationid'];
    $comment = $_POST['comment'];
    $sql = "INSERT INTO comment (destinationid,visitorid,comment)
    VALUES ('{$destinationid}','{$visitorid}','{$comment}')";
    if (mysqli_query($conn, $sql)):
        phpMsg('It is sent');
    else:
        $Error = 'Query Error ' . mysqli_error($conn);
        phpMsg($Error);
    endif;
}
$destinationid = $_GET['destinationid'];
$sql = "SELECT * FROM destination WHERE destinationid=$destinationid";
$result = mysqli_query($conn, $sql);
$destination = mysqli_fetch_assoc($result);
?>
<div class="container" style="margin-top: 150px;">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="" method="POST">
        <div class="card ">
          <div class="card-header text-center h2">
            Send New Comment
          </div>
          <div class="card-body">
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Destination Name</label>
              <div class="col-md-9">
                <input type="hidden" name="destinationid" value="<?=$destination['destinationid']?>">
                <input type="text" name="firstname" value="<?=$destination['name']?>" class="form-control" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-md-3 col-form-label">Comment</label>
              <div class="col-md-9">
                <input type="text" name="comment" class="form-control" placeholder="Enter Comment" autocomplete="off"
                  required>
              </div>
            </div>

            <div class="row text-left">
              <div class="col">
                <button type="submit" name="submit" value="submit" class="btn btn-outline-success btn-block">Send
                  Comment</button>
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