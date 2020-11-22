<?php
$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite");
mysqli_select_db($conn,'nonwebsite');
$sql="
INSERT INTO member
(id,pw)
VALUES(
  '{$_POST['id']}',
  '{$_POST['pw']}'
  )
  ";
$result=mysqli_query($conn, $sql);
   if($result==false){
     echo '오류가 발생하였습니다.';
   }
   else{
     ?>
     <script>
     alert("회원가입이 완료되었습니다. 환영합니다!");
     location.replace("./realindex.php")

     </script>
     <?php
   }
 ?>
