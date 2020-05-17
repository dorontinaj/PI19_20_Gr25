<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width">
      <title>Lista e Studenteve</title>           
   <link rel="stylesheet" href="css/reset_P.css"/>
   <link rel="stylesheet" href="css/Lista.css"/>
  <link rel = "shortcut icon" type = "image/png" href = "photos/llogoja.png">
  
     <script src='https://kit.fontawesome.com/a076d05399.js'></script>
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


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
     <h2>Lista e Studenteve</h2>
  </div>
</article>
<article id="second2">
    
      <a href="projekti.php"  >BALLINA</a>
      <a href="organet_e_universitetit1.php" >ORGANET E UNIVERSITETIT</a>
      <a href="fakultetet.php" >FAKULTETET</a>
      <a href="Lajme.php" >LAJME</a>
      <a href="alumni.php"  target="_blank">ALUMNI</a>
      <a href="regjistrohu.php"  target="_blank">REGJISTROHU</a>
    </article>
  </nav>
  </div>
</header>
<div class="pjesaKryesore">
<table id="table1" >
    <tr>
	<th>ID
	<th>Username
	<th>Email
    </tr>

    <tbody id="data"></tbody>
</table>

<script>
    var ajax = new XMLHttpRequest();
    ajax.open("GET", "data.php", true);
    ajax.send();

    ajax.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            console.log(data);

            var html = "";
            for(var a = 0; a < data.length; a++) {
                var username = data[a].username;
                var email = data[a].email;
                var id = data[a].id;

                html += "<tr>";
                    html += "<td>" + id + "</td>";
                    html += "<td>" + username + "</td>";
                    html += "<td>" + email + "</td>";
                html += "</tr>";
            }
            document.getElementById("data").innerHTML += html;
        }
    };
</script>

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
<li> <address>
Adresa:
Rr."George Bush",Nr.31, 10 000 Prishtine<br>
 
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
