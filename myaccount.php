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




<div align="center"> <br><br>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table1">
		<tr>
			<td>
			<div align="center">
			<table border="0" width="100%" id="table9" >
				<tr>
					<td height="25"><b>
					<font face="Arial" size="2" color="#666666">Login</font></b><font face="Arial" color="#666666" size="2">
					- 
					Veuillez vous connecter pour voir ou uploader des vidéos </font></td>
				</tr>
			</table>
			</div>			</td>
		</tr>
		<tr>
			<td>
			<div align="center">
			<table border="0" width="100%" id="table10" >
				
			</table>
			</div></td>
		</tr>
		
		<tr>
		  <td><center><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="550" height="140" id="recently viewed videos" align="middle">
            <param name="allowScriptAccess" value="sameDomain" />
            <param name="movie" value="recentplayer.swf?x=recent.php&t=Vid&eacute;os visualis&eacute;es en ce moment..." />
            <param name="quality" value="high" />
		    <param name="bgcolor" value="#FFFFFF" />
            <embed src="recentplayer.swf?x=recent.php&t=Vid&eacute;os visualis&eacute;es en ce moment..." quality="high" bgcolor="#FFFFFF" width="550" height="140" name="recently viewed videos" align="middle" allowScriptAccess="sameDomain" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />          
