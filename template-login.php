<?php
/*  Template Name: Login */
get_header(); ?>



<!-- ############ PAGE START-->

  <div class="padding">
    <div class="navbar">
      <div class="pull-center">
        <!-- brand -->
        <a href="<?php bloginfo('url')?>" class="navbar-brand">
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
        <form name="form" action="<?php bloginfo('url')?>">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="إسم المستخدم" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="كلمة السر" required>
          </div>      
          <div class="m-b-md">        
            <label class="md-check">
              <input type="checkbox"><i class="primary"></i> احفظ تسجيل الدخول
            </label>
          </div>
          <button type="submit" class="btn btn-lg black p-x-lg">الدخول</button>
        </form>
        <div class="m-y">
            <a href="<?php bloginfo('url')?>/update-password/" class="_600">هل نسيت كلمة السر؟</a>
        </div>
        
      </div>
    </div>
  </div>

<!-- ############ PAGE END-->

  
    
    


<?php get_footer(); ?>
