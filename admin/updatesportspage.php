
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
$connection = mysqli_connect('localhost', 'root', '', 'mysql');
if (isset($_GET['submit'])) {
$id = $_GET['did'];
$header6 = $_GET['dheader6'];

$header7 = $_GET['dheader7'];

$header8 = $_GET['dheader8'];

$header9 = $_GET['dheader9'];

$header1 = $_GET['dheader1'];

$header2 = $_GET['dheader2'];

$header3 = $_GET['dheader3'];

$body1 = $_GET['dbody1'];

$body2 = $_GET['dbody2'];

$header4 = $_GET['dheader4'];

$header5 = $_GET['dheader5'];

$header10 = $_GET['dheader10'];

$body10 = $_GET['dbody10'];

$body5 = $_GET['dbody5'];

$body4 = $_GET['dbody4'];




$query = mysqli_query($connection,"update sportspage set
RowId='$id',header6='$header6', header7='$header7'
    
,header8='$header8', header9='$header9',header1='$header1',header2='$header2',header3='$header3',body1='$body1',body2='$body2',header4='$header4',header5='$header5',header10='$header10',body10='$body10',body5='$body5',body4='$body4'
 where RowId='$id'" );
}
$query = mysqli_query($connection,"select * from sportspage" );
while ($row = mysqli_fetch_array($query)) {
echo "<b><a href='updatesportspage.php?update={$row['RowId']}'>{$row['RowId']}</a></b>";
echo "<br />";
}
?>
</div><?php
if (isset($_GET['update'])) {
$update = $_GET['update'];
$query1 = mysqli_query( $connection,"select * from sportspage where RowId=$update");
while ($row1 = mysqli_fetch_array($query1)) {
echo "<form class='form' method='get'>";
echo "<h2>Update Form</h2>";
echo "<hr/>";
echo"<input class='input' type='hidden' name='did' value='{$row1['RowId']}' />";
echo "<br />";



echo "<label>" . "header6:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader6'>{$row1['header6']}";
echo "</textarea>";
echo "<br />";





echo "<label>" . "header7:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader7'>{$row1['header7']}";
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

echo "<label>" . "header1:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader1'>{$row1['header1']}";
echo "</textarea>";
echo "<br />";
echo "<label>" . "header2:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader2'>{$row1['header2']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header3:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader3'>{$row1['header3']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body1:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody1'>{$row1['body1']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body2:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody2'>{$row1['body2']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header4:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader4'>{$row1['header4']}";
echo "</textarea>";
echo "<br />";


echo "<label>" . "header5:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader5'>{$row1['header5']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "header10:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dheader10'>{$row1['header10']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body10:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody10'>{$row1['body10']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body5:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody5'>{$row1['body5']}";
echo "</textarea>";
echo "<br />";

echo "<label>" . "body4:" . "</label>" . "<br />";
echo "<textarea rows='15' cols='15' name='dbody4'>{$row1['body4']}";
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
mysqli_close($connection);
?>
</body>
</html>