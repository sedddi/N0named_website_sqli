<?php
session_start();

$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite");
mysqli_select_db($conn,'nonwebsite');

$user=$_SESSION['id'];
$index=$_GET['num'];
$text=$_POST['text'];
//
// echo $user;
// echo "<br><br>";
// echo $index;
// echo "<br><br>";
// echo $text;

$sql="
INSERT INTO comment
(num,id,content)
VALUES(
  '$index',
  '$user',
  '$text'
  )
  ";

  $result=mysqli_query($conn, $sql);
     if($result==false){
       echo '오류가 발생하였습니다.';
     }
     else{
       ?>
       <script>
       alert("댓글 등록이 완료되었습니다.");
       history.back();
       </script>
       <?php
     }
 ?>
