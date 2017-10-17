<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$ogrenciler = arrey(
	array("ahmet","tekin","1674555","bilgisayar"),
array("ayse","katar","1674121","muhasebe"),
array("fatma","metin","1674456","bilgisayar"),
array("nuriye","selkan","1674899","cocukgelisimi"),
array("roberto","patemos","1685465,"Müzik,44),
array("medel","matiz","müzik","33")
);
?>
<table border="1" cellspacing="0" cellpadding="5">
<?php
for ($satir=0; satir< 4; satir++){
	echo "</tr>";
	for($sutun = 0; $sutun<4; $sutun++){
		echo "<td>" . $ogrenciler[$satir][$sutun] . "<td>";

}
echo "</tr>";
}
echo count($ogrenciler);
echo count($ogrenciler[0][0]);
?>
</table>

</body>
</html>