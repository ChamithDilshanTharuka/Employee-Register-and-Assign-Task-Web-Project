<?php 
$connect = mysqli_connect("localhost", "root", "", "project"); 
$sql = "SELECT * FROM task"; 
$result = mysqli_query($connect, $sql); 
?> 
<!DOCTYPE html> 
<html> 
      <head> 
           <title>Report</title> 
           <style>
            body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 35px;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    form {
        text-align: center;
    }


    </style>
      </head> 
      <body> 
           <br /> 
           <div class="container" style="width:500px;"> 
                <h2 align="">Report</h2><br />                
                <div class="table-responsive"> 
                     <table class="table table-striped"> 
                          <tr> 
                               <th>Tid</th> 
                               <th>Name</th>
                               <th>Startdate</th>
                               <th>enddate</th>
                               <th>nature</th> 
                          </tr> 
                          <?php 
                          if(mysqli_num_rows($result) > 0) 
                          { 
                               while($row = mysqli_fetch_array($result)) 
                               { 
                          ?> 
                          <tr> 
                               <td><?php echo $row["Tid"];?></td> 
                               <td><?php echo $row["Name"]; ?></td>
                               <td><?php echo $row["Startdate"]; ?></td>
                               <td><?php echo $row["enddate"]; ?></td> 
                               <td><?php echo $row["nature"]; ?></td>
                          </tr> 
                          <?php 
                               } 
                          } 
                          ?> 
                     </table> 
                </div> 
           </div> 
           <br /> 
      </body> 
</html> 