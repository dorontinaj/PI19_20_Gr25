<?php

				$file="./newfile.txt";
				$current= file_get_contents($file);
				
				$lines=explode("\n", $current);

				foreach($lines as $newline){
					echo $newline . '<br>';
				}

?>
