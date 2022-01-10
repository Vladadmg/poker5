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




<table width="100%" cellspacing="0" cellpadding="2" style="border: 1px dotted #202020">
            <tr>
              <td class="dujour" >Nuage de tags
                <div class="tag_cloud" align="left">
                    <font color="333333"><b>Les plus populaires:</b></font>
&nbsp;<a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="3">poker</font></a>
 <a href="search.php?keyword=actualité&amp;type=videos" class="tag_cloud"><font size="3">actualité</font></a>
 <a href="search.php?keyword=journal&amp;type=videos" class="tag_cloud"><font size="3">journal</font></a>
 <a href="search.php?keyword=france3&amp;type=videos" class="tag_cloud"><font size="3">france3</font></a>
 <a href="search.php?keyword=Varkonyi&amp;type=videos" class="tag_cloud"><font size="2">Varkonyi</font></a>
 <a href="search.php?keyword=vegas&amp;type=videos" class="tag_cloud"><font size="2">vegas</font></a>
 <a href="search.php?keyword=World&amp;type=videos" class="tag_cloud"><font size="2">World</font></a>
 <a href="search.php?keyword=Championships&amp;type=videos" class="tag_cloud"><font size="2">Championships</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="1">poker</font></a>
 <a href="search.php?keyword=debutant&amp;type=videos" class="tag_cloud"><font size="1">debutant</font></a>
 <a href="search.php?keyword=amateur&amp;type=videos" class="tag_cloud"><font size="1">amateur</font></a>
 <a href="search.php?keyword=patrick&amp;type=videos" class="tag_cloud"><font size="0">patrick</font></a>
 <a href="search.php?keyword=bruel&amp;type=videos" class="tag_cloud"><font size="0">bruel</font></a>
 <a href="search.php?keyword=Monte-Carl&amp;type=videos" class="tag_cloud"><font size="0">Monte-Carl</font></a>
 <a href="search.php?keyword=Patrick&amp;type=videos" class="tag_cloud"><font size="-1">Patrick</font></a>
 <a href="search.php?keyword=Bruel&amp;type=videos" class="tag_cloud"><font size="-1">Bruel</font></a>
 <a href="search.php?keyword=EPT&amp;type=videos" class="tag_cloud"><font size="-1">EPT</font></a>
 <a href="search.php?keyword=Barcelona&amp;type=videos" class="tag_cloud"><font size="-1">Barcelona</font></a>
 <a href="search.php?keyword=Mélange&amp;type=videos" class="tag_cloud"><font size="-2">Mélange</font></a>
 <a href="search.php?keyword=jetons&amp;type=videos" class="tag_cloud"><font size="-2">jetons</font></a>
 <a href="search.php?keyword=chips&amp;type=videos" class="tag_cloud"><font size="-2">chips</font></a>
 <a href="search.php?keyword=shuffle&amp;type=videos" class="tag_cloud"><font size="-2">shuffle</font></a>
 <a href="search.php?keyword=Stu&amp;type=videos" class="tag_cloud"><font size="-3">Stu</font></a>
 <a href="search.php?keyword=Ungar&amp;type=videos" class="tag_cloud"><font size="-3">Ungar</font></a>
 <a href="search.php?keyword=1981&amp;type=videos" class="tag_cloud"><font size="-3">1981</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="-4">WSOP</font></a>
 <a href="search.php?keyword=1973&amp;type=videos" class="tag_cloud"><font size="-4">1973</font></a>
 <a href="search.php?keyword=Johnny&amp;type=videos" class="tag_cloud"><font size="-4">Johnny</font></a>
 <a href="search.php?keyword=Moss&amp;type=videos" class="tag_cloud"><font size="-4">Moss</font></a>
 <a href="search.php?keyword=High&amp;type=videos" class="tag_cloud"><font size="-5">High</font></a>
 <a href="search.php?keyword=Stakes&amp;type=videos" class="tag_cloud"><font size="-5">Stakes</font></a>
 <a href="search.php?keyword=Vegas&amp;type=videos" class="tag_cloud"><font size="-5">Vegas</font></a>
 <a href="search.php?keyword=Strip&amp;type=videos" class="tag_cloud"><font size="-5">Strip</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="-5">poker</font></a>
 <a href="search.php?keyword=edition&amp;type=videos" class="tag_cloud"><font size="-5">edition</font></a>
 <a href="search.php?keyword=jeux&amp;type=videos" class="tag_cloud"><font size="-5">jeux</font></a>
 <a href="search.php?keyword=video&amp;type=videos" class="tag_cloud"><font size="-5">video</font></a>
 <a href="search.php?keyword=PS3&amp;type=videos" class="tag_cloud"><font size="-5">PS3</font></a>
 <a href="search.php?keyword=trailer&amp;type=videos" class="tag_cloud"><font size="-5">trailer</font></a>
 <a href="search.php?keyword=tricher&amp;type=videos" class="tag_cloud"><font size="-6">tricher</font></a>
 <a href="search.php?keyword=Poker&amp;type=videos" class="tag_cloud"><font size="-6">Poker</font></a>
 <a href="search.php?keyword=Joueur&amp;type=videos" class="tag_cloud"><font size="-7">Joueur</font></a>
 <a href="search.php?keyword=compulsif&amp;type=videos" class="tag_cloud"><font size="-7">compulsif</font></a>
 <a href="search.php?keyword=Intercontinental&amp;type=videos" class="tag_cloud"><font size="-8">Intercontinental</font></a>
 <a href="search.php?keyword=Poker&amp;type=videos" class="tag_cloud"><font size="-8">Poker</font></a>
 <a href="search.php?keyword=ChampionshipTony&amp;type=videos" class="tag_cloud"><font size="-8">ChampionshipTony</font></a>
 <a href="search.php?keyword=G&amp;type=videos" class="tag_cloud"><font size="-8">G</font></a>
 <a href="search.php?keyword=Morandini&amp;type=videos" class="tag_cloud"><font size="-9">Morandini</font></a>
 <a href="search.php?keyword=Direct&amp;type=videos" class="tag_cloud"><font size="-9">Direct</font></a>
 <a href="search.php?keyword=8&amp;type=videos" class="tag_cloud"><font size="-9">8</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="-9">poker</font></a>
 <a href="search.php?keyword=pokermania&amp;type=videos" class="tag_cloud"><font size="-9">pokermania</font></a>
 <a href="search.php?keyword=jetons&amp;type=videos" class="tag_cloud"><font size="-10">jetons</font></a>
 <a href="search.php?keyword=melanger&amp;type=videos" class="tag_cloud"><font size="-10">melanger</font></a>
 <a href="search.php?keyword=pro&amp;type=videos" class="tag_cloud"><font size="-10">pro</font></a>
 <a href="search.php?keyword=Carré&amp;type=videos" class="tag_cloud"><font size="-11">Carré</font></a>
 <a href="search.php?keyword=As&amp;type=videos" class="tag_cloud"><font size="-11">As</font></a>
 <a href="search.php?keyword=film&amp;type=videos" class="tag_cloud"><font size="-11">film</font></a>
 <br><font color="333333"><b>Les moins populaires:</b></font>
