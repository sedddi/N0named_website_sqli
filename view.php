<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>write down your story!</title>
  <style>
    body{
      <br>
      display: table-cell;
      vertical-align: middle;
      background-color: #FFFFFF;
      padding-top: 50px;
      padding: 60px 40px;
    }

    html{
      display: table;
      margin: auto;
      background-color: #FFD8D8;
    }

    .putstring{
      padding:5px 5px;
    }

    .resetbutton{
      border:1x solid #ff0080;
      background-color:#D5D5D5;
      font:20px 고딕;
      font-weight:bold;
      color:#353535;
      padding:2px 8px;
      margin-right: 130px;
    }
  </style>
  </head>
  <body>
  </body>
  </html>


<?php
session_start();
$conn=mysqli_connect("localhost","root","ksyiris00","nonwebsite");
mysqli_select_db($conn,'nonwebsite');
$user=$_SESSION["id"];
echo "<p align='center'><font face='고딕' size='4'><b>게시글</b></font></p><br>";
$index=$_GET['num'];
$page='myblog.php';
if ($user=='admin'){
  $page='admin.php';
}
?>

<input type="button" value="게시글 목록" onclick="location.href='<?php echo $page ?>'" style="float:left;"><br><br>
<table border="1" width="500" height="500">
    <?php
    $query="select * from nonboard where num=$index;";
    $result=mysqli_query($conn, $query) or die("query error");
    while($row=mysqli_fetch_array($result)){?>
      <tr align="center">
        <td>제목</td><td colspan=4><?php echo $row['title'];?></td>
      </tr>
      <tr>
        <td align="center">파일</td><td colspan=4><a href="./upload/<?php echo $row['file'];?>" download><?php echo $row['file'];?></a></td>
      </tr>
      <tr align="center">
      <td>작성자</td><td colspan=2><?php echo $row['id']; ?></td><td>작성일</td><td><?php echo $row['date']; ?></td>
      </tr>
      <tr height="430">
      <td colspan=5 valign=top><?php echo $row['content'];?></td>
      </tr>
      <?php
    }
?>
</table>


<form method="post" enctype="multipart/form-data">
  <p>
    <table border="1">
    <tr><td align="center" width="80"><b><?php echo $user?></b></td><td><textarea name="text" rows="5" cols="45" placeholder="댓글을 달아주세요."></textarea></p></td>
    <td><input type="submit" value="SUBMIT" onclick="javascript: form.action='./writecomment.php?num=<?php echo $index?>';" style="float:right;"></td>
    </tr>
    </table>
</form>

<?php
$query="select * from comment where num=$index;";
$result=mysqli_query($conn, $query) or die("query error");
while($row=mysqli_fetch_array($result)){?>
  <table border="1">
  <tr><td align="center" width="80"><?php echo $row['id']?></td><td><textarea name="text" rows="5" cols="55"><?php echo $row['content'];?></textarea></td></tr>
  </table>
<?php
}
?>
