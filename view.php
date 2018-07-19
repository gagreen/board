<?PHP
$conn = mysql_connect('localhost','root','apmsetup');
 
$db_status = mysql_select_db('hanyang');
 
if(!$db_status) {
error("DE_ERROR");
exit;
}
 
$num = $_GET[num];

$query = "select subject, content, ip from board where num=".$num;
$result = mysql_query($query);
 
while($row = mysql_fetch_row($result)) {
print "제목 : <input type=text name=subject value=". $row[0] . " /><br/>";
print "내용 : <textarea rows=10 cols=50 name=content>". $row[1] . "</textarea><br/>";
print "게시물번호 : ". $num. " , 아이피주소 : " . $row[2];
} 

$queryupdate = "update board set readcount=readcount+1 where num=".$num;
mysql_query($queryupdate);

?>