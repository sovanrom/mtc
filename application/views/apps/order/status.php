<form role="form" id="form_order" action="<?php echo base_url(); ?>order/status/<?php echo $order->id; ?>" method="post" enctype="multipart/form-data">
	<div class="row" style="margin-left: 100px;">
		<div class="row form-group">
			<input type="radio" class="col-sm-1" name="status" value="1"<?php echo isset($order)? ($order->status =='1')? 'checked':'':''; ?>>
			<label class="col-sm-7">Wating Comfirm</label>
		</div>
		<div class="row form-group">
			<input type="radio" class="col-sm-1" name="status" value="2"<?php echo isset($order)? ($order->status =='2')? 'checked':'':''; ?>>
			<label class="col-sm-7">Comfirmed Order</label>
		</div>
		<div class="row form-group">
			<input type="radio" class="col-sm-1" name="status" value="3" <?php echo isset($order)? ($order->status =='3')? 'checked':'':''; ?>>
			<label class="col-sm-7">Wating Recieve</label>
		</div>
		<div class="row form-group">
			<input type="radio" class="col-sm-1" name="status" value="4"<?php echo isset($order)? ($order->status =='4')? 'checked':'':''; ?>>
			<label class="col-sm-7">Wating Feedback</label>
		</div>
	</div>
</form>

