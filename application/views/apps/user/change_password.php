<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_user" action="<?php echo base_url(); ?>user/change_password/<?php echo $user_id; ?>" method="post">
    <div class="form-group">
	    <label for="password">Password</label>
	    <input type="password" name="password" id="password" value="" class="form-control">
	    <span class="help-block error-message"></span>
	</div>
</form>