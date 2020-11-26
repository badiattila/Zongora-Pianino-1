<?php
    header('Pragma: cache');
    header('Cache-Control: public');
    header('Content-Type: text/css');
    header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); // always modified
    $path = dirname($_SERVER['PHP_SELF']);
    $aPath = explode('/', $path);
    $aWithoutBlanks = array_filter($aPath, 'strlen');
    array_pop($aWithoutBlanks);
    $baseUrl = join('/', $aWithoutBlanks);
    $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']  == 'on') ? 'https' : 'http';
    $baseUrl = $protocol . '://' . $_SERVER['HTTP_HOST'] . '/' . $baseUrl;
    $is_ie55 = false;
    $is_ie50 = false;
    $is_gecko = false;
    $gecko_revision = 1.3;
    $unsupported = false;

    $browser_string = strtolower($_SERVER["HTTP_USER_AGENT"]);
		
	$is_mac = strstr($browser_string, 'mac');
		
	$is_safari = strstr($browser_string, 'safari');
	$safari_version = preg_replace('/.*safari\//sm', '', $browser_string);
		
	$is_opera = strstr($browser_string, 'opera');
		
	$is_konq = strstr($browser_string, 'khtml');
		
	$is_camino = strstr($browser_string, 'camino');
		
	$camino_version = preg_replace('/.*camino\//sm', '', $browser_string);
		
	$camino_version = substr ($camino_version, 0,3);
		
	$ie_version = preg_replace('/.*msie/sm', '', $browser_string);
		
	$ie_version = substr ($ie_version, 0,4);
		
	$gecko_version = preg_replace('/.*rv:/sm', '', $browser_string);

	$gecko_version = substr ($gecko_version, 0,3);
		
	$gecko_revision = $gecko_version;
        
	if ((($ie_version*10) >= 55) && !$is_opera && !$is_mac) {
		$is_ie55 = true;
		$add_to_cache_name = '_ie55';
	} elseif ((($ie_version*10) >= 50) && !$is_opera && !$is_mac) {
		$is_ie50 = true;
		$add_to_cache_name = '_ie50';
	} elseif (strstr($browser_string, 'gecko') && !$is_opera && !$is_konq && $gecko_version >= '1.3' && (!$is_camino || ($is_camino && $camino_version >= 0.9))) {
		$is_gecko = true;
		$add_to_cache_name = '_gecko';
		if ($gecko_revision >= 1.5) {
			$add_to_cache_name .= '14';
		}
	} else {
		$unsupported = true;
		$add_to_cache_name = '_unsupported';
	}
	// choose a file based on the user agent
    if (($is_ie55) || ($is_ie50)) {
		$ie5 = true;
	} elseif ($is_gecko) {
		$ie5 = false;
	}	
