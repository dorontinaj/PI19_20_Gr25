<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
	<title>Organet e Universitetit</title>
	<link rel="stylesheet"  href="organet_e_universitetit1.css"/>
	<link rel = "shortcut icon" type = "image/png" href = "llogoja.png.png"/>
	<link rel="stylesheet" href="reset_P.css"/>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script src="jquery-1.11.2.min.js"></script>
		 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
		 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<body onload="startTime()">
<header> <div id="header">
	<nav id="mainMenu">
		 <div><ol>
        
           <li><p id="phone">Tel: +381 38 244 183 | Mail: <a class="a" href="rektorati@uni-pr.edu">rektorati@uni-pr.edu</a></p> </li> </ol> </div>
           
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
      <h2> Organet e Fakultetit </h2>
  </div>
</article>
<article id="second2">
			<a class="a" href="projekti.html"  target="_blank">BALLINA</a>
			<a class="a" href="organet_e_universitetit1.html"  target="_blank">ORGANET E UNIVERSITETIT</a>
			<a class="a" href="faqja.html"  target="_blank">FAKULTETET</a>
			<a class="a" href="Lajme.html"  target="_blank">LAJME</a>
			<a class="a" href="alumni.html"  target="_blank">ALUMNI</a>
			<a class="a" href="regjistrimi.html"  target="_blank">REGJISTROHU</a>
		</article>
	</nav>
	</div>
</header>
	<div id="ora" style="padding-left:10px;">
	<script type="text/javascript">
var now = new Date();
var hours = now.getHours();
document.write('Ora: ', hours);
document.bgColor="#2D3E45";
//6-18 dite
if (hours > 6 && hours < 18){
 document.write ('<body style="background-color: #ccc">');
}
//17-5 nate
else if (hours > 18 || hours < 6){
 document.write ('<body style="background-color: #7D7D7D">');
}
</script></div>
<section>
	<div class="header_1">
		<div class="heading_1">
			<div class="name">
				<h2>ORGANET E UNIVERSITETIT</h2>
			</div>
<table>
<tr>
<td>
				<div class="text">
					<p>
						Organet kryesore qeverisëse të Universitetit janë 
						Këshilli Drejtues dhe Senati. Këshilli Drejtues ka
						përgjegjësi të përgjithshme strategjike për 
						funksionimin efektiv institucional të Universitetit.<br/>
						<br/>
						Senati i Universitetit është organi më i lartë akademik 
						i Universitetit. Atë e kryeson rektori i Universitetit,
						i cili është autoriteti kryesor menaxhues i 
						Universitetit. Rektori është udhëheqësi kryesor akademik e
						administrativ dhe është 
						përgjegjës për punën efektive dhe të
						rregullt të Universitetit dhe për menaxhimin e tij sipas
						politikës së përcaktuar nga Këshilli Drejtues. Rektorin e
						ndihmojnë prorektorët dhe sekretari i përgjithshëm i
						Universitetit. Detyrat e prorektorëve caktohen nga rektori
						në pajtim me dispozitat e Statutit të UP-së.<br/>
						<br/>
						Sekretari i përgjithshëm i Universitetit është zyrtari më i
						lartë ekzekutiv dhe administrativ i Universitetit. Ai
						përgjigjet rektorit për administrim efikas, ekonomik dhe
						efektiv në të gjitha nivelet e Universitetit.
					</p>
				</div>
		</div>
	</div>
	</section>
	<hr class="hr"/>
	<section class="sondazh">



	<h3>
		<?php 

		$fjalia = "Sondazh";
		echo $fjalia, "\n";
        echo strlen($fjalia);

	 	?>
	 </h3>



	<h4><b>Cilat gjuhë të huaja flisni?</b><h4>
			
			<form style="font-size:15px; color:#601A36">
			<input type="checkbox" name="text" value="Brenda shtetit">Shqip<br>
			<input type="checkbox" name="text" value="Jashte shtetit">Anglisht<br>
			<input type="checkbox" name="text" value="Brenda shtetit">Gjermanisht<br>
			<input type="checkbox" name="text" value="Jashte shtetit">Frengjisht<br>
			
		</form>
	<h4><b>Ku deshironi t'i vazhdoni studimet e larta?</b><h4>
	<form style="font-size:15px; color:#601A36">
			<input type="radio" name="text" value="Brenda shtetit">Brenda shtetit<br>
			<input type="radio" name="text" value="Jashte shtetit">Jashtë Shtetit<br>
			<input type=reset value="VOTO"  onClick="alert('Vota juaj &#235sht&#235 ruajtur!')" 
			style="height:30px; width:65px; border-radius:10px; background:#601A36; color:white; font-weight:bold;font-size:12pt; font-family:Arial"  >  
<div class="drag">
<script>
function allowDrop(ev) {
  ev.preventDefault();
}
function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}
function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>
</head>
<body>

      

<p>
	<?php

		$fjalia =  "Lëviz foton në mes të dy div elementeve.";
		echo $fjalia, "<br>";
        $zv = str_replace('dy','tre',$fjalia);
        print_r($zv);

	?>
</p>



<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
  <img src="universiteti.png" draggable="true" ondragstart="drag(event)" id="drag1" width="88" height="31">
</div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>
	</section>
