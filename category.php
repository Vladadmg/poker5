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

            



<ul class="menuhaut"><a href="myaccount.php"> Mon compte</a> | <a href="groups.php">Tous les groupes</a>| <a href="groups.php?load=featured">Groupes s&eacute;lectionn&eacute;s</a> | <a href="groups.php?load=new">Nouveaux groupes</a> | <a href="addgroup.php">Cr&eacute;er un groupe</a>
            </ul></div>




<div align="center">
	<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table1">
		<tr>
			<td>
			<div align="center">
			<table border="0" width="100%" id="table46" style="border-style:solid; border-width:1px; " class="warning_box_green">
				
			</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div align="center">
			<table border="0" width="100%" id="table47" style="border-style:solid; " bgcolor="#FFFFFF" class="warning_box_green_white">
				
			</table>
			</div>
			</td>
		</tr>
		<tr>
			<td>
			<div align="center">
			<table border="0" width="100%" id="table48" class="warning_box_red">
				
			</table>
			</div>
			</td>
		</tr>

		<tr>
			<td>
			<p align="center">
			<img border="0" src="images/spacer_5pix.gif" width="1" height="15"></td>
		</tr>

			<tr id="tr_login">
			<td align="center" valign="top">
			<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table6">
				<tr>
					<td height="414" valign="top">
					<table border="0" width="100%"  id="table9" cellspacing="0" cellpadding="0">
						<tr>
							<td colspan="2" height="30" style="border-style:solid; border-width:0px; " class="titre_page">
							Categories<br></td>
						</tr>
						<tr>
							<td width="66%" height="361" align="right" valign="top">
							<div align="center">
							<table border="0" width="98%" id="table31" cellspacing="0">
								<tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=Tournois Poker">&nbsp;Tournois Poker</a></td>
							</tr>
							<tr>
								<td class="text_normal">Vid?os des meilleurs tournois de poker</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-223-Champions-Invitational-WSOP-2009---Part-7">
								  Champions Invitational WS...
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Coups de ma?tres">&nbsp;
                                Coups de ma?tres
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Les coups de ma?tres, les parties de poker cultes</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-131-Bertrand--Elky--Grospellier-vs-William-Thorson">
                            Bertrand &quot;Elky&quot; Grospelli...
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr><tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=D?butant au Poker">&nbsp;D?butant au Poker</a></td>
							</tr>
							<tr>
								<td class="text_normal">Le poker pour les d?butants</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-3-Le-poker-explique-aux-debutants">
								  Le poker expliqu? aux d?b...
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Les stars du poker">&nbsp;
                                Les stars du poker
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Les stars nationales ou internationales du poker</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-183--Elky--s-entraine-avec-Dewey--Black-Cobra--Cooper">
                            &quot;Elky&quot; s'entra?ne avec De...
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr><tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=Humour">&nbsp;Humour</a></td>
							</tr>
							<tr>
								<td class="text_normal">Vid?os dr?les en rapport avec le monde du poker</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-85-Interview-surprise-avec-Patrick-Bruel">
								  Interview surprise avec P...
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Divers">&nbsp;
                                Divers
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Toutes les vid?os inclassables</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-103-Interview-de-Brahim-Asloum">
                            Interview de Brahim Aslou...
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr><tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=Jeux vid?o">&nbsp;Jeux vid?o</a></td>
							</tr>
							<tr>
								<td class="text_normal">Jeux vid?o de poker sur console ou PC</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-9-Trailer-du-jeu-?-High-Stakes-Vegas-Strip--Poker-Edition-?">
								  Trailer du jeu ? High Sta...
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Poker et Cin?ma">&nbsp;
                                Poker et Cin?ma
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Le poker dans le cin?ma</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-37-Daniel-Craig-au-Poker">
                            Daniel Craig au Poker
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr><tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=Pathologies">&nbsp;Pathologies</a></td>
							</tr>
							<tr>
								<td class="text_normal">Les pathologies li?es au monde du jeu</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-11-Joueur-compulsif">
								  Joueur compulsif
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Trucs, astuces">&nbsp;
                                Trucs, astuces
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Les bons plans pour devenir imbattable</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-204-Apprendre-a-jouer-Texas-Hold-em-No-Limit---Part-4">
                            Apprendre ? jouer Texas H...
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr><tr>
				<td width="50%" align="center" valign="top">
					<div align="center">
						<table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
							<tr>
								<td class="categories" >
								
								<a href="category_home.php?cid=Vos vid?os">&nbsp;Vos vid?os</a></td>
							</tr>
							<tr>
								<td class="text_normal">Les vid?os de passionn?s de poker</td>
								</tr>
							<tr>
								<td  class="text_normal" >								&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-15-Carre-d-As">
								  Carr? d'As
								  </a>)</td>
							</tr>
							<tr>
								<td><img src="../images/1pix.gif" width="1" height="1"></td>
							</tr>
						</table>
					</div>				</td>
				<td width="50%" align="center" valign="top">
					<div align="center">
					  <table border="0" cellpadding="0" cellspacing="0" width="80%" id="table32" >
                        <tr>
                          <td class="categories" ><a href="category_home.php?cid=Poker et soci?t?">&nbsp;
                                Poker et soci?t?
                          </a></td>
                        </tr>
                        <tr>
                          <td class="text_normal">Analyse de ce ph?nom?ne de soci?t?</td>
                        </tr>
                        <tr>
                          <td  class="text_normal" >&nbsp;Derni&egrave;re vid&eacute;o ( <a href="http://www.poker5.tv/video-35-La-deferlante-du-Poker">
                            La deferlante du Poker
                          </a>)</td>
                        </tr>
                        <tr>
                          <td><img src="../images/1pix.gif" width="1" height="1"></td>
                        </tr>
                      </table>
					</div>				</td>
								</tr>
								<tr>
				<td width="100%" colspan="2">&nbsp;					</td>
								</tr>
								
								<tr>
				<td width="100%" colspan="2">&nbsp;					</td>
								</tr>
								<tr>
				<td height="2" width="100%" colspan="2">					</td>
								</tr>
							</table>
							</div>							</td>
							<td width="13%" height="361" align="center" valign="top"  class="table_ads_l_b_r_t"><a href="play.php?vid=[mp_1.indexer;block=table]"></a>
							  <!--ads right start -->
										
									<!--ads right end -->						  </td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
			</td>
		</tr>
	
  </table>
</div>




  
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
<a href="http://www.guide-poker.eu">Jouer au poker</a></span>

</div>
</body>

</html><div style="margin-left:auto; margin-right:auto; width:200px; height:20px; border:#999999 1px solid; line-height:15px; text-align:center; padding-left:5px; padding-right:5px; margin-top:15px; visibility:visible; background-color:#FFFFFF; clear:both">
<a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Powered by PHPmotion -</a> <a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Free Video Script</a></div>