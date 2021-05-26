<?php
include_once "db.php";
$rows_main = mysqli_fetch_array(mq("select content from notice order by id desc limit 1"));

//  페이징 
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}
$total_home_sub1_record = mysqli_num_rows(mq("select * from notice"));
$list = 10; // 표시 게시물
$block_cnt = 5; // 블록당 페이지수
$block_num = ceil($total_home_sub1_record / $block_cnt);
$block_start = (($block_num - 1) * $block_cnt) + 1; // 블록시작
$block_end = $block_start + $block_cnt - 1; // 블록 마지막

$total_page = ceil($total_home_sub1_record / $list);

if ($block_end > $total_page) {
    $block_end = $total_page;
}

$total_block = ceil($total_page / $block_cnt);
$page_start = ($page - 1) * $list;

$sql_home_sub1 = mq("select * from notice order by id desc limit $page_start,$list");

?>
<style>
    #home_main {
        background-color: #111;
        width: 100%;
        height: 25%;
        color: white;
    }

    #home_sub1 {
        background-color: #222;
        float: left;
        width: 50%;
        height: 75%;
        color: white;
    }

    #home_sub2 {
        background-color: #333;
        float: right;
        width: 50%;
        height: 75%;
    }
</style>
<div id="home_main">
    <table>
        <thead>공지사항</thead>
        <td>
            <?php
            if (!isset($rows_main['content'])) {
                echo "등록된 공지사항이 없습니다.";
            } else
                echo $rows_main['content'];
            ?></td>
    </table>
</div>
<div id="home_sub1">
    <!-- 공지메뉴-->
    <table>
        <thead>
            <tr>
                <td> id </td>
                <td> 내용 </td>
            </tr>
            <?php
            while ($board = $sql_home_sub1->fetch_array()) {
                $content = $board['content'];
                if (strlen($board['content'] > 30)) {
                    $content = str_replace($board['content'], mb_substr($board["content"], 0, 30, "utf-8") . "...", $board['content']);
                }
            ?>
        </thead>
        <tbody>
            <tr>
                <!-- 내용 첨부할것 -->
                <td><?= $board['id'] ?></td>
                <td><?= $board['content'] ?></td>
            </tr>
        </tbody>
    <?php
            }
    ?>
    </table>
    <nav>
        <ul>
            <?php
            if ($page <= 1) {
                // 빈 값
            } else {
                if (isset($unum)) {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=1' aria-label='Previous'>처음</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=1' aria-label='Previous'>처음</a></li>";
                }
            }

            if ($page <= 1) {
                // 빈 값
            } else {
                $pre = $page - 1;
                if (isset($unum)) {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$pre'>◀ 이전 </a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$pre'>◀ 이전 </a></li>";
                }
            }

            for ($i = $block_start; $i <= $block_end; $i++) {
                if ($page == $i) {
                    echo "<li class='page-item'><a class='page-link' disabled><b style='color: #df7366;'> $i </b></a></li>";
                } else {
                    if (isset($unum)) {
                        echo "<li class='page-item'><a class='page-link' href='./index.php?page=$i'> $i </a></li>";
                    } else {
                        echo "<li class='page-item'><a class='page-link' href='./index.php?page=$i'> $i </a></li>";
                    }
                }
            }

            if ($page >= $total_page) {
                // 빈 값
            } else {
                $next = $page + 1;
                if (isset($unum)) {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$next'> 다음 ▶</a></li>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$next'> 다음 ▶</a></li>";
                }
            }

            if ($page >= $total_page) {
                // 빈 값
            } else {
                if (isset($unum)) {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$total_page'>마지막</a>";
                } else {
                    echo "<li class='page-item'><a class='page-link' href='./index.php?page=$total_page'>마지막</a>";
                }
            }
            ?>
        </ul>
    </nav>
</div>
<div id="home_sub2">
    <!-- 기타 -->
    home_sub2
</div>