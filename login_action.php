<?php
session_start();

$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite") or die("fail");

// $id=$_POST['id'];
// $pw=$_POST['pw'];
$id=$_GET['id'];
$pw=$_GET['pw'];

$query="select * from member where id = '$id'";
$result=$conn->query($query);

if(mysqli_num_rows($result)==1){
  $row=mysqli_fetch_assoc($result);

  if($row['pw']==$pw){
    $_SESSION['id']=$id;
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
    else{
      echo "비밀번호 불일치";
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
  }
  else{
    ?>
    <script>
    //alert("로그인 실패");
    history.back();
    </script>
<?php
    }
    ?>
