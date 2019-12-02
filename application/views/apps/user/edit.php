<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_user" action="<?php echo base_url(); ?>user/edit/<?php echo $user->id; ?>" method="post">
    <?php require_once 'form.php'; ?>
</form>