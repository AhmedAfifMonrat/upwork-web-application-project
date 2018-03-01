<?php
if(isset($_POST['submit']))
{
$date=$_POST['date'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$to = "focusopticians@gmail.com";
$subject = "Consultation Request";
$message = "New Consultation Request From:"."\n"."Phone Number:".$phone."\n"."Requested Date:".$date;
$from =$email;
$headers = "From:" . $from;
mail($to,$subject,$message,$headers);
echo '<script type="text/javascript">alert("Thank you for the Consultation Request.Patrick will be in touch soon."); </script>'; 
}
?> 
<!DOCTYPE html>
<html>
<head>
<title>Focus Opticians</title>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/common.js" ></script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js" ></script>
<script type="text/javascript" src="js/jquery-1.4.min.js" ></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.js"></script>
<script type="text/javascript">
$("document").ready(function() {
			
				$('.home').click(function(){
										   
					$('html, body').animate({
						scrollTop: $("#head").offset().top
					}, 1000);				   
					 
										   
				 });
				$('.about').click(function(){
										   
					$('html, body').animate({
						scrollTop: $("#about").offset().top
					}, 1000);				   
					 
										   
				 });
				 $('.contact').click(function(){
										   
					$('html, body').animate({
						scrollTop: $("#contact").offset().top
					}, 1000);				   
					 
										   
				 });
				 
		});


function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>	

<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
<link rel="icon" type="image/icon" href="favicon.ico" />

<style type="text/css">

#wrap
{
margin:0px auto;
height:100%;
width:1200px;

}
#head
{
height:794px;
width:1200px;
float:left;
background-image:url(images/home1.jpg);
background-repeat:no-repeat;


}
#menu
{
width:280px;
height:30px;
margin-left:0px;
padding-left:15px;
float:left;
}
#menu a
{
text-decoration:none;
color:#FFFFFF;
font-size:20px;
text-transform:uppercase;
font-family:'Droid Serif',myriad pro,verdana;
font-weight:500;
cursor:pointer;
}
#menu a.active
{
text-decoration: none;
border-bottom: 1px solid #fff;
padding-bottom:2px;
}
#menu a:hover
{
color:#FF3300;
}
#welcome_text
{
margin-top:355px;
height:200px;
width:645px;
margin-left:300px;
float:left;
padding-left:10px;
background-color:#000000;
opacity:0.9;
color:#FFFFFF;
font-size:18px;
font-family:Verdana, Arial, Helvetica, sans-serif;
text-align:justify;
padding-top:10px;
padding-right:5px;
}
#hide_bar
{
width:180px;
height:21px;
margin-left:530px;
float:left;
cursor:pointer;
}
#show_bar
{
width:180px;
height:21px;
margin-left:530px;
float:left;
cursor:pointer;
position:absolute;
top:782px;
display:none;

}
#menu_about
{
width:1185px;
height:30px;
margin-top:20px;
margin-left:15px;
float:left;
position:absolute;
top:900px;

}
#menu_about a
{
text-decoration:none;
color:#FFFFFF;
font-size:20px;
text-transform:uppercase;
font-family:'Droid Serif',myriad pro,verdana;
font-weight:500;
cursor:pointer;
}
#menu_about a.active
{
text-decoration: none;
border-bottom: 1px solid #fff;
padding-bottom:2px;
}
#menu_about a:hover
{
color:#FF3300;
}
#contact_about
{
width:1185px;
height:30px;
margin-top:20px;
margin-left:15px;
float:left;
}
#contact_about a
{
text-decoration:none;
color:#FFFFFF;
font-size:20px;
text-transform:uppercase;
font-family:'Droid Serif',myriad pro,verdana;
font-weight:500;
cursor:pointer;
}
#contact_about a.active
{
text-decoration: none;
border-bottom: 1px solid #fff;
padding-bottom:2px;
}
#contact_about a:hover
{
color:#FF3300;
}
#slide
{
display:none;
}
</style>

<!--------chat scripts----------->
<!--Start of Zopim Live Chat Script--
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//cdn.zopim.com/?1J3Q4KDRWa6lCxcH2D8wALIUKKEabjr8';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>
<body onLoad="MM_CheckFlashVersion('7,0,0,0','Content on this page requires a newer version of Adobe Flash Player. Do you want to download it now?');">

<div id="wrap">
<div id="head"> 

<div id="v_btn">
<img src="images/v_btn.png" style="float:right; margin-right:10px; cursor:pointer" onClick="dis_vid()">
</div>
<div id="menu">
<a class="active" name="home_page">Home</a>
<a style="margin-left:15px" class="about">About</a>
<a style="margin-left:15px" class="contact">Contact</a>

</div>

<div id="video">
<div ><img src="images/close.jpg" style="float:right; margin-bottom:3px; cursor:pointer" onClick="exit()"></div>


<script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0','width','660','height','360','src','video/video','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','video/video' ); //end AC code
</script><noscript><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,28,0" width="660" height="360">
  <param name="movie" value="video/video.swf">
  <param name="quality" value="high">
  <embed src="video/video.swf" quality="high" pluginspage="http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="660" height="360"></embed>
</object>
</noscript>
</div>

<div id="welcome_text">

Welcome to Focus Opticians, a distinctive gallery of artful eyewear, 
located in beautiful downtown San Anselmo in Marin County. We 
concentrate on providing the latest fashion lines of eyeglasses, as 
well as some of our own one of a kind designs. We take pride in our 
one on one consultation service. No longer will you feel the confusion 
of seeing hundreds of frames, wondering which one is right for you. 
Our skilled, highly experienced opticians will guide you in finding the 
perfect frame for your face, your prescription, and your lifestyle.

</div>
  <div id="hide_bar" onClick="hide_panel()">
  <span ><img src="images/hide_arrow.png" /></span>
  </div>

  <div id="show_bar" onClick="show_panel()">
  <img src="images/show_bar.png" />
  </div>
  
</div>
<ul id="ticker">
<li>						
						
						<span>
							“I used to hate buying glasses. Glasses problem solved. Patrick is AMAZING!  I have always had 
trouble finding frames to fit my face.  My prescription is thick and usually costs a lot. Patrick 
gave me options of shapes and colors of frames I would  have never considered...” <a href="http://www.yelp.com/biz/focus-opticians-san-anselmo#hrid:fH-xM_wgxlK3s0vYIeAxHg">READ MORE ></a>
							
						</span>
	</li>

					<li>

						
						<span>
							“Patrick and his shop is off the charts great - we are talking the top tenth of 1%. The service and 
expertise of getting eyewear with Patrick cannot be beat.  The selection and prices are fantastic 
as well. I feel fortunate that Patrick's shop (relaxing and tastefully done) is only...” <a href="http://www.yelp.com/biz/focus-opticians-san-anselmo#hrid:vadeBMOIPh2t0qjjPvaVvw">READ MORE ></a>
							
						</span>
					</li>

					<li>
						
						<span>

							“Patrick is fantastic!  I was pleasantly surprised to find such a great selection! He took a careful 
look at my face and gave me several options that accentuated my best features. I've never had 
an optician take care of me the way he did...” <a href="http://www.yelp.com/biz/focus-opticians-san-anselmo#hrid:1K4gmVgtJrLc4UX-fqoJtw">READ MORE ></a>
							
						</span>
					</li>

					<li>
						
						<span>
							“If you need glasses to make you look beautiful, go to this store. If for no other reason than 
the aromatherapy. There are technicians, and there are artists. Patrick is an artist. He's got 
everything he needs, he's an artist, he don't look back...” <a href="http://www.yelp.com/biz/focus-opticians-san-anselmo#hrid:PRkXX7M4-4ArNReQ9P9Vng">READ MORE ></a>
							
						</span>
					</li>

					<li>
						<span>
							 “I rave about Focus all the time and can't believe I never wrote a Yelp review!  I've been a 
customer of Patrick's for years! This guy is so nice, attentive, has very fair prices and decent 
selection.  He absolutely deserves your business. Only yesterday when I ...” <a href="http://www.yelp.com/biz/focus-opticians-san-anselmo#hrid:x_im0aFPbO4onMH5oNhWZA">READ MORE ></a> 
							
						</span>
					</li>

</ul>


<div id="about">
<!--------------slide--------------->
<div id="slide">
<img src="images/brenda.jpg" width=" " height=" " name="photoslider" style="opacity:0.9; z-index:-500; margin-top:10px; margin-left:10px">
<input type="image" src="images/btn.png"
      onClick="forward()" style="position:absolute; top:910px; float:left; opacity:0.7 " />
<script language="JavaScript1.1">
var photos=new Array()
var which=0

/*Change the below variables to reference your own images. You may have as many images in the slider as you wish*/
photos[0]="images/brenda.jpg"
photos[1]="images/jan.jpg"
photos[2]="images/bev.jpg"
photos[3]="images/caroline.jpg"
photos[4]="images/stands_out.jpg"


function backward(){
if (which>0){
window.status=''
which--
document.images.photoslider.src=photos[which]
}
}

function forward(){
if (which<photos.length-1){
which++
document.images.photoslider.src=photos[which]
}
else 
which=0;
document.images.photoslider.src=photos[which]
}
</script>
</div>
      <!------------slide---------->
<div id="menu_about">
<a class="home">Home</a>
<a class="active" style="margin-left:15px">About</a>
<a class="contact" style="margin-left:15px">Contact</a>
</div>

</div>

<div id="about_menu">
<div class="about_menu">
<span class="first" onClick="owner()">Meet owner Patrick Fasano</span>
<span class="second" onClick="testimonial()">Client Testimonials</span>
<span class="third" onClick="focus_page()">Focus History</span>
<span class="fourth" onClick="mikki()">Meet our mascot Mikki</span>

</div>

</div>

<div id="contact">

<div id="contact_about">
<a class="home">Home</a>
<a class="about" style="margin-left:15px">About</a>
<a class="active" style="margin-left:15px">Contact</a>

</div>
<div id="map">
<div class="map1">
<div class="ZoomIt">

<a href="https://maps.google.com.bd/maps?q=356+San+Anselmo+Avenue,+San+Anselmo,+CA,+94960&hl=en&sll=37.973287,-122.562052&sspn=0.008813,0.021136&hnear=356+San+Anselmo+Ave,+San+Anselmo,+Marin,+California+94960,+United+States&t=m&z=16" title="Focus Opticians"><img class="zit" src="images/map_thumb.jpg" /></a></div>
</div>
<div class="map2">
<table border="0" style="color:#FFFFFF" width="400px">
<tr>
<td style="font-family:'Droid Serif',myriad pro,verdana; font-size:18px; font-weight:700">Phone:</td>
<td style="float:right; text-align:right; font-family:'Droid Serif',myriad pro,verdana; font-size:19px;font-weight:700">(415) 457-8170</td>
</tr>
<tr>
<td style="font-family:'Droid Serif',myriad pro,verdana; font-size:18px; font-weight:700">Fax:</td>
<td style="float:right; text-align:right;font-family:'Droid Serif',myriad pro,verdana; font-size:19px;font-weight:700">(415) 457-8171</td>
</tr>
</table>
<table border="0" style="color:#FFFFFF; margin-top:27px" width="400px">
<tr>
<td style="font-family:'Droid Serif',myriad pro,verdana; font-size:18px; font-weight:700">Email:</td>
<td style="float:right; text-align:right;font-family:'Droid Serif',myriad pro,verdana; font-size:18px;font-weight:700">focusopticians@gmail.com</td>
</tr>
</table>
</div>
</div>
</div>

<div id="consult">
<div id="consult_img">
<img src="images/consult.jpg" border="0"  />

</div>
<div id="consultation">
<form method="post" action="index.php">
<table border="0" style="padding-left:30px">
<tr>
<td style="color:#FFFFFF; font:Verdana, Arial, Helvetica, sans-serif; font-size:24px; font-weight:700">Request a consultation:</td>
<td height="20">
<select id="date" name="date" style="width:180px;height:30px; padding:5px; margin-left:30px; text-transform:uppercase; color:#666666; font-weight:700; font-size:12px">
<option value="">Day of the week</option>
<option value="Sunday">Sunday</option>
<option value="Monday">Monday</option>
<option value="Tuesday">Tuesday</option>
<option value="wednesday">Wednesday</option>
<option value="Thursday">Thursday</option>
<option value="Friday">Friday</option>
<option value="Saturday">Saturday</option>
</select>
</td>
<td>
<input type="text" name="email" id="email" value="Email Address" style="width:180px; height:30px; margin-left:40px; padding:5px;text-transform:uppercase;color:#666666; font-weight:700; font-size:12px" onFocus="if(this.value!='')this.value=''" onBlur="if(this.value=='') this.value='email Address'" />
</td>
<td>
<input type="text" name="phone" id="phone" value="Phone Number" style="width:180px;height:30px; margin-left:40px;text-transform:uppercase;color:#666666; font-weight:700; font-size:12px; padding:5px" onFocus="if(this.value!='')this.value=''" onBlur="if(this.value=='') this.value='phone number'" />
</td>
<td>
<input type="submit" name="submit" id="submit" value="Submit" style="width:130px;height:30px; margin-left:60px;text-transform:uppercase;color:#ffffff; font-weight:700; background-color:#FF0000; cursor:pointer" />
</td>
</tr>
</table>
</form>
<div id="bottom_part">
<div class="bottom_part1">
<a href="http://Facebook.com/focusopticiansmarin"><img src="images/facebook.jpg" /></a>
<a href="http://www.yelp.com/biz/focus-opticians-san-anselmo"><img src="images/yelp_add.jpg" /></a>
</div>
<div class="bottom_part2">
<a href="http://zenithsolutionsgroup.com" style="text-decoration:none; color:#FFFFFF">Design, Development and Presentation by <strong>Zenith Solutions Group</strong></a>
</div>
</div>
</div>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41225513-1', 'focus-opticians.com');
  ga('send', 'pageview');

</script>


</body>
</html>