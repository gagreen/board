<?PHP
 
$conn = mysql_connect('localhost','root','apmsetup');
$db_status = mysql_select_db('hanyang');
  
if(!$db_status) {
error("DB_ERROR");
exit;
}
 
$subject = $_GET[subject];
$content = $_GET[content];
$ip = $_SERVER['REMOTE_ADDR'];
  
$query = "insert into board(subject,content,wdate,readcount,ip) values('$subject','$content', now(), 0, '$ip')";
mysql_query($query);
 
 
echo ("<meta http-equiv='Refresh' content='0.1; URL=index.php'>");
?>