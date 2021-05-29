<style>
table {
    width: 100%;
    border: 1px solid #444444;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #444444;
  }
  #gear_main{
    height: 30%;
    padding: 5%;
      background-color: #555;
  }
  #gear_sub1{
    height: 60%;
    background-color: #444;
    overflow: hidden;      
  }
</style>
<?php
session_start();
include_once "db.php";
$query = "select * from ride";
$result = mq($query);
$max_result = 10;
?>

<div id="gear_main">
    <table>
        <tr>
            <thead>
                <th>r_id</th>
                <th>ride_pid</th>
                <th>manager_id</th>
                <th>z_id</th>
                <th>z_name</th>
            </thead>
        <?php 
            while($rows = mysqli_fetch_array($result)){
                echo '<tr><td>'.$rows['ride_id'].
                '</td><td>'.$rows['ride_Pid'].
                '</td><td>'.$rows['manager_id'].
                '</td><td>'.$rows['z_id'].'</td><td>'
                .$rows['z_name'].'</td><tr>';
            }
        ?>
        </tr>
    </table>
</div>
<div id="gear_sub1">
asdf
</div>