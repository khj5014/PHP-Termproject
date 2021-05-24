<?php
$conn = mysqli_connect("localhost", "root", "root", "member") or die("fail");
$query = "select content from notice order by id desc limit 1";
$result = $conn->query($query);
$rows = mysqli_fetch_array($result)
?>
<table>
    <thead>공지사항</thead>
    <td>
        <?php
        if (!isset($rows['content'])) {
            echo "등록된 공지사항이 없습니다.";
        } else
            echo $rows['content'];
        ?></td>
</table>