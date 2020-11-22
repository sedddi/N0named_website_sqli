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

$user=$_SESSION['id'];


echo "<p align='center'><font face='고딕' size='4'><b>회원정보</b></font></p><br>";
echo "<font face='고딕' size='3'><b> $user 님</b>의 접속을 환영합니다</font><br>";
echo "아이디 : $user";
?>

<form method="post" enctype="multipart/form-data">
  <input type="button" value="LOGOUT" onclick="location.href='nonlogout.php'" style="float:right;">
  <br>
  <p><input type="text" name="title" placeholder="제목" style="width:510px;"></p>
  <div id="in_file">
      <input type="file" value="1" name="b_file" />
  </div>
  <p><textarea name="text" rows="15" cols="70" placeholder="내용을 입력해주세요."></textarea></p>
  <input type="submit" value="SUBMIT" onclick="javascript: form.action='./write_imsiok.php';" style="float:right;">
  <input type="submit" value="미리보기" onclick="javascript: form.action='./write_miri.php';">
</form>
