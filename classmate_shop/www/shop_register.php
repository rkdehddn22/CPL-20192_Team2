<?header("content-type:text/html; charset=UTF-8");        // 가게 등록에 관련된 PHP //

   include './lib/db_connect.php';
   $connect=dbconn();

$type=$_POST[type];
$shopId=$_POST[shopId];
$zip=$_POST[zip];
$zip=$_POST[addr1];
$zip=$_POST[addr2];
$content=$_POST[content];
$event1=$_POST[event1];
$event3=$_POST[event2];
$event3=$_POST[event3];

$regdate=date("YmdHis", time()); //날짜 시간
$ip=getenv("REMOTE_ADDR"); //ip


$query="insert into shop(type, shopId,zip,addr1,addr2,content, event1, event2, event3)
values('$type', '$shopId','$zip','$addr1','$addr2', '$content', '$event1','$event2','$event3')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('가게 등록이 완료되었습니다.');
location.href='index.php';
</script>
