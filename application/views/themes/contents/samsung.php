
<div class="element element-intro samsung" style="width: 70%; margin-left: 15%;">
	<div class="element-wrapper" style="background: #f5f5f5 ; height: 50px; text-align: center; margin: 20px;" >
		<h4 style="padding: 15px;"><b style="color:#fffff;">Samsung</b></h4>
	</div>
	<div class="row">
	<?php foreach ($samsungs as $samsung) :?>
	<div style="margin: 20px;" class="col-sm-2 click" data-id="<?php echo $samsung->id; ?>">	
		<div class="polaroid">
		  <img src="<?php echo base_url(); ?>uploads/products/<?php echo $samsung->image; ?>" alt="5 Terre"style="width:100%; height: 200px;">
		  <div class="text">
			  <p class="card-text" style="color: red;"><?php echo $samsung->price.' $'; ?></p>
			  <p class="card-text" ><?php echo $samsung->description; ?></p>
		  </div>
		</div>
	</div>
	<?php endforeach ?>
	</div>
</div>
