<?php
//Foreach loop
$type=array('lion'=>'Animal',
			'Kiwi'=>'bird',
			'Anakonda'=>'Snake',
			'Catfish'=>'Fish',
			'Dog'=>'Animal'
				);
			foreach($type as $key=>$value)
			{
				echo "<h2>The $key is a $value.<br/></h2>";
			}
			?>