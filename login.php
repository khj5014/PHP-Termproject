<!-- 로그인 -->
<?php
    session_start();
    $conn =mysqli_connect("localhost","root","root","member") or die("fail");

    //id ,pw
    $id =$_POST['id'];
    $pw= $_POST['pw'];

    // check
    $query = "select * from member where id='$id'";
    $result = $conn->query($query);

   if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_assoc($result);

        if($row['pw']==$pw){
            $_SESSION['userid']=$id;

            if(isset($_SESSION['userid'])){
                ?>
                <script>
                    alert('환영합니다.');
                    location.replace("./index.php");
                </script>
            <?php
            }
            else{
                echo "session fail";
            }
        }
        else{
            ?>
            <script>
                alert("아이디와 비밀번호를 확인해주세요.");
                history.back();
            </script>
            <?php
        }
    }
    else{
        ?>
        <script>
        alert("아이디와 비밀번호를 확인해주세요.");
                history.back();

        </script>
        <?php
    }
?>
