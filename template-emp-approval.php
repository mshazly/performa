<?php
/*  Template Name: Employee Approval */
get_header(); ?>

<!-- content -->
<div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">الموافقه على التقييم</div>
                
          </div>
    </div>
    
    
    <div class="app-body">
    <div class="padding">
        
        <form class="p-x-xs" name="frm_emp_approve" id="frm_emp_approve" method="POST"></form>
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
                                <label class="form-control-label">60%</label>
                              </td>
                              <td>
                                <label class="form-control-label">3</label>
                              </td>
                              <td>
                                <label class="form-control-label">85%</label>
                              </td>
                              <td>
                                <label class="form-control-label">51%</label>
                              </td>
                              <td>
                                <label class="form-control-label">15%</label>
                              </td>
                          </tr>
                          <tr class="leading_competencies" comp_no="4">
                              <td>جدارات القيادة</td>
                              <td>
                                <label class="form-control-label"></label>
                              </td>
                              <td>
                                <label class="form-control-label"></label>
                              </td>
                              <td>
                                <label class="form-control-label"></label>
                              </td>
                              <td>
                                <label class="form-control-label"></label>
                              </td>
                              <td>
                                <label class="form-control-label"></label>
                              </td>
                          </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>اجمالى الجدارات</td>
                                <td>100%</td>
                                <td></td>
                                <td></td>
                                <td>86%</td>
                                <td>25%</td>
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
                            <th>الاداء</th>
                            <th>الوزن من 10%</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr behavior_no="1">
                            <td>الحضور والانصراف  :(الالتزام بلائحة الشركة فيما يتعلق بالحضور والانصراف ورصيد الاجازات والاذونات )</td>
                            <td>
                                <label class="form-control-label">80%</label>
                            </td>
                            <td>
                                <label class="form-control-label">3%</label>
                            </td>
                          </tr>
                          <tr behavior_no="2">
                            <td>العلاقات مع الزملاء والرؤساء:المشاركة الفعالة مع فريق العمل لتحقيق هدف مشترك  مع الحفاظ علاقات محترمة مع الروءساء داخل إطار العمل)</td>
                            <td>
                                <label class="form-control-label">92%</label>
                            </td>
                            <td>
                                <label class="form-control-label">3%</label>
                            </td>
                          </tr>
                          <tr behavior_no="3">
                            <td>المظهر الشخصى الاهتمام بالمظهر الشخصى
                            (الالتزام والحفاظ على مظهر الزى الرسمى للشركة ان وجد والظهور بشكل لائق</td>
                            <td>
                                <label class="form-control-label">92%</label>
                            </td>
                            <td>
                                <label class="form-control-label">3%</label>
                            </td>
                          </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td>الاجمالى</td>
                                <td>294%</td>
                                <td>9%</td>
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
                            <td>87%</td>
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
                    <table class="table table-bordered m-a-0" id="tbl_training">
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
                                      <select id="sel_traning_1" class="form-control select2" name="sel_traning_1" data-ui-jp="select2" data-ui-options="{theme: 'bootstrap'}">
                                              <option value=""></option>
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
                                      <input type="text" id="tbl_txt_training_center_1" name="tbl_txt_training_center_1" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class="form-group">
                                      <select id="sel_traning_2" class="form-control select2" name="sel_traning_2" data-ui-jp="select2" data-ui-options="{theme: 'bootstrap'}">
                                              <option value=""></option>
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
                                      <input type="text" id="tbl_txt_training_center_2" name="tbl_txt_training_center_2" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class="form-group">
                                      <select id="sel_traning_3" class="form-control select2" name="sel_traning_3" data-ui-jp="select2" data-ui-options="{theme: 'bootstrap'}">
                                              <option value=""></option>
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
                                      <input type="text" id="tbl_txt_training_center_3" name="tbl_txt_training_center_3" class="form-control">
                                </div>
                            </td>
                          </tr>
                        </tbody>

                    </table>
                </div>
          </div>
        
        <div class="box">
                <div class="box-header">
                    <h2>أهداف السنه الجديده</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered m-a-0" id="tbl_objectives_performance">
                        <thead>
                          <tr>
                            <th>الاهداف</th>
                            <th>الوزن</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_objective_1" name="tbl_txt_objective_1" class="form-control" >
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_1" name="tbl_txt_weight_1" class="form-control">
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="tbl_txt_objective_2" name="tbl_txt_objective_2" class="form-control" >
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                    <input type="text" id="tbl_txt_weight_2" name="tbl_txt_weight_2" class="form-control">
                                </div>
                            </td>
                            
                          </tr>
                          <tr>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_objective_3" name="tbl_txt_objective_3" class="form-control" >
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                      <input type="text" id="tbl_txt_weight_3" name="tbl_txt_weight_3" class="form-control">
                                </div>
                            </td>
                          </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>الاجمالى</td>
                                <td>100%</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
          </div>
        
            
          <div class="form-group col-md-12 text-right">
                <button type="submit" class="btn btn-primary" name="btn-approve-appraisal" id="btn-approve-appraisal">موافقه</button>
           </div>


        </form>

    </div>

    </div>
    
    <div class="app-footer white bg p-a b-t">
      <!--div class="pull-right text-sm text-muted">Version 1.0.1</div-->
      <span class="text-sm text-muted">&copy; 2017 Performa, All rights reserved..</span>
    </div>
    
    </div>

<?php get_footer(); ?>
