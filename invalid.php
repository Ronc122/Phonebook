<!-- Showing error on Login-->
<?php if (count($invalid) > 0): ?>
	<div class="error">
		<?php foreach ($invalid as $e): ?>
			<center><p><?php echo $e; ?></p></center>
		<?php endforeach ?>
	</div>
<?php endif ?>
