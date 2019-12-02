<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_product" action="<?php echo base_url(); ?>product/edit/<?php echo $product->id; ?>" method="post" enctype="multipart/form-data">
    <?php require_once 'form.php'; ?>
</form>