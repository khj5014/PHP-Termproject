<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6c03ff6e85.js" crossorigin="anonymous"></script><!--폰트 어썸 !-->
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
        <?php
        if(isset($_SESSION['userid']))
          include "status.php";
        else
          include "loginbox.php";
        ?>
    </section>
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</body>

</html>
