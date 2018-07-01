<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="maindiv">
<div class="divA">
<div class="title">
<h2>Update Data Using PHP</h2>
</div>
<div class="divB">
<div class="divD">
<p>Click On Menu</p>
<?php
$connection = mysql_connect("localhost", "Maharuj", "zRjbJRamf6WUmZZD");
$db = mysql_select_db("news", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$header1 = $_GET['dheader1'];
$body1 = $_GET['dbody1'];
$header2 = $_GET['dheader2'];
$body2 = $_GET['dbody2'];
$header8 = $_GET['dheader8'];

$header9 = $_GET['dheader9'];
$header13 = $_GET['dheader13'];
$breaking= $_GET['dbreaking'];
$body3 = $_GET['dbody3'];

$query = mysql_query("update homepage set
RowId='$id',header1='$header1', header2='$header2', body1='$body1',body2='$body2',header8='$header8',header9='$header9',header13='$header13',breaking='$breaking',body3='$body3'
 where RowId='$id'", $connection);
}
$query = mysql_query("select * from homepage", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updatehomepage.php?update={$row['RowId']}'>{$row['header1']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from homepage where RowId=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['RowId']}' />";
echo "<br />";
echo "<label>" . "header1:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader1' value='{$row1['header1']}' />";
echo "<br />";
echo "<label>" . "body1:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dbody1' value='{$row1['body1']}' />";
echo "<br />";

echo "<label>" . "header2:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader2'>{$row1['header2']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body2:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody2'>{$row1['body2']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header8:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader8'>{$row1['header8']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header9:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader9'>{$row1['header9']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header13:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader13'>{$row1['header13']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "Breaking:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbreaking'>{$row1['breaking']}";
echo "</textarea>";
echo "<br />";


echo "<label>" . "body3:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody3'>{$row1['body3']}";
echo "</textarea>";
echo "<br />";


echo "<input class='submit' type='submit' name='submit' value='update' />";
echo "</form>";
}
}
if (isset($_GET['submit'])) {
echo '<div class="form" id="form3"><br><br><br><br><br><br>
<Span>Data Updated Successfuly......!!</span></div>';
}
?>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
</div><?php
mysql_close($connection);
?>
</body>
</html>