<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="hu" lang="hu">
<head>
<title>Zongora, pianínó bérlés 200.- Ft.-tól</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="zongora bérlés, pianínó bérlés, zongora gy?r, zongora budapest, pianínó gy?r, pianínó budapest" />
<meta name="description" content="Zongora és pianínó bérlés országosan verhetetlen áron!" />
<meta name="generator" content="Rvglobalsoft" />
<!-- Version: 5.4.8 PRO; Project name: zongora-pianino; Project id: 8edb249b592d16ec679b4147a307d134; Template Name: pro_21-915-2_red_floral_1; 
Published date: July 9, 2015, 10:28 08 (GMT +02:00) --> 
<link rel="stylesheet" href="http://zongora-pianino.hu/style.css" type="text/css" />

<link rel="stylesheet" href="http://zongora-pianino.hu/Georgia.css" type="text/css" />
<link rel="stylesheet" href="http://zongora-pianino.hu/Navigator.css" type="text/css" />
<link rel="stylesheet" href="http://zongora-pianino.hu/pathway.css" type="text/css" />


<link id ="linkcssglobal" rel="stylesheet" type="text/css" media="screen" href="http://zongora-pianino.hu/js/jquery-ui/themes/base/ui.all.css" />
<script  type="text/javascript" src="http://zongora-pianino.hu/js/jquery-ui/jquery.min.js"></script>
<script  type="text/javascript" src="http://zongora-pianino.hu/js/jquery-ui/ui/minified/jquery-ui.min.js"></script>

<script  type="text/javascript" src="http://zongora-pianino.hu/rvsincludefile/rvsheadpage.js"></script>


<script type="text/javascript" src="http://zongora-pianino.hu/js/jquery.url.js"></script>
<!-- new navigation style 2013 -->
<link rel="stylesheet" type="text/css" href="http://zongora-pianino.hu/js/publishNavigator/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="http://zongora-pianino.hu/js/publishNavigator/ddsmoothmenu-v.css" />

<script type="text/javascript" defer ="defer">

