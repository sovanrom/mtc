<!-- <div class="element-big-content-ico"><img src="<?php echo base_url(); ?>assets/themes/img/ico1.svg" alt=""></div>
<h2 class="element-big-content-title about-title">Welcome to <strong>The Beans Cafe</strong></h2>
<p> The Beans Cafe offers exceptional caffeine drinks, fruit based, milk shakes and other varieties. All our drinks are carefully made by professionals in the field who receive constant training and monitoring.</p>
<a href="#contact" class="btn btn-default btn-rayen isotope-link" data-text="Let's Go!"><span>Get Directions <i class="fa fa-long-arrow-right"></i></span></a> -->
<?php foreach ($about as $a): ?>
	<h2 class="element-big-content-title location-title">
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

<!-- <?php var_dump($about); ?> -->