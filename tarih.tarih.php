<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

$t1 =strtotime("Nov 11");
$t2 =strtotime("December 25")
$t3 = strtotime("11 may 2018")
 $kacGun = ceil(($t1-time())/60/60/24);
 echo "Vizeye $kacGun gün var <br>";
$kacGun = ceil(($t1-time())/60/60/24);
echo "finale $kacGun gün var <br>";
$kacGun = ceil(($t1-time())/60/60/24);
echo "Mezun olmama $kacGun gün var <br>";

?>
<?php
$baslama = strtotime("17 10 2017");
//$bitis = strtotime("+6 weeks", $baslama);

while ($baslama < $enddate) {
  echo date("M d", $baslama) . "<br>";
  $baslama = strtotime("+1 week", $baslama);
}
?>
</body>
</html>
