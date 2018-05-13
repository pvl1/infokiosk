/*!
 * MYSTUFF
 */
 var images;
 var timer=15;
 var something=0;
 var inanim = ["bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "bounceInUp",
  "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight",
   "fadeInRightBig", "fadeInUp", "fadeInUpBig", "flipInX", "flipInY", "lightSpeedIn", "rotateIn",
    "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight", "jackInTheBox",
     "rollIn", "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "zoomInUp", "slideInDown", "slideInLeft", "slideInRight", "slideInUp"];
 
    /*
    *
    */
 function getimages(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          images = JSON.parse(this.responseText);
      }
  };
  xmlhttp.open("GET", "readimgs1.php", true);
  xmlhttp.send();
}
function startslideshow(){
	document.getElementById("slider").className = "animated";
	if(something==(images.length)){
		something=0
	}
	if(images){
    document.getElementById("slider").setAttribute("src", "http://aps-fs/monitors/frontdesk/images/" + images[something]);
    /*document.getElementById("slider").setAttribute("num", something);*/
    var ans = pickananim();
    document.getElementById("slider").classList.add(ans);
    something++;
   }
}

function updatenews() {
	  var xmlhttp = new XMLHttpRequest();
  		xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("newspaper").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "example-rss.php", true);
  xmlhttp.send();	
}

var pickananim = function () {
	var animater = inanim[Math.floor(Math.random() * 33)];
	return animater;
}



function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    //var s = today.getSeconds();
    m = checkTime(m);
    //s = checkTime(s);
    document.getElementById('date').innerHTML =
    h + ":" + m + " on "+today.toDateString();
    //h + ":" + m + ":" + s + " on "+today.toDateString();
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}