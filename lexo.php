<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width">
	 <link rel="stylesheet" href="reset_P.css"/>
	 <link rel="stylesheet" href="css/Lista.css"/>
	  <link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery-1.11.2.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
	$("#flip").text("Kliko per ta mbyllur/hapur");
	
  });
});
</script>

<script> 
<?php
				$current = fopen("./newfile.txt", "r") or die("Unable to open file!");
				$read= fread($current,filesize("newfile.txt"));
				$lines=explode("\n", $read);
				foreach($lines as $newline){
					echo $newline . '<br>';
				}
				fclose($current);
?>
