<?php
//sorting arrays
$meal=array('breakfast'=>'Bun',
			'Lunch'=>'Mushrooms',
			'Snack'=>'Fruit',
			'Dinner'=>'Vegetable'
			);
echo "Before sorting<br>";
foreach($meal as $key =>$value)
{
	echo "$meal: $key $value <br> ";
}

asort($meal);
echo "After sorting <br>";
foreach($meal as $key =>$value)
{
	echo "$meal:$key $value <br>";
}
?>




