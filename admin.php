<?php
session_start();
$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite");
mysqli_select_db($conn,'nonwebsite');
$user=$_SESSION["id"];
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>admin page</title>
<link rel="stylesheet" type="text/css" href="/N0named_web/style.css" />
</head>
<body>
<div id="board_area">
  <?php echo "<h1> $user 의 페이지</h1>";?>
  <!-- <FORM action="nonwrite.php" method="post" name="글 작성 페이지"> -->
    <input type="button" value="WRITE" onclick="location.href='nonwrite.php'" style="float:right;">
  <!-- </FORM><br><br> -->
    <br><br>
    <h3 align=center>게시글 목록</h3>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="200">글쓴이</th>
                <th width="100">작성일</th>
            </tr>
        </thead>
        <?php
        $query="select * from nonboard;";
        $result=mysqli_query($conn, $query) or die("query error");
        while($row=mysqli_fetch_array($result)){?>
          <tr>
          <td><?php echo $row['num']; ?></td>
          <td><a href='view.php?num=<?php echo $row['num']?>'><?php echo $row['title'];?></a></td>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['date']; ?></td>
        </tr><?php
      }?>
    </table>
  </div>
  <div id="member_area"><br><br>
      <h3 align=center>회원 목록</h3>
      <table class="list-table">
        <thead>
            <tr>
                <th width="200">아이디</th>
                <th width="200">비밀번호</th>
            </tr>
          </thead>
          <?php
          $query="select * from member;";
          $result=mysqli_query($conn, $query) or die("query error");
          while($row=mysqli_fetch_array($result)){?>
            <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['pw']; ?></td>
          </tr><?php
        }?>
      </table>
  </div>
</body>
</html>
