<?php 
    session_start();
    if(isset($_SESSION['userid'])) {
        echo $_SESSION['userid'];
    }
?>
<div id="top">
    <div id="top_con">
        <h3>
            <a href="index.php">적당한 제목</a>
        </h3>
        
    </div>
    <div id="menu_bar">
        <ul>
            <li><a href="">menu1</a></li>
            <li><a href="">menu2</a></li>
            <li><a href="">menu3</a></li>
        </ul>
    </div>
    <div id="main_img">
        <img src="img/15125.png" width="100%" alt="">
    </div>
</div>