<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="<?php echo base_url() . 'menu/index' ?>" class="brand-link">
                <img src="<?php echo base_url() . 'asset/' ?>" height="40px" weight="40px"
                    alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Arsip Surat</span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="<?php echo base_url(); ?>dist/index">AS</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="<?= activate_menu('index')?>"><a class="nav-link " 
                    href="<?php echo base_url(); ?>menu/index"><i class="nav-icon fas fa-envelope"></i>
                    <span>Arsip</span></a></li>
            <li class="<?= activate_menu('about') ?>"><a class="nav-link"
                    href="<?php echo base_url(); ?>menu/about"><i class="nav-icon fas fa-address-card"></i> 
                    <span>About</span></a></li>
            </li>
            
    </aside>
</div>