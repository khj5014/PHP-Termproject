<?php
var_dump($_REQUEST);
$option = $_GET['option'];
$search = $_GET['search_target'];
?>

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c03ff6e85.js" crossorigin="anonymous"></script>
    <!--폰트 어썸 !-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script><!-- 제이쿼리 -->
    <script type="text/javascript" src="./js/common.js"></script> <!-- 개인 스크립트 -->
    <link rel="stylesheet" href="./css/style.css"> <!--  스타일 시트 주소 -->
    <title>관리페이지</title>
</head>

<body>
    <header>
        <?php include "header.php"; ?>
    </header>
    <section>
        <div id="status_content">
            <div id="status_menu">
                <div id="status_login">
                    <b><?php echo $_SESSION['userid'] ?></b>님 환영합니다<br>
                    등급 : <?php echo $_SESSION['u_rank'] ?>
                    <div id="status_logout">
                        <form action="logout.php" method="POST">
                            <input type="submit" value="로그아웃">
                        </form>
                        <?php
                        if ($_SESSION['u_rank'] == 'admin')
                            echo "<button onclick=\"set_user()\" value=\"회원관리\">회원관리</button>"
                        ?>
                    </div>
                </div>
                <ul>
                    <li id="home"><span style="color:gray"><i class="fas fa-home"></i></span></li>
                    <li id="gear"><span style="color:gray"><i class="fas fa-cog"></i></span></li>
                    <li id="user"><span style="color:gray"><i class="fas fa-users"></i></span></li>
                </ul>
            </div>
            <div id="status_target">
                <div id="title">
                    검색결과
                </div>
                <table>
                    <thead>
                        <th>id</th>
                        <th>제목</th>
                        <th>작성자</th>
                    </thead>
                    <?php
                    if ($option == 'content') {
                        $search = "%" . $search . "%";
                        $query_search = "select * from content where $option like '$search'";
                    } else {
                        $query_search = "select * from content where $option = '$search'";
                    }

                    $result = mq($query_search);
                    while ($rows_search = mysqli_fetch_array($result)) {
                        echo '<tr><td>' . $rows_search['id'] .
                            '</td><td><a href="view_content.php?id='
                            . $rows_search['id']
                            . '">'  . $rows_search['title'] .
                            '</a></td><td>' . $rows_search['writer'] . '</td><tr>';
                    }
                    ?>
                </table>
                <div name="search_bar">
                    <form action="view_search.php" method="GET">
                        <div>
                            <select name="option">
                                <option value="writer">작성자</option>
                                <option value="content">내용</option>
                            </select>
                            <input type="text" name="search_target">
                            <input type="submit">
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>