<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <table id="product" class="table table-bordered table-striped dataTable table-hover" data-user="<?php echo $user ?>">
                        <thead>
                            <tr>
                                <th class="col-xs-1">#</th>
                                <th class="col-xs-1">Code</th>
                                <th class="col-xs-1">Name</th>
                                <th class="col-xs-1">Price</th>  
                                <th class="col-xs-1">Category</th>  
                                <th class="col-xs-1">Description</th>
                                <th class="col-xs-1">Actions</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>