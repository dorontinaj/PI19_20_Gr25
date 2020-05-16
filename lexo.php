<?php
				$current = fopen("./newfile.txt", "r") or die("Unable to open file!");
				$read= fread($current,filesize("newfile.txt"));
				$lines=explode("\n", $read);
				foreach($lines as $newline){
					echo $newline . '<br>';
				}
				fclose($current);
?>
