<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
JPlugin::loadLanguage( 'tpl_SG1' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />

<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
<!--[if lte IE 7]>
<link rel="stylesheet" href="templates/<?php echo $this->template ?>/css/ie.css" type="text/css" />
<![endif]-->


</head>
<body>
<a name="up" id="up"></a>
<div class="center" align="center">	

<table cellpadding="0" cellspacing="0" id="header">
	<tr>
		<td class="left_bg"></td>
		<td class="middle_bg">
		<div class="top_bg"></div>

		<div id="top">
			<table cellpadding="0" cellspacing="0">
				<tr>
					<td class="header_bg">
					<div id="tabarea">
						<table cellpadding="0" cellspacing="0" class="pill">
							<tr>
								<td class="pill_m">
									<div id="pillmenu">
										<jdoc:include type="modules" name="user3" />
									</div>
								</td>
							</tr>
						</table>
					</div>
				<div id="logo"><a href="index.php"><?php echo $mainframe->getCfg('sitename') ;?></a></div>
				</td>
					<td class="rightside"><div class="newsflash"><jdoc:include type="modules" name="top" /></div></td>
				</tr>
			</table>	
		</div>

			<div id="wrapper">			
					<div id="area">
						<?php if($this->countModules('left') and JRequest::getCmd('layout') != 'form') : ?>
							<div id="leftcolumn" style="float:left;">
								<jdoc:include type="modules" name="left" style="rounded" />
								<div style="padding:0 20px;"><?php $sg = 'banner'; include "templates.php"; ?></div>
							</div>
							<div id="maincolumn">
						<?php else: ?>
							<div id="maincolumn_full">
						<?php endif; ?>						

							<div class="nopad">
										<jdoc:include type="message" />
										<?php if($this->params->get('showComponent')) : ?>
											<jdoc:include type="component" />
										<?php endif; ?>
							</div>
						</div>
						<div class="clr">
					</div>
			</div>
		
		</div>
	</div>
</div>


		</td>
		<td class="right_bg"></td>	
	</tr>
</table>
<div id="footer">
		<div class="footer">			
			<div id="sgf"><?php $sg = ''; include "templates.php"; ?></div>
			<p class="validation"><a href="http://jigsaw.w3.org/css-validator/check/referer"><img src="templates/<?php echo $this->template ?>/images/css.gif" alt="css" title="css" /></a><img src="templates/<?php echo $this->template ?>/images/and.gif" alt="and" title="and" /><a href="http://validator.w3.org/check/referer"><img src="templates/<?php echo $this->template ?>/images/html.gif" alt="html" title="html" /></a></p>
		</div>
</div>

</div>



<jdoc:include type="modules" name="debug" />
</body>
</html>