?>
<?php 
$color1 = '#DC143C';
$color2 = '#FFFFFF';
$color3 = '#DC143C';
$color4 = '#FFFFFF';
$color5 = '#FB5E7E';
$color6 = '#FED8E0';
$color7 = '#EB4E6E';
$color8 = '#EB4E6E';
$color9 = '#FFFFFF';
$color10 = '#FDC3B4';
$color10_1 = '#FFFFFF';
$color11 = '#DD3D20';
$color12 = '#FFFFFF';
$color13 = '#FF6347';
$color14 = '#DD3D20';
$color15 = '#FFFFFF';
$color16 = '#FFFFFF';
$color17 = '#FFFFFF';
$color18 = '#FD1C49';
$color19 = '#F2123F';
$color20 = '#FFFFFF';
$color21 = '#DC143C';
$color22 = '#FFFFFF';
$color23 = '#FFFFFF';
$color24 = '#7B0920';
$color25 = '#7B0920';
$color26 = '#B4203E';
$color26_1 = '#FFFFFF';
$color27 = '#DC143C';
$color28 = '#000000';
$color29 = '#FE6F3B';
$color30 = '#FFFFFF';
$color31 = '#FFFFFF';
$color32 = '#9E0101';
$color33 = '#FFFFFF';
$color34 = '#FA6781';
$color35 = '#FFFFFF';
$color36 = '#000000';
$color37 = '#FFFFFF';
$color38 = '#000000';
$color39 = '#FFFFFF';
$color40 = '#DC143C';
$color41 = '#7E001A';
$color42 = '#DC143C';
$color43 = '#FFFFFF';
$color44 = '#F5F5F5';
$color45 = '#7E001A';
$color46 = '#7E001A';
$color47 = '#C0C0C0';
$color48 = '#7E001A';
$color49 = '#808080';
$color50 = '#7E001A';
$color51 = '#7E001A';
$color52 = '#FDABBB';
$color53 = '#7E001A';
$color54 = '#FF7F50';
$color55 = '#FFFFFF';
$color56 = '#0F5C76';
$color57 = '#0F5C76';
$color58 = '#DC143C';
$color59 = '#C0C0C0';
$color60 = '#C0C0C0';
$color61 = '#F5F5F5';
$color62 = '#FF6347';
$color63 = '#FF0000';
$color64 = '#FFFFFF';
$color65 = '#FF6347';
$color66 = '#DC143C';
$color67 = '#4B0082';
$color68 = '#DC143C';
$color69 = '#DC143C';
$color70 = '#4B0082';
$color71 = '#F5F5F5';
$color72 = '#808080';
$color73 = '#DC143C';
$color74 = '#FFFFFF';
$color75 = '#800000';
$color76 = '#FF7F50';
$color77 = '#A0522E';
$color78 = '#800000';
$color79 = '#800000';
$color80 = '#FFBF50';
$color81 = '#DC143C';
$color82 = '#4B0082';
$color83 = '#DC143C';
$color84 = '#DC143C';
$color85 = '#DC143C';
$color86 = '#4B0082';
$color87 = '#FF6347';
$color88 = '#F5F5F5';
$color89 = '#FFFFFF';
$color90 = '#FF6347';
$color91 = '#FEEEEC';
$color92 = '#FAE1E6';
$color93 = '#940623';
$color94 = '#FF980B';
$color95 = '#DC143C';
$color96 = '#FFFFFF';
$color97 = '#FFFFFF';
$color98 = '#FFF468';
$color99 = '#FFFFFF';
$color100 = '#FF7F50';
$color101 = '#F5F5F5';
$color102 = '#AD3A3A';
$color103 = '#AD3A3A';
$color104 = '#FF6347';
$color105 = '#FFFFFF';
$color106 = '#CD5C5C';
$color107 = '#CD5C5C';
$color108 = '#FF7F50';
$color109 = '#800000';
$color110 = '#FFFFFF';
$color111 = '#B9042E';
$color112 = '#FFFFFF';
$color113 = '#8D1533';
$color114 = '#FFFFFF';
$color115 = '#DC143C';
$color116 = '#DC143C';
$color117 = '#DC143C';
$color118 = '#F6F4F4';
$color119 = '#C41437';
$color120 = '#700319';
$color121 = '#DC143C';
$color122 = '#FFFFFF';
$color123 = '#FF7F50';
$color124 = '#FEDBCE';
$color125 = '#D35E32';
$color126 = '#D35E32';
$color127 = '#FFFFFF';
$color128 = '#FFFFFF';
$color129 = '#FF7F50';
$color130 = '#FF7F50';
$color131 = '#FFFFFF';
$color132 = '#9F0020';
$color133 = '#D35E32';
$color134 = '#FFFFFF';
$color135 = '#FFFFFF';
$color136 = '#D35E32';
$color137 = '#A72D46';
$color138 = '#FFFFFF';
$color139 = '#DC143C';
$color140 = '#FED3DC';
$color141 = '#890D26';
$color142 = '#890D26';
$color143 = '#FF6347';
$color144 = '#FED3DC';
$color145 = '#890D26';
$color146 = '#890D26';
$color147 = '#FEF85C';
$color148 = '#F6607E';
$color149 = '#FF97AC';
$color150 = '#FF97AC';
$color151 = '#FF97AC';
$color152 = '#FF97AC';
$color153 = '#FF7F50';
$color154 = '#FBC9C9';
$color155 = '#FBC9C9';
$color156 = '#FBC9C9';
$color157 = '#FBC9C9';
$color157_1 = '#FFFFFF';
$color158 = '#DC143C';
$color159 = '#4B0082';
$color160 = '#DC143C';
$color161 = '#4B0082';
$color162 = '#DC143C';
$color163 = '#4B0082';
$arr = 'red_arr.gif';
$_3ds_n = 'red_3ds_n.gif';
$_3ds_h = 'red_3ds_h.gif';
$_3db = 'red_3db.gif';
$dg = 'red_dg.gif';
$cl = 'red_cl.gif';
$gb_n = 'red_gb_n.gif';
$gb_h = 'red_gb_h.gif';
$_3dsh_n = 'red_3dsh_n.gif';
$_3dsh_h = 'red_3dsh_h.gif';
$subcolor1 = '#FEE8E8';
$subcolor2 = '#FF0000';
$sublink1 = '#000000';
$sublink2 = '#FFFFFF';
$bdrcolor1 = '#cecac1';

 ?>
