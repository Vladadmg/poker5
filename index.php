<html>

<head>
<meta http-equiv="Content-Language" content="en-gb">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Le tube du poker en ligne - </title>


<link href="css/styles.css" rel="stylesheet" type="text/css" />





	<script type='text/javascript' src='http://www.poker5.tv/thumbs.js'></script></script>

<script language="javascript1.3" src="javascripts/ahah.js" ></script>

<link href="../css/styles.css" rel="stylesheet" type="text/css">
<style type="text/css">



.flottante {
background-color: #6fa797;
margin: 2px;
float: left;
width: 131px;
height: 20px;
text-align: center;
background-image:../images/tab.png;
 
}


.flottante a{

font-size:15px; 
color:#ffffff;
font-weight: bold;
text-decoration:none;
}
.flottante a:hover{
background-color:407163 ;
text-decoration:underline;
}

.bas {

margin: 2px;
float: left;
width: 100%;
text-align: center;
background-image:../images/tab.png;
 
}

.menu {
width: 100%;
}
.spacer {
clear: both;
}


#Layer1 {
	position:absolute;
	width:230px;
	height:42px;
	z-index:1;
	left: 618px;
	top: 41px;}


#Layer2 {
	position:absolute;
	width:120px;
	height:600px;
	z-index:1;
	left: 826px;
	top: 79px;
}







#dropmenudiv{
position:absolute;
border:1px solid black;
border-bottom-width: 0;
font:normal 13px Arial;
line-height:18px;
z-index:100;
}

#dropmenudiv a{
width: 100%;
display: block;
text-indent: 3px;
color:#FFFFFF;
border-bottom: 1px solid black;
padding: 1px 0;
text-decoration: none;
font-weight: bold;
}

#dropmenudiv a:hover{ /*hover background color*/
background-color: #182322;
}

</style>


<script type="text/javascript">

