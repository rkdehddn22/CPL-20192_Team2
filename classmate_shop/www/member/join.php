<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <!--다국어 언어: UTF-8-->
<title>회원가입</title>
</head>

<body>
<TABLE BORDER='0' CELLSPACING='0' CELLPADDING='0' WIDTH='100%' HEIGHT='100%' ALIGN='CENTER' VALIGN='TOP'>
<TR>
<TD WIDTH='100%'  HEIGHT='70'  ALIGN='LEFT'  VALIGN='MIDDLE' BGCOLOR='#E89C05'>
&nbsp; &nbsp; <a href='../index.php'><strong>[홈]</strong></a>
</TD>

<TR>
<TD WIDTH='100%'  HEIGHT='100%'  ALIGN='CENTER'  VALIGN='TOP'>
<table border='0' width='750' height='100%' bgcolor='FFFFFF' align='center' cellspacing='0' cellpadding='0'>
<tr>

<form action='./join_post.php' name='member' method='post'>
    <td width='100%' height='300' bgcolor='EEEEEE' align='left' valign='top'>
	 <p><strong>&nbsp; &nbsp;[ 회 원 가 입  ]</strong></p> <br>

<input type='hidden' name='id' value='test'>
<li>이름: <input type='text' name='name' size='10'>
<br><br>
<li>회원아이디: <input type='text' name='user_id' size='10'>
<br><br>
<li>비밀번호: <input type='password' name='pw' size='10'>
<br><br>
<li>닉네임: <input type='text' name='nick_name' size='10'>
<br><br>
<li>생년월일: <input type='text' name='birth' size='10'>
  <br><br>
<li>성별: <input type='radio' name='sex' value="male">남자&nbsp; &nbsp;  <input type='radio' name='sex' value="female">여자
<br><br>
<li>연락처: <input type='text' name='tel' size='10'>
  <br><br>
  <li>이메일 <input type='text' name='email' size='10'>
<br><br>
<li>초등학교: <input type='text' name='addr_1' size='15'>
  <br><br>
<li>중학교: <input type='text' name='addr_2' size='15'>
<br><br>
<li>고등학교: <input type='text' name='addr_3' size='15'>
<br><br>

<input type='submit' value='가입하기'>
	 </td>
	 </form>



	 <tr>
	 <td height='100%'  bgcolor='EEEEEE' align='center'> &nbsp;</td>

	 </tr>
	 </table>

	 </TD>
	 </TR>
	 </TABLE>

</body>
</html>
