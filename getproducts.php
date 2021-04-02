<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
    <!-- stylesheet -->
    <link rel="stylesheet" href="table.css" />
  </head>
  <body>
  <a href="https://vcmkcybersec.tech/andoidfetch" >Android</a>
  <a href="https://vcmkcybersec.tech/vulnfetch" >vulnerability</a>
    <div class="table-container">
      <h2 class="table-heading">Contact us</h2>
      <!-- head bar -->
      <table>
        <thead>
          <tr>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>NEEDS</th>
            <th>MESSAGE</th>
          </tr>
        </thead>
        <!-- subjects -->
        <?php
          //ignoring errors
          error_reporting(0);
          //Establishing database
          $conn=new mysqli('sql109.epizy.com','epiz_27187058','XdVuybGYQVSfJ','epiz_27187058_vcstech');
          //Fetch and declaring essential vaiables
          $query = "SELECT * FROM contact";
          $data = mysqli_query($conn,$query);
          $total = mysqli_num_rows($data);
          //Declaring conditions
          if($total!=0){
            while($result=mysqli_fetch_assoc($data)){
              ?>  
          <tbody>
            <tr>
              <td data-heading="NAME"><?php echo " ".$result['name']." ";?></td>
              <td data-heading="EMAIL"><?php echo " ".$result['email']." "?></td>
              <td data-heading="PHONE"><?php echo " ".$result['phone']." ";?></td>
              <td data-heading="NEEDS"><?php echo " ".$result['checkbox']." ";?></td>
              <td data-heading="MESSAGE"><?php echo " ".$result['message']." ";?></td>
            </tr>
          </tbody>
          <?php  
          }
          }else{
            echo "No records found!";
          }
        ?>
      </table>
      <a href="logout"><button style="float: right; font-size: 32px; padding: 5px 5px 5px 5px; margin: 10px 0px 0px 0px; color:#fff; background-color: red; border-radius: 25px; border-color: #000;" type="submit" >Logout</button></a>
    </div>
    <!-- calling js -->
    <script src="js/inspect.js"></script>
    <script src="js/inspect.min.js"></script>
  </body>
</html>
