<meta charset="utf-8">
<?
   include "../lib/dbconn.php";

   $sql = "select * from member where id='$id'";
   $result = mysql_query($sql, $connect);
   $exist_id = mysql_num_rows($result);

   if($exist_id) {
     echo("
           <script>
             window.alert('해당 아이디가 존재합니다.')
             history.go(-1)
           </script>
         ");
         exit;
   }
   else
   {            // 레코드 삽입 명령을 $sql에 입력
	    $sql = "insert into member(id, pass, name, nick, hp, email, ele, mid, hi, regist_day, level) ";
		$sql .= "values('$id', '$pass', '$name', '$nick', '$hp', '$email','$ele','$mid','$hi', '$regist_day', 9)";
    mysql_query("set names utf8",$connect);
		mysql_query($sql, $connect);
   }

   mysql_close();
   echo "
	   <script>
	    location.href = '../index.html';
	   </script>
	";
?>
