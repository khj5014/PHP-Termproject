<div id="status_content">
    <div id="status_menu">
        <div id="status_login">
            <b><?php echo $_SESSION['userid'] ?></b> 님 환영합니다.
            <div id="status_logout">
                <form action="logout.php" method="POST">
                    <input type="submit" value="로그아웃">
                </form>
            </div>
        </div>
        <ul>
            <li id="home"><span style="color:gray"><i class="fas fa-home"></i></span></li>
            <li id="gear"><span style="color:gray"><i class="fas fa-cog"></i></span></li>
            <li id="user"><span style="color:gray"><i class="fas fa-users"></i></span></li>
        </ul>
    </div>
    <div id="status_target">
        <?php include "home.php";?>
 </div>
</div>