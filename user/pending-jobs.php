<?php include'header.php';


?>

<div class="container">


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Requirement</th>
      <th scope="col">Location</th>
      <th scope="col">Descreption</th>
    </tr>
  </thead>
  <tbody>
    <?php
            require('../php/connect.php');
            $query = "SELECT * FROM jobs WHERE status='pending'";
            $result = mysqli_query($connection, $query);
            while($row = mysqli_fetch_assoc($result)) {
    ?>
    <tr>
      <td><?php echo $row['title']?></td>
      <td><?php echo $row['service']?></td>
      <td><?php echo $row['location']?></td>
      <td><?php echo $row['descreption']?></td>
      <td><a class="btn btn-primary" href="offers.php?id=<?php echo $row['job_id']?>">View Offers</a>
    <a class="btn btn-outline-primary" href="../php/delete_job.php?id=<?php echo $row['job_id']?>"> Delete</a>
  </td>
    </tr>
    <?php
           }
           ?>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
