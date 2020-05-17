<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Elsa Nishori">
    <title>Shoqata Alumni|Welcome</title>
    <!-- Insertimi i ikones(logos) ne title bar -->
    <link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
    <link rel="stylesheet"  href="css/alumni.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
     .error {color: #ab0e18;}
    </style>
    <script>
$(document).ready(function(){
  $("p").dblclick(function(){
    $("#fsheh").hide();
    alert("Paragrafi eshte fshehur");
  });
});
</script>
 <script>
$(document).ready(function(){
  $(".box").click(function(){
    $("#fsheh").show();
   
  });
});
</script>
<script> 
$(document).ready(function(){
  $("img").click(function(){
    $(".fotod").animate({top: '75px'});
      
  });
});
</script> 
<script>
$(document).ready(function(){
  $(".shoqata").click(function(){
    var txt = "";
    txt += "Document width/height: " + $(document).width();
    txt += "x" + $(document).height() + "\n";
    txt += "Window width/height: " + $(window).width();
    txt += "x" + $(window).height();
    alert(txt);
  });
});
</script>
<script> 


 $(document).ready(function(){
        $("#titulli").click(function(){
            $("#lista").animate({
                height: "toggle"
            });
        });
    });
 $(document).ready(function(){
        $(".flip").click(function(){
            $(".panel").animate({
                height: "toggle"
            });
        });
    });

</script>
<body>
<header>
    <!-- Perdorim tagun semantik div per arsye se ne header titullin e kemi te shenuar jo ne fillim por ka pak hapsire dhe na duhet ta manipulojme ne css -->
     <div class="manipulimi">  
     <div id="titulli">
     <h3>
        ALUMNI UP
     </h3>
    </div>
    <nav id="lista">
        <ul>
            <li><a href="#brendesia">Ballina</a></li>
            <li><a href="#rreth_nesh">Rreth Nesh</a></li>
            <li><a href="#alumni.sh">Alumni Nderi</a></li>
            <li><a href="#donacionet">Donacionet</a></li>
            <li><a href="#slideshow">Alumni Nderkombetar</a></li>
            <li><a href="Kycu.php" target="blank">Kyçu</a></li>
        </ul>
    </nav>
</div>
</header>

<section id="brendesia">
   <div class="shoqata">
    <h2>
      SHOQATA E ALUMNI TE UNIVERSITETIT TE PRISHTINES "HASAN PRISHTINA"
    </h2>
<p>
    Duke qenë pjesë e Alumni UP je më afër mundësive!
</p>
</div>
</section>
<section id="lajmet">
<div class="lajme">
  <h2>Lajme</h2>
  <div class="festo">
  <article>
    <!-- Ne vend te tagut img source perdorim div pasi qe mundemi me ba efekte hover -->
    <div class="lajmet-foto1"></div>
    <h3>Dare to lead your way-Ardian Hoxha</h3>
    <p>Ftesë për te gjithë studentet dhe alumni te Universitetit të Prishtinës ne eventin:
"Dare to lead your way" nga Ardian Hoxha folës motivues.
Ky event i dedikohet studentëve të Universitetit të Prishtinës “Hasan Prishtina” të cilët kanë inspirim suksesin dhe arritjet në jetë.</p>
    
  </article>
  <article>
    <!-- Ne vend te tagut img source perdorim div pasi qe mundemi me ba efekte hover -->
    <div class="lajmet-foto2"></div>
    <h3>Teach For Kosova Info Session (Fellowship)</h3>
    <p>Teach Kosova ka hap aplikimin per fellows (bursista).
Per t'ju dhene me shume informata per procesin e aplikimit dhe programin ne pergjithesi, stafi i Teach For Kosova do te mbaje nje prezentim per te orientuar studentet e vitit te fundit dhe Alumni, te interesuar te perfitojne nga kjo burse.</p>
    
  </article>
  <article>
    <!-- Ne vend te tagut img source perdorim div pasi qe mundemi me ba efekte hover -->
    <div class="lajmet-foto3"></div>
    <h3>Hapja e zyrës Alumni UP</h3>
    <p>Ftesë për te gjithë studentet ne ceremonine e hapjes se Alumni,ju mirpresim!</br>
    Lokacioni:Biblioteka Kombetare e Kosoves "Pjeter Bogdani"</br>
    Data/Date:03/07/2019</br>
    Ora/Time:14-15:30</br></br>

    </p>
    
  </article>
  
</div>
</div>
</section>
<section id="rreth_nesh">
<h3>
    Rreth nesh
</h3>
<p>
    Rrjeti Alumni ka nё fokus mbarëvajtjen profesionale tё individëve qё kanё kryer studimet nё Universitetin e Prishtinës “Hasan Prishtina“ dhe ndërlidhjen e tyre. Nëpërmjet takimeve dhe aktiviteteve, ndihmon në transmetimin e ideve, nismave, inovacionit, bashkëpunimeve midis njëri- tjetrit të cilat janë mëse të nevojshme pas procesit të diplomimit dhe sidomos gjatë përballjes me tregun e punës.
    Rrjeti Alumni ka nё fokus mbarëvajtjen profesionale tё individëve qё kanё kryer studimet nё Universitetin e Prishtinës “Hasan Prishtina“<span id="dots">...</span><span id="more"> dhe ndërlidhjen e tyre. Nëpërmjet takimeve dhe aktiviteteve, ndihmon në transmetimin e ideve, nismave, inovacionit, bashkëpunimeve midis njëri- tjetrit të cilat janë mëse të nevojshme pas procesit të diplomimit dhe sidomos gjatë përballjes me tregun e punës.
Anëtarët e rrjetit do të japin informacione, këshilla karriere dhe mbështetje në formimin profesional të të diplomuarve tjerë dhe të studentëve aktual. Rrjeti i të diplomuarve të Universitetit të Prishtinës “Hasan Prishtina“ mbledh rreth vetes të gjithë të diplomuarit e saj të të gjitha niveleve të sudimit. Qëllimi i këtij shërbimi është lidhja e të gjitha gjeneratave të studentëve të UP-së, për të krijuar bashkëpunim të vazhdueshëm dhe krijimin e lidhjeve në mes të diplomuarve, profesorëve të fakulteteve përkatëse, bashkësisë më të gjërë akademike dhe punëdhënësve.
    </span></p>

<button onclick="myFunction()" id="myBtn">Me shume</button>

<script>
{

function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Me shume";
    moreText.style.display = "none";
  } 
  else 
  {
    dots.style.display = "none";
    btnText.innerHTML = "Me pak";
    moreText.style.display = "inline";
  }

}

}