&nbsp;<a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="6">poker</font></a>
 <a href="search.php?keyword=apprendre&amp;type=videos" class="tag_cloud"><font size="6">apprendre</font></a>
 <a href="search.php?keyword=sexe&amp;type=videos" class="tag_cloud"><font size="6">sexe</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="5">poker</font></a>
 <a href="search.php?keyword=apprendre&amp;type=videos" class="tag_cloud"><font size="5">apprendre</font></a>
 <a href="search.php?keyword=sexe&amp;type=videos" class="tag_cloud"><font size="5">sexe</font></a>
 <a href="search.php?keyword=strip&amp;type=videos" class="tag_cloud"><font size="4">strip</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="4">poker</font></a>
 <a href="search.php?keyword=Poker&amp;type=videos" class="tag_cloud"><font size="3">Poker</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="3">WSOP</font></a>
 <a href="search.php?keyword=2006&amp;type=videos" class="tag_cloud"><font size="3">2006</font></a>
 <a href="search.php?keyword=finale&amp;type=videos" class="tag_cloud"><font size="3">finale</font></a>
 <a href="search.php?keyword=Cunningham&amp;type=videos" class="tag_cloud"><font size="3">Cunningham</font></a>
 <a href="search.php?keyword=Gold&amp;type=videos" class="tag_cloud"><font size="3">Gold</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="2">WSOP</font></a>
 <a href="search.php?keyword=2007&amp;type=videos" class="tag_cloud"><font size="2">2007</font></a>
 <a href="search.php?keyword=Michael&amp;type=videos" class="tag_cloud"><font size="2">Michael</font></a>
 <a href="search.php?keyword=Mizrachi&amp;type=videos" class="tag_cloud"><font size="2">Mizrachi</font></a>
 <a href="search.php?keyword=Jeff&amp;type=videos" class="tag_cloud"><font size="2">Jeff</font></a>
 <a href="search.php?keyword=Madsen&amp;type=videos" class="tag_cloud"><font size="2">Madsen</font></a>
 <a href="search.php?keyword=Blair&amp;type=videos" class="tag_cloud"><font size="2">Blair</font></a>
 <a href="search.php?keyword=Rodman&amp;type=videos" class="tag_cloud"><font size="2">Rodman</font></a>
 <a href="search.php?keyword=Fabrice&amp;type=videos" class="tag_cloud"><font size="2">Fabrice</font></a>
 <a href="search.php?keyword=Soulier&amp;type=videos" class="tag_cloud"><font size="2">Soulier</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="1">WSOP</font></a>
 <a href="search.php?keyword=2007&amp;type=videos" class="tag_cloud"><font size="1">2007</font></a>
 <a href="search.php?keyword=&amp;type=videos" class="tag_cloud"><font size="1"></font></a>
 <a href="search.php?keyword=Fabrice&amp;type=videos" class="tag_cloud"><font size="1">Fabrice</font></a>
 <a href="search.php?keyword=Soulier&amp;type=videos" class="tag_cloud"><font size="1">Soulier</font></a>
 <a href="search.php?keyword=Rio&amp;type=videos" class="tag_cloud"><font size="1">Rio</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="0">WSOP</font></a>
 <a href="search.php?keyword=Patrick&amp;type=videos" class="tag_cloud"><font size="-1">Patrick</font></a>
 <a href="search.php?keyword=Bruel&amp;type=videos" class="tag_cloud"><font size="-1">Bruel</font></a>
 <a href="search.php?keyword=EPT&amp;type=videos" class="tag_cloud"><font size="-1">EPT</font></a>
 <a href="search.php?keyword=EPT&amp;type=videos" class="tag_cloud"><font size="-2">EPT</font></a>
 <a href="search.php?keyword=Varsovie&amp;type=videos" class="tag_cloud"><font size="-2">Varsovie</font></a>
 <a href="search.php?keyword=Sir&amp;type=videos" class="tag_cloud"><font size="-2">Sir</font></a>
 <a href="search.php?keyword=Cuts&amp;type=videos" class="tag_cloud"><font size="-2">Cuts</font></a>
 <a href="search.php?keyword=Fabrice&amp;type=videos" class="tag_cloud"><font size="-3">Fabrice</font></a>
 <a href="search.php?keyword=Soulier&amp;type=videos" class="tag_cloud"><font size="-3">Soulier</font></a>
 <a href="search.php?keyword=Stephane&amp;type=videos" class="tag_cloud"><font size="-3">Stephane</font></a>
 <a href="search.php?keyword=Vanel&amp;type=videos" class="tag_cloud"><font size="-3">Vanel</font></a>
 <a href="search.php?keyword=Poker&amp;type=videos" class="tag_cloud"><font size="-4">Poker</font></a>
 <a href="search.php?keyword=WSOP&amp;type=videos" class="tag_cloud"><font size="-4">WSOP</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="-5">poker</font></a>
 <a href="search.php?keyword=online-poker&amp;type=videos" class="tag_cloud"><font size="-5">online-poker</font></a>
 <a href="search.php?keyword=online&amp;type=videos" class="tag_cloud"><font size="-5">online</font></a>
 <a href="search.php?keyword=VCPoker&amp;type=videos" class="tag_cloud"><font size="-5">VCPoker</font></a>
 <a href="search.php?keyword=VC&amp;type=videos" class="tag_cloud"><font size="-5">VC</font></a>
 <a href="search.php?keyword=VCPoker.com&amp;type=videos" class="tag_cloud"><font size="-5">VCPoker.com</font></a>
 <a href="search.php?keyword=viral&amp;type=videos" class="tag_cloud"><font size="-5">viral</font></a>
 <a href="search.php?keyword=crack&amp;type=videos" class="tag_cloud"><font size="-5">crack</font></a>
 <a href="search.php?keyword=Everest&amp;type=videos" class="tag_cloud"><font size="-6">Everest</font></a>
 <a href="search.php?keyword=Poker&amp;type=videos" class="tag_cloud"><font size="-6">Poker</font></a>
 <a href="search.php?keyword=Yoann&amp;type=videos" class="tag_cloud"><font size="-6">Yoann</font></a>
 <a href="search.php?keyword=Sultan&amp;type=videos" class="tag_cloud"><font size="-6">Sultan</font></a>
 <a href="search.php?keyword=David&amp;type=videos" class="tag_cloud"><font size="-7">David</font></a>
 <a href="search.php?keyword=stone&amp;type=videos" class="tag_cloud"><font size="-7">stone</font></a>
 <a href="search.php?keyword=Patrick&amp;type=videos" class="tag_cloud"><font size="-8">Patrick</font></a>
 <a href="search.php?keyword=BRUEL&amp;type=videos" class="tag_cloud"><font size="-8">BRUEL</font></a>
 <a href="search.php?keyword=ruquier&amp;type=videos" class="tag_cloud"><font size="-8">ruquier</font></a>
 <a href="search.php?keyword=magicien&amp;type=videos" class="tag_cloud"><font size="-8">magicien</font></a>
 <a href="search.php?keyword=poker&amp;type=videos" class="tag_cloud"><font size="-8">poker</font></a>
 <a href="search.php?keyword=Jean-Jacques&amp;type=videos" class="tag_cloud"><font size="-8">Jean-Jacques</font></a>
 <a href="search.php?keyword=SANVERT&amp;type=videos" class="tag_cloud"><font size="-8">SANVERT</font></a>
 
      </div></td>
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