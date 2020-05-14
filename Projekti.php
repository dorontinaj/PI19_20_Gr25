<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="utf-8">
	 <meta name="apple-mobile-web-app-capable" content="yes">
<meta content="text/html; charset=utf-8" http-equiv="content-type">
<meta name="viewport" content="width=device-width, intial-scale=1">

	 <title>Universiteti</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="reset_P.css"/>
     <link rel="stylesheet" href="stilizimiP.css"/>
	 	 <script src='https://kit.fontawesome.com/a076d05399.js'></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
         <script src="jquery-1.11.2.min.js"></script>
	 <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
         <script src="projekti.js" type="text/JavaScript"></script>
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

</html>
