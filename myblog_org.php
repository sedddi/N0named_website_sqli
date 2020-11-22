<?php
include $_SERVER['DOCUMENT_ROOT']."/db.php";
$user=$_SESSION["id"];
 ?>

<!doctype html>
<head>
<meta charset="UTF-8">
<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="N0named_web/style.css" />
</head>
<body>
<div id="board_area">

<?php echo "<h1>$user 의 블로그</h1>";
echo $_COOKIE['id']?>

  <h4>글 목록</h4>
  <FORM action="nonwrite.php" method="post" name="글 작성 페이지">
    <input type="button" value="WRITE" onclick="location.href='nonwrite.php'" style="float:right;">
    </FORM><br>
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 5개까지 표시
          $sql = mq("select * from nonboard order by idx desc limit 0,5");
            while($board = $sql->fetch_array())
            {
              //title변수에 DB에서 가져온 title을 선택
              $title=$board["title"];
              if(strlen($title)>30)
              {
                //title이 30을 넘어서면 ...표시
                $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
              }
        ?>
      <tbody>
        <tr>
          <td width="70"><?php echo $board['num']; ?></td>
          <td width="500"><a href=""><?php echo $title;?></a></td>
          <td width="120"><?php echo $board['id'];?></td>
          <td width="100"><?php echo $board['date'];?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
  </div>
</body>
</html>



$query="select * from nonboard where id='$user';";
$result=mysqli_query($conn, $query) or die("query error");
while($row=mysqli_fetch_array($result)){?>
  echo "<tr>";
  echo "<td>$row[num]</td>";
  echo "<td><a href='view.php?num=<?php echo $row['num']?>'>$row[title]</a></td>";
  echo "<td> $row[id]</td>";
  echo "<td> $row[date]</td>";
  echo "</tr>";
}?>
