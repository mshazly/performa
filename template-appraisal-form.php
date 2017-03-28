<?php
/*  Template Name: Appraisal Form */
get_header(); ?>

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="padding">

        <form class="p-x-xs" name="frm_appraisal" id="frm_appraisal" method="POST">

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
                              <td>مهارات الاتصال</td>
                              <td>
                                <div class="form-group">
                                    <input type="text" id="tbl_txt_comm_skils_weight" name="tbl_txt_comm_skils_weight" class="form-control comptencies_weight" value="20%" disabled>
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
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
                              <td>رضا العميل</td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_weight" name="tbl_txt_client_satisfaction_weight" class="form-control comptencies_weight" value="20%" disabled>
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
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
                              <td>التركيز على النتائج</td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_weight" name="tbl_txt_results_focus_weight" class="form-control comptencies_weight" value="60%" disabled>
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
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
                          <!--tr>
                              <td rowspan="3">الجدارات الفنية </td>
                          </tr>
                          <tr class="technical_competencies">
                              <td></td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_1_weight" name="tbl_txt_tech_comp_1_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_1_level" name="tbl_txt_tech_comp_1_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_1_degree_100" name="tbl_txt_tech_comp_1_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_1_performance" name="tbl_txt_tech_comp_1_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_1_weight_40" name="tbl_txt_tech_comp_1_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr>
                          <tr class="technical_competencies">
                              <td></td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_2_weight" name="tbl_txt_tech_comp_2_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_2_level" name="tbl_txt_tech_comp_2_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_2_degree_100" name="tbl_txt_tech_comp_2_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_2_performance" name="tbl_txt_tech_comp_2_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_tech_comp_2_weight_40" name="tbl_txt_tech_comp_2_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr-->
                          <tr class="leading_competencies" comp_no="4">
                              <td>جدارات القيادة</td>
                              <td>
                                <div class="form-group">
                                    <input type="text" id="tbl_txt_lead_comp_weight" name="tbl_txt_lead_comp_weight" class="form-control comptencies_weight" disabled>
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
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
                            <th>الدرجة (من %)</th>
                            <th>الاداء</th>
                            <th>الوزن من 10%</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr behavior_no="1">
                            <td>الحضور والانصراف  :(الالتزام بلائحة الشركة فيما يتعلق بالحضور والانصراف ورصيد الاجازات والاذونات )</td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_absence_presence_degree" name="tbl_txt_absence_presence_degree" class="form-control behavior_degree">
                                </div>
                            </td>
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
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_relation_degree" name="tbl_txt_relation_degree" class="form-control behavior_degree">
                                </div>
                            </td>
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
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_appearance_degree" name="tbl_txt_appearance_degree" class="form-control behavior_degree">
                                </div>
                            </td>
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
                                <td></td>
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
                        </tbody>

                    </table>
                </div>
            </div>

            <div class="box">
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
          </div>


        </form>

    </div>
</div>

<?php get_footer(); ?>
