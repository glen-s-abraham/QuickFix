<?php include'header.php';?>
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
          if(!isset($_GET['id']))
          {
            header('location:pending-jobs.php');
          }
          else {

          $id=$_GET['id'];
          require('../php/connect.php');
          $query = "SELECT * FROM jobs WHERE job_id=$id ";
          $result = mysqli_query($connection, $query);
          while($row = mysqli_fetch_assoc($result)) {
  ?>
  <tr>
    <td><?php echo $row['title']?></td>
    <td><?php echo $row['service']?></td>
    <td><?php echo $row['location']?></td>
    <td><?php echo $row['descreption']?></td>
    
  </tr>
  <?php
         }
       }
         ?>
</tbody>
</table>
<br>
<table class="table table-dark" >
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Amount</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td>Mark</td>
      <td>1500</td>
      <td><a class="btn btn-primary" href="#">Fix</a>
    <a class="btn btn-outline-primary" href="#"> Delete</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Mark</td>
      <td>2000</td>
      <td><a class="btn btn-primary" href="#">Fix</a>
    <a class="btn btn-outline-primary" href="#"> Delete</a></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Mark</td>
      <td>4000</td>
      <td><a class="btn btn-primary" href="#">Fix</a>
    <a class="btn btn-outline-primary" href="#"> Delete</a></td>
    </tr>

  </tbody>
</table>
</div>
<?php include'footer.php';?>
