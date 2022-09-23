<?php
  $layout_contents=get_field('layout_1_4_banner_content');
  
  $gen_content=get_field('general_content');
  
  ?>
<?php if($layout_contents['banner_section_enable_disable']): ?>
<div class="slbanner slbanner4" style="background-image: url(<?php echo $layout_contents['landing_banner_image']['url'];?>);">
  <img src="<?php echo $layout_contents['landing_banner_image']['url']; ?>" alt="<?php echo get_the_title(); ?>" width="1920" height="800" />
  <div class="slconblock slconblockopt5">
      <div class="slconblockbox">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="sltitlebox">								
                <?php echo $layout_contents['landing_banner_content']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php if($gen_content['enable_banner_form']):  ?>
      <?php
        $banner_form_bgcolor=$gen_content['landing_banner_bg_color'];
        
        $banner_form_bgimg=$gen_content['landing_banner_bg_image']['url'];
        
        $banner_form_title=$gen_content['landing_banner_form_title'];
        
        $select_banner_form=$gen_content['select_landing_banner_form'];
        
        $banner_form=$gen_content['landing_banner_form'];
        
        ?>
         <?php $style=$backcolor=$backimg='';?>
      <?php if($banner_form_bgcolor):?>
        <?php $backcolor = 'background-color:'.$banner_form_bgcolor.';';?>
      <?php endif; ?>
      <?php if($banner_form_bgimg):?>
        <?php $backimg = 'background-image:url('.$banner_form_bgimg.');';?>
      <?php endif; ?>
      <?php if(($banner_form_bgcolor) || ($banner_form_bgimg)): ?>
      <?php $style='style='.'"'.$backcolor.$backimg.'"'; ?>
      <?php endif;?>
      <div class="slbannerbookouter" <?php echo $style;?>>
        <div class="container">
          <div class="slbannerbook">
            <div class="slbooktitle">
              <h2><span><?php echo $banner_form_title; ?></span> <a href="tel:<?php echo $gen_content['phone_number']; ?>"><?php echo $gen_content['phone_number']; ?></a></h2>
            </div>
            <div class="slheadbookform4 slbookcol1">
              <?php if($select_banner_form):?>
              <div class="row hmbookcol2">
                <?php $shortcode = sprintf("[contact-form-7 id=%1s]",$select_banner_form); echo do_shortcode($shortcode); ?>
              </div>
              <?php endif; ?>
              <?php if($banner_form):?>
              <div class="bannerform4">
                <?php echo $banner_form; ?>
              </div>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif;?>
  </div>
</div>
<?php endif;?>