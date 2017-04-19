<?php
/*  Template Name: Competencies Management */
get_header(); ?>


   <!-- content -->
  <div id="content" class="app-content box-shadow-z2 pjax-container" role="main">
    
      <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">إدارة الجدارات</div>
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
      
    <div class="app-body">

<!-- ############ PAGE START-->

<div class="app-body-inner">
	<div class="row-col">
		<div class="row-row">
			<div class="row-col">
				<div class="col-xs b-r">
                                    <div class="padding">
            
                                            <div class="box">
                                                <div class="box-header">
                                                    <h2>إضافة جدارات</h2>
                                                </div>
                                                <div class="box-body">

                                                            <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_compet">إضافة جداره</label>
                                                                        <div class="col-sm-7">
                                                                          <input type="text" id="txt_add_compet" name="txt_add_compet" class="form-control"  >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <input type="button" id="btn-add-compet" name="btn-add-compet" value="إضافه" class="btn btn-primary"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_compet_desc">تعريف الجداره</label>
                                                                        <div class="col-sm-7">
                                                                            <textarea class="form-control" id="txt_add_compet_desc" name="txt_add_compet_desc" ></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_compet_level"> مستوى الجداره</label>
                                                                        <div class="col-sm-7">
                                                                            <input type="text" id="txt_add_compet_level" name="txt_add_compet_level" class="form-control"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_compet_level_desc">تعريف مستوى الجداره</label>
                                                                        <div class="col-sm-7">
                                                                            <textarea class="form-control" id="txt_add_compet_level_desc" name="txt_add_compet_level_desc"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            </div>
                                                    
                                                    <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_dept">إضافة قسم/ إداره</label>
                                                                        <div class="col-sm-7">
                                                                          <input type="text" id="txt_add_dept" name="txt_add_dept" class="form-control"  >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <input type="button" id="btn-add-dept" name="btn-add-dept" value="إضافه" class="btn btn-primary"/>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    
                                                    <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_add_title">إضافه وظيفه</label>
                                                                        <div class="col-sm-7">
                                                                          <input type="text" id="txt_add_title" name="txt_add_title" class="form-control"  >
                                                                        </div>
                                                                        <div class="col-sm-3">
                                                                            <input type="button" id="btn-add-title" name="btn-add-title" value="إضافه" class="btn btn-primary"/>
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                    
                                                    
                                                </div>
                                            </div>


                                        <div class="box">
                                                <div class="box-header">
                                                    <h2>إدارة الجدارات</h2>
                                                </div>
                                                <div class="box-body">

                                                            <div class="row">
                                                                <div class="form-group col-md-6">
                                                                          <select id="sel_dept" name="sel_dept" class="form-control" >
                                                                              <option value="">اختر القسم/الإداره</option>
                                                                              <option value="1">ادارة التسويق والاتصالات</option>
                                                                              <option value="2">ادارة الشئون التجاريه</option>
                                                                              <option value="1">ادارة الموارد البشريه</option>
                                                                              <option value="1">ادارة شئون العاملين </option>
                                                                          </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                          <select id="sel_job_title" name="sel_job_title" class="form-control" >
                                                                              <option value="">اختر الوظيفه</option>
                                                                              <option value="1">نائب مدير عام</option>
                                                                              <option value="2">مدير اداره</option>
                                                                              <option value="3">رئيس قسم</option>
                                                                              <option value="4">نائب مدير</option>
                                                                              <option value="5">مساعد رئيس قسم</option>
                                                                              <option value="6">محاسب</option>
                                                                          </select>
                                                                    </div>
                                                                    
                                                            </div>
                                                    
                                                            <div class="row">
                                                                    <div class="col-md-4">
                                                                        
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          مهارات الاتصال
                                                                        </label>
                                                                      </p>
                                                                      
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox" checked="">
                                                                          <i class="indigo"></i>
                                                                          رضا العميل
                                                                        </label>
                                                                      </p>
                                                                      
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox" checked="">
                                                                          <i class="indigo"></i>
                                                                            جدارات القيادة
                                                                        </label>
                                                                      </p>
                                                                      
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                           التركيز على النتائج
                                                                        </label>
                                                                      </p>
                                                                          
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        
                                                                       <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          الجدارات الفنية
                                                                        </label>
                                                                      </p>
                                                                      
                                                                          
                                                                    </div>
                                                            </div>
                                                    
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
  
  <div class="app-footer white bg p-a b-t">
      <!--div class="pull-right text-sm text-muted">Version 1.0.1</div-->
      <span class="text-sm text-muted">&copy; 2017 Performa, All rights reserved..</span>
    </div>
  
  </div>
  <!-- / --> 
  
  
    
    


<?php get_footer(); ?>
