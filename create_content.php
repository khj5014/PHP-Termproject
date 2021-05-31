<!-- 글작성 컨텐츠입니다. 공지 -->
<?php
     include_once "db.php";
    $content= $_POST['content']; // 컨텐츠 추가 
    $sql="insert into notice(content) values('$content')";
    mq($sql);
    ?>
<script>
    location.replace("index.php");
</script>
