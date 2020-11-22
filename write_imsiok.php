<?php

$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite");
mysqli_select_db($conn,'nonwebsite');

$username = $_COOKIE['id'];
$userpw = password_hash($_COOKIE['pw'], PASSWORD_DEFAULT);
$title = $_POST['title'];
$content = $_POST['text'];
$date = date('Y-m-d');



$tmpfile =  $_FILES['b_file']['tmp_name'];
$o_name = $_FILES['b_file']['name'];
$filename = iconv("UTF-8", "EUC-KR",$_FILES['b_file']['name']);
$folder = "./upload/".$filename;
move_uploaded_file($tmpfile,$folder);
$file=$o_name;

$sql="
INSERT INTO nonboard
(id,pw,title,content,date,file)
VALUES(
   '$username',
   '$userpw',
	 '$title',
	 '$content',
	 '$date',
   '$file'
  )
  ";

// echo $username;
// echo "<br><br>";
// echo $userpw;
// echo "<br><br>";
// echo $title;
// echo "<br><br>";
// echo $content;
// echo "<br><br>";
// echo $date;

$result=mysqli_query($conn, $sql);
   if($result==false){
     echo '오류가 발생하였습니다.';
   }
   else{
     ?>
     <script>
     alert("글 등록이 성공적으로 완료되었습니다. 환영합니다!");
     location.replace("./realindex.php")

     </script>
     <?php
   }
?>
