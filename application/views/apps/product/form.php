<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="code">Code</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="code" autocomplete="off" id="code" value="<?php echo isset($product) ? $product->code : ''; ?>" class="form-control">
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="name">Name</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="name" autocomplete="off" id="name" value="<?php echo isset($product) ? $product->name : ''; ?>" class="form-control">
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="price">Price</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="price" autocomplete="off" id="price" value="<?php echo isset($product) ? $product->price : ''; ?>" class="form-control">
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <label class="col-sm-3" for="category">Category</label>
            <div class="col-sm-9">
                <select class="form-control" name="category_id">
                    <option value="">-</option>
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id ?>" <?php echo isset($product)? ($product->category_id==$category->id)? 'selected': '' :''; ?>><?php echo $category->name; ?></option>
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
            <textarea rows="3" name="description" id="description" value="<?php echo isset($product) ? $product->description : ''; ?>" class="form-control"><?php   echo isset($product) ? $product->description : ''; ?></textarea>
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
            <?php if (isset($product) && !empty($product->image)): ?>
                <img id="show_image" src="<?php echo base_url(); ?>/uploads/products/<?php echo $product->image; ?>"/>
            <?php else: ?>
                <img id="show_image" style="display: none;" />
            <?php endif ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
            <div class="input-group">
                <input type="file" name='image' autocomplete="off" id="image" class="form-control">
                <input type="hidden" name='file_name' value="<?php echo (isset($product)) ? $product->image : ''; ?>">
            </div>
            <span class="help-block error-message"></span>
            </div>
        </div>
    </div>

        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="status" name="status" <?php echo isset($product) ? $product->status == 1 ? 'checked': '' : 'checked'; ?> class="minimal">
                Status
            </label>
            </div>
            <div style="display:<?php echo isset($user)? ($user !== '1')? 'none': '':''; ?>">
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="is_active" name="is_active" <?php echo isset($product) ? $product->active == 1 ? 'checked': '' : ''; ?> class="minimal">
                Active?
            </label>
            </div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="is_new" autocomplete="off" name="is_new" <?php echo isset($product) ? $product->is_new == 1 ? 'checked': '' : ''; ?> class="minimal">
                Is_New?
            </label>
            </div>
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
        $('#show_image').width(64).height(64);
        $('#form_product').on('change', '#image', function(event) {
            event.preventDefault();
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#show_image')
                    .attr('src', e.target.result)
                    .width(64)
                    .height(64)
                    .show();
            };
            reader.readAsDataURL(event.target.files[0]);
        });
        
    });

</script>

