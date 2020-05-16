<?php
				$content= htmlspecialchars($_POST['sugj'], ENT_QUOTES, 'UTF-8');
				file_put_contents('./newfile.txt', $content ,);
?>
	