/****  melody_Keys  ****/


#navigator{
background: <?php echo $color123; ?>;
margin: 0px;
padding: 2px;
position:relative;
}
#navigator ul{
list-style: none;
padding: 0px;
}
#navigator a#normal{
display: block;
<?php if ($ie5) { ?>
width: 100%; 
<?php } ?>
padding: 5px 0px 5px 20px;
border-width: 1px;
border-color: <?php echo $color124; ?> <?php echo $color125; ?> <?php echo $color126; ?> <?php echo $color127; ?>;
border-style: solid;
color: <?php echo $color128; ?>;
text-decoration: none;
background: <?php echo $color129; ?>;
white-space: nowrap;
}
#navigator li a#normal:hover{
color: <?php echo $color132; ?>;
background: transparent;
border-color: <?php echo $color133; ?> <?php echo $color134; ?> <?php echo $color135; ?> <?php echo $color136; ?>;
}

#navigator a#current{
display: block;
<?php if ($ie5) { ?>
width: 100%; 
<?php } ?>
padding: 5px 0px 5px 20px;
border-width: 1px;
border-color: <?php echo $color133; ?> <?php echo $color134; ?> <?php echo $color135; ?> <?php echo $color136; ?>;
border-style: solid;
color: <?php echo $color128; ?>;
text-decoration: none;
background: <?php echo $color129; ?>;
white-space: nowrap;
}
#navigator li a#current:hover{
color: <?php echo $color132; ?>;
background: transparent;
}



/*  css for PHP Layers Menu 3.2.0-rc (C) 2001-2004 Marco Pratesi - http://www.marcopratesi.it/  */
.submenu {
	LEFT: 0px; VISIBILITY: hidden; POSITION: absolute; z-index:25;TOP: 0px;
}
.subframe {
	BORDER-RIGHT:<?php echo $bdrcolor1; ?> 1px outset; BORDER-TOP:<?php echo $bdrcolor1; ?> 1px outset; DISPLAY: block; BORDER-LEFT:<?php echo $bdrcolor1; ?> 1px outset; BORDER-BOTTOM:<?php echo $bdrcolor1; ?> 1px outset; POSITION: relative; 
	BACKGROUND-COLOR:<?php echo $subcolor1; ?>;	<?php if ($ie5) { ?>
	position:absolute;
	filter:alpha(opacity=80); 
	line-height:15px;
	<?php }else { ?>
	line-height:17px;
	<?php } ?>
}
.item {
 WHITE-SPACE: nowrap; TEXT-ALIGN: left;
}
.item A {
font-weight:normal;
	DISPLAY: block; POSITION: relative; TEXT-DECORATION: none;
}
.item A:link {
	COLOR: <?php echo $sublink1; ?>; TEXT-DECORATION: none;
		font-weight:normal;
}
.item A:visited {
	COLOR:<?php echo $sublink1; ?>; TEXT-DECORATION: none	;font-weight:normal;	
}
.item A:hover {
	COLOR:<?php echo $sublink2; ?>; 
	BACKGROUND-COLOR:<?php echo $subcolor2; ?>; 
	TEXT-DECORATION: none;		
	font-weight:normal;
}
.item A:active {
	COLOR: <?php echo $sublink2; ?>; TEXT-DECORATION: none;		font-weight:normal;
}
.item .fwdarr {
	RIGHT: 7px; POSITION: absolute; TOP: 5px;		
}
/***************************/
.img .fwdarr {
	RIGHT: 7px; POSITION: absolute; TOP: 5px;
}
.img A {
	DISPLAY: block; POSITION: relative; TEXT-DECORATION: none;
}
/***************************/
