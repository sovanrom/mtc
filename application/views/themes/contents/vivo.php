
<div class="element element-intro vivo" style="width: 70%; margin-left: 15%;">
	<div class="element-wrapper" style="background: #f5f5f5 ; height: 50px; text-align: center; margin: 20px;" >
		<h4 style="padding: 15px;"><b style="color:#fffff;">Vivo</b></h4>
	</div>
	<div class="row">
	<?php foreach ($vivos as $vivo) :?>
	<div style="margin: 20px;" class="col-sm-2 click" data-id="<?php echo $vivo->id; ?>">	
		<div class="polaroid">
		  <img src="<?php echo base_url(); ?>uploads/products/<?php echo $vivo->image; ?>" alt="5 Terre"style="width:100%;height: 200px;">
		  <div class="text">
			  <p class="card-text" style="color: red;"><?php echo $vivo->price.' $'; ?></p>
			  <p class="card-text" ><?php echo $vivo->description; ?></p>
		  </div>
		</div>
	</div>
	<?php endforeach ?>
	</div>
</div>
