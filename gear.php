
<style>
table {
    width: 100%;
    border: 1px solid #444444;
    border-collapse: collapse;
  }
  th, td {
    border: 1px solid #444444;
  }
  #main1{
      margin: 0 auto;
      padding: 20px;
  }
</style>
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "root", "member") or die("fail");

$query = "select * from ride";
$result = $conn->query($query);
$max_result = 10;
?>

<div id="main1">
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