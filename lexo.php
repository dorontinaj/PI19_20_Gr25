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
	$(document).ready(function(){
        $(".flip").click(function(){
            $(".panel").animate({
                height: "toggle"
            });
        });
    });

    </script>
</head>
<body>
<header> <div id="header">
  <nav id="mainMenu">
     <div><ol>
        
           <li><p>Tel: +381 38 244 183 | Mail: <a href="rektorati@uni-pr.edu">rektorati@uni-pr.edu</a></p> </li> </ol> </div>
           
             <div class="search-container">
              <form class="example" action="/action_page.php">
               <input type="text" placeholder="Kerkoni ketu..." name="search">
              </form>
             </div>  
      </nav>   
  <nav id="secondaryMenu">
 <article id="second1">
 <div id="second1">
      <h1> <span>Universiteti</span></h1> <br>
     <h2>Fakultetet</h2>
  </div>
</article>
<article id="second2">
    
			<a href="Projekti.php"  target="_self">BALLINA</a>
			<a href="organet_e_universitetit1.php"  target="_self">ORGANET E UNIVERSITETIT</a>
			<a href="fakultetet.php"  target="_self">FAKULTETET</a>
			<a href="Lajme.php"  target="_self">LAJME</a>
			<a href="alumni.php"  target="_blank">ALUMNI</a>
	        <a href="regjistrohu.php"  target="_self">REGJISTROHU</a>
    </article>
  </nav>
  </div>
</header>
<div id="KP">
<h2>Kritikat paraprake:</h2>
<?php
				$current = fopen("./newfile.txt", "r") or die("Unable to open file!");
				$read= fread($current,filesize("newfile.txt"));
				$lines=explode("\n", $read);
				foreach($lines as $newline){
					echo $newline . '<br>';
				}
				fclose($current);
?>
</div>
 <footer>
<div id="footer">

<nav id="mainFooter">
<div class="flip"><div class="flip1">Kliko per t'i pare informacionet rreth nesh</div></div>
<div class="panel">
  <table class="table2">
<thead>
  <tr>
  <th width="280">TWITTER</th>  
  <th width="280">INSTAGRAM</th>
  <th width="280">FACEBOOK</th>
    <th width="280">KONTAKTI</th>
</tr>

  </thead>

<tbody>
