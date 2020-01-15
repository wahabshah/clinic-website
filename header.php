<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="images/favicon.ico" >

<title id="page_title">Nazeef Dental Clinic | Islamabad Dentist | Islamabad Dental Surgeon| Muhammad Nazeeef Shah</title>

<!-- Add jQuery library -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>


<!-- link to the CSS files for this menu type -->
<link rel="stylesheet" type="text/css"  href="style/main.css" >
<link href="style/superfish.css" rel="stylesheet" type="text/css">

<!-- link to the JavaScript files-->
<!--</script>
<script src="javascripts/jquery.js"></script>-->
<!--(hoverIntent is optional) -->
<script src="javascripts/jquery.hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>

<!-- initialise Superfish -->
<script>
	$(document).ready(function(){
		$('ul.sf-menu').superfish();
	});
</script>

<!-- include jQuery library -->
<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>-->
<!-- include Cycle plugin -->
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('#hero').cycle({
		
		
//slideResize: 1,
//containerResize: 0,
width: '100%',
//height:'100%',
fit: 1,

//next: '#next',
//prev: '#prev',  

fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	  speed: 2000,
    timeout: 2000
	 });
});
</script>

<!--Slider for News updates -->
<script type="text/javascript">
$(document).ready(function() {
$('#slider').cycle({ 
    fx:     'scrollUp', 
    timeout: 6000, 
    delay:  -4000 
});
});
</script>

<!--Slider for Holiday Notification(Temp) -->
<script>
$(document).ready(function() {
$('#holiday_notification').cycle({ 
    fx:     'scrollLeft',
	speed: 5000,
	continuous: 1 
});
});
</script>


<!-- Add jQuery library -->
<!--<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->

<!-- Add fancyBox -->
<link rel="stylesheet" href="style/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox.pack.js?v=2.1.5"></script>


<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="style/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="javascripts/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="style/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript">
	$(document).ready(function() {
	$(".img-pop").fancybox({
    	openEffect	: 'elastic',
    	closeEffect	: 'elastic',

    	helpers : {
    		title : {
    			type : 'inside'
    		}
    	}
    });
	});
</script>

<!--<script>
$(window).resize(function(){
$('#hero').each(function(){
    newWidth = $(this).parent('div').width()
    $(this).width(newWidth)
    $(this).children('div').width(newWidth)
});
});
</script>-->

<!-- gigya.js script should only be included once -->
<script type="text/javascript" src="http://cdn.gigya.com/js/gigya.js?apiKey=3_PnfDT4ANlEjLZiLCeNodjNIFAVrbd43I04k5sCWE7f9lqq7f4tsDmA3atMsAswDr">
</script>

<!-- Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?client=737813904197-3ffp83f9fgs2a4hrcp0101dq489u8qpt.apps.googleusercontent.com&sensor=false&v=3.16"></script>

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC0it5vvMo3Kq_z34iVUl42CuHEej3rU70&sensor=false">
</script>

<script>
var myCenter=new google.maps.LatLng(33.695895,73.013207);
function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap")
  ,mapProp);
  
  var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"Nazeef Dental Clinic"
  });

infowindow.open(map,marker);
google.maps.event.addListener(marker, 'click', function() {
  infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>

<!-- Google Analytics START-->
<?php include_once("analyticstracking.php") ?>
<!-- Google Analytics END-->

<div id="wrapper">
<!--Header-->
  <header id="top">
  <!-- Logo -->
   <img src="images/headerLogo.png" alt="Dental Clinic Logo" width="420" id="logo"/>
   <!--Address-->
    <p id="address"> Shop #19-20, Block 7-B,<br>
      Warraich-Plaza, F-10 Markaz,<br>
      44000, Islamabad, Pakistan<br>
      051 2299447,0333 5192837 </p>
      <!-- Navigation bar -->
    <nav id="mainnav">
      <ul class="sf-menu">
      <!-- 1 Home -->
        <li>
        <a href="index.php" id="#">Home</a> 
        </li>  
      <!-- 2 Procedures-->
        <li><a href="#" class="sf-with-ul">Procedures<span class="sf-sub-indicator"> »</span> </a>
         
        <ul style="width:15em; text-align:left;">
             <!-- 2.1 Implant Restorations -->
             <li> 
                 <a href="implant.php">
                   Implant Restorations
                   </a>
          	</li>
            <!-- 2.2  Crown Bridge-->
             <li> 
                 <a href="crown_bridge.php">
                   Crown & Bridge
                   </a>
          	</li>
            <!-- 2.3 Braces-->
             <li> 
                 <a href="braces.php">
                   Braces
                   </a>
          	</li>
            <!-- 2.4 Cosmetic Dentistry-->
             <li> 
                 <a href="cosmetic_dentistry.php">
                   Cosmetic Dentistry
                   </a>
          	</li>
            <!-- 2.5 Prosthetic-->
             <li> 
                 <a href="prosthetic.php">
                   Prosthetic
                   </a>
          	</li>
            <!-- 2.6 Root Canal & Filling -->
             <li> 
                 <a href="root_canals.php">
                   Root Canals & Filling
                   </a>
          	</li>
       </ul>
          
        <!-- 3 About Us-->
        <li>
        <a href="#" class="sf-with-ul">About Us<span class="sf-sub-indicator"> »</span></a>
        
        <ul style="width:12em; text-align:left;">
        <!-- 3.1 Meet Dr. Nazeef -->
        <li>
       <a href="dr_nazeefshah.php">Meet Dr. Nazeef</a>
        </li>
        <!-- 3.2 Our Facility -->
        <li>
       <a href="facility.php">Our Facility </a>
        </li>
        </ul>
        
        </li>
        <!--4 Testiomials-->
        <li >
        <a href="testimonials.php">Testimonials</a>
        </li>
        <!--5 Contact Us-->
        <li >
        <a href="#" class="sf-with-ul">Contact Us<span class="sf-sub-indicator"> »</span></a>
         <ul style="width:14em; text-align:left;">
             <!--5.1 Contact Form-->
             <li>
             <a href="contact_form.php">Contact Form</a>
             </li>
             <!--5.2 Office/Maps-->
             <li>
             <a href="maps.php">Office/Map Directions</a>
             </li>
          </ul>
        </li>
        
      </ul>
    </nav>
  </header>
  <!-- Slide show -->
  <!--<div id="hero" style="position: relative;">
  
  <img src="images/Advanced_Cosmetic_Dentistry.jpg" alt="Visiting area picture" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0; width:900px; height:230px;"/> 
 
  <img src="images/The_Art_of_the_Smile.jpg" alt="Treating the patient" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0;
  width:900px; height:230px;"/> 
  <img src="images/secretary-slide.jpg" alt="secratary" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0; width:900px; height:230px;"/> 
 
  </div>-->
  
  <div id="hero" > 
  <img src="images/Advanced_Cosmetic_Dentistry.jpg" alt=""/> 
   <img src="images/Modern_Treatment_Methods.jpg" alt=""/> 
  <img src="images/The_Art_of_the_Smile.jpg" alt=""/>
 <!-- <img src="images/secretary-slide.jpg" alt=""/> -->
  </div>
  
<div id="holiday_notification">
<div> <p>Clinic will remain closed until September 19, 2016!!</p></div>
<div><p></p></div>
<div><p>Appointments can still be made by calling 0333 5192837</p></div> 
<div><p></p></div>
  </div>