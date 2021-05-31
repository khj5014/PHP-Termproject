<style>
  table {
    width: 100%;
    border: 1px solid #444444;
    border-collapse: collapse;
  }
  th,
  td {
    border: 1px solid #444444;
  }

  #gear_main {
    height: 33%;
    background-color: #555;
  }

  #gear_sub1 {
    height: 67%;
    width: 50%;
    background-color: #444;
    float: left;
    overflow: hidden;
  }

  #gear_sub2 {
    height: 67%;
    width: 50%;
    float: left;
    background-color: lightblue;
  }
</style>

<?php
session_start();
$id = $_SESSION['userid'];
include_once "db.php";
$query_main = "select * from ride where manager_id= '$id'";
$result = mq($query_main);
$max_result = 10;
?>
<script type="text/javascript" src="./js/common.js"></script>
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
      while ($rows_main = mysqli_fetch_array($result)) {
        echo '<tr><td>' . $rows_main['ride_id'] .
          '</td><td>' . $rows_main['ride_Pid'] .
          '</td><td>' . $rows_main['manager_id'] .
          '</td><td>' . $rows_main['z_id'] . '</td><td>'
          . $rows_main['z_name'] . '</td><tr>';
      }
      ?>
    </tr>
  </table>
</div>
<div id="gear_sub1">
  <!-- 처리완료 -->
  <table>
    <?php
    // 테이블 php 작성할것
    ?>
    <thead>
      <th>id</th>
      <th>제목</th>
      <th>작성자</th>
    </thead>
  </table>

</div>
<div id="gear_sub2">
  <!-- 고장상황 -->
  <table>
    <?php
    // 테이블 php 작성할것
    ?>
    <thead>
      <th>id</th>
      <th>제목</th>
      <th>작성자</th>
    </thead>
      <?php 
        $query_sub2 = "select id,title,writer from report";
        $result_sub2= mq($query_sub2);
        while($rows_sub2=mysqli_fetch_array($result_sub2)){
          echo '<tr><td>' . $rows_sub2['id'] .
          '</td><td><a href="view_content.php?id='.$rows_sub2['id'].'">'. $rows_sub2['title'] .
          '</a></td><td>' . $rows_sub2['writer'] . '</td><tr>';
        }
      ?>
  </table>
  <button id="write_report">글쓰기</button>
</div>