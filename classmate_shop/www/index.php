
<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="css/index.css" />

<head>
    <meta charset="utf-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width" />
    <meta http-equiv="Content-Security-Policy" content="default-src * 'unsafe-inline'; style-src 'self' 'unsafe-inline'; media-src *" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <title>동창가게</title>
</head>

<body>
  <?
  include ("./lib/db_connect.php");
  $connect= dbconn();
  $member= member();
  ?>

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
      <td>
      <?if($member[user_id]){
      echo    $member[nick_name]." 님 환영합니다.";
      }else{?>
          <div class="mm">  <a href="./member/login.php"><strong>로그인</strong></a></div>

      <div class="mm">  <a href="./member/join.php"><strong>회원가입</strong></a></div>
      <?}?>
      <?if($member[user_id]){?>
        <br>
      <div class="mm"><a href="./member/logout.php"><strong>로그아웃</strong></a></div>
      <?}?>
      </td>
      <div class="mm"><a href="information_modify.html">정보수정</a></div>
      <div class="mm"><a href="my_group.html">내 모임</a></div>
      <div class="mm"><a href="shop_registration.html">가게등록</a></div>
    </div>

    <div class="wrap">
      <!-- 검색 창 -->
      <div class="search">
        <input type="text" placeholder="검색어 입력">
        <div class="search_button"><button><img src="img/search.png"></button></div>
      </div>
      <!-- 이벤트 창 -->
      <div class="contentbox">
        이벤트
        <br>
        경북대학교 총 동창회

      </div>

      <div class="contentbox">
        이벤트
      </div>

      <div class="contentbox">
        이벤트
      </div>

      <div class="contentbox">
        이벤트
      </div>
    </div>
</body>

</html>
