<?php 
/*
Template for displaing content of single landing in single-landing.php file
*/
?>
<?php 
$layout_content=get_field('layout_1_4_banner_content');
$banner_section_enable_disable=$layout_content['banner_section_enable_disable'];
?>
<?php if($banner_section_enable_disable):?>
<div id="bannercontent">
<?php  
    $landinglayout = explode(":",get_field('select_landing_page_layout'));
    $layout = $landinglayout[0];
    switch ($layout) {
        case "1":
            include('landing/banner-content-one.php');
            break;
        case "2":
            include('landing/banner-content-two.php');
            break;
        case "3":
            include('landing/banner-content-three.php');
            break;
        case "4":
            include('landing/banner-content-four.php');
            break;
        default:
            include('landing/banner-content-one.php');
    }
?>
</div>
<?php endif;?>
<?php if(get_field('landing_homepage_content_enable_disable')): ?>
<div class="landing-homepage-content">
<?php include ('landing/landing-homecontent.php'); ?>
</div>
<?php endif;?>