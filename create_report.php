<!-- 고장사항 작성 글 입니다. -->
<?php
session_start();
include_once "db.php";

if ($_GET['mode']) {
    //  edit
    if ($_GET['mode'] == "edit") {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $sql = "update content set title='$title',content='$content' where id ='$id' ";
        mq($sql);
        ?>
        <script>
        location.href='index.php';       
        </script>
        <?php
        return;
    }
    elseif($_GET['mode']=="delete"){
        $id =$_GET['id'];
        $sql ="delete from content where id ='$id'";
        mq($sql);
        ?>
        <script>
        location.href='index.php';       
        </script>
        <?php
        return;
        
    }
} else {
    $writer = $_SESSION['userid'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    // constatus =디폴트값들어감
    $sql = "insert into content(writer,title,content) values('$writer','$title','$content')";
    mq($sql);
}
?>
<script>
    location.href='index.php';
</script>