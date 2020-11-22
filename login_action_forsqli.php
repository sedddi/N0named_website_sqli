<?php
session_start();

$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite") or die("fail");

// $id=$_POST['id'];
// $pw=$_POST['pw'];
// $id=$_GET['id'];
// $pw=$_GET['pw'];
$check_id=$_GET['id'];
$check_pw=$_GET['pw'];

$check_id=str_replace('#','',$check_id);
$check_id=str_replace(' ','',$check_id);
$id=str_replace(';','',$check_id);

$check_pw=str_replace('#','',$check_id);
$check_pw=str_replace(' ','',$check_id);
$pw=str_replace(';','',$check_id);

$query="select * from member where id='$id' and pw ='$pw'";
$result=mysqli_query($conn, $query);
// if(preg_match("/ # | ; | |/",$_GET['id']))exit("no hack");
$row=mysqli_fetch_assoc($result);
if(isset($row)==True){
    $_SESSION['id']=$row['id'];
    setcookie('id',$id);
    setcookie('pw',$pw);
    if($_SESSION['id']=='admin'){
      ?>
      <script>
      alert("관리자님 안녕하세요.");
      location.replace("./admin.php")
      </script>
<?php
    }
    elseif(isset($_SESSION['id'])){
      ?>
      <script>
      alert("로그인 성공.");
      location.replace("./myblog.php")
      </script>
<?php
    }
  }
else{
    ?>
    <script>
    alert("아이디 혹은 비밀번호 불일치");
    history.back();
    </script>
  <?php
}
    ?>
