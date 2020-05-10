<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width">
	 <link rel="stylesheet" href="reset_P.css"/>
	 <link rel="stylesheet" href="organet_uni.css"/>
	  <link rel = "shortcut icon" type = "image/png" href = "llogoja.png">
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

<style> 
#panel,#flip
{
padding:5px;
text-align:left;
background-color:#e5eecc;
border:solid 1px #c3c3c3;
}
#panel
{
padding:50px;
display:none;
}
</style>


	 	<title>Fakultetet</title>
</head>
	<body onload="startTime()">

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
      <h2> Fakultetet </h2>
  </div>
</article>
<article id="second2">
		
			<a href="projekti.html"  target="_blank">BALLINA</a>
			<a href="organet_e_universitetit1.html"  target="_blank">ORGANET E UNIVERSITETIT</a>
			<a href="faqja.html"  target="_blank">FAKULTETET</a>
			<a href="Lajme.html"  target="_blank">LAJME</a>
			<a href="alumni.html"  target="_blank">ALUMNI</a>
	                <a href="regjistrimi.html"  target="_blank">REGJISTROHU</a>
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

		<div class="First">
		<div id="Fk" onclick="window.open('http://filozofiku.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightgreen';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti Filozofik</h5>
					<i class="fa fa-university" style="font-size:60px;color:green"  aria-hidden="true"></i>
				
		</div>
		<div id="Fk" onclick="window.open('http://fshmn.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#F9966B';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Shkencave Matematike-Natyrore</h5>
				<span>
					<i class="fa fa-flask" style="font-size:60px;color:red" aria-hidden="true"></i>
				</span>
		</div>
		<div id="Fk"onclick="window.open('http://filologjia.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Filologjise </h5>
			<span><i class="fa fa-book" style="font-size:60px;color:blue"  aria-hidden="true"></i></span>
		</div>
		</div>
		<div class="Second">
		<div id="Fk" onclick="window.open('http://juridiku.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti Juridik </h5>
			<span><i class="fa fa-balance-scale" style="font-size:60px;color:blue"  aria-hidden="true"></i></span>
		
		</div>
		<div id="Fk" onclick="window.open('http://ekonomiku.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#FFF8C6';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti Ekonomik</h5>
			<span><i class="fa fa-bar-chart" style="font-size:60px;color:yellow"  aria-hidden="true"></i></span>
		</div>
		</div>
		<div class="First">
		<div id="Fk" onclick="window.open('http://fna.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#E6A9EC';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti Ndertimatrise dhe Arkitektures </h5>
			<i class="fa fa-object-ungroup" style="font-size:60px;color:purple"  aria-hidden="true"></i>
			
		</div>
		<div id="Fk" onclick="window.open('http://fiek.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightgreen';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Inxhinierise Elektrike dhe Kompjuterike</h5>
			<i class="fa fa-microchip" style="font-size:60px;color:green"  aria-hidden="true"></i>
			
		</div>
		<div id="Fk" onclick="window.open('http://fim.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#FFDF9E';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Inxhinierise Mekanike</h5>
			<i class="fa fa-cogs" style="font-size:60px;color:orange"  aria-hidden="true"></i>
		</div>
	</div>
	<div class="Second">
		<div id="Fk" onclick="window.open('http://mjekesia.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightsteelblue';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Mjeksise</h5>
			<i class="fa fa-heartbeat" style="font-size:60px;color:blue"  aria-hidden="true"></i>
			
		</div>

		<div id="Fk" onclick="window.open('http://arte.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightblue';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Arteve</h5>
			<i class="fa fa-film" style="font-size:60px;color:blue"  aria-hidden="true"></i>
		</div>
		</div>
		<div class="First">
		<div id="Fk" onclick="window.open('http://fbv.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#FFF8C6';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Bujqesise dhe Veterinarise</h5>
			<i class="fa fa-bug" style="font-size:60px;color:yellow"  aria-hidden="true"></i>
			
		</div>
		<div id="Fk" onclick="window.open('http://fshs.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='#E6A9EC';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Edukimit Fizik dhe i Sportit</h5>
			<i class="fa fa-futbol-o" style="font-size:60px;color:purple"  aria-hidden="true"></i>
		</div>
		<div id="Fk" onclick="window.open('http://edukimi.uni-pr.edu/','mywindow');" style="cursor: pointer;" onmouseover="this.style.background='lightgreen';" onmouseout="this.style.background='#D2D2D2';">&nbsp;
			<h5>Fakulteti i Edukimit</h5>
			<i class='fas fa-chalkboard-teacher' style="font-size:60px;color:green"  aria-hidden="true"></i>
			
		</div>
		</div>
	</div>

	<table id="Statistika" width="100%" height="100%" cellpadding="10">
	    <tr colspan="5">
		<td>
	
				<h3> 42,006 </h3>
				<h4> <mark>STUDENT</mark> </h4>
		
		</td>
		<td>
			
				<h3> 13 </h3>
				<h4> <mark>FAKULTETE</mark> </h4>
			
		</td>
		<td>
			
				<h3> 900 </h3>
				<h4> <mark>PERSONEL AKADEMIK </mark></h4>
			
		</td>
		<td>
			
				<h3> 300 </h3>
				<h4> <mark>ADMINISTRATE</mark> </h4>
			
		</td>
    </tr>
    </table>
 
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
<li> <address>
Adresa:
Rr."George Bush",Nr.31, 10 000 Prishtine,
 
Republika e Kosoves<br> <br> 

Phone: +381 38 244 183<br><br> 

Fax: +381 38 244 187 <br><br> 

Email: <a href="rektorati@uni-pr.edu">rektorati@uni-pr.edu</a><br> 


</address> </li>

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
