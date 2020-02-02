<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        
        <div class="form-group">
            <div class="col-sm-3">
            <label for="name">Name</label>
            </div>
            <div class="col-sm-9">
            <select name="name" id="name" class="form-control">
                <option>-</option>
                <option value="Mission" <?php echo isset($about) ? ($about->name=='Mission')? 'selected':'' : ''; ?>>Mission</option>
                <option value="Vision" <?php echo isset($about) ? ($about->name=='Vision')? 'selected':'' : ''; ?>>Vision</option>
            </select>
            <span class="help-block error-message"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-3">
            <label for="description">Description</label>
            </div>
            <div class="col-sm-9">
            <textarea rows="3" name="description" id="description" value="<?php echo isset($about) ? $about->description : ''; ?>" class="form-control textarea"><?php   echo isset($about) ? $about->description : ''; ?></textarea>
            <span class="help-block error-message"></span>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="status" name="status" <?php echo isset($about) ? $about->status == 1 ? 'checked': '' : 'checked'; ?> class="minimal">
                Status
            </label>
            </div>
        </div>


<style type="text/css">
    input{
        height: 34px;
    }
</style>
<script type="text/javascript">
    $(function() {  
        $('.textarea').wysihtml5();
        $('input[type="checkbox"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });

</script>

