<?php
/*  Template Name: Competencies Management */
get_header(); ?>


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
			          	<span class="navbar-item text-md">إدارة الجدارات</span>
			        </li>
			    </ul>
			    
			</div>
		</div>
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
                                                                          <select id="sel_compet" name="sel_compet" class="form-control" >
                                                                              <option value="">اختر الجداره</option>
                                                                          </select>
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                          <select id="sel_dept" name="sel_dept" class="form-control" >
                                                                              <option value="">اختر القسم/الإداره</option>
                                                                          </select>
                                                                    </div>
                                                            </div>
                                                    
                                                            <div class="row">
                                                                    <div class="col-md-4">
                                                                        
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          Checkbox
                                                                        </label>
                                                                      </p>
                                                                      
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox" checked="">
                                                                          <i class="blue"></i>
                                                                          Checkbox: checked
                                                                        </label>
                                                                      </p>
                                                                      
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox" checked="">
                                                                          <i class="blue"></i>
                                                                          Checkbox: checked
                                                                        </label>
                                                                      </p>
                                                                      
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          Checkbox
                                                                        </label>
                                                                      </p>
                                                                          
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        
                                                                       <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          Checkbox
                                                                        </label>
                                                                      </p>
                                                                      
                                                                      <p>
                                                                        <label class="md-check">
                                                                          <input type="checkbox">
                                                                          <i class="indigo"></i>
                                                                          Checkbox
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
  </div>
  <!-- / --> 
  
  
    
    


<?php get_footer(); ?>
