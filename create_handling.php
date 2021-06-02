<?php
include "db.php";
var_dump($_REQUEST);
$id = $_GET['id'];
$handling = $_POST['handling'];
$sql = "update content set handling='$handling' where id ='$id'";
mq($sql);
?>

<script>
    location.href='index.php';
</script>