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
//$connection = mysql_connect("localhost", "root","");
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("mysql", $connection);
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$header1 = $_GET['dheader1'];
$header2 = $_GET['dheader2'];
$header4 = $_GET['dheader4'];
$header5 = $_GET['dheader5'];

$header6 = $_GET['dheader6'];
$header7 = $_GET['dheader7'];
$header8 = $_GET['dheader8'];
$header9 = $_GET['dheader9'];





$query = mysql_query("update worldpage set
RowId='$id',header1='$header1',header2='$header2',
    header4='$header4',header5='$header5',header6='$header6',header7='$header7',header8='$header8',header9='$header9'
 where RowId='$id'", $connection);
}
$query = mysql_query("select * from worldpage", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updateworldpage.php?update={$row['RowId']}'>{$row['header1']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from worldpage where RowId=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['RowId']}' />";
echo "<br />";
echo "<label>" . "header1:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader1' value='{$row1['header1']}' />";
echo "<br />";

echo "<label>" . "header2:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader2' value='{$row1['header2']}' />";
echo "<br />";

echo "<label>" . "header4:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader4' value='{$row1['header4']}' />";
echo "<br />";

echo "<label>" . "header5:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader5' value='{$row1['header5']}' />";
echo "<br />";


echo "<label>" . "header6:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader6' value='{$row1['header6']}' />";
echo "<br />";

echo "<label>" . "header7:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader7' value='{$row1['header7']}' />";
echo "<br />";

echo "<label>" . "header8:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader8' value='{$row1['header8']}' />";
echo "<br />";

echo "<label>" . "header9:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader9'>{$row1['header9']}";
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