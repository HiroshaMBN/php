<?php
function f($x)
{
	$a=$x^3-2*$x^2+sqrt($x)-sqrt(43)+6.3;
	$b=$x^2+0.05*$x+3.14;
	$c=$a/$b;
	echo "<h2><font color=ff346>Answer is $c</font color></h2>";
}
f(10);
f(50);
?>