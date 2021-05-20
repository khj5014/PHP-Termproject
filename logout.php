<?php
    session_start();
    session_destroy();
    ?>
<script>
    alert("로그아웃 하셧습니다.");
    history.go(-1);
</script>
