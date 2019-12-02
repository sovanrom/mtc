<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li class="<?php echo ($active == 'product') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>product"><i class="fa fa-product-hunt"></i>Products</a>
    </li>

    <li class="treeview <?php echo (in_array($active, array('category','sub_category'))) ? 'active menu-open': ''; ?>">
            <a href="JavaScript:void(0);">
                <i class="fa fa-list"></i> <span>Category</span>
                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
            </a>
            <ul class="treeview-menu">
                <li class="<?php echo ($active == 'category') ? 'active': ''; ?>">
                    <a href="<?php echo base_url(); ?>category"><i class="fa fa-dot-circle"></i> Main Category</a>
                </li>
                <li class="<?php echo ($active == 'sub_category') ? 'active': ''; ?>">
                    <a href="<?php echo base_url(); ?>sub_category"><i class="fa fa-dot-circle"></i> Sub Category</a>
                </li>
             </ul>
    </li>
     <li class="<?php echo ($active == 'login') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>login"><i class="fa fa-sign-out"></i>LogOut</a>
    </li>
</ul>