<?php
include "db.php";
var_dump($_REQUEST);
$id = $_GET['id'];
$handling = $_POST['handling'];
$hadling_user=$_SESSION['userid'];
$sql = "update content set handling='$hadling_user : $handling' where id ='$id'";
mq($sql);
$sql_status ="update content set con_status='onhandling' where id = '$id'";
mq($sql_status);
?>

<script>
    location.href='index.php';
</script>