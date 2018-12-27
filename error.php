<!-- Showing error on login -->
<?php if (count($error) > 0): ?>
	<div class="error">
		<?php foreach ($error as $error): ?>
			<center><p><?php echo $error; ?></p></center>
		<?php endforeach ?>
	</div>
<?php endif ?>
