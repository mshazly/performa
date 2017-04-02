<?php
/*  Template Name: Add New Employee */
get_header(); ?>

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="padding">

        <form class="p-x-xs" name="frm_add_new_emp" id="frm_add_new_emp" method="POST">
            <!--don't forget wp nonce here-->
            <div class="box">
                <div class="box-header">
                    <h2>بيانات الموظف</h2>
                </div>
                <div class="box-body">
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
</div>

<?php get_footer(); ?>
