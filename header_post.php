
<!-- link to the CSS files for this menu type -->
<link rel="stylesheet" type="text/css"  href="style/main.css" >
<link href="style/superfish.css" rel="stylesheet" type="text/css">

<!-- link to the JavaScript files-->
<!-- Add jQuery library -->
<script  src="http://code.jquery.com/jquery-latest.min.js"></script>

<!--(hoverIntent is optional) -->
<script src="javascripts/jquery.hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>

<!-- initialise Superfish plugin -->
<script>
	$(document).ready(function(){
		$('ul.sf-menu').superfish();
	});
</script>

<!-- include Cycle plugin -->
<script  src="http://malsup.github.com/jquery.cycle.all.js"></script>

<script >
$(document).ready(function() {
    $('#hero').cycle({
width: '100%',
fit: 1,
fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
	  speed: 2000,
    timeout: 2000
	 });
});
</script>

<!--Slider for News updates -->
<script>
$(document).ready(function() {
$('#slider').cycle({ 
    fx:     'scrollUp', 
    timeout: 6000, 
    delay:  -4000,
	
	next:   '#slider', 
    pause:   1 ,
});
});
</script>

<!--Slider for Holiday Notification(Temp) -->
<!--<script>
$(document).ready(function() {
$('#holiday_notification').cycle({ 
    fx:     'scrollLeft',
	speed: 5000,
	continuous: 1,
});	
});

</script>-->



<!-- Add fancyBox -->
<link rel="stylesheet" href="style/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox.pack.js?v=2.1.5"></script>


<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="style/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="javascripts/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="style/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="javascripts/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script>
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

<!-- include Marquee plugin -->
<script src="javascripts/jquery.marquee.min.js"></script>
<!--Include jQuery pause plugin for pause on hover
-->
<script src="javascripts/jquery.pause.min.js"></script>

<script>
$(function() {
$('#holiday_notification').marquee({
	speed: 10000,
	gap: 50,
	delayBeforeStart: 0,
	direction: 'left',
	duplicated: true,
	pauseOnHover: true
});
});
</script>

<!-- gigya.js script should only be included once -->
<script src="http://cdn.gigya.com/js/gigya.js?apiKey=3_PnfDT4ANlEjLZiLCeNodjNIFAVrbd43I04k5sCWE7f9lqq7f4tsDmA3atMsAswDr">
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
   <img src="images/headerLogo.png" alt="Nazeef Dental Clinic Logo" width="420" id="logo"/>
   
    <img src="images/headerLogo-address.png" alt="Nazeef Dental Clinic Address" width="270" id="logo-address"/>
          
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
  <div id="hero"> 
  <img src="images/Advanced_Cosmetic_Dentistry.jpg" alt=""/> 
   <img src="images/Modern_Treatment_Methods.jpg" alt=""/> 
  <img src="images/The_Art_of_the_Smile.jpg" alt=""/>
 <!-- <img src="images/secretary-slide.jpg" alt=""/> -->
  </div>
  
<div id="holiday_notification">
 Clinic will remain closed until September 19, 2016!!  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Appointments can still be made by calling 0333 5192837       
</div>
  