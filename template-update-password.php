<?php
/*  Template Name: Update Password */
get_header(); ?>



<!-- ############ PAGE START-->

  <div class="padding">
    <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'<?php echo get_template_directory_uri(); ?>/_include/images/logo.svg'"></div>
        	<img src="<?php echo get_template_directory_uri(); ?>/_include/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline"><?php bloginfo('name'); ?></span>
        </a>
        <!-- / brand -->
      </div>
    </div>
  </div>
  <div class="b-t">
    <div class="center-block w-xxl w-auto-xs p-y-md text-center">
      <div class="p-a-md">
        <form name="form" action="">
          <div class="form-group">
            <input type="password" class="form-control" placeholder="كلمة السر الجديده" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="تأكيد كلمة السر الجديده" required>
          </div>
          <button type="submit" class="btn btn-lg black p-x-lg">تعديل</button>
        </form>
        
      </div>
    </div>
  </div>

<!-- ############ PAGE END-->

  
    
    


<?php get_footer(); ?>
