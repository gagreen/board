<table border=1>
<tr>
	<td width=50>번호</td>
	<td width=400>제목</td>
	<td width=80>날짜</td>
	<td width=50>조회수</td>
</tr>

<?PHP
$conn = mysql_connect('localhost','root','apmsetup');
 
$db_status = mysql_select_db('hanyang');
 
if(!$db_status) {
error("DE_ERROR");
exit;
}
 
$query = "select num, subject, wdate, readcount from board order by num desc";
$result = mysql_query($query);
 
while($row = mysql_fetch_row($result)) {
print "<tr>";
print "<td><a href=deleteaction.php?num=".$row[0].">" . $row[0] . "</a></td>";
print "<td><a href=view.php?num=".$row[0].">" . $row[1] . "</a></td>";
print "<td>" . $row[2] . "</td>";
print "<td>" . $row[3] . "</td>";
print "</tr>";
}
 
?>
</table>
<a href="insert.php">입력</a>