<?php
	for($i = 1; $i <= 12; $i++){
		echo'<br/>Tabla del ', $i, '<br/><br/>';
		for($j = 1; $j <= 12; $j++)
			echo $i, ' x ', $j, ' = ', $i * $j, '<br/>';
	}
?>
