<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_order" action="<?php echo base_url(); ?>order/edit/<?php echo $order->id; ?>" method="post" enctype="multipart/form-data">
    <?php require_once 'edit_form.php'; ?>
</form>