<?php
/*  Template Name: Appraisal Form */
get_header(); ?>

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    
    
      <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">إدارة التقييم</div>
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

                <form class="p-x-xs" name="frm_appraisal" id="frm_appraisal" method="POST">
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
                                          <input type="text" id="txt_empname" name="txt_empname" class="form-control"  value=" منصور أحمد عبد السلام " disabled>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="col-sm-2 form-control-label" for="txt_prfm_no">رقم الاداء</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="txt_prfm_no" name="txt_prfm_no" class="form-control"  value="3324" disabled>
                                        </div>
                                    </div>

                            </div>

                            <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="col-sm-2 form-control-label" for="txt_emptitle">الوظيفة</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="txt_emptitle" name="txt_emptitle" class="form-control"  value="محاسب " disabled>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="col-sm-2 form-control-label" for="txt_directory">الادارة</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="txt_directory" name="txt_directory" class="form-control"  value="الحسابات" disabled>
                                        </div>
                                    </div>
                            </div>

                            <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="col-sm-2 form-control-label" for="txt_location">الموقع</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="txt_location" name="txt_location" class="form-control"   value="الشيخ زايد" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label class="col-sm-2 form-control-label" for="txt_appointment_date">تاريخ التعيين</label>
                                        <div class="col-sm-10">
                                          <input type="text" id="txt_appointment_date" name="txt_appointment_date" class="form-control"  value="١٧ مارس ٢٠١٤ " disabled>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <!--div class="box">
                        <div class="box-header">
                            <h2>الاهداف: 60% (يتم فقط تقييم نسبة التحقيق الهدف من 100%)</h2>
                        </div>
                        <div class="box-body">
                        </div>
                    </div-->

                    <div class="box">
                        <div class="box-header">
                            <h2>الاهداف: 60% (يتم فقط تقييم نسبة التحقيق الهدف من 100%)</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered m-a-0" id="tbl_objectives_performance">
                                <thead>
                                  <tr>
                                    <th>الاهداف</th>
                                    <th>الوزن</th>
                                    <th>نسبة التحقيق</th>
                                    <th>الاداء</th>
                                    <th>الوزن من60% </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_objective_1" name="tbl_txt_objective_1" class="form-control" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_weight_1" name="tbl_txt_weight_1" class="form-control" value="35%" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_progress_1" name="tbl_txt_progress_1" class="form-control txt_progress" object_no="1">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_performance_1" name="tbl_txt_performance_1" class="form-control txt_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_weight_60_1" name="tbl_txt_weight_60_1" class="form-control txt_weight_60">
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="tbl_txt_objective_2" name="tbl_txt_objective_2" class="form-control" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <input type="text" id="tbl_txt_weight_2" name="tbl_txt_weight_2" class="form-control" value="35%" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_progress_2" name="tbl_txt_progress_2" class="form-control txt_progress" object_no="2">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_performance_2" name="tbl_txt_performance_2" class="form-control txt_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_weight_60_2" name="tbl_txt_weight_60_2" class="form-control txt_weight_60">
                                        </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_objective_3" name="tbl_txt_objective_3" class="form-control" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_weight_3" name="tbl_txt_weight_3" class="form-control" value="30%" disabled>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_progress_3" name="tbl_txt_progress_3" class="form-control txt_progress" object_no="3">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_performance_3" name="tbl_txt_performance_3" class="form-control txt_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_weight_60_3" name="tbl_txt_weight_60_3" class="form-control txt_weight_60">
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>الاجمالى</td>
                                        <td>100%</td>
                                        <td colspan="2" id="total_objectives_performance" class="text-center"></td>
                                        <td id="total_total_objectives_performance_weight"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                  </div>

                    <div class="box">
                        <div class="box-header">
                            <h2>الجدارات : 30%</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered m-a-0" id="tbl_comptencies">
                                <thead>
                                  <tr>
                                    <!--th>التصنيف</th-->
                                    <th>الجدارة</th>
                                    <th>الوزن</th>
                                    <th>المستوى</th>
                                    <th>الدرجة (من 100%) </th>
                                    <th>الاداء</th>
                                    <th>الوزن من 30%</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <!--tr>
                                    <td rowspan="4">جدارات رئيسية </td>
                                  </tr-->
                                  <tr class="major_competencies" comp_no="1">
                                      <td><i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ تلك حقول السفن, الى مع شعار واعتلاء. إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                          مهارات الاتصال
                                        <!--div class="box primary">
                                            <div class="box-body">
                                                <p class="m-a-0">إذ تلك حقول السفن, الى مع شعار واعتلاء. إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع.</p>
                                            </div>
                                        </div-->
                                      </td>
                                      <td>
                                        <div class="form-group">
                                            <input type="text" id="tbl_txt_comm_skils_weight" name="tbl_txt_comm_skils_weight" class="form-control comptencies_weight" value="20%" disabled>
                                        </div>
                                      </td>
                                      <td>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                        <div class="form-group col-md-11">
                                              <input type="text" id="tbl_txt_comm_skils_level" name="tbl_txt_comm_skils_level" class="form-control" value="3" disabled>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_comm_skils_degree_100" name="tbl_txt_comm_skils_degree_100" class="form-control comptencies_degree">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_comm_skils_performance" name="tbl_txt_comm_skils_performance" class="form-control comptencies_performance">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_comm_skils_weight_30" name="tbl_txt_comm_skils_weight_30" class="form-control comptencies_weight_30">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr class="major_competencies" comp_no="2">
                                      <td> <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ تلك حقول السفن, الى مع شعار واعتلاء. إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                          رضا العميل
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_client_satisfaction_weight" name="tbl_txt_client_satisfaction_weight" class="form-control comptencies_weight" value="20%" disabled>
                                        </div>
                                      </td>
                                      <td>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                        <div class="form-group col-md-11">
                                              <input type="text" id="tbl_txt_client_satisfaction_level" name="tbl_txt_client_satisfaction_level" class="form-control" value="2" disabled>
                                        </div>
                                        
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_client_satisfaction_degree_100" name="tbl_txt_client_satisfaction_degree_100" class="form-control comptencies_degree" >
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_client_satisfaction_performance" name="tbl_txt_client_satisfaction_performance" class="form-control comptencies_performance">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_client_satisfaction_weight_30" name="tbl_txt_client_satisfaction_weight_30" class="form-control comptencies_weight_30">
                                        </div>
                                      </td>
                                  </tr>
                                  <tr class="major_competencies" comp_no="3">
                                      <td>
                                          <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ تلك حقول السفن, الى مع شعار واعتلاء. إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                          التركيز على النتائج
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_results_focus_weight" name="tbl_txt_results_focus_weight" class="form-control comptencies_weight" value="60%" disabled>
                                        </div>
                                      </td>
                                      <td>
                                          <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                        <div class="form-group col-md-11">
                                              <input type="text" id="tbl_txt_results_focus_level" name="tbl_txt_results_focus_level" class="form-control" value="3" disabled>
                                        </div>
                                        
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_results_focus_degree_100" name="tbl_txt_results_focus_degree_100" class="form-control comptencies_degree" >
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_results_focus_performance" name="tbl_txt_results_focus_performance" class="form-control comptencies_performance">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_results_focus_weight_30" name="tbl_txt_results_focus_weight_30" class="form-control comptencies_weight_30">
                                        </div>
                                      </td>
                                  </tr>
                                  
                                  <tr class="leading_competencies" comp_no="4">
                                      <td>
                                        <i class="fa fa-question-circle" data-toggle="tooltip" data-original-title="إذ تلك حقول السفن, الى مع شعار واعتلاء. إذ جدول الشتاء بريطانيا-فرنسا أضف, لم بقصف ومضى العظمى كان. الجو العالم، ألمانيا فقد مع." ></i>
                                        جدارات القيادة
                                      </td>
                                      <td>
                                        <div class="form-group">
                                            <input type="text" id="tbl_txt_lead_comp_weight" name="tbl_txt_lead_comp_weight" class="form-control comptencies_weight" disabled>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group col-md-11">
                                            <input type="text" id="tbl_txt_lead_comp_level" name="tbl_txt_lead_comp_level" class="form-control" disabled>
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_lead_comp_degree_100" name="tbl_txt_lead_comp_degree_100" class="form-control comptencies_degree" >
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_lead_comp_performance" name="tbl_txt_lead_comp_performance" class="form-control comptencies_performance">
                                        </div>
                                      </td>
                                      <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_lead_comp_weight_30" name="tbl_txt_lead_comp_weight_30" class="form-control comptencies_weight_30">
                                        </div>
                                      </td>
                                  </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>اجمالى الجدارات</td>
                                        <td>100%</td>
                                        <td></td>
                                        <td></td>
                                        <td id="total_comp_degree" ></td>
                                        <td id="total_comp_weight"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                  </div>

                    <div class="box">
                        <div class="box-header">
                            <h2>السلوك : 10%</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered m-a-0" id="tbl_behavior">
                                <thead>
                                  <tr>
                                    <th></th>
                                    <!--th>الدرجة (من %)</th-->
                                    <th>الاداء</th>
                                    <th>الوزن من 10%</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr behavior_no="1">
                                    <td>الحضور والانصراف  :(الالتزام بلائحة الشركة فيما يتعلق بالحضور والانصراف ورصيد الاجازات والاذونات )</td>
                                    <!--td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_absence_presence_degree" name="tbl_txt_absence_presence_degree" class="form-control behavior_degree">
                                        </div>
                                    </td-->
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_absence_presence_perform" name="tbl_txt_absence_presence_perform" class="form-control behavior_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_absence_presence_weight" name="tbl_txt_absence_presence_weight" class="form-control behavior_weight">
                                        </div>
                                    </td>
                                  </tr>
                                  <tr behavior_no="2">
                                    <td>العلاقات مع الزملاء والرؤساء:المشاركة الفعالة مع فريق العمل لتحقيق هدف مشترك  مع الحفاظ علاقات محترمة مع الروءساء داخل إطار العمل)</td>
                                    <!--td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_relation_degree" name="tbl_txt_relation_degree" class="form-control behavior_degree">
                                        </div>
                                    </td-->
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_relation_perfom" name="tbl_txt_relation_perfom" class="form-control behavior_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_relation_weight" name="tbl_txt_relation_weight" class="form-control behavior_weight">
                                        </div>
                                    </td>
                                  </tr>
                                  <tr behavior_no="3">
                                    <td>المظهر الشخصى الاهتمام بالمظهر الشخصى
                                    (الالتزام والحفاظ على مظهر الزى الرسمى للشركة ان وجد والظهور بشكل لائق</td>
                                    <!--td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_appearance_degree" name="tbl_txt_appearance_degree" class="form-control behavior_degree">
                                        </div>
                                    </td-->
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_appearance_perfom" name="tbl_txt_appearance_perfom" class="form-control behavior_performance">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_appearance_weight" name="tbl_txt_appearance_weight" class="form-control behavior_weight">
                                        </div>
                                    </td>
                                  </tr>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td>الاجمالى</td>
                                        <!--td></td-->
                                        <td id="total_behavior_performance"></td>
                                        <td id="total_behavior_weight"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                  </div>



                     <div class="box">
                        <div class="table-responsive">
                            <table class="table table-bordered m-a-0">
                                <tbody>
                                  <tr>
                                    <td>اجمالى درجات التقييم</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td id="total_weight"></td>
                                  </tr>
                                  <tr>
                                    <td>أسباب درجه التقييم</td>
                                    <td colspan="5">
                                        <div class="form-group">
                                            <textarea id="tbl_txt_grade_reason" name="tbl_txt_grade_reason" class="form-control" ></textarea>
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                    
                    

                    <!--div class="box">
                        <div class="box-header">
                            <h2>التدريب : برجاء ذكر الاحتياجات التدريبية الفنية فقط وترتيبهم بالاهمية وترشيح مركز تدريبى ان وجد</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered m-a-0">
                                <thead>
                                  <tr>
                                    <th>التدريب</th>
                                    <th>مركز التدريب (اختيارى)</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                      <td>
                                         <div class="form-group">
                                              <select id="sel_traning" class="form-control select2" name="sel_traning" data-ui-jp="select2" data-ui-options="{theme: 'bootstrap'}">
                                                      <option value="gas_program">برامج بترول</option>
                                                      <option value="CA">California</option>
                                                      <option value="NV">Nevada</option>
                                                      <option value="OR">Oregon</option>
                                                      <option value="WA">Washington</option>
                                              </select>
                                        </div>
                                      </td>
                                    <td>
                                        <div class="form-group">
                                              <input type="text" id="tbl_txt_training_center" name="tbl_txt_training_center" class="form-control">
                                        </div>
                                    </td>
                                  </tr>
                                </tbody>

                            </table>
                        </div>
                  </div-->

                  <div class="form-group col-md-12 text-right">
                        <button type="submit" class="btn btn-primary" name="btn-save-appraisal" id="btn-save-appraisal">حفظ</button>
                   </div>


                </form>

            </div>

        </div>
        
    </div>

    <div class="app-footer white bg p-a b-t">
      <!--div class="pull-right text-sm text-muted">Version 1.0.1</div-->
      <span class="text-sm text-muted">&copy; 2017 Performa, All rights reserved..</span>
    </div>

</div>



<?php get_footer(); ?>
