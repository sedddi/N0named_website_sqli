<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sign in and become our member!</title>
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
    .mybutton{
      border:1x solid #ff0080;
      background-color:#8C8C8C;
      font:20px 고딕;
      font-weight:bold;
      color:#99004C;
      padding:2px 9px;
      margin-left: 130px;
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
  <!-- <form action="process_create.php" method="POST"> -->
  <form action="process_create.php" method="GET">

    <p align="center"><font face="고딕" size="4"><b>SIGN UP</b></font></p><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspUsername
    <input type="text" name="id" id="username" placeholder="아이디" class="putstring"><br><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPassword&nbsp
    <input type="password" name="pw" id="password" placeholder="비밀번호" class="putstring"><br><br>

    <input type="reset" value="RESET" class="resetbutton">
    <input type="submit" value="SUBMIT" class="mybutton">
  </form>
  </body>
  </html>