(function ($) {
$(document).ready(function() {
    var CurrentUrl = window.location.href;
    if (CurrentUrl.match(/(rvsindex.php)|(blogweb\/index)|(faqweb\/)/)) {
        page = (urlRefer != undefined) ? urlRefer : '';
    } else {
        rPath = CurrentUrl.match(/.*?(\/).*?/img);
        for (i=0;i< rPath.length;i++) {
            page = CurrentUrl.replace(/(.*?)\//,'');
            CurrentUrl = page;
        }
    }
    
    if ($.browser.webkit) {
	    window.addEventListener('load', function(){
	    	$(':-webkit-autofill').each(function(){
            	var text = $(this).val();
            	var name = $(this).attr('name');
            	$(this).after(this.outerHTML).remove();
            	$('input[name=' + name + ']').val(text);
            });
	    }, false);
	}
    
    
    var poiont = $('.rvnavigator a[href="' + page + '"]').parents("li").length;
    if (poiont > 0) {
        for (i=0;i<=poiont;i++) {
            $('.rvnavigator a[href="' + page + '"]').parents("li").eq(i).find('a:first').attr('class', 'current');
        }
    }
    
    $('#jumpmenu').find('option').each(function() {
		if($(this).val() == window.location.href) {
			$(this).attr('selected', 'selected');
		}
	})
    
});
})($);

</script>

<script  type="text/javascript" src="http://zongora-pianino.hu/rvsincludefile/rvscustomopenwindow.js"></script>



</head>

<body >
<table cellpadding="0" cellspacing="0" id="rv_top_adjust_width_0" width="100%" align="center" >
	<tr>
		<td align="left" valign="top"  class="bgtop"> 
			<!-- START LOGO -->
			<div style="position: absolute;">
				<div id="Layer1" style="position:relative; left:330px; top:15px; width:120; height:60; text-align:center; z-index:1; overflow:visible; white-space:nowrap;"></div>
			</div>
			<div style="position: absolute;">
				<div id="Layer2" style="position:relative; left:327px; top:21px; width:auto; height:auto; text-align:left; z-index:2; overflow:visible; white-space:nowrap;" class="company"><div><strong style="&quot;&quot;&quot;null " face="Helvetica"><font style="font-size: 36px" face="Verdana">Zongora-Pianino.hu</font></strong></div></div>
			</div>
			<div style="position: absolute;">
				<div id="Layer3" style="position:relative; left:328px; top:64px; width:auto; height:auto; text-align:left; z-index:3; overflow:visible; white-space:nowrap;" class="slogan"><div><font style="font-size: 18px" face="Verdana"><font style="font-size: 16px" size="3"></font>Napi 200.-Ft.-tól öné lehet egy zongora vagy pianínó</font></div></div>
			</div>
			<!-- END LOGO -->
<!-- START CUSTOM LAYER --><!-- END CUSTOM LAYER -->
<div id="fb-root"></div>
<!-- {literal} -->
<script type="text/javascript">

var fbWidth = 0;
(function ($) {
	$(document).ready(function(){
	fbWidth = $('.fb-like-box').width();

	var recursiveTimeout = setTimeout(function(){
	getFrameFacebook();
	},500);
});
})
(jQuery);

function getFrameFacebook() {

	if($('.fb-like-box').find('iframe').get(0) == undefined) 
	{
		recursiveTimeout = setTimeout(function(){getFrameFacebook();},100);
		//console.log('undefined')
	} else {
		//console.log('sucess'+$('.fb-like-box').find('iframe').width()+'='+ fbWidth )
		if ($('.fb-like-box').find('iframe').width() != 0) {
			$('.fb-like-box').find('iframe').attr('width',fbWidth+'px').css('width',fbWidth);
			recursiveTimeout = setTimeout(function(){getFrameFacebook();},100);
			$('.fb-like-box').find('iframe').load(function(){ 		
			clearTimeout(recursiveTimeout); })
		} else {
			$('.fb-like-box').find('iframe').attr('width',fbWidth+'px').css('width',fbWidth);
		       }
	}
}

$(document).ready(function(){
     var recursiveDetectWidth = setTimeout(function(){
			detectWidthFacebook();
	},500);
     
     function detectWidthFacebook(){
    	  if($('div.fbFanPageBlock').find('iframe').prop('tagName') == undefined){
    	   recursiveDetectWidth = setTimeout(function(){
				detectWidthFacebook();
			},500);
    	}else{
    	   var fbWidth = $('div.fbFanPageBlock').find('div[data-width]').attr('data-width');
    	   var fBody = $('div.fbFanPageBlock').find('iframe');

    	   fBody.load(function(){
				$(this).css('width',fbWidth);
    	   })
    	}
    	}
});



//<![CDATA[
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/hu_HU/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
//]]>
</script>
<!-- {/literal} -->		
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td align="left" valign="top"><img src="images/img_01.jpg" alt="" width="201" height="235" /></td>
					<td align="left" valign="top" width="99%"><img src="images/img_02.jpg" alt="" width="207" height="235" /></td>
					<td align="left" valign="top"><img src="images/img_03.jpg" alt="" width="207" height="235" /></td>
					<td align="left" valign="top"><img src="images/img_04.jpg" alt="" width="165" height="235" /></td>
				</tr>
			</table>	
		</td>
	</tr>
	<tr>
		<td align="left" valign="top" >
			<table cellpadding="0" cellspacing="0" width="100%">
				 <tr>
					<td rowspan="2"><img src="images/spacer.gif" alt="" width="35" height="1" /></td>
					<td align="left" valign="top" class="lr"><img src="images/l_01.jpg" alt="" width="8" height="192" /></td>
					<td rowspan="2" align="left" valign="top"  class="colorbody">
						<table cellpadding="0" cellspacing="0" >
							<tr>
								<td class="mutop"><img src="images/spacer.gif" alt="" width="117" height="1" /></td>
								<td class="mutop" valign="top" align="right"><img src="images/mu_01.jpg" alt="" width="12" height="27" /></td>
							</tr>
							<tr>
								<td  align="left" valign="top" class="menu"><div id="rvnavigator"><ul class="rvnavigator">
<li>
<a href="http://zongora-pianino.hu/Zongora-%C3%A9s-Pian%C3%ADn%C3%B3-b%C3%A9rl%C3%A9s.php"   target="_self" ><span>Zongora és Pianínó bérlés</span></a></li>
<li>
<a href="http://zongora-pianino.hu/Hangszereink.php"   target="_self" ><span>Hangszereink</span></a></li>
<li>
<a href="http://zongora-pianino.hu/%C3%9Czleti-aj%C3%A1nlat.php"   target="_self" ><span>Üzleti ajánlat</span></a></li>
<li>
<a href="http://zongora-pianino.hu/C%C3%A9g%C3%BCkr%C5%91l.php"   target="_self" ><span>Cégükről</span></a></li>
<li>
<a href="http://zongora-pianino.hu/Kiadott-hangszereink.php"   target="_self" ><span>Kiadott hangszereink</span></a></li>
</ul></div>
<div class="clear"></div>
</td>
								<td class="menu"></td>
							</tr>
							<tr>
								<td class="menu"></td>
								<td class="menu" valign="top" align="right"><img src="images/mu_05.jpg" alt="" width="12" height="10" /></td>
							</tr>
						</table>
					</td>
					<td align="left" valign="top" rowspan="2" width="99%" bgcolor="#e8e7e8">
						<table cellpadding="0" cellspacing="0" width="100%">
							
<tr><td align="center" class="content_margin_top"></td></tr>
 
							<!-- Begin PATHWAY and ICON -->
							<tr>
								<td class="magin">
									<table cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<!-- Begin PATHWAY -->
											<td align="left" width="99%"><?php include("/home/bandland/public_html/zongora-pianino.hu/rvsincludefile/pathway_d621b7cb4d3c7bf778ae78fe56bdbd22.html"); ?></td>
											<!-- End PATHWAY -->
											<!-- Begin ICON -->
											<td align="right"><!--Cannot get icon--></td>
											<!-- End ICON -->
										</tr>
									</table>								
								</td>
							</tr>
							<!-- End PATHWAY and ICON -->
							<tr>
								<td align="left" valign="top">
									<table cellpadding="0" cellspacing="0" width="100%">
										<tr>
											<td align="left" valign="top" class="magin" id="rv_adjust_width_214" width="100%"><div class="content_margin_left_right">
<table cellpadding="0" cellspacing="0" width="100%">  <tr>    <td align="left" valign="top" width="100%" id="layout_zone1" style = ""><table cellpadding="1" cellspacing="1" class="rvFrame" width="100%">
<tbody>
<tr>
<td class="tdSolid" align="left" valign="top">
<div class="dashView">
<table cellpadding="8" cellspacing="0" width="100%">
<tbody>
<tr>
<td valign="top" colspan="2" style="padding: 5px 0">
<h2 style="margin: 2px; font-size: 1.3em"><u>Napi 200.- Ft.-os ajánlat</u></h2></td></tr>
<tr>
<td valign="top">
<div><img src="http://zongora-pianino.hu/rvs_library/180x120/1mu_180x120_1.jpg" width="180" height="120" title="" alt="" /></div></td>
<td width="99%" valign="top"><strong><em>Tanuljon zongorázni, végre elérhető áron!</em></strong>
<p>Szeretett volna zongorázni tanulni? Nem engedhet meg magának egy több százezer forintos kiadást?&nbsp;<br />
Éljen ajánlatunkkal és mindössze napi 200.- Ft.-ért otthonában tudhat egy zongorát vagy pianínót!</p>
<p>Gyermekei zongorázni tanulnak? Gyakorolni csak az iskolában tudnak?<br />
Napi egy kávé vagy egy fél literes üdítő áráért akkor és annyit gyakorolhatnak amikor és amennyit szeretnének!&nbsp;</p>
<p>Attól tart, hogy gyermeke megunja a zongorázást és fél beleugrani egy zongora vásárlásba?<br />
Éljék át kockázatmentesen, minimális költségek mellett az otthoni zenetanulás élményét!</p></td></tr>
<tr>
<td align="left" valign="top" colspan="2" style="padding: 5px">Napi 200.- Ft.-tól kínálunk zongorákat és pianínókat, akár 24 órán belül otthonába szállítva, felhangolva.<br />
Hívjon és kezdjen zongorázni már holnap!</td></tr></tbody></table></div></td></tr>
<tr>
<td class="tdSolid" align="left" valign="top">
<div class="dashView">
<table cellpadding="3" cellspacing="0" width="100%">
<tbody>
<tr>
<td width="99%" align="left" valign="top">
<h2 style="margin: 3px 3px; font-size: 1.2em"><font face="Georgia" style="font-size: larger">További előnyök</font></h2></td></tr>
<tr>
<td align="left" valign="top">
<ul>
<li style="list-style-type: square; padding: 0px 0px">Kaució? Nem, mi nem kérünk!</li>
<li style="list-style-type: square; padding: 5px 0px">Karbantartási díj? Nálunk 0.- Ft!</li>
<li style="list-style-type: square; padding: 5px 0px">Hangolások? Évente ingyenesen biztosítjuk minden bérbeadott hangszer esetén!</li>
<li style="list-style-type: square; padding: 5px 0px">Csere? Miért is ne? Bármikor lecserélheti bérelt hangszerét az aktuálisan elérhető darabok bármelyikére!</li>
<li style="list-style-type: square; padding: 5px 0px">Megunta, nincs már rá szüksége? Három hónap elteltével bármikor, indoklás nélkül felmondhatja szerződését!<br />
</li>
<li style="list-style-type: square; padding: 5px 0px">Válasszon több tucat hangszer közül, kötelezettségek és befektetés nélkül!</li></ul>
<div>
<h2 style="margin: 3px"><font face="Georgia" style="&quot;null"><span style="font-size: 1.2em">F</span><span style="font-size: 14.5920000076294px">eltételek</span></font></h2></div>
<div>&nbsp;</div>
<div>
<ul>
<li><span style="font-size: 12.1599998474121px">több hangszer is rendelkezésre áll, most meg válogatni is lehet</span><br />
</li>
<li><span style="font-size: 12.1599998474121px">3 havi bérleti díjat (3 * 6000.- Ft) + 1 szállítási díjat (Budapestre 10 000.- Ft) kell előre fizetni</span></li>
<li><span style="font-size: 12.1599998474121px">ezek után mindig csak az esedékes havi díjat kell a kifizetett hónapok lejártáig befizetni&nbsp;</span></li>
<li><span style="font-size: 12.1599998474121px">a hangszerekre garanciát vállalunk és&nbsp;</span></li>
<li><span style="font-size: 12.1599998474121px">évi egy ingyenes hangolást adunk</span><br />
</li>
<li>a hangszer bérlése barmikor felmondható további kötelezettségek vagy díjak nélkül<br />
</li></ul></div>
<div>&nbsp;</div>
<div>&nbsp;</div></td></tr></tbody></table></div></td></tr>
<tr>
<td class="tdSolid" align="left" valign="top">
<div class="dashView">
<table cellpadding="3" cellspacing="0" width="100%">
<tbody>
<tr>
<td width="99%" align="left" valign="top">
<h2 style="margin: 3px 3px; font-size: 1.2em"><font face="Georgia">Hol elérhető ajánlatunk?</font></h2></td></tr>
<tr>
<td align="left" valign="top">
<ul>
<li style="list-style-type: square; padding: 0px 0px"><span style="font-size: 12.1599998474121px"><strong>Országosan! </strong>Kérem érdeklődjön kedvező ajánlataink iránt a&nbsp;</span><strong style="font-size: 12.1599998474121px"><strong style="font-size: 12.1599998474121px">+36 30 961 8788</strong>&nbsp;</strong><span style="font-size: 12.1599998474121px">telefonszámon.</span><br />
</li>
<li style="list-style-type: square; padding: 5px 0px"><span style="font-size: 12.1599998474121px">Válasszon több hangszer közül, kötelezettségek és nagyobb befektetés nélkül!</span><br />
</li></ul></td></tr></tbody></table></div></td></tr></tbody></table></td>  </tr></table>
</div> 										    </td>
											 
										</tr>
									</table>								
								</td>
							</tr>
							<!-- Begin FOOTER -->
							<tr>
								<td align="center" class="magin"></td>
							</tr>
							<!-- End FOOTER -->

							 
<tr><td align="center" class="content_margin_bottom"></td></tr>

							<tr>
								<td align="center" valign="bottom">
									<table cellpadding="0" cellspacing="0">
										<tr>
											<td align="center" valign="bottom" class="marginpw"></td>
											<td width="8"></td>
											<td align="center" valign="bottom" class="marginpw"></td>
										</tr>
									</table>													
								</td>
							</tr>
					  </table>
					</td>
					<td align="right" valign="top" class="lr"><img src="images/r_01.jpg" alt="" width="7" height="17" /></td>
					<td rowspan="2"><img src="images/spacer.gif" alt="" width="35" height="1" /></td>
			  </tr>
				  <tr>
					<td align="left" valign="bottom" class="lr"><img src="images/l_02.jpg" alt="" width="8" height="52" /></td>
					<td align="right" valign="bottom" class="lr"><img src="images/r_02.jpg" alt="" width="7" height="52" /></td>
				  </tr>
			</table>
		</td>
	</tr>
	<tr>
		<td align="left" valign="bottom">
			<table cellpadding="0" cellspacing="0" width="100%">
				<tr>
					<td align="left" valign="top"><img src="images/img_05.jpg" alt="" width="43" height="71" /></td>
					<td align="left" valign="top"><img src="images/img_06.jpg" alt="" width="159" height="71" /></td>
					<td><img src="images/img_07.jpg" alt="" width="207" height="71" /></td>
					<td width="99%" class="bottom"></td>
					<td><img src="images/img_08.jpg" alt="" width="207" height="71" /></td>
					<td><img src="images/img_09.jpg" alt="" width="124" height="71" /></td>
					<td><img src="images/img_10.jpg" alt="" width="42" height="71" /></td>
				</tr>
			</table>		
		</td>
	</tr>
</table>
</body>
</html>
