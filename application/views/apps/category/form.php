<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    <div class="container-fluid">
    <div class="row">    
        <div class="form-group">
            <div class="col-sm-3">
            <label for="name">Name</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="name" id="name" value="<?php echo isset($category) ? $category->name : ''; ?>" class="form-control">
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="name">Parent</label>
            </div>
            <div class="col-sm-9">
            <select name="parent" class="form-control">
                <option value="">-</option>
                <?php foreach ($categories as $cat) : ?>
                    <option value="<?php echo $cat->id ?>" <?php echo isset($category)? ($category->parent==$cat->id)? 'selected':'':''; ?>><?php echo $cat->name; ?></option>
                <?php endforeach ?>
            </select>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="description">Description</label>
            </div>
            <div class="col-sm-9">
            <textarea rows="3" name="description" id="description" value="<?php echo isset($category) ? $category->description : ''; ?>" class="form-control"><?php   echo isset($category) ? $category->description : ''; ?></textarea>
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>


        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="status" name="status" <?php echo isset($category) ? $category->status == 1 ? 'checked': '' : 'checked'; ?> class="minimal">
                Status
            </label>
            </div>
        </div>
</div>

<style type="text/css">
    input{
        height: 34px;
    }
</style>
<script type="text/javascript">
    $(function() {
        $('input[type="checkbox"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue'
        });
    });

</script>

