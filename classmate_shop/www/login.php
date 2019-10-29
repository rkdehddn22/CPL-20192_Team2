<?
    include"session.php";   //session.php파일을 포함

    ?>

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
      <div class="mm"><a href="meeting.html">모임생성&관리</a></div>
    </div>
    <!-- 오른쪽 메뉴 -->
    <div class="right_menu" style="display: none">
      <div class="right_menu_x">X</div>
      <span>마이페이지</span>
      <div id="jb-sidebar-right">

        <?php

    $host = 'localhost';
    $user = 'kang';
    $pw = '123456';
    $dbName = 'kang_db';
    $mysqli = new mysqli($host, $user, $pw, $dbName); //mysql로 접근 하도록 설정
    $memberId = $_POST['id'];
    $memberPw = $_POST['password'];
    $sql = "SELECT * FROM member WHERE id = '$memberId' AND pass = '$memberPw'"; //my sqli 연결의 끈을 생성시키고, 쿼리를 실행
      //고른다 모든것 account_info테이블로부터 id와 pwd가 일치하는 것을
    $res = $mysqli->query($sql); //실행결과는 $res에 저장


        $row = $res->fetch_array(MYSQLI_ASSOC); // 넘어온 결과를 한 행씩 패치해서 $row라는 배열에 담는다.

        if ($row != null) {                                                 //만약 배열에 존재한다면
            $_SESSION['ses_username'] = $row['name'];                           // 세션을 만들어준다.
            echo $_SESSION['ses_username'].'님 안녕하세요<p/>';                   // name님 안녕하세요.
            echo '<a href="./index.html">로그아웃 하기</a>';           //로그아웃 페이지 링크.
        }

        if($row == null){                                                    //만약 배열에 아무것도 없다면

         echo("<script>location.href='starterror.php';</script>");          //애러 화면으로 넘김



        }


?>


      </div>
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
