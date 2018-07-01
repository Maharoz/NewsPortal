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
$title = $_GET['dtitle'];
$header = $_GET['dheader'];
$body = $_GET['dbody'];
$slug = $_GET['dslug'];
$query = mysql_query("update newsdetails set
NewsId='$id',title='$title', header='$header', body='$body',
slug='$slug' where NewsId='$id'", $connection);
}
$query = mysql_query("select * from newsdetails", $connection);
while ($row = mysql_fetch_array($query)) {
echo "<b><a href='updatenewsdetail.php?update={$row['NewsId']}'>{$row['header']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysql_query("select * from newsdetails where NewsId=$update", $connection);
while ($row1 = mysql_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['NewsId']}' />";
echo "<br />";
echo "<label>" . "Title:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dtitle' value='{$row1['title']}' />";
echo "<br />";
echo "<label>" . "header:" . "</label>" . "<br />";
echo"<input class='input' type='text' name='dheader' value='{$row1['header']}' />";
echo "<br />";

echo "<label>" . "body:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody'>{$row1['body']}";
echo "</textarea>";

echo "<label>" . "SLUG:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dslug'>{$row1['slug']}";
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