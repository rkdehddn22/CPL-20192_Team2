<?header("content-type:text/html; charset=UTF-8");
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
$sch_1=$_POST[sch_1];
$sch_2=$_POST[sch_2];
$sch_3=$_POST[sch_3];
$pw=md5($pws);  //비밀번호 암호화

$regdate=date("YmdHis", time()); //날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip

$query="insert into member(id, user_id, name, nick_name, birth, sex, tel, email, pw, sch_1, sch_2, sch_3, regdate, ip)
values('$id', '$user_id', '$name', '$nick_name', '$birth', '$sex', '$tel', '$email', '$pw', '$sch_1', '$sch_2', '$sch_3', '$regdate', '$ip')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('회원가입이 완료 되었습니다.');
location.href='../index.php';
</script>
