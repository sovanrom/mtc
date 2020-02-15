<div class="container-fluid">
	<div class="row" style="text-align: center;">
		 <img src="<?php echo base_url(); ?>uploads/products/<?php echo $order->image; ?>" width="200px;">
	</div>
	<hr>
	<div class="row">
		<h5 class="col-sm-5" ><?php echo isset($order)? $order->description : ''; ?></h5>
	</div>
	<div class="row">
		<h5 class="col-sm-2">Price</h5>
		<h5 class="col-sm-5" style="color: red;">$<?php echo isset($order)? $order->price : ''; ?></h5>
	</div>
	<div class="row">
		<h5 class="col-sm-5" ><button class="btn btn-danger">Code :<?php echo isset($order)? $order->code : ''; ?></button></h5>
	</div>
	<div class="row" >
		<div class="form-group col-sm-12">
			<label class="col-sm-3">Name</label>
			<div class="col-sm-9">
				<input type="text" name="name" class="form-control" value="<?php echo isset($order)? $order->name:''; ?>">
			</div>
		</div>
	</div>
	<div class="row" >
		<div class="form-group col-sm-12">
			<label class="col-sm-3">Phone</label>
			<div class="col-sm-9">
				<input type="text" name="phone" class="form-control"  value="<?php echo isset($order)? $order->phone:''; ?>">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="form-group col-sm-12">
			<label class="col-sm-3">Quantity</label>
			<div class="col-sm-9">
				<button id="sub">-</button>
				<input style="width: 20px; text-align: center;" readonly id="qty" min="1" max="100" type="text" name="qty"  value="<?php echo isset($order)? $order->quantity:''; ?>">
				<button id="add">+</button>
			</div>
		</div>
	</div>
</div>	
