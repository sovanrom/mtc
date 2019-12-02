<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="form-group">
    <div class="col-sm-3">
    <label for="username">User name</label>
    </div>
    <div class="col-sm-9">
    <input type="text" name="username" id="username" value="<?php echo isset($user) ? $user->username : ''; ?>" class="form-control">
    <span class="help-block error-message"></span>
    </div>
</div>

<div class="form-group">
    <div class="col-sm-3">
    <label for="email">Email</label>
    </div>
    <div class="col-sm-9">
    <input type="text" name="email" id="email" value="<?php echo isset($user) ? $user->email : ''; ?>" class="form-control">
    <span class="help-block error-message"></span>
    </div>
</div>
<?php if (!isset($user)): ?>
	<div class="form-group">
        <div class="col-sm-3">
	    <label for="email">Password</label>
        </div>
        <div class="col-sm-9">
	    <input type="password" name="password" id="password" value="" class="form-control">
	    <span class="help-block error-message"></span>
        </div>
	</div>
<?php endif ?>

