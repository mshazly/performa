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
                                  <input type="text" id="txt_empname" name="txt_empname" class="form-control"  value="أحمد عبد السلام " disabled>
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
                                  <input type="text" id="txt_location" name="txt_location" class="form-control">
                                </div>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" for="txt_appointment_date">تاريخ التعيين</label>
                                <div class="col-sm-10">
                                  <input type="text" id="txt_appointment_date" name="txt_appointment_date" class="form-control"  value="٢٥ يناير ٢٠١١" disabled>
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
                    <table class="table table-bordered m-a-0">
                        <thead>
                          <tr>
                            <th>م</th>
                            <th colspan="3">الاهداف</th>
                            <th>الوزن</th>
                            <th>نسبة التحقيق</th>
                            <th>الاداء</th>
                            <th>الوزن من60% </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td colspan="3">
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_objective_1" name="tbl_txt_objective_1" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_1" name="tbl_txt_weight_1" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_progress_1" name="tbl_txt_progress_1" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_performance_1" name="tbl_txt_performance_1" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_60_1" name="tbl_txt_weight_60_1" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td colspan="3">
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_objective_2" name="tbl_txt_objective_2" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_2" name="tbl_txt_weight_2" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_progress_2" name="tbl_txt_progress_2" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_performance_2" name="tbl_txt_performance_2" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_60_2" name="tbl_txt_weight_60_2" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td colspan="3">
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_objective_3" name="tbl_txt_objective_3" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_3" name="tbl_txt_weight_3" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_progress_3" name="tbl_txt_progress_3" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_performance_3" name="tbl_txt_performance_3" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_60_3" name="tbl_txt_weight_60_3" class="form-control">
                                </div>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="4">الاجمالى</td>
                                <td>100%</td>
                                <td colspan="2">80%</td>
                                <td>50%</td>
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
                    <table class="table table-bordered m-a-0">
                        <thead>
                          <tr>
                            <th>التصنيف</th>
                            <th>الجدارة</th>
                            <th>الوزن</th>
                            <th>المستوى</th>
                            <th>الدرجة (من 100%) </th>
                            <th>الاداء</th>
                            <th>الوزن من 40%</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td rowspan="4">جدارات رئيسية </td>
                          </tr>
                          <tr class="major_competencies">
                              <td>مهارات الاتصال</td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_comm_skils_weight" name="tbl_txt_comm_skils_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_comm_skils_level" name="tbl_txt_comm_skils_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_comm_skils_degree_100" name="tbl_txt_comm_skils_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_comm_skils_performance" name="tbl_txt_comm_skils_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_comm_skils_weight_40" name="tbl_txt_comm_skils_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr>
                          <tr class="major_competencies">
                              <td>رضا العميل</td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_weight" name="tbl_txt_client_satisfaction_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_level" name="tbl_txt_client_satisfaction_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_degree_100" name="tbl_txt_client_satisfaction_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_performance" name="tbl_txt_client_satisfaction_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_client_satisfaction_weight_40" name="tbl_txt_client_satisfaction_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr>
                          <tr class="major_competencies">
                              <td>التركيز على النتائج</td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_weight" name="tbl_txt_results_focus_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_level" name="tbl_txt_results_focus_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_degree_100" name="tbl_txt_results_focus_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_performance" name="tbl_txt_results_focus_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_results_focus_weight_40" name="tbl_txt_results_focus_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr>
                          <tr>
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
                          </tr>
                          <tr class="leading_competencies">
                              <td>جدارات القيادة</td>
                              <td></td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_lead_comp_weight" name="tbl_txt_lead_comp_weight" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_lead_comp_level" name="tbl_txt_lead_comp_level" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_lead_comp_degree_100" name="tbl_txt_lead_comp_degree_100" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_lead_comp_performance" name="tbl_txt_lead_comp_performance" class="form-control">
                                </div>
                              </td>
                              <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_lead_comp_weight_40" name="tbl_txt_lead_comp_weight_40" class="form-control">
                                </div>
                              </td>
                          </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>اجمالى الجدارات</td>
                                <td></td>
                                <td>100%</td>
                                <td></td>
                                <td></td>
                                <td>88%</td>
                                <td>26%</td>
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
                    <table class="table table-bordered m-a-0">
                        <thead>
                          <tr>
                            <th></th>
                            <th>الدرجة (من %)</th>
                            <th>الاداء</th>
                            <th>الوزن من 10%</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>الحضور والانصراف  :(الالتزام بلائحة الشركة فيما يتعلق بالحضور والانصراف ورصيد الاجازات والاذونات )</td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_absence_presence_degree" name="tbl_txt_absence_presence_degree" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_absence_presence_perform" name="tbl_txt_absence_presence_perform" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_absence_presence_weight" name="tbl_txt_absence_presence_weight" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>العلاقات مع الزملاء والرؤساء:المشاركة الفعالة مع فريق العمل لتحقيق هدف مشترك  مع الحفاظ علاقات محترمة مع الروءساء داخل إطار العمل)</td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_relation_degree" name="tbl_txt_relation_degree" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_relation_perfom" name="tbl_txt_relation_perfom" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_relation_weight" name="tbl_txt_relation_weight" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>المظهر الشخصى الاهتمام بالمظهر الشخصى
                            (الالتزام والحفاظ على مظهر الزى الرسمى للشركة ان وجد والظهور بشكل لائق</td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_appearance_degree" name="tbl_txt_appearance_degree" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_appearance_perfom" name="tbl_txt_appearance_perfom" class="form-control">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_appearance_weight" name="tbl_txt_appearance_weight" class="form-control">
                                </div>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>الاجمالى</td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                            <td></td>
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
