<?php
/*  Template Name: Profile */
get_header(); ?>


<!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">الملف الشخصي</div>
                <ul class="nav navbar-nav pull-left">
                  <li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link"  href="https://performa.noshor.com/profile-update/">
                      <span class="">
				            	<i class="fa fa-fw fa-pencil"></i>
				            	<span class="hidden-sm-down">تعديل</span>
				            </span>
                    </a>
                  </li>
                </ul>
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
    <div class="item-bg" style="background-color:#f6fafb;">
      <!--img src="<?php echo get_template_directory_uri(); ?>/_include/images/placeholder-m.png" class="blur opacity-3"-->
    </div>
    <div class="p-a-md">
      <div class="row m-t">
        <div class="col-sm-7">
          <a href="#" class="pull-left m-r-md">
            <span class="avatar w-96">
                <img src="<?php echo get_template_directory_uri(); ?>/_include/images/placeholder-m.png" style="height:96px;">
            </span>
          </a>
          <div class="clear m-b">
            <h4 class="m-a-0 m-b-sm">محمد عبيد محمد عبيد</h4>
            <p class="text-muted"><span class="m-r">مشرف ادارى</span> <small><i class="fa fa-map-marker m-r-xs"></i>المنطقه الصناعيه 6 أكتوبر</small> </p>
            <div class="block clearfix m-b">
                <p><small><i class="fa fa-fw ion-card m-r-xs"></i>114 </small></p>
                <p><small><i class="fa fa-fw fa-cog m-r-xs"></i>ادارة الموارد البشريه </small></p>
            </div>
          </div>
        </div>
        <div class="col-sm-5">
            <p class="text-md profile-status"><i class="success rounded" style="width: 10px;height: 10px;display: inline-block;margin-left: 10px;"></i>تم التقييم و القبول   </p>
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
              <a class="nav-link" href="#" data-toggle="tab" data-target="#tab_1">التحديثات</a>
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
                  <div class="sl-date text-muted">منذ 2 دقيقه</div>
                  <p>تأخير</p>
                </div>
              </div>
              <div class="sl-item b-info">
                <div class="sl-content">
                  <div class="sl-date text-muted">الاربعاء 25 مارس</div>
                  <p>الاجتماع مع رئيس القطاع</p>
                </div>
              </div>
              <!--div class="sl-item b-success">
                <div class="sl-content">
                  <div class="sl-date text-muted">الثلاثاء 24 مارس</div>
                  <p>إيجاد حل لمشكلة </p>
                </div>
              </div-->
              <div class="sl-item">
                <div class="sl-content">
                  <div>
                    <p>إضافة تحديث جديد</p>
                  </div>
                  <!--div class="sl-footer">
                    <a href="#" data-ui-toggle-class class="btn white btn-xs">
                      <i class="fa fa-fw fa-star-o text-muted inline"></i>
                      <i class="fa fa-fw fa-star text-danger none"></i>
                    </a>
                    <a href="#" class="btn white btn-xs" data-toggle="collapse" data-target="#reply-2">
                      <i class="fa fa-fw fa-mail-reply text-muted"></i>
                    </a>
                  </div-->
                  <div class="box collapse in m-a-0" id="reply-2">
                    <form>
                      <textarea class="form-control no-border" rows="3" placeholder="أكتب هنا..."></textarea>
                    </form>
                    <div class="box-footer clearfix">
                      <button class="btn btn-info pull-right btn-sm">حقظ</button>
                      <ul class="nav nav-pills nav-sm">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-camera text-muted"></i></a></li>
                        <!--li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-video-camera text-muted"></i></a></li-->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div>
          <div class="box">
              <div class="box-header">
                <h3>في نفس الإدارة</h3>
              </div>
              <div class="box-divider m-a-0"></div>
              <ul class="list no-border p-b">
                <li class="list-item">
                  <a herf class="list-left">
                    <span class="w-40 avatar">
                      <img src="<?php echo get_template_directory_uri(); ?>/_include/images/placeholder-m.png" alt="..."  style="height:40px;">
                      <!--i class="on b-white bottom"></i-->
                    </span>
                  </a>
                  <div class="list-body">
                    <div><a href="#">عادل محمود علي سليم</a></div>
                    <small class="text-muted text-ellipsis">رئيس مشرفين</small>
                  </div>
                </li>
                <li class="list-item">
                  <a herf class="list-left">
                      <span class="w-40 avatar circle primary"></span>
                  </a>
                  <div class="list-body">
                    <div><a href="#">محمد محمود محمد الاعصر</a></div>
                    <small class="text-muted text-ellipsis">رئيس قسم</small>
                  </div>
                </li>
                
              </ul>
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
