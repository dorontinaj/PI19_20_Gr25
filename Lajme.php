<!DOCTYPE html>
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width">
			<title>Lajmet</title>					  
	 <link rel="stylesheet" href="css/reset_P.css"/>
	 <link rel="stylesheet" href="css/cssN.css"/>
	<link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
	
		 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         
	
 <script src="projekti.js" type="text/JavaScript"></script>
	
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
      <?php   
		class Myclass
		{
		 public $font_size ="120%";
		 public $font_color = "#98A9B0";
		 public $string_name = "Lajme";
		 public function customize_print()
		 {
		 echo "<p style=font-size:".$this->font_size.";color:".$this->font_color.";font-family: \"Trebuchet MS\",Tahoma,sans-serif;>".$this->string_name."</p>";
		 }
		}
		$f = new MyClass;
		echo $f->customize_print();
		?>
  </div>
</article>
<article id="second2">
		
			<a href="projekti.php" >BALLINA</a>
			<a href="organet_e_universitetit1.php"  >ORGANET E UNIVERSITETIT</a>
			<a href="fakultetet.php">FAKULTETET</a>
			<a href="Lajme.php" >LAJME</a>
			<a href="alumni.php"  target="_blank">ALUMNI</a>
			<a href="regjistrohu.php"  target="_blank">REGJISTROHU</a>
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

   	<section id="lajmetdytesore">
	<div class="lajmetdytesore">
	<article>
	
				
	<?php
	class Date
	{
	private $date;
	function __construct($date)
	{
	
	$this->date=$date;
	$this->customize_print();
	}
	function customize_print()
	{
	echo "<h5>".$this->date."</h5>";
	}
	}
	class Lajmi extends Date{
		private $date;
		private $src_;
		private $width;
		private $height;
		public function getDate() { 
	        return $this->date; 
	    }
		    public function setDate($date) { 
	        $this->date = $date; 
	        $a = new Date($this->date);
	    } 
		function __construct($src_,$width,$height){
			
			$this->src_=$src_;
			$this->width=$width;
			$this->height=$height;
			$this->customize_print();
		}
		function customize_print(){
			
			echo "<figure>
			<img src=".$this->src_." width=".$this->width." height=".$this->height.">
			</figure>";
		}
		
	}
	
	?>
	
				
			
		<div id="Lajmi1">
			<?php 
				
				$l = new Lajmi('photos/volejboll1.jpg','"300px"','"200px"');
				$l->setDate('"21 Dec"'); 
			 ?>

			
			
			<mark><h3>VOLEJBOLLISTET E UP-SË, FITUESE TË UNIVERSIADËS SË DUBROVNIKUT</h3></mark>
	<p>Universiteti i Prishtinës “Hasan Prishtina” ka triumfuar në Universiadën e Dubrovnikut, në disiplinën e vjolejbollit për femra, e mbajtur në Kroaci.Ekipi i studenteve të UP-së, me trajner Bahri Gjinovcin, ka mposhtur në finale ekipin e Universitetit të Zagrebit nga Kroacia.Studentet e UP-së kanë qenë të pamposhtura gjatë gjithë universadës, duke mos humbur asnjë set të vetëm në të gjitha fazat e garës. Madje, lojtarja më e mirë e turneut u zgjodh studentja jonë Blinera Jaha.</p>
	
    <a href="https://www.uni-pr.edu/page.aspx?id=1,4,985">Lexo me shume...</a>
		</div>
		</article>
	<article>
		
		<div class="Lajmi2">
			<?php 
				$l2 = new Lajmi('"photos/img2.jpg"','"300px"','"200px"');
				$l2->setDate('"20 Dec"'); 
			 ?>
			
			
			<h3><abbr title="Universiteti i |Prishtines" >UP-JA</abbr> SHPËRBLEN ME MIRËNJOHJE STAFIN DHE STUDENTËT QË NDIHMUAN SHQIPËRINË PAS TËRMETIT</h3>
	<p>  Fakulteti i Ndërtimtarisë, Fakulteti i Arkitekturës, Departamenti i Psikologjisë së Fakultetit Filozofik, si dhe Parlamenti Studentor i Universitetit të Prishtinës “Hasan Prishtina”, janë shpërblyer me mirënjohje për punën vullnetare të bërë për të prekurit nga tërmeti në Shqipëri.Për këtë kontribut, rektori i UP-së, prof. dr. Marjan Dema tha se i gjithë universiteti ndihet krenar.</p>
	 <a href="https://www.uni-pr.edu/page.aspx?id=1,4,984">Lexo me shume...</a>
		</div>
		
		</article>
		<article>
		
		<div id="Lajmi3">
			<?php 
				$l3 = new Lajmi('"photos/img3.jpg"','"300px"','"200px"');
				$l3->setDate('"18 Dec"'); 
			 ?>
			
			
			
			<h3>UP-JA CERTIFIKON STUDENTËT PRAKTIKANTË, AMBASADORË SI DHE NDJEKËSIT E TRAJNIMEVE </h3>
				<p>Studentët e Universitetit të Prishtinës “Hasan Prishtina”, që përfunduan punën praktike me pagesë në njësitë e këtij institucioni, studentët ambasadorë si dhe studentët që kanë ndjekur trajnime, janë certifikuar për punën e tyre.Duke i uruar studentët për punën e tyre, i pari i UP-së, prof. dr. Marjan Dema, tha se shpreson se këta studentë, në një të ardhme të afërt, do të bëhen promotorë të ndryshimeve në vend.</p>
			<a href="https://www.uni-pr.edu/page.aspx?id=1,4,981">Lexo me shume...</a>
		</div>
		</article>
		
		
		
	</div>
	
	<div class="lajmetdytesore">
	<div>
	<article>
	
		<div id="Lajmi1">
			<figure>
			<video width="300px" height="200px" controls>
  <source src="photos/video.mp4" type="video/mp4">
 
