<?php
/*  Template Name: Add New Employee */
get_header(); ?>

<!-- content -->
<!-- content -->
  <!--div id="content" class="app-content box-shadow-z2 pjax-container" role="main">
    
    <div class="app-body">
        
               
    <div class="padding">

        <form class="p-x-xs" name="frm_add_new_emp" id="frm_add_new_emp" method="POST">
            
            <div class="box">
                <div class="box-header">
                    <h2>بيانات الموظف</h2>
                </div>
                <div class="box-body">
                    <div class="row text-left">
                            <div class="form-group col-md-12">
                                <a href="#" data-toggle="modal" data-target="#modal-upload-emp-name" >
                                    <span class="avatar w circle primary" style="height: 200px;">
                                      <p class="text-center">أضف صورة الموظف</p>
                                    </span>
                                </a>
                            </div>

                    </div>
                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_empname">الاسم</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_empname" name="txt_empname" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_prfm_no">رقم الاداء</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_prfm_no" name="txt_prfm_no" class="form-control" >
                                </div>
                            </div>

                    </div>

                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_emptitle">الوظيفة</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_emptitle" name="txt_emptitle" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_directory">الادارة</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_directory" name="txt_directory" class="form-control">
                                </div>
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_location">الموقع</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_location" name="txt_location" class="form-control"  >
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_appointment_date">تاريخ التعيين</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_appointment_date" name="txt_appointment_date" class="form-control" >
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
    
    
    <div class="modal fade" id="modal-upload-emp-name">
	<div class="modal-dialog modal-lg">
	  	<div class="modal-content">
	  		<div class="modal-header _600">
	  			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	  			إضافة عامل جديد
	  		</div>
	  		<div class="modal-body">
				    <div class="padding">
                                        
                                        <form action="api/dropzone" class="dropzone white">
                                      <div class="dz-message" data-ui-jp="dropzone" data-ui-options="{ url: 'api/dropzone' }">
                                          <h4 class="m-t-lg m-b-md">Drop files here or click to upload.</h4>
                                          <span class="text-muted block m-b-lg">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
                                      </div>
                                    </form>
                                </div>
		    </div>
	  	</div>
  	</div>
    </div>
        
    </div>
  </div-->
        
 
   <!-- content -->
  <div id="content" class="app-content box-shadow-z2 pjax-container" role="main">
    
    <div class="app-body">

<!-- ############ PAGE START-->

<div class="app-body-inner">
	<div class="row-col">
		<div class="white bg b-b">
			<div class="navbar no-radius box-shadow-z1">
				
			    <ul class="nav navbar-nav">
			        <li class="nav-item">
			          	<span class="navbar-item text-md">إضافة عامل جديد</span>
			        </li>
			    </ul>
			    
			</div>
		</div>
		<div class="row-row">
			<div class="row-col">
				<div class="col-xs b-r">
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
		</div>
	</div>
</div>



<!-- ############ PAGE END-->




    </div>
  </div>
  <!-- / --> 
  
  
    
    


<?php get_footer(); ?>
