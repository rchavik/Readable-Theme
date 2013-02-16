<footer class="navbar-bottom">

	<?php
		$link = $this->Html->link(
			__('Croogo %s', strval(Configure::read('Croogo.version'))),
			'http://www.croogo.org',
			array('target' => '_blank')
		);
		$themeLink = $this->Html->link(
			'Readable',
			'http://github.com/rchavik/Readable-Theme',
			array('target' => '_blank')
		);
	?>
	Powered by <?php echo $link; ?>
	<?php echo $this->Html->image('http://assets.croogo.org/powered_by.png'); ?>

	Theme: <?php echo $themeLink; ?>

</footer>