</script>
</section>
<section id="alumni.sh">
<div class="alumni_1">
  <h2>Alumni Nderi</h2>
  <div class="soprano">
  <article>
    <div class="besa"></div>
    <h3>Besa Llugiqi</h3>
    <p>
      Sopranoja e mirënjohur nga Kosova, Besa Llugiqi ka lindur në Prishtinë (1986). Nga
fillimi, audienca në vende të ndryshme ishin të impresionuar mbi zërin e saj të bukur e
të kultivuar, ndjenjë e lindur të linjës muzikore , legato nayrale dhe interpretim estetik
sic e ka cilësuar juria internacionale në konkursin ndërkombëtar ”ELENA NIKOLAI” ku
Besa u vlerësua me çmimin Grand Prix .

</p>
    
  </article>
  <article>
    <!-- Ne vend te tagut img source perdorim div pasi qe mundemi me ba efekte hover -->
    <div class="alumni_2"></div>
    <h3>Elbenita Kajtazi </h3>
    <p>Elbenita Kajtazi kreu shkollën e lartë” Tefta Tashko” të Muzikës në Mitrovicë në vitin 2009. Vazhdoi studimet në Fakultetin e Arteve në Universitetin e Prishtinës.

Në vitin e saj të parë të studimeve ajo u bë soliste në Korin të Filarmonisë së Kosovës, si dhe morri pjesë në koncerte të tjera Mozart Requiem si në hapjen e Katedrales “Nënë Terezë”  në Prishtinë.

Pas këtij koncerti ajo u ftua për të kënduar si soliste me orkestrën Filarmonike ku këndoi Violetën në La Traviata (ACT I), Marlulen në opera shqiptare Dasma Arbereshe dhe Mimin në La Boheme (ACT I).
</p>
    
  </article>
  <article>
    <!-- Ne vend te tagut img source perdorim div pasi qe mundemi me ba efekte hover -->
    <div class="alumni_3"></div>
    <h3>Liburn Jupolli </h3>
    <p>Liburn Jupolli i lindur më 1989, është muzicient i njohur kosovar. Ka përfunduar shkollën fillore dhe atë të mesme të muzikës në klasën e profesorëve Syzana Jakupi dhe Misbah Kaçamaku.Liburni shumë heret ka nisur të merret me kompozim dhe teori muzikore, ndërsa tri vite më pas ka shkruar muzikë për film, animacion, teatër për të bashkëpunuar më pas me Ansamble muzikore nga Kosova dhe të tjerë ndërkombëtare.  Ka bërë muzikë për disa shfaqje të ndryshme teatrale në Kosovë e Maqedoni.
    </p>
    
  </article>
  
</div>
</div>
<section id="slideshow">
  <h2>Alumni Nderkombetar</h2>
<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="photos/al1.jpg" style="width:100%">
    <div class="caption">Miresevini ne familjen Alumni!</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="photos/al2.jpg" style="width:100%">
    <div class="caption">Ceremonia diplomimit</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="photos/al3.jpg" style="width:100%">
    <div class="caption">Alumnit e Jacobs University</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</section>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 4 seconds
}
</script>

