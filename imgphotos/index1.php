
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="width=device-width,initial-scale=1"  name="viewport">
<!-- TemplateBeginEditable name="doctitle" -->
<title>Citizens Rural Bank</title>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds all other divs~~ */
.container {
	width: 960px;
	background: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
	overflow: hidden; /* this declaration makes the .container understand where the floated columns within ends and contain them */
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 600px;
	float: left;
}
.sidebar2 {
	float: left;
	width: 180px;
	background: #EADCAE;
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background: #ADB96E;
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
a:link{
text-decoration:none;
color:white;
padding:10px;
margin-left:5px;
margin-right:5px;	
	
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1200px;
  position: relative;
  margin: auto;
  text-align:center;
 
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 10px;
  width: 10px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 35%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: -30.5s;
  animation-name: fade;
  animation-duration:-30.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #09C;
	font-size:12px;
}

li {
    float: left;
}

li a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #069;
}

.active {
    background-color: red;
}
span.c {
    display: block;
    width: 120px;
    height: 120px;
    padding: 5px;
    border: 1px solid blue;        
    background-color: yellow; 
}
imgg {
    float: right;
}
imgg1 {
    float: right;
}
div.gallery {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 200px;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 85%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
	
}
-->
</style></head>

<body>

<div class="container">
<marquee style="font-size:14px; color:#0099cc"><br>Welcome To Citizens Rural Bank &nbsp;||&nbsp; Banking with us is secured &nbsp;||&nbsp;Your future is secured</marquee><br><br>

<div style="background-color:#0099CC">
<ul>
  <li><a href="#home" class="">Home</a></li>
  <li><a href="#news">About Us</a></li>
  <li><a href="#contact">Products</a></li>
  <li><a href="#about">News</a></li>
  <li><a href="#about">Management</a></li>
    <li><a href="#about">Contact Us</a></li>
      <li><a href="#about">Photos</a></li>
      <li><a href="#about">FAQ</a></li>
</ul>

</div>
  <div class="">
   
  <p></p>
  <p></p> 
   
    <!-- end .sidebar1 --></div>
 
    
  <p>
  <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 6</div>
  <img src="Citiz/IMGP0015.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 6</div>
  <img src="Citiz/IMGP0004.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 6</div>
  <img src="Citiz/IMGP0012.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Three</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="Citiz/IMGP0037.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Four</div>
 
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="Citiz/IMGP0040.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Five</div>
 
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 6</div>
  <img src="Citiz/IMGP0026.JPG" style="width:700px;height:400px;margin-left:8px" width="600" height="300">
  <div class="text">Caption Six</div>
 
</div>

<div>
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  </div>
<p></p>
<hr>
<p><img src="Citiz/IMGP0007.JPG" alt="Pineapple" width="179" height="191" class="imgg" style="width:300px;height:350px">&nbsp;&nbsp;
<img src="Citiz/IMGP0041.JPG" alt="Pineapple" width="391" height="191" class="imgg1" style="width:600px;height:350px;margin-right:">


</p>
<div align="right" style="font-size:12px"><b>About Citizens Rural Bank Limited&nbsp;
  </p>    
</b></div>
<hr>


<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="Citiz/IMGP0040.JPG" alt="5Terre" width="600" height="400"></a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery"><a target="_blank" href="img_forest.jpg"><img src="Citiz/IMGP0036.JPG" alt="Forest" width="600" height="400" style="margin:0px">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="Citiz/IMGP0008.JPG" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="Citiz/IMGP0023.JPG" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Add a description of the image here</div>
</div>


</div>
    <p><br>
      <br>
  </p>
    <p><br>
  </p>
<div align="left" style="font-size:12px"><b>&nbsp;Management
    </p>    
</b></div>
<hr>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="45%" height="87"style="float:left;display:inline-block"> <div style="float:center"> General Manager</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">Operations Manager</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">IT Manager</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">Credit Manager</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">Internal Auditor</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">Branch Manager-Adeiso</div>
  </a>
 
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="61062622.jpg" alt="Mountains" width="600" height="400"style="float:left;display:inline-block"> <div style="float:center">Branch Manager-Kotoku</div>
  </a>
 
