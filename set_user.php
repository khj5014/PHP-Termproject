
<script type="text/javascript" src="./js/common.js"></script>
<div>
    <form  name ="create_user" action="create_user.php" method="POST" onsubmit="return check_userset();">
        <ul>
            <div>
                <input id="id" type="text" name="id" placeholder="ID"> <div id="id_check">아이디를 입력해주세요</div>
            </div>
            <div>
                <input type="password" name="pw1" placeholder="PW">
            </div>
            <div>
                <input type="password" name="pw2" placeholder="PW">
            </div>
            <div>
                <input type="text" name="email_front">@<input type="text" name="email_end">
            </div>
        </ul>
        <input type="submit">추가하기
    </form>
</div>
<script>
    
</script>
<div>

</div>