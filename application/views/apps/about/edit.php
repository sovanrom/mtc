<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<form role="form" id="form_about" action="<?php echo base_url(); ?>about/edit/<?php echo $about->id; ?>" method="post" enctype="multipart/form-data">
    <?php require_once 'form.php'; ?>
</form>