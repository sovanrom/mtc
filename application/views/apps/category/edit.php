<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_category" action="<?php echo base_url(); ?>category/edit/<?php echo $category->id; ?>" method="post" enctype="multipart/form-data">
    <?php require_once 'form.php'; ?>
</form>