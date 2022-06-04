<?php
//Area of the circle
function cir_area($r,$h)
{
	$area_ht=(22/7)*$r^2*$h;
	echo "Radius $r, <br> Height $h <br>";
	echo"Area of the circle and hight $area_ht<br>";
}
cir_area(10,20);
?>