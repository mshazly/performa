<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8" />
  <title><?php wp_title('|',true,'right'); ?></title>
  <!--meta name="description" content="" /-->
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- for ios 7 style, multi-resolution icon of 152x152 -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/_include/images/logo.png">
  <meta name="apple-mobile-web-app-title" content="Flatkit">
  <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="shortcut icon" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/_include/images/logo.png">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div class="app" id="app">

<!-- ############ LAYOUT START-->

  <!-- aside -->
  <div id="aside" class="app-aside fade nav-dropdown black">
    <!-- fluid app aside -->
    <div class="navside dk" data-layout="column">
      <div class="navbar no-radius">
        <!-- brand -->
        <a href="index.html" class="navbar-brand">
        	<div data-ui-include="'<?php echo get_template_directory_uri(); ?>/_include/images/logo.svg'"></div>
        	<img src="<?php echo get_template_directory_uri(); ?>/_include/images/logo.png" alt="." class="hide">
        	<span class="hidden-folded inline">Performa</span>
        </a>
        <!-- / brand -->
      </div>
      <div data-flex class="hide-scroll">
          <nav class="scroll nav-stacked nav-stacked-rounded nav-color">

            <ul class="nav" data-ui-nav>
              <!--li class="nav-header hidden-folded">
                <span class="text-xs">Main</span>
              </li-->
              <li>
                <a href="dashboard.html" class="b-danger">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-filing"></i>
                  </span>
                  <span class="nav-text">تقييم الأداء</span>
                </a>
              </li>
              <li>
                <a href="app.project.html" class="b-success">
                  <span class="nav-icon text-white no-fade">
                    <i class="ion-android-apps"></i>
                  </span>
                  <span class="nav-text">إدارة المجموعات</span>
                </a>
              </li>
              <li>
                <a href="app.message.html" class="b-default">
                  <span class="nav-label">
                    <b class="label label-xs rounded danger"></b>
                  </span>
                  <span class="nav-icon">
                    <i class="ion-chatbubble-working"></i>
                  </span>
                  <span class="nav-text">التنبيهات</span>
                </a>
              </li>
              <li>
                <a href="app.contact.html" class="b-default">
                  <span class="nav-icon">
                    <i class="ion-person"></i>
                  </span>
                  <span class="nav-text">بيانات العاملين</span>
                </a>
              </li>



            </ul>
          </nav>
      </div>

    </div>
  </div>
  <!-- / -->
