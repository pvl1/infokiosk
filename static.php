<!DOCTYPE html>
<html>
<head>
  <meta name="generator" content="Bluefish 2.2.10" >
  <link href="mygenerictest2.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="animate.css">
  <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
 <!-- <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/css" src="css/bootstrap.css"></script>-->
  <script type="text/javascript" src="my.js"></script>
  <script type="text/javascript">
        getimages();
        updatenews();
        setInterval(startslideshow, 8000);
        /*setInterval(updatenews, 3600000);*/
        setInterval(updatenews, 3600000);
  </script>

  <title></title>
</head>
<body onload="startTime()">

  <section class="container">
    <div id="slideshow">
    	<img class="animated" id="slider" src="">
    </div>
    
    <div class="newspaper">
    	<div id="newspaper">

      </div>
    </div>
	
   </section>
   <iframe id="forecast_embed" frameborder="0" height="245"  width="1000px"  src="//forecast.io/embed/#lat=40.04&lon=-75.51&name=Malvern"></iframe>   
   
  <p id="date"></p>

</body>
</html>