</video>
		
			</figure>
			<div id="Lajmi1  wraper">
			<ul id="Lajmi slidebar">
				<li>
				<h5>
		"12" Dec
			
				</h5>
				</li>
			</ul>
		</div>	
			<h3>STUDETET E UNIVERSITETIT PRINTOJN ME 3D PRINTER</h3>
	<p>Studentet printojn me 3D printer ne universitetin e prishtines.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
	<a href="https://www.youtube.com/watch?v=B8iSyDtWGUQ&list=PL1JZfdUohgO7Qd4P2gH-lsT1y5o9X6-YI&index=9">Lexo me shume...</a>
		</div>
		</article>
	<article>
	
		<div id="Lajmi2">
			<?php 
				$l4 = new Lajmi('"photos/img2.jpg"','"300px"','"200px"');
				$l4->setDate('"05 Dec"'); 
			 ?>
			
			
			<h3>THIRRJE PËR PJESËMARRJE NË SHKOLLËN DIMËRORE TË BE-SË, NË PRISHTINË
</h3>
	<p> Universiteti i Prishtinës “Hasan Prishtina”, në bashkëpunim me European Young Cell Alumni Kosovo dhe projektin Young Cell Scheme, organizon Shkollën Dimërore të Bashkimit Evropian, e cila do të mbahet në amfiteatrin e ri të Fakultetit Filozofik. Shkolla Dimërore Evropiane 2020 do të mbahet ndërmjet datave 3 dhe 6 shkurt 2020.Profesorë nga KU Leuven, Universiteti i Tilburgut, Universiteti i Prishtinës si dhe Alumni Young Cell, të cilët përfunduan studimet e masterit në universitetet prestigjioze të BE-së...</p>
	<a href="https://www.uni-pr.edu/page.aspx?id=1,4,966">Lexo me shume...</a>
		</div>
		</article>
		</article>
		<article>
	
		<div id="Lajmi3">
			<?php 
				$l6 = new Lajmi('"photos/img3.jpg"','"300px"','"200px"');
				$l6->setDate('"28 Nov"'); 
			 ?>
			
			
			
			<h3>KOMUNIKATË E UP-SË NDAJ AKSIONEVE TË SHOQËRISË CIVILE </h3>
				<p>Menaxhmenti, Kolegjiumi i Dekanëve dhe Parlamenti i Studentëve i Universitetit të Prishtinës “Hasan Prishtina” shpreh shqetësimin për sulmet e paarsyeshme, që po i bëhen në vazhdimësi këtij institucioni. Këto sulme janë të drejtuara kah organet ndër më të rëndësishme, si Senati dhe Këshilli i Etikës. Po ashtu, në vazhdimësi janë sulmuar profesorati dhe menaxhmenti i universitetit.</p>
				<a href="https://www.uni-pr.edu/page.aspx?id=1,4,963">Lexo me shume...</a>
		</div>
		</article>
		</div>
		<br><br>
		<br><br>
			<div class="pagination">
  <a onclick="clickCounter()">&laquo;</a>
  <a href="Lajme.html">1</a>
  <a href="https://www.uni-pr.edu/page.aspx?id=1,4">2</a>
  <a href="https://www.uni-pr.edu/page.aspx?id=1,4">3</a>
  <a href="https://www.uni-pr.edu/page.aspx?id=1,4">4</a>
  <a href="https://www.uni-pr.edu/page.aspx?id=1,4">5</a>
  <a href="https://www.uni-pr.edu/page.aspx?id=1,4">6</a>
  <a href="Lajme.html">&raquo;</a>
</div>
		
<div id="result"></div>
	</div>
	
	</section>
	<?php
	require('footer.php');
	?>
	</body>
</html>
