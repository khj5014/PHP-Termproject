<!-- 테이블 리프레쉬 -->
<?php
include_once "db.php";

$ride_set_clear ="update ride set ride.condition= 'clear' ";
mq($ride_set_clear);

$check_table= "select ride_pid from content";
$result=mq($check_table);

while($rows = mysqli_fetch_array($result)){
    $change_var=$rows['ride_pid'];
    $sub_sql="update ride set ride.condition='broken' where ride_Pid='$change_var'";
    mq($sub_sql);
}
?>