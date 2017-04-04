<?php
/*  Template Name: Add New Employee */
get_header(); ?>


   <!-- content -->
  <div id="content" class="app-content box-shadow-z2 pjax-container" role="main">
      
      <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">إضافة عامل جديد</div>
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
                                    <div class="padding">
                                        <form class="p-x-xs" name="frm_add_new_emp" id="frm_add_new_emp" method="POST">
            
                                            <div class="box">
                                                <div class="box-header">
                                                    <h2>بيانات الموظف</h2>
                                                </div>
                                                <div class="box-body">
                                                    <div class="row">
                                                        
                                                        
                                                        <div class="col-md-6 col-sm-12">
                                                            <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_empname">الاسم</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_empname" name="txt_empname" class="form-control" >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_prfm_no">رقم الاداء</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_prfm_no" name="txt_prfm_no" class="form-control" >
                                                                        </div>
                                                                    </div>

                                                            </div>

                                                            <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_emptitle">الوظيفة</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_emptitle" name="txt_emptitle" class="form-control" >
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_directory">الادارة</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_directory" name="txt_directory" class="form-control">
                                                                        </div>
                                                                    </div>
                                                            </div>

                                                            <div class="row">
                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_location">الموقع</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_location" name="txt_location" class="form-control"  >
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group col-md-12">
                                                                        <label class="col-sm-2 form-control-label" for="txt_appointment_date">تاريخ التعيين</label>
                                                                        <div class="col-sm-10">
                                                                          <input type="text" id="txt_appointment_date" name="txt_appointment_date" class="form-control" >
                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-md-6 text-right col-sm-12">
                                                            <div class="form-group col-md-12">
                                                                <a href="#" data-toggle="modal" data-target="#modal-upload-emp-name" >
                                                                    <span class="avatar w circle primary" style="height: 200px;">
                                                                      <p class="text-center">أضف صورة الموظف</p>
                                                                    </span>
                                                                </a>
                                                            </div>

                                                        </div>
                                                        
                                                    </div>
                                                    

                                                </div>
                                            </div>


                                          <div class="form-group col-md-12 text-right">
                                                <button type="submit" class="btn btn-primary" name="btn-add-new-emp" id="btn-add-new-emp">حفظ</button>
                                           </div>


                                        </form>
                                    </div>
				</div>
				
			
</div>



<!-- ############ PAGE END-->


<div class="app-footer white bg p-a b-t">
      <div class="pull-right text-sm text-muted">Version 1.0.1</div>
      <span class="text-sm text-muted">&copy; Copyright.</span>
    </div>

    </div>
  
  

    


<?php get_footer(); ?>
