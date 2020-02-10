<div class="container-fluid">
    <h2 style="text-align: center; color:green;">Feedback Form</h2>
    <br>
    <br>
<form id="feedback_form" method="post" action="<?php echo base_url(); ?>home/contact">
    <div class="col-sm-10" style="padding-left: 100px;">
        <div class="row form-group">
            <label for="name" class="row control-label">Name *</label>
            <div class="row">
                <input type="text" name="name"  class="form-control" id="name">
            </div>
        </div>

        <div class="row form-group">
            <label for="phone" class="row control-label">Phone Number *</label>
            <div class="row">
                <input type="text" name="phone"  class="form-control" id="phone">
            </div>
        </div>

        <div class="row form-group">
            <label for="feedback" class="row control-label">your feedback *</label>
            <div class="row">
                <textarea name="feedback" id="feedback" class="form-control" rows="5"></textarea>
            </div>
        </div>
        <button type="submit" id="submit" class="btn btn-primary pull-right">Submit</button>
    </div>
</form>
</div>
