<?php foreach ($about as $a): ?>
	<h2 class="element-big-content-title caree-title">
		<?php if ($a->type_id == 1): ?>
			Story
		<?php endif ?>
		<?php if ($a->type_id == 2): ?>
			Commitment
		<?php endif ?>
		<?php if ($a->type_id == 3): ?>
			Mission
		<?php endif ?>
		<?php if ($a->type_id == 4): ?>
			Vision
		<?php endif ?>
		<?php if ($a->type_id == 5): ?>
			More Resource
		<?php endif ?>
	</h2>
	<p><?php echo $a->description; ?></p>
<?php endforeach ?>
