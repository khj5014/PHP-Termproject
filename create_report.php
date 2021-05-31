<?php
session_start();
var_dump($_POST);
include_once "db.php";
$writer = $_SESSION['userid'];
$title = $_POST['title'];
$content= $_POST['content'];
// constatus =디폴트값들어감
$sql ="insert into report(writer,title,content) values('$writer','$title','$content')";
mq($sql);
?>
<script>
    history.back();
</script>