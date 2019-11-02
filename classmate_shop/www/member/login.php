@@ -1,55 +0,0 @@
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/login.css" />
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/v4-shims.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <title>로그인</title>
  </head>

  <body>
    <header>
      <div class="toggle"><img src="img/toggle.png" ></div>
      <div class="logo"><img src="img/people.png"></div>
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
      <div class="mm"><a href="login.html">로그인</a></div>
      <div class="mm"><a href="information_modify.html">정보수정</a></div>
      <div class="mm"><a href="my_group.html">내 모임</a></div>
      <div class="mm"><a href="shop_registration.html">가게등록</a></div>
    </div>
    <!-- 로그인 창 -->
    <div class="login_box">
      <h1>로그인</h1>
      <div class="text_box">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="" value="">
      </div>

      <div class="text_box">
        <i class="fas fa-lock"></i>
        <input type="password" placeholder="password" name="" value="">
      </div>

      <input class="btn_in" type="button" name="" value="로그인">
      <input class="btn_up" type="button" name="" value="회원가입" onclick="location.href='sign_up.php';">

    </div>
  </body>
</html>
