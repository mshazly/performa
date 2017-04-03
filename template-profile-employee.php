<?php
/*  Template Name: Employee Profile */
get_header(); ?>


<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">الملف الشخصي</div>
                <!-- nabar right -->
                <ul class="nav navbar-nav pull-right">
                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link" data-toggle="dropdown">
                      <i class="ion-android-search w-24"></i>
                    </a>
                    <div class="dropdown-menu text-color w-md animated fadeInUp pull-right">
                      <!-- search form -->
                      <form class="navbar-form form-inline navbar-item m-a-0 p-x v-m" role="search">
                        <div class="form-group l-h m-a-0">
                          <div class="input-group">
                            <input type="text" class="form-control" placeholder="إبحث عن موظف...">
                            <span class="input-group-btn">
                              <button type="submit" class="btn white b-a no-shadow"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                        </div>
                      </form>
                      <!-- / search form -->
                    </div>
                  </li>
                </ul>
                <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0.1</div>
      <span class="text-sm text-muted">&copy; Copyright.</span>
    </div>
    <div class="app-body">

<!-- ############ PAGE START-->

  <div class="item">
    <div class="item-bg primary">
      
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-12">
          <a href="#" class="pull-left m-r-md">
              <span class="avatar w-96 rounded " style="background-color:#fff; height:96px;">
            </span>
          </a>
          <div class="clear m-b">
            <h4 class="m-a-0 m-b-sm">رأفت كريم</h4>
            <p class="text-muted"><span class="m-r"> رئيس قسم</span> <small><i class="fa fa-map-marker m-r-xs"></i>المنطقه الصناعيه 6 أكتوبر</small> </p>
            <div class="block clearfix m-b">
                <p><small><i class="fa fa-fw ion-card m-r-xs"></i>456 </small></p>
                <p><small><i class="fa fa-fw fa-cog m-r-xs"></i>الاتفاقيات وعقود كبار العملاء </small></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="white bg b-b p-x">
    <div class="row">
      <div class="col-sm-12">
        <div class="p-y-md clearfix nav-active-info">
          <ul class="nav nav-pills nav-sm">
            <li class="nav-item active">
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_1">الحاله</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="padding">
    <div class="row">
      <div class="col-sm-8 col-lg-9">
        <div class="tab-content">
          <div class="tab-pane p-v-sm active" id="tab_1">
            <div class="streamline">
              <div class="sl-item b-danger">
                <div class="sl-content">
                  <p>تم التقييم و لم يتم القبول بعد</p>
                  <p><a href="<?php bloginfo('url')?>/employee-approval/" class="text-info">اطغط هنا لمراجعة التقييم</a></p>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
      
    </div>
  </div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->
  
    
    


<?php get_footer(); ?>
