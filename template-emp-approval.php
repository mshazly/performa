<?php
/*  Template Name: Employee Approval */
get_header(); ?>

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="padding">
            <div class="box">
                <div class="box-header">
                    <h2>بيانات الموظف</h2>
                </div>
                <div class="box-body">
                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label">الاسم</label>
                                <label class="col-sm-10 form-control-label">منصور أحمد عبد السلام</label>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" >رقم الاداء</label>
                                <label class="col-sm-10 form-control-label">3324</label>
                            </div>

                    </div>

                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" >الوظيفة</label>
                                <label class="col-sm-10 form-control-label">محاسب</label>
                            </div>
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label" >الادارة</label>
                                <label class="col-sm-10 form-control-label">الحسابات</label>
                            </div>
                    </div>

                    <div class="row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label">الموقع</label>
                                <label class="col-sm-10 form-control-label">الشيخ زايد</label>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label class="col-sm-2 form-control-label">تاريخ التعيين</label>
                                <label class="col-sm-10 form-control-label">١٧ مارس ٢٠١٤ </label>
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
                                <label class="form-control-label"></label>
                            </td>
                            <td>
                                <label class="form-control-label">35%</label>
                            </td>
                            <td>
                                <label class="form-control-label">85%</label>
                            </td>
                            <td>
                                <label class="form-control-label">30%</label>
                            </td>
                            <td>
                                <label class="form-control-label">18%</label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <label class="form-control-label"></label>
                            </td>
                            <td>
                                <label class="form-control-label">35%</label>
                            </td>
                            <td>
                                <label class="form-control-label">85%</label>
                            </td>
                            <td>
                                <label class="form-control-label">30%</label>
                            </td>
                            <td>
                                <label class="form-control-label">18%</label>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <label class="form-control-label"></label>
                            </td>
                            <td>
                                <label class="form-control-label">30%</label>
                            </td>
                            <td>
                                <label class="form-control-label">94%</label>
                            </td>
                            <td>
                                <label class="form-control-label">28%</label>
                            </td>
                            <td>
                                <label class="form-control-label">17%</label>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>الاجمالى</td>
                                <td><label class="form-control-label">100%</label></td>
                                <td colspan="2" class="text-center">
                                    <label class="form-control-label">88%</label>
                                </td>
                                <td>
                                    <label class="form-control-label">53%</label>
                                </td>
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
                            <th>الجدارة</th>
                            <th>الوزن</th>
                            <th>المستوى</th>
                            <th>الدرجة (من 100%) </th>
                            <th>الاداء</th>
                            <th>الوزن من 30%</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="major_competencies" comp_no="1">
                              <td>مهارات الاتصال</td>
                              <td>
                                <label class="form-control-label">20%</label>
                              </td>
                              <td>
                                <label class="form-control-label">3</label>
                              </td>
                              <td>
                                <label class="form-control-label">90%</label>
                              </td>
                              <td>
                                <label class="form-control-label">18%</label>
                              </td>
                              <td>
                                <label class="form-control-label">5%</label>
                              </td>
                          </tr>
                          <tr class="major_competencies" comp_no="2">
                              <td>رضا العميل</td>
                              <td>
                                <label class="form-control-label">20%</label>
                              </td>
                              <td>
                                <label class="form-control-label">2</label>
                              </td>
                              <td>
                                <label class="form-control-label">85%</label>
                              </td>
                              <td>
                                <label class="form-control-label">17%</label>
                              </td>
                              <td>
                                <label class="form-control-label">5%</label>
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
            
          <div class="form-group col-md-12 text-right">
                <button type="submit" class="btn btn-primary" name="btn-save-appraisal" id="btn-save-appraisal">حفظ</button>
           </div>


        </form>

    </div>
</div>

<?php get_footer(); ?>
