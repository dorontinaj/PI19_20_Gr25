<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <meta name="apple-mobile-web-app-capable" content="yes">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, intial-scale=1">

	 <title>Universiteti</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/reset_P.css"/>
     <link rel="stylesheet" href="css/stilizimiP.css"/>
     <link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
	 	 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script src="jquery-1.11.2.min.js"></script>
	 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!-- Pjesa shtese per validim me ajax, funksioni per sugjerime -->
        <script>
        function showHint(str) {
        if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
        } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "searchhint.php?q=" + str, true);//emri faqes qe referon searchhint.php
    xmlhttp.send();
  }
}
        </script>
		 <script> 
	 
 $(document).ready(function(){
        $(".flip").click(function(){
            $(".panel").animate({
                height: "toggle"
            });
        });
    });


function initMap() {
  
  var uni = {lat: 42.65877778, lng: 21.16083333};

  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uni});
 
  var marker = new google.maps.Marker({position: uni, map: map});
}
    </script>
   
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdcJyejplhd46tw-QkzDedfx_msqjVlOs&callback=initMap">
    </script>

    

</head>
	<body><div class="page-wrap">
<header><div id="header">
<nav id="mainMenu">
         <div><ol>
           <li><p>Tel: +381 38 244 183 | Mail: <a href="rektorati@uni-pr.edu">rektorati@uni-pr.edu</a>
		</p>
       	 </li>
		   </ol></div>
             <div class="search-container">
              <!-- Pjesa e ndryshuar qe validohet me js dhe ajax-->
			 <form action="searchpage.php" class="example" method="post">
             <input type="text" id="search" name="fname" placeholder="Kerkoni ketu" onkeyup="showHint(this.value)">
             <span id ="txtHint">Sugjerime:</span>
			 </form>
             </div>   
      </nav>   
 <nav id="secondaryMenu">
 <article id="second1">
 <div id="second1">
      <h1> <span>Universiteti</span></h1> <br>
    
      
     </div>
	</article>
	<article id="second2">
     
	               <a href="projekti.php">BALLINA</a>
			<a href="organet_e_universitetit1.php">ORGANET E UNIVERSITETIT</a>
			<a href="fakultetet.php">FAKULTETET</a>
			<a href="Lajme.php">LAJME</a>
			<a href="alumni.php"  target="_blank">ALUMNI</a>
	          	<a href="regjistrohu.php"  target="_blank">REGJISTROHU</a>
	
		   </article>
      </nav>
	  </div>
   </header>
   <div class="Nheader">
        		 <div class="textbox">
         <figure id="figura">

           <img src="photos/libra1.jpg" alt="Books" class="center" width="100%" height="100%">
		    <div class="text-block">
			<h3>Historia e Universitetit</h3>
		   <p>Institucioni i parë i arsimit të lartë në Kosovë ishte Shkolla e Lartë Pedagogjike në Prishtinë (1958). Në fillim kishte këto grupe mësimore: Grupi i Gjuhës dhe i Letërsisë Shqipe, Grupi i Gjuhës dhe i Letërsisë Serbokroate, Grupi i Biologjisë, i Gjeografisë dhe i Kimisë, Grupi i BAT-it dhe i Fizikës, Grupi i Matematikës dhe i Fizikës. </p>
		   <button id="readmore"><a href="https://sq.wikipedia.org/wiki/Universiteti_i_Prishtin%C3%ABs">Lexo me shume</a></button>
		   </div>
		   <div class="footerfig">
		   <article><h2><a href="Lista_studenteve.php" style="text-decoration:none;">Lista e Studenteve </a> </h2>
		   </article>
		   <article>
		   <h2><a href="Kycu.php" style="text-decoration:none;">Kycu ne Alumni </a></h2>
		   </article>
		   <article>
		   <h2><a href="lexo.php" style="text-decoration:none;">Lexo Kritikat </a></h2>
		   </article>
		   </div>
		   
         </figure>
		 </div> 
      
	  <article id="mainMain"> 
	<div class="mainMain1">
    <article id="part1">
	<div>
	<h3>Informacione ndihmese</h3>
	  <div class="line"></div>
	<ul>
	<?php
	class Myclass
	{
	private $font_size;
	private $font_color;
	private $string_value;
	private $http_;
	function __construct($font_size,$font_color,$string_value,$http_)
	{
	$this->font_size = $font_size;
	$this->font_color = $font_color;
	$this->string_value = $string_value;
	$this->http_=$http_;
	$this->customize_print();
	}
	function customize_print()
	{
	echo "<a href=".$this->http_." style=font-size:".$this->font_size.";color:".$this->font_color."; target=\"_blank\"><li>".$this->string_value."</li></a>";
	}
	}
	$a = new MyClass('110%','#2D3E45','Administrata Qendrore','"https://www.uni-pr.edu/page.aspx?id=1,13"');
	$b = new MyClass('110%','#2D3E45','Zyra per marrdhenie jashte vendit','"https://uni-pr.edu/page.aspx?id=1,7"'); 
	$c = new MyClass('110%','#2D3E45','Mesimdhenia dhe ceshtjet e studenteve','"https://uni-pr.edu/page.aspx?id=1,97"');
	$d = new MyClass('110%','#2D3E45','Kerkime dhe projekte te sponzorizuara','"https://uni-pr.edu/page.aspx?id=1,80"');
	$e = new MyClass('110%','#2D3E45','Qendra per zhvillim te karrieres','"https://uni-pr.edu/page.aspx?id=1,66"');
	$f = new MyClass('110%','#2D3E45','Qendra per persosmeri ne mesimdhenie','"https://uni-pr.edu/page.aspx?id=1,78"');
	$g = new MyClass('110%','#2D3E45','Publikime shkencore','"https://uni-pr.edu/page.aspx?id=1,90"');
	?>
	
	</ul>
	</div><br>
	<h3>Si te na gjeni</h3>
      <div class="line"></div>
    <div id="map"></div>
	<br>
	<br>
	<p>Rr. "George Bush", Nr.31, 10 000 Prishtinë Republika e Kosovës
	Phone : +381 38 244 183 /244 186
	Fax : +381 38 244 187 <br>
	Email : rektorati@uni-pr.edu</p>
	
	</article>
	<article id="part2">
	<div>
	<article>
	<div id="part2.1">
	<h3>Shiko universitetin</h3>
	<div class="line"></div>
	<img src="photos/fiek.jpg">
	<p>Kampusi ka një pozicion vërtet të mirë në qender te Prishtinës me nje hapsir mjaft te madhe ku jane te vendosura shumica e fakulteteve gjithashtu ne qender te kampusit eshte e vendosur bibloteka kombetare.Kjo bibliotekë është institucioni më i lartë bibliotekar në Kosovë i themeluar nga Parlamenti.  </p>
	<br>
	<a href="#">Shiko me shume  <i class="arrow right"></i></a>
	
	</div>
	
	</article>
	<article>
	<div id="part22">
	<h3>Aktivitete sportive</h3>
	<div class="line"></div>
	<h5>Dec 21,2019: <span style="color:#2D3E45">Volejboll</span></h5>
		<img src="photos/volejboll.jpg">
		<p>Universiteti i Prishtinës “Hasan Prishtina” ka triumfuar në Universiadën e Dubrovnikut, në disiplinën e vjolejbollit për femra, e mbajtur në Kroaci.</p>
		<div class="line2"></div>
	<h5>Jan 2,2020: <span style="color:#2D3E45">Basketboll</span></h5>
		<img src="photos/basketboll.jpg">
		<p>Prishtina dominon në basketbollin vendor, ngjarjet e vitit 2019 në Kosovë</p>
		<a href="#">Shiko te gjitha  <i class="arrow right"></i></a>
		</div>
	</article>
	<article>
	<div id="part23">
	<h3>Eventet e ardhshme</h3>
	<div class="line"></div>
	<h5>APLIKO PËR PUNË PRAKTIKE NË UNINVERSITETIN E PRISHTINËS “HASAN PRISHTINA”</h5>
	<h4>Jan 2,2020: </h4>
	<p>Ftohen studentë të UP-së që të aplikojnë për punë praktike (praktikant) në njësitë akademike dhe Administratë qendroretë Universitetittë Prishtinës “Hasan Prishtina “.</p>
	
	<div class="line2"></div>
	<h5>NJOFTIM: FTESË PËR PJESËMARRJE NË PANAIRIN E EDUKIMIT "STUDIONI NË FRANCË"</h5>
	<h4>Dec 21,2019: </h4>
	<p id="part25">Universiteti i Prishtinës “Hasan Prishtina“ ka nderin t’ju ftojë që të merrni pjesë në edicionin e 2-të të Panairit të Edukimit "Studioni në Francë" 2019. Panairi organizohet me datë 30 tetor 2019 (e mërkurë, nga ora: 09:00 - 17:00 dhe do të mbahet në Hollin e Bibliotekës Kombëtare të Kosovës "Pjetër Bogdani". 
</p></div>
	</article>
	
	
	<div id="part24">
	
	<article><h3>Studentet e Diplomuar</h3><div class="line"></div>
		<img src="photos/diploma.jpg">
	</article>
	<article><h3>Mbledhja e Studenteve</h3><div class="line"></div>
		<img src="photos/mbledhja.jpg">
	</article>
	<article><h3>Ligjeratat e Studenteve</h3><div class="line"></div>
		<img src="photos/ligjerata.jpg">
	</article>
	</div>
	</div>

	</article>
   </div>
</article>
<?php
require('footer.php');
?>
  
	  
</div>
		 	  
</div>
</body>

</html>
