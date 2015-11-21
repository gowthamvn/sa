<!DOCTYPE html>
<html lang="en">
  <?php
    require "connect.php";
  ?>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.min.css" />
    <script type="text/javascript" src="js/req.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    

  </head>
  <body>
  <br><br><br>
    <div class="container">
      <table class="table table-striped">
        <tr>
          <th>K! ID</th>
          <th>Name</th>
          <th>SAS ID</th>
          <th>Email</th>
          <th>Phone</th>
          <th>Stay</th>
          <th>Degree</th>
          <th>Course</th>
          <th>College</th>
          <th>Date of Birth</th>
          <th>Club</th>
          <th>Designation</th>
          <th>Why</th>
          <th>How</th>
          <th>Prev_sa</th>
          <th>Other</th>
        </tr>
        <?php
          $query = "SELECT * FROM sas";
          $result = mysqli_query($con, $query);
          while($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['k_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['sa_id'] ?></td>
            <td><?php echo $row['contact_email'] ?></td>
            <td><?php echo $row['phno'] ?></td>
            <td><?php echo $row['stay'] ?></td>
            <td><?php echo $row['degree'] ?></td>
            <td><?php echo $row['course'] ?></td>
            <td><?php echo $row['college'] ?></td>
            <td><?php echo $row['day'] ."-".$row['month']."-".$row['birth_year'] ?></td>
            <td><?php echo $row['club'] ?></td>
            <td><?php echo $row['designation'] ?></td>
            <td><?php echo $row['why_sa'] ?></td>
            <td><?php echo $row['how'] ?></td>
            <td><?php echo $row['prev_sa'] ?></td>
            <td><?php echo $row['other'] ?></td>
          </tr>
        <?php
          }
        ?>
      </table>
    </div>
  </body>
</html>
