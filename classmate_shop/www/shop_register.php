<?header("content-type:text/html; charset=UTF-8");

   include './lib/db_connect.php';
   $connect=dbconn();

$type=$_POST[type];
$shopId=$_POST[shopId];
$address=$_POST[address];
$content=$_POST[content];
$event=$_POST[event];


$query="insert into shop(type, shopId, address, content, event)
values('$type', '$shopId', '$address', '$content', '$event')";
mysql_query("set names utf8",$connect);
mysql_query($query,$connect);
mysql_close; //mysql끝내기
?>

<script>
window. alert('가게 등록이 완료되었습니다.');
location.href='index.php';
</script>
