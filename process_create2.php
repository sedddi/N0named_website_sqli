<?php
$conn=mysqli_connect("localhost","root","ksyiris00","webstudy");
mysqli_select_db($conn,'webstudy');
$sql="
INSERT INTO member
(id,pwd,name,email)
VALUES(
  '{$_POST['id']}',
  '{$_POST['pwd']}',
  '{$_POST['name']}',
  '{$_POST['email']}'
  )
  ";

// $query="select * from member where id = '$id'";
// $result=mysqli_query($conn,$query) or die("error");
// $count=mysqli_num_rows($result);
// if($count>=1){?>
//   <script>
//       alert("중복된 id 입니다. 다시 입력해주세요.");
//       location.replace("./register.html")
//   </script>
// <?php
// }

// elseif ($id=="" or $pwd=="" or $name=="" or $email=="") {
//   ?>
//     <script>
//         alert("모든 정보를 빈칸 없이 입력해주세요.");
//         location.replace("./register.html")
//     </script>
//   <?php
// }

// else{
  $result1=mysqli_query($conn, $sql);
  if($result1==false){
    echo '오류가 발생하였습니다.';
   }
   else{
     ?>
     <script>
     alert("회원가입이 완료되었습니다. 환영합니다!");
     location.replace("./index.php")
     </script>
     <?php
   }
 // }
 ?>
