<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" type="text/css" href="css/meeting.css" />
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/meeting.js"></script>
    <title>모임생성&관리</title>
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
      <div class="mm"><a href="meeting.php">모임생성&관리</a></div>
    </div>
    <!-- 오른쪽 메뉴 -->
    <div class="right_menu" style="display: none">
      <div class="right_menu_x">X</div>
      <span>마이페이지</span>
      <div id="jb-sidebar-right">
        <h2>login</h2>
            <form  method="post" action="login.php" > <!--post로 login.php로 로그인정보 보냄-->
            ID : <input type="text" name="id" /><br />
            PASSWORD : <input type="password" name="password" /><br />
            <input type="submit" value="login"/>
            <input type="button" name ="버튼" value="회원가입" onclick="location.href='http://rkdehddn22.iptime.org/CPL-20192_Team2/classmate_shop/www/sign_up.php'"
;>
           </form>
</div>
      <div class="mm"><a href="information_modify.html">정보수정</a></div>
      <div class="mm"><a href="my_group.html">내 모임</a></div>
      <div class="mm"><a href="shop_registration.html">가게등록</a></div>
    </div>
    <!-- 모임관리 & 생성 -->
    <div class="wrap">
      <h2>모임관리 & 생성</h2>
      <div><strong>나의 모임</strong> </div>
      <div class="contentbox" style="margin-top:10px">
   </div>
     <div class="contentbox" style="margin-top:10px">
     </div>
     <div class="contentbox" style="margin-top:10px">
     </div>

      <input class="btn" type="button" name="" value="모임생성" style="margin-top:40px" onclick="location.href='meeting_add.html';">
    </div>
  </body>
</html>