</div>
<p>&nbsp;</p>
  <p><br>
  </p>
  
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br>
</p>
<div align="left" style="font-size:12px"><b>&nbsp;Products
  </p>    
</b></div>
<hr>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400"> 
  </a>
 <div class="desc">Add a description of the image here</div>
</div>
  <p><br>
    <br><br><br>
  </p>
 
  <p><br><br>
</p>
<div align="left" style="font-size:12px"><b>&nbsp;Products
  </p>    
</b></div>
<hr>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400"> 
  </a>
 <div class="desc">Add a description of the image here</div>
</div>
  <p><br>
    <br><br><br>
  </p>
 
  <p><br>
  </p>
  <p><br>
</p>
<div align="left" style="font-size:12px"><b>&nbsp;Products
    </p>    
</b></div>
<hr>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="img_mountains.jpg" alt="Mountains" width="600" height="400"> 
  </a>
 <div class="desc">Add a description of the image here</div>
</div>
  <p><br>
    <br><br><br>
  </p>
 
  <p><br>
  </p>
 
 <p><br><br>
</p>
<div align="right" style="font-size:12px"><b>&nbsp;Contact Details
  </p>    
</b></div>
<hr>
<div>
 <div><br>
 <p style="font-size:12px;color:#09C; float:left"><u><b>OFFICE LOCATIONS/ADDRESSES </b></u><br><br>
 <b>Nsawam Branch</b>
 <br>
 Adjacent former Magistrate Court<br>
 P.O.Box 457,Nsawam,E/R<br>
 Tel:(+233) 332095531/508003863<br>
 Email:citizensruralbank@yahoo.com<br>
 Website:www.citizensruralbank.com.gh
 
 </p></div> <div>
 <p style="font-size:12px;color:#09C;float:left"></u><br><br>
  <b>Adeiso Branch</b><br>
 Adjacent former Magistrate Court<br>
 P.O.Box 457,Nsawam,E/R<br>
 Tel:(+233)-332095531/508003863<br>
 Email:citizensruralbank@yahoo.com<br>
 Website:www.citizensruralbank.com.gh
 </p></div>
<div>
 <p style="font-size:12px;color:#09C;float:left"></u><br><br>
  <b>Kotoku Branch</b><br>
 Adjacent former Magistrate Court<br>
  P.O.Box 457,Nsawam,E/R<br>
 Tel:(+233)-332095531/508003863<br>
 Email:citizensruralbank@yahoo.com<br>
 Website:www.citizensruralbank.com.gh
 </p></div>

</div>
<p><br>
    <br><br><br>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p><br>
  </p>
  
  
  <div class="content">
    <h2>Clearing</h2>
    
    <p>If you need to use these properties, you'll need to use a different clearing method. The most reliable will be to add a &lt;br class=&quot;clearfloat&quot; /&gt; or &lt;div  class=&quot;clearfloat&quot;&gt;&lt;/div&gt; after your final floated column (but before the .container closes). This will have the same clearing effect.</p>
    <h3>Footer</h3>
    <p>Adding a footer following the columns, yet still inside the .container, will cause this overflow:hidden clearing method to fail. You can place a .footer into a second .container outside the first one with no detrimental effects. The simplest choice may be to start with a layout containing headers and footers and remove the header to utilize the clearing methods in that layout type.</p>
    <p><span style="float:">Copyright © 2018. All Rights Reserved - Citizens Bank</span></p>
    
    <!-- end .content --></div>
  <div class="">
    <h4></h4>
    <p></p>
    <p></p>
    <p></p>
    <!-- end .sidebar2 --></div>
    
  <!-- end .container --></div>
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
    setTimeout(showSlides, 8000); // Change image every 2 seconds
}
</script>



</body>
</html>
