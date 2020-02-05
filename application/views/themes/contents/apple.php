
<div class="element element-intro oppo" style="width: 70%; margin-left: 15%;">
	<div class="element-wrapper" style="background: #f5f5f5 ; height: 50px; text-align: center; margin: 20px;" >
		<h4 style="padding: 15px;"><b style="color:#fffff;">Apple</b></h4>
	</div>
	<div class="row">
	<?php foreach ($apples as $apple) :?>
	<div style="margin: 20px;" class="col-sm-2">	
		<div class="polaroid">
		  <img src="<?php echo base_url(); ?>uploads/products/<?php echo $apple->image; ?>" alt="5 Terre"style="width:100%">
		  <div class="text">
			  <p class="card-text" style="color: red;"><?php echo $apple->price.' $'; ?></p>
			  <p class="card-text" ><?php echo $apple->description; ?></p>
		  </div>
		</div>
	</div>
	<?php endforeach ?>
	</div>
</div>