</object></center>
		    <table width="600" border="0" align="center" cellpadding="0" cellspacing="5">
            <tr>
              <td height="373" valign="top"><table width="350" align="left" cellpadding="0" cellspacing="0" id="table2" style="border:#333333 1 px">
                  <form action="register.php" method="post">
                    <tr>
                      <td bordercolor="#090909"></td>
                    </tr>
                    <tr>
                      <td colspan="2" bordercolor="#090909"  class="titre_page" > Inscription</td>
                    </tr>
                    <tr>
                      <td colspan="2" bordercolor="#090909" class="default_text">&nbsp;Pour vous inscrire et commencer a b&eacute;n&eacute;ficier de toutes les fonctionalit&eacute;s du site, il suffit de remplir le forumulaire ci dessous</td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" align="right" bordercolor="#090909"  class="default_text"><b> Votre adresse e-mail </b></td>
                      <td width="62%" height="30" bordercolor="#090909"  class="default_text"><font color="#666666" face="Arial"> &nbsp;&nbsp;
                            <input type="text" name="email_address" size="20" value=""  />
                      </font></td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" align="right" bordercolor="#090909" class="default_text"><b> Pseudo</b></td>
                      <td width="62%" height="30" bordercolor="#090909" class="default_text"><font face="Arial"> &nbsp;&nbsp;
                            <input type="text" name="user_name" size="20" value=""  />
                      </font></td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" align="right" bordercolor="#090909" class="default_text"><b> Mot de passe </b></td>
                      <td width="62%" height="30" bordercolor="#090909" class="default_text"><font face="Arial"> &nbsp;&nbsp;
                            <input type="password" name="password" size="20" value=""  />
                      </font> </td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" align="right" bordercolor="#090909" class="default_text"><b> Confirmez-le</b></td>
                      <td width="62%" height="30" bordercolor="#090909" class="default_text"><font face="Arial"> &nbsp;&nbsp;
                            <input type="password" name="confirm_password" size="20" value=""  />
                      </font></td>
                    </tr>
                    <tr>
                      <td height="30" align="right" bordercolor="#090909" class="default_text"><b> Code antispam </b></td>
                      <td height="30" bordercolor="#090909" class="default_text"><br>
                        &nbsp;<img src="captcha.php">
                        <input type="text" name="verification" />
                        <br>
                      </td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" align="right" bordercolor="#090909" class="default_text"><b>Accepeter les termes d'utilisation </b></td>
                      <td width="62%" height="30" bordercolor="#090909" class="default_text">&nbsp;
                          <input name="terms" type="radio" value="yes" checked  /></td>
                    </tr>
                    <tr>
                      <td width="34%" height="30" bordercolor="#090909" class="default_text">&nbsp;</td>
                      <td width="62%" height="30" bordercolor="#090909" class="default_text"><font face="Arial">
                        <input type="hidden" name="form_submitted" value="yes" />
                        &nbsp;&nbsp;
                        <input type="submit" value="Inscription" name="registe_r"  />
                        </font>&nbsp; <font face="Arial">
                        <input type="reset" value="Effacer" name="rese_t"  />
                      </font></td>
                    </tr>
                  </form>
              </table></td>
              <td width="50%" valign="top"><img src="../images/1pix.gif" width="1" height="1"></td>
              <td width="50%" valign="top"><table width="350" border="0" align="right" cellpadding="0" cellspacing="0">
                  <form action="login.php" method="post" name="login" id="login" >
                    <tr>
                      <td colspan="2" bordercolor="#090909" class="titre_page">D&eacute;j&agrave; Membres? 
                        Connexion</td>
                    </tr>
                    <tr>
                      <td height="27" align="right" bordercolor="#090909" class="default_text"><b> Pseudo</b></td>
                      <td height="27" bordercolor="#090909" class="table_border_r">&nbsp;
                          <input type="text" name="user_name_login" size="20"  /></td>
                    </tr>
                    <tr>
                      <td height="27" align="right" bordercolor="#090909" class="default_text"><b> Mot de passe </b></td>
                      <td height="27" bordercolor="#090909" class="table_border_r">&nbsp;
                          <input type="password" name="password_login" size="20"  />
                          <input type="hidden" name="submitted" value="yes" /></td>
                    </tr>
                    <tr>
                      <td height="27" align="right" bordercolor="#090909" class="table_border_l">&nbsp;</td>
                      <td height="27" bordercolor="#090909" class="table_border_r">&nbsp;
                          <input type="submit" value="Connexion" name="logi_n"  />
                      </td>
                    </tr>
                  </form>
                <tr>
                    <td colspan="2" bordercolor="#090909" class="default_text"><b>&nbsp; Infos de connexion perdues? </b></td>
                </tr>
                  <form action="resendlogins.php" method="post" name="forgot" id="forgot">
                    <tr>
                      <td bordercolor="#090909" class="default_text"><div align="right"><b> Votre adresse e-mail</b></div></td>
                      <td bordercolor="#090909"><input type="text" name="email_address_lost" size="20"  />
                          <input type="hidden" name="submitted" value="yes" /></td>
                    </tr>
                    <tr>
                      <td bordercolor="#090909">&nbsp;</td>
                      <td bordercolor="#090909">&nbsp;
                          <input type="submit" value="Envoyer!" name="resen_d"   /></td>
                    </tr>
                    <tr>
                      <td colspan="2" bordercolor="#090909">&nbsp;</td>
                    </tr>
                    <tr>
                      <td colspan="2" bordercolor="#090909" class="default_text">Un probl&egrave;me de connexion ou d'inscription? <br>
                        Envoyez un email a support [at] poker5.tv</td>
                    </tr>
                  </form>
              </table></td>
            </tr>
          </table></td>
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
<a href="http://www.guide-poker.eu">Jouer au poker</a><br>
<a href="http://www.onlinepokerinfo.fr">Poker</a><br>
<a href="http://poker.comprendrechoisir.com/comprendre/combinaison" title="Poker combinaison" target="_blank">Poker combinaison</a><br>
<a href="http://paris-sportifs.comprendrechoisir.com/" title="Pari sportif" target="_blank">Pari sportif</a>
</span>

</div>
</body>

</html><div style="margin-left:auto; margin-right:auto; width:200px; height:20px; border:#999999 1px solid; line-height:15px; text-align:center; padding-left:5px; padding-right:5px; margin-top:15px; visibility:visible; background-color:#FFFFFF; clear:both">
<a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Powered by PHPmotion -</a> <a style="text-decoration:none; color:#6B8FDA; font-size:9px; font-family:Arial, Helvetica, sans-serif" href="http://www.phpmotion.com">Free Video Script</a></div>