</td>
<td>
<div class="table11">
<section id="table">
		<div class="heading_2">
			<div class="name2">
				<h2>UNIVERSITETI</h2>
			</div>
				<ul class="ul_uni">
					<li><a href="page.aspx?id=1,12">Këshilli Drejtues</a></li>
					<li><a href="page.aspx?id=1,59">Rektori</a></li>
					<li><a href="page.aspx?id=1,60">Prorektorët</a></li>
					<li><a href="page.aspx?id=1,61">Sekretari i përgjithshëm</a></li>
					<li><a href="page.aspx?id=1,62">Senati</a></li>
					<li><a href="page.aspx?id=1,63">Parlamenti i Studentëve</a></li>
				</ul>
		</div>
<hr>
	<div class="heading_3">
		<div class="name3">
			<h2>POSTIMET E FUNDIT</h2>
		</div>
			<ul class="post">
				<figure>
				<div class="img1">
					<a href="https://klankosova.tv/volejbollistet-e-up-se-fituese-te-universiades-se-dubrovnikut-ne-volejboll/"><img src="volej1.jpg" style="width:155px;height:125px;" alt="Volejbollistet e UP-së, fituese të Universiadës së         Dubrovni..." /></a> 
			     
						
				</div>
				</figure>
					<div class="post_1">
						<h6><a href="https://klankosova.tv/volejbollistet-e-up-se-fituese-te-universiades-se-dubrovnikut-ne-volejboll/">
                                     VOLEJBOLLISTET E UP-SË ,FITUESE TË UNIVERSIADËS SË DUBROVNIKUT NË VOLEJBOLL</a></h6>
                        <span class="dataa">21/12/2019</span>
					</div>
				<figure>
				<div class="img2">
					<a href="https://www.uni-pr.edu/page.aspx?id=2,4,984"><img src="images1.jpg" style="width:155px;height:125px;" alt="UP-ja shpërblen me mirënjohje stafin dhe studentët që ndihm..." /></a>
			    
						
				</div>
				</figure>
						<div class="post_2">
							<h6><a href="https://www.uni-pr.edu/page.aspx?id=2,4,984">UP-JA SHPËRBLEN ME MIRËNJOHJE STAFIN DHE STUDENTËT QË NDIHMUAN SHQIPËRINË PAS TËRMETIT</a></h6>
                            <span class="dataa">20/12/2019</span>
			     		</div>
			</ul>
	</div>
<hr>
 
	<div class="heading_4">
		<div class="name4">
			<h2> VEGZA RELEVANTE</h2>
		</div>
			<ul class="ul-vegza">
				<li><a href='http://pvk.uni-pr.edu' target="_blank">Platforma Virtuale e Karrierës</a></li>
				<li><a href='https://t2p-centers.com/' target="_blank">Creating Theory To Practice Centers For Innovation And Employment</a></li>
				<li><a href='http://ec.europa.eu/programmes/erasmus-plus/resources_en' target="_blank">Erasmus+ Programme Guide
				<li><a href='https://www.upisc.net/' target="_blank">UPISC'18</a></li>
				<li><a href='https://ekarriera.uni-pr.edu' target="_blank">E-Karriera</a></li>
				<li><a href='https://alumni.uni-pr.edu' target="_blank">Alumni</a></li>
				<li><a href='http://euforia-kosovo.com' target="_blank">EUFORIA</a></li>
				<li><a href='https://lnss-projects.eu/bal/western-balkan-online-library-platform/' target="_blank">Western Balkan Online Library</a></li>
				<li><a href='https://www.summerschoolsineurope.eu/' target="_blank">Summer Schools in Europe</a></li>
				<li><a href='http://dimtv-project.al/' target="_blank">DIMTV</a></li>
			</ul>
	</div>
</section>
</div>
</td>
</tr>
</table>
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
<tr>
	<td>
<ul style="list-style: none;">
<li><a href="https://twitter.com/Rektorati">
				 <span class="ikonat">
					<i class="fab fa-twitter" style="font-size:40px;color:white" aria-hidden="true"></i>
				</span> </a></li>
</ul>
</td>
<td>
<ul style="list-style: none;">
<li><a href="https://www.instagram.com/p/BzOXH6FhTzR/">
				 <span class="ikonat">
					<i class="fab fa-instagram" style="font-size:40px;color:white" aria-hidden="true"></i>
				</span> </a></li>
</ul>
</td>
<td>
<ul style="list-style: none;">
<li><a href="https://www.facebook.com/UniversitetiPrishtines/">
	<span class="ikonat"> <i class="fab fa-facebook-square" style="font-size:40px;color:white" aria-hidden="true"></i> 
	</span></a></li>
</ul>
</td>
<td>
<ul style="list-style: none;">
<li> 
<address>
Adresa: Rr."George Bush",Nr.31, 10 000 Prishtine 
Republika e Kosoves<br>
Phone: +381 38 244 183<br>
Fax: +381 38 244 187 <br>
Email: <a class="a" href="rektorati@uni-pr.edu">rektorati@uni-pr.edu</a><br> 
</address> 
</li>
</ul>
</td>
</tbody></table>
</div>
</nav>
<nav id="secondaryFooter">
	<div id="Copyright"><h6>
Copyright &copy 2013-All Rights Reserved-Domain Name</h6>
</div>
</nav>
</div>
</footer>
</body>
</html>
