<div class="container-fluid">
	<h2 style="text-align: center; color: green;"><b><u>Feedback Detail</u></b></h2>
	<div class="row">
		<div class="pull-right"><?php echo 'Date:'.'  '. $feedback->date; ?></div>
	</div>
	<div class="row">
		<div class="col-sm-5"><h4><b>Feedback's Name</b></h4></div> <div class="col-sm-7"> <h4><?php echo $feedback->name; ?></h4></div>
	</div>
	<div class="row">
		<div class="col-sm-5"><h4><b>Phone Number</b></h4></div> <div class="col-sm-7"> <h4><?php echo $feedback->phone; ?></h4></div>
	</div>
	<div class="row">
		<div class="col-sm-5"><h4><b>Feedback</b></h4></div><div class="col-sm-7"> <h4> <?php echo $feedback->feedback; ?></h4> </div>
	</div>
</div>