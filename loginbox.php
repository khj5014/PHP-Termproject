<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <div id="main_con">
        <div id="login_box">
            <div id="login_title">
                <span>로그인</span>
            </div>
            <div id="login_form">
                <form name="loginform" action="login.php" method="POST">
                    <ul>
                        <div>
                            <input type="text" name="id" placeholder="ID">
                        </div>
                        <div>
                            <input type="password" name="pw" placeholder="PW">
                        </div>
                    </ul>
                    <input type="button" value="로그인" onclick="check_input()">
                </form>
            </div>
        </div>
    </div>
</body>

</html>