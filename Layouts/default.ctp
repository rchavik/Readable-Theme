<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title><?php echo $title_for_layout; ?> - <?php echo __('Croogo'); ?></title>
		<?php

		echo $this->Html->css(array(
			'readable',
			'readable-responsive',
			'thickbox',
		));
		echo $this->Layout->js();
		echo $this->Html->script(array(
			'/js/html5',
			'/js/jquery/jquery.min',
			'/js/jquery/jquery-ui.min',
			'/js/jquery/jquery.slug',
			'/js/jquery/jquery.cookie',
			'/js/jquery/jquery.hoverIntent.minified',
			'/js/jquery/superfish',
			'/js/jquery/supersubs',
			'/js/jquery/jquery.tipsy',
			'/js/jquery/jquery.elastic-1.6.1.js',
			'/js/jquery/thickbox-compressed',

			'/js/underscore-min',
			'bootstrap.js',
		));

		echo $this->fetch('script');
		echo $this->fetch('css');

		?>
	</head>
	<body>
		<div id="wrap">
			<?php echo $this->element('header'); ?>
			<div id="push"></div>
			<div id="content-container" class="container-fluid">
				<div class="row-fluid">
					<div id="content" class="clearfix">
						<?php echo $this->element('admin/breadcrumb'); ?>
						<div id="inner-content" class="span8">
							<?php echo $this->Layout->sessionFlash(); ?>
							<?php echo $this->fetch('content'); ?>
						</div>
						<div class="span4">
							<?php echo $this->Regions->blocks('right'); ?>
						</div>
					</div>
					&nbsp;
				</div>
			</div>
		</div>
		<?php echo $this->element('footer'); ?>
		<?php
		echo $this->Blocks->get('scriptBottom');
		echo $this->Js->writeBuffer();
		?>
	</body>
</html>