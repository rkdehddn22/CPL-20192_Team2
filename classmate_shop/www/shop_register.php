<meta charset="utf-8">
<?
   include "../lib/dbconn.php";
​
  if($userId != null)
  {
    $sql = "insert into store (type,shopId,address, content, event)";
    $sql = $sql."values('$type', '$shopId', ,'$address', '$content', '$event')";

    if($mysqli->query($sql)){
        echo "<script>alert('가게 등록이 완료되었습니다'); location.href='index.html';</script>";
​
    }else{
        echo "<script>alert('등록이 실패하였습니다.');location.href='index.html';</script>";
    }
  }

?>
