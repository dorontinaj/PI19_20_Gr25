<?php

 				$myfile = fopen("./newfile.txt", "a") or die("Unable to open file!");
				$txt = htmlspecialchars($_POST['krit'], ENT_QUOTES, 'UTF-8');
				$txtt = $txt . PHP_EOL;
				fwrite($myfile, $txtt);
				fclose($myfile);
				echo "Faleminderit qe kontribuat!";
?>
