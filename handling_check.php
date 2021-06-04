<?php
   include_once 'db.php';
   $userid=$_SESSION['userid'];
   $id=$_GET['id'];
 
   $sql= "select * from content where id ='$id'";
   mq($sql); // id 확인
   $sql2="update content set con_status='solved' where id='$id' ";
   mq($sql2); // 스테이터스 변경
   $con=mq("select content from content where id ='$id'"); //내용변경
   $sql2="update content set content=concat('$con','처리자:$userid')";
?>