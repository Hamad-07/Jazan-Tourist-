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
  <h2 class="text-center" style="margin-bottom: 20px;">Show Visitor Comment</h2>
  <table class="table table-border">
    <thead class="border-bottom font-weight-blod">
      <td>#</td>
      <td>Destination Name</td>
      <td>Visitor Name</td>
      <td>Date</td>
      <td>Comment</td>
    </thead>
    <tbody>
      <?php
$i = 0;
$sql = "SELECT * FROM comment INNER JOIN destination on destination.destinationid=comment.destinationid
INNER JOIN visitor ON visitor.visitorid=comment.visitorid";
$result = mysqli_query($conn, $sql);
$comments = mysqli_fetch_all($result);
foreach ($comments as $comment): $i = $i + 1;?>
      <tr>
        <td><?=$i?></td>
        <td><?=$comment[6]?></td>
        <td><?=$comment[12] . ' ' . $comment[13]?></td>
        <td><?=date("d/m/Y", strtotime($comment[4]))?></td>
        <td>
          <p class="text-justify"><?=$comment[3]?></p>
        </td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
<?php
include "footer.php"
?>