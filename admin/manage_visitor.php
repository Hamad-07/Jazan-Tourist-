<?php
include "header.php";
if (isset($_POST['submit'])) {
    $visitorid = $_POST['visitorid'];
    $sql = "DELETE FROM visitor WHERE visitorid=$visitorid";
    if (mysqli_query($conn, $sql)):
        phpMsg('It is deleted');
    else:
        $Error = 'Query Error ' . mysqli_error($conn);
        phpMsg($Error);
    endif;
}
?>
<div class="container" style="margin-top: 100px;">
  <h2 class="text-center" style="margin-bottom: 20px;">Manage Visitor Account</h2>
  <table class="table table-border">
    <thead class="border-bottom font-weight-blod">
      <td>#</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Phone</td>
      <td>Email</td>
      <td>Username</td>
      <td>Password</td>
      <td colspan="2" align="center"><a href="add_visitor.php" class="btn btn-outline-success"><i
            class="fas fa-plus"></i>Add New
          Visitor</a>
      </td>
    </thead>
    <tbody>
      <?php
$i = 0;
$sql = "SELECT * FROM visitor";
$result = mysqli_query($conn, $sql);
$visitors = mysqli_fetch_all($result);
foreach ($visitors as $visitor): $i = $i + 1;?>
      <tr>
        <td><?=$i?></td>
        <td><?=$visitor[1]?></td>
        <td><?=$visitor[2]?></td>
        <td><?=$visitor[3]?></td>
        <td><?=$visitor[4]?></td>
        <td><?=$visitor[5]?></td>
        <td><?=$visitor[6]?></td>
        <td class="align-middle"><a href="edit_visitor.php?visitorid=<?=$visitor[0]?>"
            class="btn btn-outline-primary">Edit
            Visitor</a></td>
        <td class="align-middle">
          <form action="" method="POST">
            <input type="hidden" name="visitorid" value="<?=$visitor[0]?>">
            <button type="submit" name="submit" class="btn btn-outline-danger">Delete
              Visitor</button>
          </form>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
<?php
include "footer.php"
?>