<section id="donacionet">
  <div class="teksti_logo">
<div class="donacionet">  
    <h3>Donacione</h3>
    <p>
      Iniciativa e donacioneve brenda Rrjetit Alumni të Universitetit të Prishtinës “Hasan Prishtina“, synon grumbullimin e të mirave financiare duke promovuar vullnetarizmin, me qellim të realizimit të objektivave nga komponentat:
    </p>
    <nav>
    <!-- preg_split ne php -->
      <?php
      $pattern = "/[\,]+/";
      $sometext="Bursa për të diplomuarit, Pasurim bibliotekarë, Vizita studimore, Vizita rekreative (Kampe dhe udhetime me qellim të rrjetizimit),
      Organizimin e aktiviteteve me karakter promocional të Rrjetit Alumni etj...";
      $parts = preg_split($pattern, $sometext);
      // Loop through parts array and display substrings
      foreach($parts as $part){
        echo "<strong>$part</strong></br>";
      }
      ?>
    </nav>
    <p>
    Kjo iniciativë udhëheqët nga Bordi i Rrjetit Alumni të Universitetit të Prishtinës “Hasan Prishtina “, i cili ka për qëllim që të mirën financiare t’a përkthej në të mirë sociale për studentët, të diplomuarit, kampusin universitar dhe vendin tonë.

Universiteti i Prishtinës “ Hasan Prishtina “ ka luajtur një rol të rëndësishëm në edukimin shoqeror në Kosovë. Qoftë në shkencë apo në art, inxhinieri apo drejtësi, mjekësi apo shkenca shoqërore, ai dhe ata që kanë ecur në sallat e tij të shenjtëruara, kanë bërë një ndikim të thellë për të mirë në shoqërinë tonë. 47 vjet, prove e suksesit dhe vitet në vijim bashkarisht do të na shërbejnë që të sigurohemi që trashëgimia vazhdon, në ngritjen e cilësisë së sherbimeve e Universitetit të Prishtinës “Hasan Prishtina“.

Bujaria juaj do të ndihmojë në përmirësimin e jetës së të diplomuarve dhe studentëve, si dhe do të rris cilësinë e sherbimeve të Rrjetit Alumni.

    </p>

<!-- Validimi i email, try-catch -->

<?php
$email="";
$emailErr="";
try{
  
if (empty($_POST["email"])) {
  $emailErr = "Email is required";
} else {
  $email = test_input($_POST["email"]);
  // check if e-mail address is well-formed
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
  }
}
}
catch(Exception $e)
{
    echo "Sorry something went wrong!";
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
  <label for="mail">Per me shume informata, shenoni email-in tuaj:</label>
  <input type="text" id="mail" name="email" >
  <input type="submit" value="Submit" id="sub" name="submit">
  <span class="error">* <?php echo $emailErr;?> </span><br>
  <label for="phone">Per me shume informata, shenoni numrin e tel:</label>
  <input type="tel" id="phone" name="phone">
  <input type="submit" id="sub" onclick="phonenumber(phone)">
  <br><br>
  <button><a type="submit" id="er" name="submit" href="Cookies.php" class="fundi" class="button button1">Gjenero Cookies</a></button>
  <br>
  <button><a type="submit" id="er" href="Sesionet.php" class="fundi" class="button button1">Gjenero Sesionet</a></button>
</form>
<script>
function phonenumber(phone) {
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/;
  if(phone.value.match(phoneno))
   {
    return true;
  }
  else 
  {
    phone.setCustomValidity("Incorrect phone number!");
  }

}
</script>
    </p>
  
  </div>
  
  <div class="fotod">
  <img src="photos/icon_donate.png" class="rotate">
  </div>
</div>
</section>

<section id="tekst">
     <p id="fsheh">Platforma e e-Karrierës dhe Alumni është mbështetur nga 
     <!-- preg_replace ne php -->
    <?php 
    $pattern = "/\s/";
    $replacement = "-";
    $text="Transformational\nLeadership\tProgram Scholarships";
     // Replace spaces, newlines and tabs
    echo preg_replace($pattern, $replacement, $text);
    
    ?>
    and Partnerships, që financohet nga USAID dhe Ministria e Arsimit"Shkencës dhe Teknologjisë dhe implementohet nga World Learning."
 </p>
</section>

<div class="box"> 

<img src="photos/usaid.png">
 
 </div>
 <footer> 
 <div class="siteFooterBar"> 
        <div class="content">
            <img src="photos/logo_alumni.png" >
                <div class="foot">
                  2019 © All rights reserved
                </div>
        </div>
    </div>
  </footer>
  
</body>
</html>
