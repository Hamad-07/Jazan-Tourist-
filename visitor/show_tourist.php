<?php
include "header.php";
if (isset($_POST['submit'])) {
    $destinationid = $_POST['destinationid'];
    $sql = "DELETE FROM destination WHERE destinationid=$destinationid";
    if (mysqli_query($conn, $sql)):
        phpMsg('It is deleted');
    else:
        $Error = 'Query Error ' . mysqli_error($conn);
        phpMsg($Error);
    endif;
}
?>
<div class="container" style="margin-top: 100px;">
  <h2 class="text-center" style="margin-bottom: 20px;">Show Tourist Destination</h2>
  <table class="table table-border">
    <thead class="border-bottom font-weight-blod">
      <td>Photo</td>
      <td>#</td>
      <td>Name</td>
      <td>Latitude</td>
      <td>Longitude</td>
      <td>Description</td>
    </thead>
    <tbody>
      <?php
$i = 0;
$sql = "SELECT * FROM destination";
$result = mysqli_query($conn, $sql);
$destinations = mysqli_fetch_all($result);
foreach ($destinations as $destination): $i = $i + 1;?>
      <tr>
        <td>
          <!--https://www.google.com/maps/place/Jazan/@16.8989739,42.518417,12z -->
          <a href="https://www.google.com/maps/@<?php echo $destination[2] . ',' . $destination[3] . ',12.5z'; ?>"
            <?php echo $destination[3]; ?>".",13z">
            <?php echo '<img class="card-img-top " src="data:image/jpeg;base64,' . base64_encode($destination[4]) . '" style="height:160px; width:220px;margin:10px auto;"/>'; ?>
          </a>
        </td>
        <td><?=$i?></td>
        <td><?=$destination[1]?></td>
        <td><?=$destination[2]?></td>
        <td><?=$destination[3]?></td>
        <td>
          <p class="text-justify"><?=$destination[5]?></p>
        </td>
        <td class="align-middle"><a href="send_comment.php?destinationid=<?=$destination[0]?>"
            class="btn btn-outline-warning">Send Comment</a></td>
      </tr>
      <?php endforeach?>
    </tbody>
  </table>
</div>
<?php
include "footer.php"
?>