<?php
$con=mysqli_connect("localhost","root","ksyiris00","webstudy") or die("fail");

$id=$_POST['id'];
$pwd=$_POST['pwd'];
$name=$_POST['name'];
$email=$_POST['email'];

// mysqli_select_db($con,'webstudy');

$query="select * from member where id = '$id'";
$result=$con->query($query);
$count=mysqli_num_rows($result);
if($count==1){?>
  <script>
      alert("중복된 id 입니다. 다시 입력해주세요.");
      location.replace("./register.html")
  </script>
<?php
}
else if($id=="" or $pwd=="" or $name=="" or $email=="")
{?>
  <script>
      alert("모든 정보를 빈칸 없이 입력해주세요.");
      location.replace("./register.html")
  </script>
<?php}

$sql="
INSERT INTO member
(id,pwd,name,email)
VALUES(
  '$id',
  '$pwd',
  '$name',
  '$email')";
$result=mysqli_query($con,$sql) or die ("error");
if($result==true)
{?>
  <script>
      alert("회원가입 완료!");
      location.replace("./login.html")
  </script>
<?php
}
else{
  echo "오류";
}
?>
