<html manifest="example.appcache">
<head>
	 <meta charset="utf-8">
	 <meta name="viewport" content="width=device-width">
			<title>Lajmet</title>					  
	 <link rel="stylesheet" href="reset_P.css"/>
	 <link rel="stylesheet" href="cssN.css"/>
	<link rel = "shortcut icon" type = "image/png" href = "llogoja.png">
	<title>Lajmet</title>
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
	<script>function clickCounter() {
  if(typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}</script>
  
	</head>
	
	
	


</html>
