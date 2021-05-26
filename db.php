<?php
    $db_id="root"; // DB 계정명
    $db_pw="root"; // DB 계정 비밀번호
    $db_name="member"; // 연결할 데이터베이스명
    $db_domain="localhost"; // 연결할 도메인 (미선언) x_X
    $conn=mysqli_connect($db_domain,$db_id,$db_pw,$db_name) or die("fail");

    // SQL 쿼리문  함수 mq 선언
    function mq($sql){
        global $conn;
        return $conn->query($sql);
    }
    // mq(쿼리) 로 결과값 받기 
?>