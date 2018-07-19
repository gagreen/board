<?PHP
 
$conn = mysql_connect('localhost','root','apmsetup');
$db_status = mysql_select_db('hanyang');
  
if(!$db_status) {
error("DB_ERROR");
exit;
}
 
$num = $_GET[num];
  
$query = "delete from board where num=".$num;
mysql_query($query);
 
 
echo ("<meta http-equiv='Refresh' content='0.1; URL=index.php'>");
?>