/***********************************************
* AnyLink Drop Down Menu- ? Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Contents for menu 1
var menu1=new Array()
menu1[0]='<a href="http://www.poker5.tv/seemore.php?load=bestnote">Les mieux not?es</a>'
menu1[1]='<a href="http://www.poker5.tv/seemore.php?load=viewed">Les plus vues</a>'
menu1[2]='<a href="http://www.poker5.tv/seemore.php?load=featured">Les plus longues</a>'
menu1[3]='<a href="http://www.poker5.tv/seemore.php?page=1&load=recent">Les plus r?centes</a>'
menu1[4]='<a href="http://www.poker5.tv/seemore.php?load=alpha">De A ? Z</a>'

		
var menuwidth='165px' //default menu width
var menubgcolor='#6fa797'  //menu bgcolor
var disappeardelay=250  //menu disappear speed onMouseout (in miliseconds)
var hidemenu_onclick="yes" //hide menu when user clicks within menu?

/////No further editting needed

var ie4=document.all
var ns6=document.getElementById&&!document.all

if (ie4||ns6)
document.write('<div id="dropmenudiv" style="visibility:hidden;width:'+menuwidth+';background-color:'+menubgcolor+'" onMouseover="clearhidemenu()" onMouseout="dynamichide(event)"></div>')

function getposOffset(what, offsettype){
var totaloffset=(offsettype=="left")? what.offsetLeft : what.offsetTop;
var parentEl=what.offsetParent;
while (parentEl!=null){
totaloffset=(offsettype=="left")? totaloffset+parentEl.offsetLeft : totaloffset+parentEl.offsetTop;
parentEl=parentEl.offsetParent;
}
return totaloffset;
}


function showhide(obj, e, visible, hidden, menuwidth){
if (ie4||ns6)
dropmenuobj.style.left=dropmenuobj.style.top="-500px"
if (menuwidth!=""){
dropmenuobj.widthobj=dropmenuobj.style
dropmenuobj.widthobj.width=menuwidth
}
if (e.type=="click" && obj.visibility==hidden || e.type=="mouseover")
obj.visibility=visible
else if (e.type=="click")
obj.visibility=hidden
}

function iecompattest(){
return (document.compatMode && document.compatMode!="BackCompat")? document.documentElement : document.body
}

function clearbrowseredge(obj, whichedge){
var edgeoffset=0
if (whichedge=="rightedge"){
var windowedge=ie4 && !window.opera? iecompattest().scrollLeft+iecompattest().clientWidth-15 : window.pageXOffset+window.innerWidth-15
dropmenuobj.contentmeasure=dropmenuobj.offsetWidth
if (windowedge-dropmenuobj.x < dropmenuobj.contentmeasure)
edgeoffset=dropmenuobj.contentmeasure-obj.offsetWidth
}
else{
var topedge=ie4 && !window.opera? iecompattest().scrollTop : window.pageYOffset
var windowedge=ie4 && !window.opera? iecompattest().scrollTop+iecompattest().clientHeight-15 : window.pageYOffset+window.innerHeight-18
dropmenuobj.contentmeasure=dropmenuobj.offsetHeight
if (windowedge-dropmenuobj.y < dropmenuobj.contentmeasure){ //move up?
edgeoffset=dropmenuobj.contentmeasure+obj.offsetHeight
if ((dropmenuobj.y-topedge)<dropmenuobj.contentmeasure) //up no good either?
edgeoffset=dropmenuobj.y+obj.offsetHeight-topedge
}
}
return edgeoffset
}

function populatemenu(what){
if (ie4||ns6)
dropmenuobj.innerHTML=what.join("")
}


function dropdownmenu(obj, e, menucontents, menuwidth){
if (window.event) event.cancelBubble=true
else if (e.stopPropagation) e.stopPropagation()
clearhidemenu()
dropmenuobj=document.getElementById? document.getElementById("dropmenudiv") : dropmenudiv
populatemenu(menucontents)

if (ie4||ns6){
showhide(dropmenuobj.style, e, "visible", "hidden", menuwidth)

dropmenuobj.x=getposOffset(obj, "left")
dropmenuobj.y=getposOffset(obj, "top")
dropmenuobj.style.left=dropmenuobj.x-clearbrowseredge(obj, "rightedge")+"px"
dropmenuobj.style.top=dropmenuobj.y-clearbrowseredge(obj, "bottomedge")+obj.offsetHeight+"px"
}

return clickreturnvalue()
}

function clickreturnvalue(){
if (ie4||ns6) return false
else return true
}

function contains_ns6(a, b) {
while (b.parentNode)
if ((b = b.parentNode) == a)
return true;
return false;
}

function dynamichide(e){
if (ie4&&!dropmenuobj.contains(e.toElement))
delayhidemenu()
else if (ns6&&e.currentTarget!= e.relatedTarget&& !contains_ns6(e.currentTarget, e.relatedTarget))
delayhidemenu()
}

function hidemenu(e){
if (typeof dropmenuobj!="undefined"){
if (ie4||ns6)
dropmenuobj.style.visibility="hidden"
}
}

function delayhidemenu(){
if (ie4||ns6)
delayhide=setTimeout("hidemenu()",disappeardelay)
}

function clearhidemenu(){
if (typeof delayhide!="undefined")
clearTimeout(delayhide)
}

if (hidemenu_onclick=="yes")
document.onclick=hidemenu

</script>
</head>
<script type="text/javascript" src="swfobject.js"></script>
<body>
<div id="conteneur">
  <a href="index.php"><img src="../images/poker5.jpg" alt="le poker en vid?o" border="0"></a>
  

  
  <div id="Layer1"> 
    <form method="POST" action="search.php">
      
              <input name="keyword" type="text" class="query" onFocus="if (this.value=='Vos mots cl?s'){this.value=''}" onBlur="if(this.value==''){this.value='Vos mots cl?s'}" value="Vos mots cl?s" size="20">
              
              <input type="hidden" name="type" value="videos" />
              <input type="submit" value="GO!" name="B2"  >      
  </form></div>
  <div class="menu">
<p class="flottante"><a href="index.php">Videos</a></p>
<p class="flottante"><a href="seemore.php?load=viewed" onClick="return clickreturnvalue()" onMouseover="dropdownmenu(this, event, menu1, '150px')" onMouseout="delayhidemenu()">Les meilleures</a></p>
<p class="flottante"><a href="category.php">Cat&eacute;gories</a></p>
<p class="flottante"><a href="groups.php">Groupes</a></p>
<p class="flottante"><a href="login.php">Inscription</a></p>
<p class="flottante"><a href="myaccount.php"></a> <a href="login.php">
          Connexion
          </a></p>
</div>

 

<div>

            



</div>







  <hr>
  <div style="padding:5px; margin-right:61px; margin-left:3px; background-color:#CCFFFF; " class="intro" ><a href="http://www.poker5.tv/login.php"><b>Connectez-vous!</b></a> pour poster vos vid&eacute;os de poker, &eacute;valuer les vid&eacute;os (notes) et participer aux discussions et laisser vos commentaires. Si vous n'avez pas encore de compte sur poker5, <a href="http://www.poker5.tv/login.php"><b>inscrivez vous vite</b></a> gratuitement. Pour jouer au casino, rendez vous sur <a href="http://www.casinoplanete.com/">casino planete</a>. </div>
  <ul class="vidcol"> 
	<li>
	<p class="titre"><a href="http://www.poker5.tv/video-223-Champions-Invitational-WSOP-2009---Part-7" title="Champions Invitational WSOP 2009 - Part 7">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/ozD10UNEIHozCIPDOPGm.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['ozD10UNEIHozCIPDOPGm']=0; pic['ozD10UNEIHozCIPDOPGm']=new Array(); pics['ozD10UNEIHozCIPDOPGm']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-223-Champions-Invitational-WSOP-2009---Part-7'> <img id='ozD10UNEIHozCIPDOPGm' class=t width=180 height=130 src='uploads/thumbs/ozD10UNEIHozCIPDOPGm.jpg'
onmouseout='endm("ozD10UNEIHozCIPDOPGm"); this.src="uploads/thumbs/ozD10UNEIHozCIPDOPGm.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("ozD10UNEIHozCIPDOPGm","uploads/thumbs/ozD10UNEIHozCIPDOPGm.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:34</p>
		<p class="vues">2712 vues, 0.00
                      / 5 </p>
		<p class="vote">13-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-222-Champions-Invitational-WSOP-2009---Part-6" title="Champions Invitational WSOP 2009 - Part 6">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/gKttnofl2dMuaArNxYYZ.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['gKttnofl2dMuaArNxYYZ']=0; pic['gKttnofl2dMuaArNxYYZ']=new Array(); pics['gKttnofl2dMuaArNxYYZ']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-222-Champions-Invitational-WSOP-2009---Part-6'> <img id='gKttnofl2dMuaArNxYYZ' class=t width=180 height=130 src='uploads/thumbs/gKttnofl2dMuaArNxYYZ.jpg'
onmouseout='endm("gKttnofl2dMuaArNxYYZ"); this.src="uploads/thumbs/gKttnofl2dMuaArNxYYZ.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("gKttnofl2dMuaArNxYYZ","uploads/thumbs/gKttnofl2dMuaArNxYYZ.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:33</p>
		<p class="vues">2473 vues, 0.00
                      / 5 </p>
		<p class="vote">13-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-221-Champions-Invitational-WSOP-2009---Part-5" title="Champions Invitational WSOP 2009 - Part 5">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/2TPsDjIrOLBBqfxqGkY4.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['2TPsDjIrOLBBqfxqGkY4']=0; pic['2TPsDjIrOLBBqfxqGkY4']=new Array(); pics['2TPsDjIrOLBBqfxqGkY4']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-221-Champions-Invitational-WSOP-2009---Part-5'> <img id='2TPsDjIrOLBBqfxqGkY4' class=t width=180 height=130 src='uploads/thumbs/2TPsDjIrOLBBqfxqGkY4.jpg'
onmouseout='endm("2TPsDjIrOLBBqfxqGkY4"); this.src="uploads/thumbs/2TPsDjIrOLBBqfxqGkY4.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("2TPsDjIrOLBBqfxqGkY4","uploads/thumbs/2TPsDjIrOLBBqfxqGkY4.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:34</p>
		<p class="vues">2480 vues, 0.00
                      / 5 </p>
		<p class="vote">13-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-220-Champions-Invitational-WSOP-2009---Part-4" title="Champions Invitational WSOP 2009 - Part 4">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/DcuFCzcnLTeDrJjXLWQG.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['DcuFCzcnLTeDrJjXLWQG']=0; pic['DcuFCzcnLTeDrJjXLWQG']=new Array(); pics['DcuFCzcnLTeDrJjXLWQG']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-220-Champions-Invitational-WSOP-2009---Part-4'> <img id='DcuFCzcnLTeDrJjXLWQG' class=t width=180 height=130 src='uploads/thumbs/DcuFCzcnLTeDrJjXLWQG.jpg'
onmouseout='endm("DcuFCzcnLTeDrJjXLWQG"); this.src="uploads/thumbs/DcuFCzcnLTeDrJjXLWQG.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("DcuFCzcnLTeDrJjXLWQG","uploads/thumbs/DcuFCzcnLTeDrJjXLWQG.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:36</p>
		<p class="vues">2483 vues, 0.00
                      / 5 </p>
		<p class="vote">12-08-09</p>
  </li>
</ul><ul class="vidcol"> 
	<li>
	<p class="titre"><a href="http://www.poker5.tv/video-219-Champions-Invitational-WSOP-2009---Part-3" title="Champions Invitational WSOP 2009 - Part 3">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/yMslIX4rlnxr2cXMbuI5.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['yMslIX4rlnxr2cXMbuI5']=0; pic['yMslIX4rlnxr2cXMbuI5']=new Array(); pics['yMslIX4rlnxr2cXMbuI5']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-219-Champions-Invitational-WSOP-2009---Part-3'> <img id='yMslIX4rlnxr2cXMbuI5' class=t width=180 height=130 src='uploads/thumbs/yMslIX4rlnxr2cXMbuI5.jpg'
onmouseout='endm("yMslIX4rlnxr2cXMbuI5"); this.src="uploads/thumbs/yMslIX4rlnxr2cXMbuI5.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("yMslIX4rlnxr2cXMbuI5","uploads/thumbs/yMslIX4rlnxr2cXMbuI5.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:33</p>
		<p class="vues">2557 vues, 0.00
                      / 5 </p>
		<p class="vote">12-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-218-Champions-Invitational-WSOP-2009---Part-2" title="Champions Invitational WSOP 2009 - Part 2">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/MVFQsR3IAGGERrehiMoO.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['MVFQsR3IAGGERrehiMoO']=0; pic['MVFQsR3IAGGERrehiMoO']=new Array(); pics['MVFQsR3IAGGERrehiMoO']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-218-Champions-Invitational-WSOP-2009---Part-2'> <img id='MVFQsR3IAGGERrehiMoO' class=t width=180 height=130 src='uploads/thumbs/MVFQsR3IAGGERrehiMoO.jpg'
onmouseout='endm("MVFQsR3IAGGERrehiMoO"); this.src="uploads/thumbs/MVFQsR3IAGGERrehiMoO.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("MVFQsR3IAGGERrehiMoO","uploads/thumbs/MVFQsR3IAGGERrehiMoO.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:34</p>
		<p class="vues">2592 vues, 0.00
                      / 5 </p>
		<p class="vote">12-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-217-Champions-Invitational-WSOP-2009---Part-1" title="Champions Invitational WSOP 2009 - Part 1">Champions Invitational WSOP 2009 - Part ...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/GZBUvpqyO3WhTeNGFxdo.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['GZBUvpqyO3WhTeNGFxdo']=0; pic['GZBUvpqyO3WhTeNGFxdo']=new Array(); pics['GZBUvpqyO3WhTeNGFxdo']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-217-Champions-Invitational-WSOP-2009---Part-1'> <img id='GZBUvpqyO3WhTeNGFxdo' class=t width=180 height=130 src='uploads/thumbs/GZBUvpqyO3WhTeNGFxdo.jpg'
onmouseout='endm("GZBUvpqyO3WhTeNGFxdo"); this.src="uploads/thumbs/GZBUvpqyO3WhTeNGFxdo.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("GZBUvpqyO3WhTeNGFxdo","uploads/thumbs/GZBUvpqyO3WhTeNGFxdo.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:33</p>
		<p class="vues">2834 vues, 0.00
                      / 5 </p>
		<p class="vote">07-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-216-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-9" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 9">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/CKLFOGKRVgEOBHpvB0XQ.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['CKLFOGKRVgEOBHpvB0XQ']=0; pic['CKLFOGKRVgEOBHpvB0XQ']=new Array(); pics['CKLFOGKRVgEOBHpvB0XQ']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-216-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-9'> <img id='CKLFOGKRVgEOBHpvB0XQ' class=t width=180 height=130 src='uploads/thumbs/CKLFOGKRVgEOBHpvB0XQ.jpg'
onmouseout='endm("CKLFOGKRVgEOBHpvB0XQ"); this.src="uploads/thumbs/CKLFOGKRVgEOBHpvB0XQ.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("CKLFOGKRVgEOBHpvB0XQ","uploads/thumbs/CKLFOGKRVgEOBHpvB0XQ.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:45</p>
		<p class="vues">2513 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
</ul><ul class="vidcol"> 
	<li>
	<p class="titre"><a href="http://www.poker5.tv/video-215-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-8" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 8">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/NNMqWWbVV1nmVDs43YxZ.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['NNMqWWbVV1nmVDs43YxZ']=0; pic['NNMqWWbVV1nmVDs43YxZ']=new Array(); pics['NNMqWWbVV1nmVDs43YxZ']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-215-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-8'> <img id='NNMqWWbVV1nmVDs43YxZ' class=t width=180 height=130 src='uploads/thumbs/NNMqWWbVV1nmVDs43YxZ.jpg'
onmouseout='endm("NNMqWWbVV1nmVDs43YxZ"); this.src="uploads/thumbs/NNMqWWbVV1nmVDs43YxZ.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("NNMqWWbVV1nmVDs43YxZ","uploads/thumbs/NNMqWWbVV1nmVDs43YxZ.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:41</p>
		<p class="vues">2297 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-214-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-7" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 7">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/BM5KZRCOiWwR1pQdobYq.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['BM5KZRCOiWwR1pQdobYq']=0; pic['BM5KZRCOiWwR1pQdobYq']=new Array(); pics['BM5KZRCOiWwR1pQdobYq']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-214-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-7'> <img id='BM5KZRCOiWwR1pQdobYq' class=t width=180 height=130 src='uploads/thumbs/BM5KZRCOiWwR1pQdobYq.jpg'
onmouseout='endm("BM5KZRCOiWwR1pQdobYq"); this.src="uploads/thumbs/BM5KZRCOiWwR1pQdobYq.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("BM5KZRCOiWwR1pQdobYq","uploads/thumbs/BM5KZRCOiWwR1pQdobYq.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:41</p>
		<p class="vues">2491 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-213-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-6" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 6">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/ngnpgJbrrOQOfySztW1M.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['ngnpgJbrrOQOfySztW1M']=0; pic['ngnpgJbrrOQOfySztW1M']=new Array(); pics['ngnpgJbrrOQOfySztW1M']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-213-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-6'> <img id='ngnpgJbrrOQOfySztW1M' class=t width=180 height=130 src='uploads/thumbs/ngnpgJbrrOQOfySztW1M.jpg'
onmouseout='endm("ngnpgJbrrOQOfySztW1M"); this.src="uploads/thumbs/ngnpgJbrrOQOfySztW1M.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("ngnpgJbrrOQOfySztW1M","uploads/thumbs/ngnpgJbrrOQOfySztW1M.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:39</p>
		<p class="vues">2431 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-212-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-5" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 5">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/PPVUWuZxKM2FhUFTtjIE.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['PPVUWuZxKM2FhUFTtjIE']=0; pic['PPVUWuZxKM2FhUFTtjIE']=new Array(); pics['PPVUWuZxKM2FhUFTtjIE']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-212-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-5'> <img id='PPVUWuZxKM2FhUFTtjIE' class=t width=180 height=130 src='uploads/thumbs/PPVUWuZxKM2FhUFTtjIE.jpg'
onmouseout='endm("PPVUWuZxKM2FhUFTtjIE"); this.src="uploads/thumbs/PPVUWuZxKM2FhUFTtjIE.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("PPVUWuZxKM2FhUFTtjIE","uploads/thumbs/PPVUWuZxKM2FhUFTtjIE.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:41</p>
		<p class="vues">2401 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
</ul><ul class="vidcol"> 
	<li>
	<p class="titre"><a href="http://www.poker5.tv/video-211-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-4" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 4">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/EUDqjnmDtvwouf5N03fX.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['EUDqjnmDtvwouf5N03fX']=0; pic['EUDqjnmDtvwouf5N03fX']=new Array(); pics['EUDqjnmDtvwouf5N03fX']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-211-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-4'> <img id='EUDqjnmDtvwouf5N03fX' class=t width=180 height=130 src='uploads/thumbs/EUDqjnmDtvwouf5N03fX.jpg'
onmouseout='endm("EUDqjnmDtvwouf5N03fX"); this.src="uploads/thumbs/EUDqjnmDtvwouf5N03fX.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("EUDqjnmDtvwouf5N03fX","uploads/thumbs/EUDqjnmDtvwouf5N03fX.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:40</p>
		<p class="vues">2481 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-210-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-3" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 3">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/afUamD5lkcdiRA2QcPWx.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['afUamD5lkcdiRA2QcPWx']=0; pic['afUamD5lkcdiRA2QcPWx']=new Array(); pics['afUamD5lkcdiRA2QcPWx']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-210-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-3'> <img id='afUamD5lkcdiRA2QcPWx' class=t width=180 height=130 src='uploads/thumbs/afUamD5lkcdiRA2QcPWx.jpg'
onmouseout='endm("afUamD5lkcdiRA2QcPWx"); this.src="uploads/thumbs/afUamD5lkcdiRA2QcPWx.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("afUamD5lkcdiRA2QcPWx","uploads/thumbs/afUamD5lkcdiRA2QcPWx.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:46</p>
		<p class="vues">2328 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-209-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-2" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 2">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/xLySk1OSENOqWgcR0mvK.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['xLySk1OSENOqWgcR0mvK']=0; pic['xLySk1OSENOqWgcR0mvK']=new Array(); pics['xLySk1OSENOqWgcR0mvK']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-209-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-2'> <img id='xLySk1OSENOqWgcR0mvK' class=t width=180 height=130 src='uploads/thumbs/xLySk1OSENOqWgcR0mvK.jpg'
onmouseout='endm("xLySk1OSENOqWgcR0mvK"); this.src="uploads/thumbs/xLySk1OSENOqWgcR0mvK.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("xLySk1OSENOqWgcR0mvK","uploads/thumbs/xLySk1OSENOqWgcR0mvK.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:41</p>
		<p class="vues">2601 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
		<li>
	<p class="titre"><a href="http://www.poker5.tv/video-208-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-1" title="WSOP 2009 - 40.000$ No-Limit Hold'em Championship - Part 1">WSOP 2009 - 40.000$ No-Limit Hold'em Cha...</a></p>
    <div onMouseOver="this.style.border='solid 2px #6fa797'" onMouseOut="this.style.border='solid 2px #999999'" style="height:130px;width:165px;overflow:hidden; border:solid 2px; border-color: #999999; background-image: url(uploads/thumbs/AjZaNYcmZhOfOMi3KJES.jpg)" >
                  <div style="margin-left:-2px; margin-top:-2px" >
                    <script type='text/javascript'>
stat['AjZaNYcmZhOfOMi3KJES']=0; pic['AjZaNYcmZhOfOMi3KJES']=new Array(); pics['AjZaNYcmZhOfOMi3KJES']=new
Array(1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);</script>
                  <a  href='http://www.poker5.tv/video-208-WSOP-2009---40000$-No-Limit-Hold-em-Championship---Part-1'> <img id='AjZaNYcmZhOfOMi3KJES' class=t width=180 height=130 src='uploads/thumbs/AjZaNYcmZhOfOMi3KJES.jpg'
onmouseout='endm("AjZaNYcmZhOfOMi3KJES"); this.src="uploads/thumbs/AjZaNYcmZhOfOMi3KJES.jpg"; this.style.border="solid 2px #A0A0A0";'
onmouseover='startm("AjZaNYcmZhOfOMi3KJES","uploads/thumbs/AjZaNYcmZhOfOMi3KJES.jpg._",".jpg"); this.style.border="solid 2px #CC0D12";'></a> </div>
      </div></a>
		
		<p class="duree">00:07:39</p>
		<p class="vues">2488 vues, 0.00
                      / 5 </p>
		<p class="vote">04-08-09</p>
  </li>
</ul>


<hr>




<!-- Pagination start -->

<div id="pagination">
<ul>
<li><a href="seemore.php?page=1&load=recent">1</a></li><li><a href="seemore.php?page=2&load=recent">2</a></li><li><a href="seemore.php?page=3&load=recent">3</a></li><li><a href="seemore.php?page=4&load=recent">4</a></li><li><a href="seemore.php?page=5&load=recent">5</a></li><li><a href="seemore.php?page=6&load=recent">6</a></li><li><a href="seemore.php?page=7&load=recent">7</a></li><li><a href="seemore.php?page=8&load=recent">8</a></li><li><a href="seemore.php?page=9&load=recent">9</a></li><li><a href="seemore.php?page=10&load=recent">10</a></li><li><a href="seemore.php?page=11&load=recent">11</a></li><li><a href="seemore.php?page=2&load=recent">Suivant >></a></li>
</ul>
</div>
<!-- Pagination end -->


	
	
	



  
    <div class="bas">
<p class="bas">support[at]poker5.tv - <strong>copyright 2007 poker5.tv</strong> - <a href="rss.php"><img src="../images/feed-icon-14x14.png" width="14" height="14" border="0" align="absbottom"><br>
  <a href="http://www.poker5.tv/last_com.php">commentaires</a> | <a href="http://www.poker5.tv/videos_poker.php">liste des  vid&eacute;os</a>  | <a href="http://www.poker5.tv/tags.php">tags</a> | <a href="http://www.poker5.tv/stats.php">stats</a> <a href="http://www.xiti.com/xiti.asp?s=360442" title="WebAnalytics">
<script type="text/javascript">
<!--
Xt_param = 's=360442&p=';
try {Xt_r = top.document.referrer;}
catch(e) {Xt_r = document.referrer; }
Xt_h = new Date();
Xt_i = '<img width="80" height="15" border="0" alt="" ';
Xt_i += 'src="http://logv3.xiti.com/g.xiti?'+Xt_param;
Xt_i += '&hl='+Xt_h.getHours()+'x'+Xt_h.getMinutes()+'x'+Xt_h.getSeconds();
if(parseFloat(navigator.appVersion)>=4)
{Xt_s=screen;Xt_i+='&r='+Xt_s.width+'x'+Xt_s.height+'x'+Xt_s.pixelDepth+'x'+Xt_s.colorDepth;}
document.write(Xt_i+'&ref='+Xt_r.replace(/[<>"]/g, '').replace(/&/g, '$')+'" title="Internet Audience">');
//-->
</script>
<noscript>
Mesure d'audience ROI statistique webanalytics par <img width="80" height="15" src="http://logv3.xiti.com/g.xiti?s=360442&p=" alt="WebAnalytics" />
</noscript></a>
</p>
  </div>
</div>


<div id="Layer2">
<iframe align="center" name="nl" scrolling="no" marginwidth="0" marginheight="0" height="600" width="120" border="0" frameborder="0" src="http://www.poker5.tv/pub120600.php" style="border:0px;"></iframe>
<br>
<span class="intro">Poker5.tv vous recommande les sites suivants:<br>
<a href="http://fr.virtuacasinos.com/">jeux casino</a><br>
<a href="http://www.mescasinos.org">casino</a><br>
<a href="http://www.poker-fr.org">poker en ligne</a><br>
<a href="http://www.casinos-hits.com">casino en ligne</a><br>
<a href=http://www.pokerligne.org/ target="_blank">poker en ligne</a><br>
<a href="http://www.jeux-de-casinos.com/free.php" >Casino gratuit</a><br>
<a href="http://www.guide-poker.eu">Jouer au poker</a><br>
<a href="http://www.onlinepokerinfo.fr">Poker</a><br>
<a href="http://poker.comprendrechoisir.com/comprendre/combinaison" title="Poker combinaison" target="_blank">Poker combinaison</a><br>
<a href="http://paris-sportifs.comprendrechoisir.com/" title="Pari sportif" target="_blank">Pari sportif</a>
</span>

</div>
</body>

</html><div style="margin-left:auto; margin-right:auto; width:200px; height:20px; border:#999999 1px solid; line-height:15px; text-align:center; padding-left:5px; padding-right:5px; margin-top:15px; visibility:visible; background-color:#FFFFFF; clear:both">
<a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Powered by PHPmotion -</a> <a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Free Video Script</a></div>