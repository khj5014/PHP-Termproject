function check_input()
{
    if(!document.loginform.id.value){
        alert("아이디를 입력하세요");
        document.loginform.id.focus();
        return;
    }
    if(!document.loginform.pw.value){
        alert("비밀번호를 입력하세요");
        document.loginform.pw.focus();
        return;
    }
    document.loginform.submit();
}