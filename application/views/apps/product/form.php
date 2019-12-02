<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
        <div class="row">
        <div class="form-group">
            <div class="col-sm-3">
            <label for="name">Name</label>
            </div>
            <div class="col-sm-9">
            <input type="text" name="name" id="name" value="<?php echo isset($product) ? $product->name : ''; ?>" class="form-control">
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
            <input type="text" name="price" id="price" value="<?php echo isset($product) ? $product->price : ''; ?>" class="form-control">
            <span class="help-block error-message"></span>
            </div>
        </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="category">Category</label>
                </div>
                <div class="col-sm-9">
                    <select class="form-control">
                        <option>Laptops</option>
                        <option>Accessories</option>
                        <option>Desktop Spare Part</option>
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
            <textarea rows="3" name="latin" id="latin" value="<?php echo isset($product) ? $product->latin : ''; ?>" class="form-control"></textarea>
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
                <input type="file" name='image' id="image" class="form-control">
                <input type="hidden" name='file_name' value="<?php echo (isset($product)) ? $product->image : ''; ?>">
            </div>
            <span class="help-block error-message"></span>
            </div>
        </div>
        </div>

        <div class="row">
        <div class="form-group">
            <div class="col-sm-3"></div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="status" name="status" <?php echo isset($product) ? $product->status == 1 ? 'checked': '' : 'checked'; ?> class="minimal">
                Status
            </label>
            </div>
            <div class="col-sm-3">
            <label>
                <input type="checkbox" id="is_active" name="is_active" class="minimal">
                Active?
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

