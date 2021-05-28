<?php
include "db.php";
	
	if($_POST['userid'] != NULL){
	$id_check = mq("select * from member where id='{$_POST['userid']}'");
	$id_check = $id_check->fetch_array();
	
	if($id_check >= 1){
		echo "존재하는 아이디입니다.<script>document.getElementsByName('checkid').value = 0;</script>";
	} else {
		echo "존재하지 않는 아이디입니다.<script>document.getElementsByName('checkid').value = 1;</script>";
	}
	
}
else
	echo "아이디를 확인해주세요.<script>document.getElementsByName('checkid').value = 0;</script>";
?>