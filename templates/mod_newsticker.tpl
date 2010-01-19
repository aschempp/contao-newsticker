
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>

<?php if ($this->controls): ?>
<div class="controls">
	<div id="ticker_stop_<?php echo $this->strId; ?>" class="ticker_stop"><a><img src="system/modules/newsticker/html/stop.png" width="14" height="14" alt="" /></a> <?php echo $this->stop; ?></div>
	<div id="ticker_play_<?php echo $this->strId; ?>" class="ticker_play"><a><img src="system/modules/newsticker/html/play.png" width="14" height="14" alt="" /></a> <?php echo $this->play; ?></div>
</div>
<?php endif; ?>
<div class="ticker <?php echo $this->direction; ?>" style="height: <?php echo $this->height; ?>px">
	<ul class="ticker" id="ticker_<?php echo $this->strId; ?>" style="width: <?php echo $this->width; ?>px">
	  
<?php foreach($this->articles as $article) echo $article; ?>

	</ul>
</div>

</div>

<!-- indexer::stop -->
<script type="text/javascript">
<!--//--><![CDATA[//><!--
window.addEvent('domready', function() {
   var ticker_<?php echo $this->strId; ?> = new Ticker('ticker_<?php echo $this->strId; ?>', {
      speed: <?php echo $this->speed; ?>,
      delay: <?php echo $this->delay; ?>,
      direction: '<?php echo $this->direction; ?>'
	});
<?php if ($this->controls): ?>
    $$('#ticker_stop_<?php echo $this->strId; ?> a').addEvent('click', function() {
		$('ticker_play_<?php echo $this->strId; ?>').style.display='block';
		$('ticker_stop_<?php echo $this->strId; ?>').style.display='none';
		ticker_<?php echo $this->strId; ?>.pause();
	});
    $$('#ticker_play_<?php echo $this->strId; ?> a').addEvent('click', function() {
		$('ticker_stop_<?php echo $this->strId; ?>').style.display='block';
		$('ticker_play_<?php echo $this->strId; ?>').style.display='none';
		ticker_<?php echo $this->strId; ?>.resume();
	});
	$('ticker_stop_<?php echo $this->strId; ?>').setStyle('display', 'block');
<?php endif; ?>
});
//--><!]]>
</script>
<!-- indexer::continue -->
