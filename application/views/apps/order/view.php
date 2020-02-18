
<div class="row">
	<div class="col-sm-8">
		<div class="row">
			<h5 class="col-sm-5"><b>Order's name</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6"><?php echo isset($order)? $order->name:''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Phone</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6"><?php echo isset($order)? $order->phone:''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Order Date</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6"><?php echo isset($order)? $order->date:''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Product Code</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6" style="color: blue;"><?php echo isset($order)? $order->code:''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Price</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6" style="color: red;">$<?php echo isset($order)? $order->price : ''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Quantity</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6" style="color: red;"><?php echo isset($order)? $order->quantity : ''; ?></h5>
		</div>
		<div class="row">
			<h5 class="col-sm-5"><b>Total</b></h5><div class="col-sm-1"><h5>:</h5></div>
			<h5 class="col-sm-6" style="color: red;">$<?php echo isset($order)? ($order->price*$order->quantity) : ''; ?></h5>
		</div>
	</div>
	<div class="col-sm-4">
		<div class="row" style="text-align: center;">
			<img src="<?php echo base_url(); ?>uploads/products/<?php echo $order->image; ?>" width="150px;">
		</div>
	</div>
</div>


