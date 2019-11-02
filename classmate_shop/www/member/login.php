<!DOCTYPE html>
<html lang="ko" dir="ltr">
<link rel="stylesheet" type="text/css" href="../css/login.css" />
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/login.js"></script>
    <title>로그인</title>
  </head>

  <body>
    <?
    include ("../lib/db_connect.php");
    $connect= dbconn();
    $member= member();
    ?>
    <header>
      <div class="toggle"><img src="../img/toggle.png" ></div>
      <div class="logo"><img src="../img/people.png"></div>
      <div class="title">내 동기가 하는 가게</div>
    </header>

    <!-- 왼쪽 메뉴 -->
    <div class="left_menu" style="display: none">
      <div class="left_menu_x">X</div>
      <span><a href="index.html">HOME</span>
      <div class="mm"><a href="search_shop.html">가게검색</a></div>
      <div class="mm"><a href="classmate_meeting.html">동창모임</a></div>
      <div class="mm"><a href="meeting.html">모임생성&관리</a></div>
    </div>
    <!-- 오른쪽 메뉴 -->
    <div class="right_menu" style="display: none">
      <div class="right_menu_x">X</div>
      <span>마이페이지</span>
      <td width='100%' height='50' align='right'>
      <?if($member[user_id]){
      echo $member[name]."(".$member[user_id].") 님 환영합니다.";
      }else{?>
          <a href="../member/login.php"><strong>[로그인]</strong></a>
      &nbsp; &nbsp; &nbsp;
      <a href="../member/join.php"><strong>[회원가입]</strong></a>
      <?}?>
      &nbsp; &nbsp;
      <?if($member[user_id]){?>
      <a href="./member/logout.php"><strong>[로그아웃]</strong></a>
      <?}?>

      </td>
      <div class="mm"><a href="information_modify.html">정보수정</a></div>
      <div class="mm"><a href="my_group.html">내 모임</a></div>
      <div class="mm"><a href="shop_registration.html">가게등록</a></div>
    </div>
    <!-- 로그인 창 -->
  <div class="login_box">
    <h1>로그인</h1>
    <form action='./login_post.php' name='login' method='POST'>
      <div class="text_box">
        <i class="fas fa-user"></i>
        <input type="text" placeholder='Username' name='user_id' value="">
      </div>
      <div class="text_box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder='password' name='pw'value="">
      </div>
    <tr>
    <td width='100%' heigh'30' align='center'>
    <input class="btn_in "type='submit' value='전송'>
    </td>
    </form>
    </div>
  </body>
</html>
