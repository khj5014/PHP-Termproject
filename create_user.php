<?php
    include_once "db.php";
    $id = $_POST['id'];
    $pw1 = $_POST['pw1'];

    $sql ="insert into member(id,pw) value('$id','$pw1')";
    mq($sql);
    $sql = "select * from member where id ='$id'";
    if(mq($sql)){
        echo "계정 생성 성공";
        ?>
        <script>
            location.replace('index.php');
        </script>
        <?php
    }
    else{
        echo "계정 생성실패";
    }
    ?>