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
	<hr>
	<form method="post" action="<?php echo base_url(); ?>home/order" id="order_form">
		<input type="button" class="btn btn-primary order pull-right" value="I want to order">
		<input type="hidden" name="product_id" value="<?php echo isset($order)? $order->id:''; ?>">
		<div id="form_order" style="display: none;">
		<div class="row" >
			<div class="form-group col-sm-12">
				<label class="col-sm-3">Name*</label>
				<div class="col-sm-9">
					<input type="text" autocomplete="off" name="name" class="form-control">
				</div>
			</div>
		</div>
		<div class="row" >
			<div class="form-group col-sm-12">
				<label class="col-sm-3">Phone*</label>
				<div class="col-sm-9">
					<input type="text" autocomplete="off" name="phone" class="form-control">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group col-sm-12">
				<label class="col-sm-3">Quantity*</label>
				<div class="col-sm-9">
					<button id="sub">-</button>
					<input style="width: 20px; text-align: center;" readonly id="qty" min="1" max="100" type="text" name="qty" value="1">
					<button id="add">+</button>
				</div>
			</div>
		</div>
		<button type="submit" id="submitOrder" class="btn btn-success pull-right">Order</button>
		</div>
	</form>
</div>
