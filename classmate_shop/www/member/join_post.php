<?header("content-type:text/html; charset=UTF-8");
/**************************************************************
***************************************************************
PHP Script Produced by: 박정원 PJW(Jimmy)
Email: pjws0321@naver.com / pjws0321@gmail.com
The purpose of the product : Educational (교육용)
Notice: 본 스크립트는 교육용도로 만들어 졌습니다.
Blog  http://blog.naver.com/pjws0321
****************************************************************
***************************************************************/

   include '../lib/db_connect.php';
   $connect=dbconn();

$id=$_POST[id];
$user_id=$_POST[user_id];
$name=$_POST[name];
$nick_name=$_POST[nick_name];
$birth=$_POST[birth];
$sex=$_POST[sex];
$tel=$_POST[tel];
$email=$_POST[email];
$pws=$_POST[pw];
$addr_1=$_POST[addr_1];
$addr_2=$_POST[addr_2];
$addr_3=$_POST[addr_3];
$pw=md5($pws);  //비밀번호 암호화

$regdate=date("YmdHis", time()); //날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip

$query="insert into member(id, user_id, name, nick_name, birth, sex, tel, email, pw, addr_1, addr_2, addr_3, regdate, ip)
values('$id', '$user_id', '$name', '$nick_name', '$birth', '$sex', '$tel', '$email', '$pw', '$addr_1', '$addr_2', '$addr_3', '$regdate', '$ip')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('회원가입이 완료 되었습니다.');
location.href='../index.php';
</script>
