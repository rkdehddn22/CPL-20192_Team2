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
      <span><a href="index.php">HOME</span>
      <div class="mm"><a href="search_shop.html">가게검색</a></div>
      <div class="mm"><a href="classmate_meeting.html">동창모임</a></div>
      <div class="mm"><a href="meeting.php">모임생성&관리</a></div>
    </div>
    <!-- 오른쪽 메뉴 -->
    <div class="right_menu" style="display: none">
      <div class="right_menu_x">X</div>
      <span>마이페이지</span>
      <td width='100%' height='50' align='right'>
      <?if($member[user_id]){
      echo $member[name]."(".$member[user_id].") 님 환영합니다.";
      }else{?>
          <a href="./member/login.php"><strong>[로그인]</strong></a>
      &nbsp; &nbsp; &nbsp;
      <a href="./member/join.php"><strong>[회원가입]</strong></a>
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
