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
* AnyLink Drop Down Menu- © Dynamic Drive (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

//Contents for menu 1
var menu1=new Array()
menu1[0]='<a href="http://www.poker5.tv/seemore.php?load=bestnote">Les mieux notées</a>'
menu1[1]='<a href="http://www.poker5.tv/seemore.php?load=viewed">Les plus vues</a>'
menu1[2]='<a href="http://www.poker5.tv/seemore.php?load=featured">Les plus longues</a>'
menu1[3]='<a href="http://www.poker5.tv/seemore.php?page=1&load=recent">Les plus récentes</a>'
menu1[4]='<a href="http://www.poker5.tv/seemore.php?load=alpha">De A à Z</a>'

		
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
  <a href="index.php"><img src="../images/poker5.jpg" alt="le poker en vidéo" border="0"></a>
  

  
  <div id="Layer1"> 
    <form method="POST" action="search.php">
      
              <input name="keyword" type="text" class="query" onFocus="if (this.value=='Vos mots clés'){this.value=''}" onBlur="if(this.value==''){this.value='Vos mots clés'}" value="Vos mots clés" size="20">
              
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



<table border="0">
  <tr>
    <td class="details_video">Toutes les vidéos de poker

	  <li><a href="http://www.poker5.tv/video-53-"></a></li><li><a href="http://www.poker5.tv/video-59-"></a></li><li><a href="http://www.poker5.tv/video-10-Appendre-a-tricher-au-Poker">Appendre à tricher au Poker</a></li><li><a href="http://www.poker5.tv/video-114-Ballade-Moto--Voiture-TDU">Ballade Moto , Voiture TDU</a></li><li><a href="http://www.poker5.tv/video-82-Bertrand--Elky--Grospellier">Bertrand &quot;Elky&quot; Grospellier</a></li><li><a href="http://www.poker5.tv/video-131-Bertrand--Elky--Grospellier-vs-William-Thorson">Bertrand &quot;Elky&quot; Grospellier vs. William Thorson</a></li><li><a href="http://www.poker5.tv/video-155-Bertrand-Elky-Grospellier">Bertrand Elky Grospellier</a></li><li><a href="http://www.poker5.tv/video-137-Bilan-EPT-Budapeste-2008">Bilan EPT Budapeste 2008</a></li><li><a href="http://www.poker5.tv/video-167-Bilan-PPT-2008">Bilan PPT 2008</a></li><li><a href="http://www.poker5.tv/video-168-Bilan-PPT-2008">Bilan PPT 2008</a></li><li><a href="http://www.poker5.tv/video-4-Bruel-au-poker-face-a-un-novice">Bruel au poker face à un novice</a></li><li><a href="http://www.poker5.tv/video-67-Cannes-Partouche-Poker-Tour---Part-1">Cannes: Partouche Poker Tour - Part 1</a></li><li><a href="http://www.poker5.tv/video-68-Cannes-Partouche-Poker-Tour---Part-2">Cannes: Partouche Poker Tour - Part 2</a></li><li><a href="http://www.poker5.tv/video-15-Carre-d-As">Carré d'As</a></li><li><a href="http://www.poker5.tv/video-83-Charity-Poker-Festival">Charity Poker Festival</a></li><li><a href="http://www.poker5.tv/video-41-Chip-Production">Chip Production</a></li><li><a href="http://www.poker5.tv/video-136-Chris-Moneymaker---son-chemin-vers-le-championnat-mondial">Chris Moneymaker - son chemin vers le championnat mondial</a></li><li><a href="http://www.poker5.tv/video-18-Clip-strip-poker">Clip strip poker</a></li><li><a href="http://www.poker5.tv/video-27-Crack-My-Poker-Facecom">Crack My Poker Face.com</a></li><li><a href="http://www.poker5.tv/video-37-Daniel-Craig-au-Poker">Daniel Craig au Poker</a></li><li><a href="http://www.poker5.tv/video-120-Daniel-Negreanu-aux-WSOP">Daniel Negreanu aux WSOP</a></li><li><a href="http://www.poker5.tv/video-121-Daniel-Negreanu-aux-WSOP">Daniel Negreanu aux WSOP</a></li><li><a href="http://www.poker5.tv/video-123-Daniel-Negreanu-et-ses-conseils">Daniel Negreanu et ses conseils</a></li><li><a href="http://www.poker5.tv/video-135-Daniel-Negreanu-et-son-histoire">Daniel Negreanu et son histoire</a></li><li><a href="http://www.poker5.tv/video-60-Daniel-Negreanu-vs-Ed-Jordan">Daniel Negreanu vs Ed Jordan</a></li><li><a href="http://www.poker5.tv/video-122-Daniel-Negreanu-vs-Mike-Matusow">Daniel Negreanu vs Mike Matusow</a></li><li><a href="http://www.poker5.tv/video-116-Daniel-Negreanu-vs-Gus-Hansen">Daniel Negreanu vs. Gus Hansen</a></li><li><a href="http://www.poker5.tv/video-29-David-stone">David stone</a></li><li><a href="http://www.poker5.tv/video-8-Derniere-main-au-WSOP-1973">Dernière main au WSOP 1973</a></li><li><a href="http://www.poker5.tv/video-1-Dossier-sur-le-poker">Dossier sur le poker</a></li><li><a href="http://www.poker5.tv/video-47-EPT-Copenhague-11">EPT Copenhague 11</a></li><li><a href="http://www.poker5.tv/video-108-EPT-Deauville---1ere-partie">EPT Deauville - 1ère partie</a></li><li><a href="http://www.poker5.tv/video-107-EPT-Deauville---2eme-partie">EPT Deauville - 2ème partie</a></li><li><a href="http://www.poker5.tv/video-106-EPT-Deauville---3eme-partie">EPT Deauville - 3ème partie</a></li><li><a href="http://www.poker5.tv/video-58-EPT-Grand-Final-Monaco">EPT Grand Final Monaco</a></li><li><a href="http://www.poker5.tv/video-44-EPT-Monte-Carlo----Day-1B-13-avril-2008">EPT Monte Carlo -  Day 1B 13 avril 2008</a></li><li><a href="http://www.poker5.tv/video-43-EPT-Monte-Carlo---Day-1B-13-avril-2008">EPT Monte Carlo - Day 1B 13 avril 2008</a></li><li><a href="http://www.poker5.tv/video-24-EPT-Varsovie">EPT Varsovie</a></li><li><a href="http://www.poker5.tv/video-46-Eric-Koskas-et-Fabrice-Soulier-a-l-EPT-San-Remo">Eric Koskas et Fabrice Soulier à l'EPT San Remo</a></li><li><a href="http://www.poker5.tv/video-39-Everest-Poker-Minute-Alexander-Stevic">Everest Poker Minute: Alexander Stevic</a></li><li><a href="http://www.poker5.tv/video-28-Everest-Poker-Minute-Yoann-Sultan">Everest Poker Minute: Yoann Sultan</a></li><li><a href="http://www.poker5.tv/video-79-Explication-du-Texas-Hold-em">Explication du Texas Hold'em</a></li><li><a href="http://www.poker5.tv/video-66-Fabrice-Soulier-avant-sa-finale-des-WSOP-2007">Fabrice Soulier avant sa finale des WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-40-Flips">Flips</a></li><li><a href="http://www.poker5.tv/video-101-FPT-Strasbourg-2008">FPT Strasbourg 2008</a></li><li><a href="http://www.poker5.tv/video-12-Intercontinental-Poker-Championship---Tony-G">Intercontinental Poker Championship - Tony G.</a></li><li><a href="http://www.poker5.tv/video-103-Interview-de-Brahim-Asloum">Interview de Brahim Asloum</a></li><li><a href="http://www.poker5.tv/video-105-Interview-de-Patrick-Antonius">Interview de Patrick Antonius</a></li><li><a href="http://www.poker5.tv/video-85-Interview-surprise-avec-Patrick-Bruel">Interview surprise avec Patrick Bruel</a></li><li><a href="http://www.poker5.tv/video-52-Isabelle-Mercier">Isabelle Mercier</a></li><li><a href="http://www.poker5.tv/video-30-Jean-Jacques-SANVERT-chez-Ruquier-avec-Bruel">Jean-Jacques SANVERT chez Ruquier avec Bruel</a></li><li><a href="http://www.poker5.tv/video-42-Jerry-Yang-gagne-World-Series-of-Poker-s-Main-Event">Jerry Yang gagne World Series of Poker's Main Event</a></li><li><a href="http://www.poker5.tv/video-77-Jouer-au-poker-pour-une-cause-humanitaire">Jouer au poker pour une cause humanitaire</a></li><li><a href="http://www.poker5.tv/video-11-Joueur-compulsif">Joueur compulsif</a></li><li><a href="http://www.poker5.tv/video-100-L-art-de-controler-ses-jetons">L'art de contrôler ses jetons</a></li><li><a href="http://www.poker5.tv/video-146-L-equipe-PokerStars-Pro---Alex-Kravchenko">L'équipe PokerStars Pro - Alex Kravchenko</a></li><li><a href="http://www.poker5.tv/video-144-L-equipe-PokerStars-Pro---Berry-Greenstein">L'équipe PokerStars Pro - Berry Greenstein</a></li><li><a href="http://www.poker5.tv/video-145-L-equipe-PokerStars-Pro---Chad-Brown">L'équipe PokerStars Pro - Chad Brown</a></li><li><a href="http://www.poker5.tv/video-150-L-equipe-PokerStars-Pro---Gavin-Griffin">L'équipe PokerStars Pro - Gavin Griffin</a></li><li><a href="http://www.poker5.tv/video-138-L-equipe-PokerStars-Pro---Greg-Raymer">L'équipe PokerStars Pro - Greg Raymer</a></li><li><a href="http://www.poker5.tv/video-139-L-equipe-PokerStars-Pro---Greg-Raymer">L'équipe PokerStars Pro - Greg Raymer</a></li><li><a href="http://www.poker5.tv/video-140-L-equipe-PokerStars-Pro---Joe-Hachem">L'équipe PokerStars Pro - Joe Hachem</a></li><li><a href="http://www.poker5.tv/video-147-L-equipe-PokerStars-Pro---Luca-Pagano">L'équipe PokerStars Pro - Luca Pagano</a></li><li><a href="http://www.poker5.tv/video-141-L-equipe-PokerStars-Pro---Noah-Boeken">L'équipe PokerStars Pro - Noah Boeken</a></li><li><a href="http://www.poker5.tv/video-142-L-equipe-PokerStars-Pro---Noah-Boeken">L'équipe PokerStars Pro - Noah Boeken</a></li><li><a href="http://www.poker5.tv/video-143-L-equipe-PokerStars-Pro---Vanessa-Rousso">L'équipe PokerStars Pro - Vanessa Rousso</a></li><li><a href="http://www.poker5.tv/video-149-L-equipe-PokerStars-Pro---Victoria-Coren">L'équipe PokerStars Pro - Victoria Coren</a></li><li><a href="http://www.poker5.tv/video-148-L-equipe-PokerStars-Pro---William-Thorson">L'équipe PokerStars Pro - William Thorson</a></li><li><a href="http://www.poker5.tv/video-35-La-deferlante-du-Poker">La deferlante du Poker</a></li><li><a href="http://www.poker5.tv/video-99-La-table-finale-de-Partouche-Poker-Tour">La table finale de Partouche Poker Tour</a></li><li><a href="http://www.poker5.tv/video-22-Las-Vegas-7-juillet-2007">Las Vegas 7 juillet 2007</a></li><li><a href="http://www.poker5.tv/video-2-Le-coup-de-bluff-de-Varkonyi">Le coup de bluff de Varkonyi</a></li><li><a href="http://www.poker5.tv/video-38-Le-plus-grand-jackpot-de-poker">Le plus grand jackpot de poker</a></li><li><a href="http://www.poker5.tv/video-3-Le-poker-explique-aux-debutants">Le poker expliqué aux débutants</a></li><li><a href="http://www.poker5.tv/video-104-Le-tour-des-WSOPE">Le tour des WSOPE</a></li><li><a href="http://www.poker5.tv/video-84-Les-maitres-du-jeu">Les maîtres du jeu</a></li><li><a href="http://www.poker5.tv/video-55-Liz-Lieu-et-Fabrice-Soulier">Liz Lieu et Fabrice Soulier</a></li><li><a href="http://www.poker5.tv/video-26-Manipulation-de-cartes-a-Las-Vegas">Manipulation de cartes à Las Vegas</a></li><li><a href="http://www.poker5.tv/video-115-Mauvaise-strategie">Mauvaise stratégie</a></li><li><a href="http://www.poker5.tv/video-6-Melange-de-jetons-chips-shuffle">Mélange de jetons (chips shuffle)</a></li><li><a href="http://www.poker5.tv/video-14-Melanger-ces-jetons-comme-un-pro">Mélanger ces jetons comme un pro</a></li><li><a href="http://www.poker5.tv/video-130-Negreanu-vs-Hellmuth">Negreanu vs Hellmuth</a></li><li><a href="http://www.poker5.tv/video-63-Party-avec-Patrick-Bruel-Bruno-Fitoussi-et-Fabrice-Soulier">Party avec Patrick Bruel, Bruno Fitoussi et Fabrice Soulier</a></li><li><a href="http://www.poker5.tv/video-5-Patrick-Bruel---EPT-Barcelona">Patrick Bruel - EPT Barcelona</a></li><li><a href="http://www.poker5.tv/video-69-Patrick-Bruel---Part-1">Patrick Bruel - Part 1</a></li><li><a href="http://www.poker5.tv/video-70-Patrick-Bruel---Part-2">Patrick Bruel - Part 2</a></li><li><a href="http://www.poker5.tv/video-71-Patrick-Bruel---Part-3">Patrick Bruel - Part 3</a></li><li><a href="http://www.poker5.tv/video-72-Patrick-Bruel---Part-4">Patrick Bruel - Part 4</a></li><li><a href="http://www.poker5.tv/video-73-Patrick-Bruel---Part-5">Patrick Bruel - Part 5</a></li><li><a href="http://www.poker5.tv/video-23-Patrick-Bruel-en-finale-de-l-EPT-">Patrick Bruel en finale de l'EPT !</a></li><li><a href="http://www.poker5.tv/video-74-Patrick-Bruel-vs-Michel-Abecassis">Patrick Bruel vs Michel Abecassis</a></li><li><a href="http://www.poker5.tv/video-56-Phil-Gordon-vs-Scotty-Nguyen">Phil Gordon vs Scotty Nguyen</a></li><li><a href="http://www.poker5.tv/video-54-Phil-Ivey-Vs-Erick-Lindgren">Phil Ivey Vs Erick Lindgren</a></li><li><a href="http://www.poker5.tv/video-117-Poker-After-Dark-1ere-partie">Poker After Dark 1ère partie</a></li><li><a href="http://www.poker5.tv/video-118-Poker-After-Dark-2eme-partie">Poker After Dark 2ème partie</a></li><li><a href="http://www.poker5.tv/video-119-Poker-After-Dark-3eme-partie">Poker After Dark 3ème partie</a></li><li><a href="http://www.poker5.tv/video-45-Poker-Coach-Bonus">Poker Coach Bonus</a></li><li><a href="http://www.poker5.tv/video-13-Poker-dans--Morandini--sur--Direct-8-">Poker dans &quot;Morandini&quot; sur &quot;Direct 8&quot;</a></li><li><a href="http://www.poker5.tv/video-36-Poker-EPT--Rencontre-entre-Liz-Lieu-et-Fabrice-Soulier">Poker EPT : Rencontre entre Liz Lieu et Fabrice Soulier</a></li><li><a href="http://www.poker5.tv/video-16-Poker-Klass-12">Poker Klass (1/2)</a></li><li><a href="http://www.poker5.tv/video-17-Poker-Klass-22">Poker Klass (2/2)</a></li><li><a href="http://www.poker5.tv/video-25-Poker-Manipulation-">Poker Manipulation !</a></li><li><a href="http://www.poker5.tv/video-57-Poker-WPT">Poker WPT</a></li><li><a href="http://www.poker5.tv/video-34-Poker-WSOP-2006-finale-main-event-1-4">Poker WSOP 2006 finale main event 1-4</a></li><li><a href="http://www.poker5.tv/video-32-Poker-WSOP-2006-finale-main-event-2-4">Poker WSOP 2006 finale main event 2-4</a></li><li><a href="http://www.poker5.tv/video-19-Poker-WSOP-2006-finale-main-event-3-4">Poker WSOP 2006 finale main event 3-4</a></li><li><a href="http://www.poker5.tv/video-31-Poker-WSOP-2006-finale-main-event-4-4">Poker WSOP 2006 finale main event 4-4</a></li><li><a href="http://www.poker5.tv/video-33-Poker-WSOP-2006-finale-main-event-4-4">Poker WSOP 2006 finale main event 4-4</a></li><li><a href="http://www.poker5.tv/video-20-Poker-WSOP-2007">Poker WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-21-Poker-WSOP-2007">Poker WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-49-Poker-WSOP-2007">Poker WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-64-Poker-WSOP-2007">Poker WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-76-Poker-WSOP-Anthony-Lellouche-et-Fabrice-Soulier">Poker WSOP: Anthony Lellouche et Fabrice Soulier</a></li><li><a href="http://www.poker5.tv/video-61-Poker-WSOPE-Londres-2007">Poker WSOPE Londres 2007</a></li><li><a href="http://www.poker5.tv/video-98-Portrait-de-Remy-Biechel">Portrait de Remy Biechel</a></li><li><a href="http://www.poker5.tv/video-170-PPT-Nice-2009---Part-1">PPT Nice 2009 - Part 1</a></li><li><a href="http://www.poker5.tv/video-169-PPT-Nice-2009---Part-2">PPT Nice 2009 - Part 2</a></li><li><a href="http://www.poker5.tv/video-171-PPT-St-Amand-les-Eaux-2009">PPT St Amand les Eaux 2009</a></li><li><a href="http://www.poker5.tv/video-62-Premiere-chanson-dediee-au-poker">Première chanson dédieé au poker</a></li><li><a href="http://www.poker5.tv/video-133-Presentation-de-l-equipe-canadienne-au-tournoi-World-Cup-of-Poker">Présentation de l'équipe canadienne au tournoi World Cup of Poker</a></li><li><a href="http://www.poker5.tv/video-156-Presentation-EPT-Monte-Carlo-2009">Présentation EPT Monte Carlo 2009</a></li><li><a href="http://www.poker5.tv/video-132-Presentation-table-finale-EPT-Deauville-2009">Présentation table finale EPT Deauville 2009</a></li><li><a href="http://www.poker5.tv/video-48-QUINTE-FLUSH-ROYAL-WSOP-2007">QUINTE FLUSH ROYAL WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-50-QUINTE-FLUSH-ROYAL-WSOP-2007">QUINTE FLUSH ROYAL WSOP 2007</a></li><li><a href="http://www.poker5.tv/video-65-Rencontre-de-Fabrice-Soulier-avec-Elky">Rencontre de Fabrice Soulier avec Elky</a></li><li><a href="http://www.poker5.tv/video-152-Sebastien-Chabal">Sébastien Chabal</a></li><li><a href="http://www.poker5.tv/video-153-Sebastien-Chabal">Sébastien Chabal</a></li><li><a href="http://www.poker5.tv/video-154-Sebastien-Chabal">Sébastien Chabal</a></li><li><a href="http://www.poker5.tv/video-75-Sequence-detente-sur-le-Lake-Mead">Séquence détente sur le Lake Mead</a></li><li><a href="http://www.poker5.tv/video-7-Stu-Ungar-1981">Stu Ungar 1981</a></li><li><a href="http://www.poker5.tv/video-166-Table-finale-Aussie-Millions-2009---Part-1">Table finale Aussie Millions 2009 - Part 1</a></li><li><a href="http://www.poker5.tv/video-165-Table-finale-Aussie-Millions-2009---Part-2">Table finale Aussie Millions 2009 - Part 2</a></li><li><a href="http://www.poker5.tv/video-164-Table-finale-Aussie-Millions-2009---Part-3">Table finale Aussie Millions 2009 - Part 3</a></li><li><a href="http://www.poker5.tv/video-163-Table-finale-Aussie-Millions-2009---Part-4">Table finale Aussie Millions 2009 - Part 4</a></li><li><a href="http://www.poker5.tv/video-162-Table-finale-Aussie-Millions-2009---Part-5">Table finale Aussie Millions 2009 - Part 5</a></li><li><a href="http://www.poker5.tv/video-160-Table-finale-Aussie-Millions-2009---Part-6">Table finale Aussie Millions 2009 - Part 6</a></li><li><a href="http://www.poker5.tv/video-161-Table-finale-Aussie-Millions-2009---Part-6">Table finale Aussie Millions 2009 - Part 6</a></li><li><a href="http://www.poker5.tv/video-159-Table-finale-Aussie-Millions-2009---Part-7">Table finale Aussie Millions 2009 - Part 7</a></li><li><a href="http://www.poker5.tv/video-158-Table-finale-Aussie-Millions-2009---Part-8">Table finale Aussie Millions 2009 - Part 8</a></li><li><a href="http://www.poker5.tv/video-157-Table-finale-Aussie-Millions-2009---Part-9">Table finale Aussie Millions 2009 - Part 9</a></li><li><a href="http://www.poker5.tv/video-51-thth">thth</a></li><li><a href="http://www.poker5.tv/video-88-Tournoi-Barriere-2007">Tournoi Barrière 2007</a></li><li><a href="http://www.poker5.tv/video-78-Tournoi-Barriere-de-Deauville">Tournoi Barrière de Deauville</a></li><li><a href="http://www.poker5.tv/video-9-Trailer-du-jeu-«-High-Stakes-Vegas-Strip--Poker-Edition-»">Trailer du jeu « High Stakes Vegas Strip : Poker Edition »</a></li><li><a href="http://www.poker5.tv/video-151-Tristan-Clemencon-vs-Charlie-Perrault">Tristan Clémençon vs Charlie Perrault</a></li><li><a href="http://www.poker5.tv/video-134-Trucs-et-astuces-avec-Peter-Eastgate">Trucs et astuces avec Peter Eastgate</a></li><li><a href="http://www.poker5.tv/video-109-WPT----1ere-partie">WPT  - 1ère partie</a></li><li><a href="http://www.poker5.tv/video-111-WPT----continuation-1ere-partie">WPT  - continuation 1ère partie</a></li><li><a href="http://www.poker5.tv/video-112-WPT----continuation-1ere-partie">WPT  - continuation 1ère partie</a></li><li><a href="http://www.poker5.tv/video-113-WPT----continuation-1ere-partie">WPT  - continuation 1ère partie</a></li><li><a href="http://www.poker5.tv/video-80-WPT--Doyle-Brunson-Classic--Las-Vegas-decembre-2007">WPT &quot;Doyle Brunson Classic&quot;, Las Vegas décembre 2007</a></li><li><a href="http://www.poker5.tv/video-110-WPT---2eme-partie">WPT - 2ème partie</a></li><li><a href="http://www.poker5.tv/video-86-WSOP-2008---emission-1">WSOP 2008 - émission 1</a></li><li><a href="http://www.poker5.tv/video-81-WSOP-2008---emission-10">WSOP 2008 - émission 10</a></li><li><a href="http://www.poker5.tv/video-87-WSOP-2008---emission-2">WSOP 2008 - émission 2</a></li><li><a href="http://www.poker5.tv/video-89-WSOP-2008---emission-3">WSOP 2008 - émission 3</a></li><li><a href="http://www.poker5.tv/video-90-WSOP-2008---emission-4">WSOP 2008 - émission 4</a></li><li><a href="http://www.poker5.tv/video-91-WSOP-2008---emission-5">WSOP 2008 - émission 5</a></li><li><a href="http://www.poker5.tv/video-92-WSOP-2008---emission-6">WSOP 2008 - émission 6</a></li><li><a href="http://www.poker5.tv/video-93-WSOP-2008---emission-7">WSOP 2008 - émission 7</a></li><li><a href="http://www.poker5.tv/video-94-WSOP-2008---emission-8">WSOP 2008 - émission 8</a></li><li><a href="http://www.poker5.tv/video-95-WSOP-2008---emission-8">WSOP 2008 - émission 8</a></li><li><a href="http://www.poker5.tv/video-96-WSOP-2008---emission-8">WSOP 2008 - émission 8</a></li><li><a href="http://www.poker5.tv/video-97-WSOP-2008---emission-9">WSOP 2008 - émission 9</a></li><li><a href="http://www.poker5.tv/video-102-WSOP-Europe---London-Club">WSOP Europe - London Club</a></li><li><a href="http://www.poker5.tv/video-129-WSOP-Europe---Part-1---Championnat-No-Limit-Texas-Hold-em">WSOP Europe - Part 1 - Championnat No Limit Texas Hold'em</a></li><li><a href="http://www.poker5.tv/video-124-WSOP-Europe---Part-1---ChNo-Limit-Texas-Hold-emampionnat">WSOP Europe - Part 1 - ChNo Limit Texas Hold'emampionnat</a></li><li><a href="http://www.poker5.tv/video-125-WSOP-Europe---Part-2---Championnat-No-Limit-Texas-Hold-em">WSOP Europe - Part 2 - Championnat No Limit Texas Hold'em</a></li><li><a href="http://www.poker5.tv/video-126-WSOP-Europe---Part-3---Championnat-No-Limit-Texas-Hold-em">WSOP Europe - Part 3 - Championnat No Limit Texas Hold'em</a></li><li><a href="http://www.poker5.tv/video-127-WSOP-Europe---Part-4---Championnat-No-Limit-Texas-Hold-em">WSOP Europe - Part 4 - Championnat No Limit Texas Hold'em</a></li><li><a href="http://www.poker5.tv/video-128-WSOP-Europe---Resultats---Part-5---Championnat-No-Limit-Texas-Hold-em">WSOP Europe - Résultats - Part 5 - Championnat No Limit Texas Hold'em</a></li>
</td>
  </tr>
</table>




  
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
<a href="http://www.mescasinos.org">casino</a><br>
<a href="http://www.poker-fr.org">poker en ligne</a><br>
<a href="http://www.casinos-hits.com">casino en ligne</a><br>
<a href=http://www.pokerligne.org/ target="_blank">poker en ligne</a><br>
<a href="http://www.jeux-de-casinos.com/free.php" >Casino gratuit</a><br>
<a href="http://www.guide-poker.eu">Jouer au poker</a></span>

</div>
</body>

</html><div align="center"><table border="0" cellpadding="0" cellspacing="0" width="183" id="table5"><tr><td>&nbsp;</td></tr><tr>
	<td height="18" style="border: 1px solid #999999; " bgcolor="#FFFFFF"><p align="center">
	<font face="Arial" color="#6B8FDA" style="font-size: 8pt">Powered free by </font>
	<font face="Arial" color="#333333" style="font-size: 8pt"> <a href="http://www.phpmotion.com">
	<font color="#6B8FDA">PHPmotion</font></a></font></td></tr></table></div>