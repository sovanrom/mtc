<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <li class="<?php echo ($active == 'dashboard') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>dashboard"></i>Dashboard</a>
    </li>
    <li class="<?php echo ($active == 'product') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>product"><i class="fa fa-angle-right"></i>Products</a>
    </li>
    <li class="<?php echo ($active == 'category') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>category"><i class="fa fa-angle-right"></i>Category</a>
    </li>
    <li class="<?php echo ($active == 'feedback') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>feedback"><i class="fa fa-angle-right"></i>Feedback</a>
    </li>
    <li class="<?php echo ($active == 'about') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>about"><i class="fa fa-angle-right"></i>About</a>
    </li>

     <li class="<?php echo ($active == 'login') ? 'active': ''; ?>">
        <a href="<?php echo base_url(); ?>login"><i class="fa fa-sign-out"></i>LogOut</a>
    </li>
</ul>