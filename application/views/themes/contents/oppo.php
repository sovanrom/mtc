
<div class="element element-intro oppo" style="width: 70%; margin-left: 15%;">
	<div class="element-wrapper" style="background: #f5f5f5 ; height: 50px; text-align: center; margin: 20px;" >
		<h4 style="padding: 15px;"><b style="color:#fffff;">Oppo</b></h4>
	</div>
	<div class="row">
	<?php foreach ($oppos as $oppo) :?>
	<div style="margin: 20px;" class="col-sm-2 click" id="click" data-id="<?php echo $oppo->id; ?>">	
		<div class="polaroid">
		  <img src="<?php echo base_url(); ?>uploads/products/<?php echo $oppo->image; ?>" alt="5 Terre"style="width:100%; height: 200px;">
		  <div class="text">
			  <p class="card-text" style="color: red;"><?php echo $oppo->price.' $'; ?></p>
			  <p class="card-text" ><?php echo $oppo->description; ?></p>
		  </div>
		</div>
	</div>
	<?php endforeach ?>
	</div>
</div>
