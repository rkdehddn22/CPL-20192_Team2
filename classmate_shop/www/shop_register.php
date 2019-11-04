<?header("content-type:text/html; charset=UTF-8");

   include './lib/db_connect.php';
   $connect=dbconn();

$type=$_POST[type];
$shopId=$_POST[shopId];
$sample4_postcode=$_POST[sample4_postcode];
$sample4_roadAddress=$_POST[sample4_roadAddress];
$sample4_jibunAddress=$_POST[sample4_jibunAddress];
$sample4_detailAddress=$_POST[sample4_detailAddress];
$sample4_extraAddress=$_POST[sample4_extraAddress];
$content=$_POST[content];
$event1=$_POST[event1];
$event3=$_POST[event2];
$event3=$_POST[event3];

$regdate=date("YmdHis", time()); //날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip

$query="insert into shop1(type, shopId, sample4_postcode, sample4_roadAddress,sample4_jibunAddress, sample4_detailAddress,sample4_extraAddress, content, event1, event2, event3)
values('$type', '$shopId', '$sample4_postcode' ,'$sample4_roadAddress', '$sample4_jibunAddress','$sample4_detailAddress', '$sample4_extraAddress', '$content', '$event1','$event2','$event3')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('가게 등록이 완료되었습니다.');
location.href='index.php';
</script>
