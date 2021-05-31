<?php
$id = $_GET['id'];
include "db.php";
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
            <?php
            $sql = "select title,content from report where id = '$id'";
            $rows_view = mysqli_fetch_array(mq($sql));


            ?>
            <div id="status_target">
                <div name="title">
                    제목 : <?= $rows_view['title']; ?>
                </div>
                <div name="content">
                    내용 : <?= $rows_view['content']; ?>
                </div>
                <div name="menu">
                    <div name="edit">
                        <button onclick="location.href=''"></button>
                    </div>
                    <div name="delete">
                        <button onclick="location.href=''"></button>
                    </div>
                </div>
            </div>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>