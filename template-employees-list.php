<?php
/*  Template Name: Employees List */
get_header(); ?>

<!-- content -->
  <div id="content" class="app-content box-shadow-z2 pjax-container" role="main">
    
    <div class="app-body">

<!-- ############ PAGE START-->

<div class="app-body-inner">
	<div class="row-col">
		<div class="white bg b-b">
			<div class="navbar no-radius box-shadow-z1">
				<a data-toggle="modal" data-target="#subnav" data-ui-modal class="navbar-item pull-left hidden-lg-up">
					<span class="btn btn-sm btn-icon info">
			      		<i class="fa fa-th"></i>
			        </span>
			    </a>
			    <a data-toggle="modal" data-target="#list" data-ui-modal class="navbar-item pull-left hidden-md-up">
			    	<span class="btn btn-sm btn-icon white">
			      		<i class="fa fa-list"></i>
			      	</span>
			    </a>
			    <!-- nabar right -->
			    <!--ul class="nav navbar-nav pull-right m-l">
				    <li class="nav-item dropdown">
				        <a class="nav-link text-muted" href="#" data-toggle="dropdown">
				        	<i class="fa fa-ellipsis-h"></i>
				        </a>
				        <div class="dropdown-menu pull-right text-color" role="menu">
				          <a class="dropdown-item">
				          	<i class="fa fa-tag"></i>
				          	Tag item
				          </a>
				          <a class="dropdown-item">
				          	<i class="fa fa-pencil"></i>
				          	Edit item
				          </a>
				          <a class="dropdown-item">
				          	<i class="fa fa-trash"></i>
				          	Delete item
				          </a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item">
				          	<i class="fa fa-ellipsis-h"></i>
				          	More action
				          </a>
				        </div>
				    </li>
			    </ul-->
			    <!-- / navbar right -->
			    <!-- link and dropdown -->
			    <ul class="nav navbar-nav">
			        <li class="nav-item">
			          	<span class="navbar-item text-md">بيانات العاملين </span>
			        </li>
			        <li class="nav-item">
				        <a class="nav-link text-muted" data-toggle="modal" data-target="#modal-new" title="Reply">
				            <span class="">
				            	<i class="fa fa-fw fa-plus"></i>
				            	<span class="hidden-sm-down">إضافة عامل جديد</span>
				            </span>
				        </a>
			        </li>
			    </ul>
			    <!-- / link and dropdown -->
			</div>
		</div>
		<div class="row-row">
			<div class="row-col">
				<div class="col-xs w modal fade aside aside-md b-r" id="subnav">
					<div class="row-col light bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="navside m-t">
								      	<nav class="nav-border b-primary" data-ui-nav>
									        <ul class="nav" id="filter_by_dept">
											  	<li class="active" data-filter="*">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label warn rounded">11</b>
									                  	</span>
												      	<span class="nav-text">كل العاملين</span>
												    </a>
											  	</li>
											  	<li data-filter=".dept1">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label primary rounded">2</b>
									                  	</span>
												      	<span class="nav-text">ادارة التسويق والاتصالات</span>
												    </a>
											  	</li>
											  	<li data-filter=".dept2">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">1</b>
									                  	</span>
												      	<span class="nav-text">ادارة الشئون التجاريه</span>
												    </a>
											  	</li>
											  	<li data-filter=".dept3">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label success rounded">3</b>
									                  	</span>
												      	<span class="nav-text">ادارة الموارد البشريه</span>
												    </a>
											  	</li>
                                                                                                <li data-filter=".dept4">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">1</b>
									                  	</span>
												      	<span class="nav-text">ادارة شئون  العاملين </span>
												    </a>
											  	</li>
                                                                                                
                                                                                                <li data-filter=".dept5">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label primary rounded">2</b>
									                  	</span>
												      	<span class="nav-text">الاتفاقيات وشئون ايجاس</span>
												    </a>
											  	</li>
                                                                                                <li data-filter=".dept6">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">1</b>
									                  	</span>
												      	<span class="nav-text">الاتفاقيات وعقود كبار العملاء</span>
												    </a>
											  	</li>
                                                                                                <li data-filter=".dept7">
												    <a href="#">
												      	<span class="nav-label">
									                    	<b class="label rounded">1</b>
									                  	</span>
												      	<span class="nav-text">الإدارة العامة للشئون الادارية </span>
												    </a>
											  	</li>
                                                                                                
											</ul>
										</nav>
									</div>
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->
				      	<!-- footer -->
					    <!--div class="p-a b-t">
					        <a href="#" class="btn btn-xs rounded primary"><i class="fa fa-plus m-r-xs"></i> New Group</a>
					    </div-->
					    <!-- / -->
				    </div>
				</div>
				<div class="col-xs modal fade aside aside-sm  b-r" id="list">
					<div class="row-col">
						<div class="row-row">
							<div class="row-col">
								<!-- col -->
								<div class="col-xs w-40 white bg b-r">
									<div class="row-col">
										<div class="row-row">
									      	<div class="row-body scrollable hover">
										      	<div class="row-inner">
										      		<div class="text-center text-sm p-y-sm" id="filter_by_letter">
														<a href="#" class="block text-muted active text-primary _600" data-filter="أ">أ</a>
														<a href="#" class="block text-muted" data-filter="ب">ب</a>
														<a href="#" class="block text-muted" data-filter="ت">ت</a>
														<a href="#" class="block text-muted" data-filter="ث">ث</a>
														<a href="#" class="block text-muted" data-filter="ج">ج</a>
														<a href="#" class="block text-muted" data-filter="ح">ح</a>
														<a href="#" class="block text-muted" data-filter="خ">خ</a>

														<a href="#" class="block text-muted" data-filter="د">د</a>
														<a href="#" class="block text-muted" data-filter="ذ">ذ</a>
														<a href="#" class="block text-muted" data-filter="ر">ر</a>
														<a href="#" class="block text-muted" data-filter="ز">ز</a>
														<a href="#" class="block text-muted" data-filter="س">س</a>
														<a href="#" class="block text-muted" data-filter="ش">ش</a>
														<a href="#" class="block text-muted" data-filter="ص">ص</a>

														<a href="#" class="block text-muted" data-filter="ض">ض</a>
														<a href="#" class="block text-muted" data-filter="ط">ط</a>
														<a href="#" class="block text-muted" data-filter="ظ">ظ</a>
														<a href="#" class="block text-muted" data-filter="ع">ع</a>
														<a href="#" class="block text-muted" data-filter="غ">غ</a>
														<a href="#" class="block text-muted" data-filter="ف">ف</a>

														<a href="#" class="block text-muted" data-filter="ق">ق</a>
														<a href="#" class="block text-muted" data-filter="ك">ك</a>
														<a href="#" class="block text-muted" data-filter="ل">ل</a>
														<a href="#" class="block text-muted" data-filter="م">م</a>
														<a href="#" class="block text-muted" data-filter="ن">ن</a>
														<a href="#" class="block text-muted" data-filter="و">و</a>
                                                                                                                <a href="#" class="block text-muted" data-filter="ي">ي</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- col -->
								<div class="col-xs">
									<div class="row-col white bg">
								      	<!-- flex content -->
								      	<div class="row-row">
									      	<div class="row-body scrollable hover">
										      	<div class="row-inner">
										      		<!-- left content -->
										      		<div id="emp_list" class="list" >
										      			    <div class="list-item col-md-12 dept3 م" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail_1" data-ui-list-target-class="show">
										      			      <div class="list-left">
										      			        <img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-40 avatar circle">
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">محمد عبيد محمد عبيد </a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">    
                                                                                                                    مشرف ادارى
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item col-md-12 dept3 ع">
										      			      <div class="list-left">
										      			        <img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-40 avatar circle">
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">عادل محمود علي سليم </a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس مشرفين
										      			        </small>
										      			      </div>
										      			    </div>
										      			    <div class="list-item col-md-12 dept3 م">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">محمد محمود محمد الاعصر </a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                            <div class="list-item col-md-12 dept2 أ" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail_2" data-ui-list-target-class="show">
										      			      <div class="list-left">
										      			        <img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-40 avatar circle">
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">أحمد علي</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    
                                                                                                    <div class="list-item col-md-12 dept1 ع">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">علي مصطفي</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    
                                                                                                     <div class="list-item col-md-12 dept4 ك">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">كريم محمود</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    <div class="list-item col-md-12 dept5 ص">
										      			      <div class="list-left">
										      			        <img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-40 avatar circle">
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">صابر ابراهيم</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    <div class="list-item  col-md-12 dept6 ر" data-ui-list="b-r b-3x b-primary" data-ui-list-target="#detail_3" data-ui-list-target-class="show">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">رأفت كريم</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    <div class="list-item col-md-12 dept7 ي">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">يس حسين</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    <div class="list-item col-md-12 dept1 س">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">سمير الألفي</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
                                                                                                    <div class="list-item col-md-12 dept5 ي">
										      			      <div class="list-left">
										      			        <span class="w-40 avatar circle primary">
										      			            
										      			        </span>
										      			      </div>
										      			      <div class="list-body">
										      			          <div class="pull-right dropdown">
										      			            <a href="#" data-toggle="dropdown" class="text-muted"><i class="fa fa-fw fa-ellipsis-v"></i></a>
										      			            <div class="dropdown-menu pull-right text-color" role="menu">
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-eye"></i>
										      			              	بيانات الموظف
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-pencil"></i>
										      			              	تعديل
										      			              </a>
										      			              <a class="dropdown-item">
										      			              	<i class="fa fa-trash"></i>
										      			              	مسح
										      			              </a>
										      			            </div>
										      			          </div>
										      			        <div class="item-title">
										      			          <a href="#" class="_500">يوسف فخري</a>
										      			        </div>
										      			        <small class="block text-muted text-ellipsis">
										      			            رئيس قسم
										      			        </small>
										      			      </div>
										      			    </div>
										      			    
										        	</div>
										        	<!-- / -->
										      	</div>
										    </div>
								      	</div>
								      	<!-- / -->
								    </div>
								</div>
							</div>
						</div>

					    <!-- footer -->
					    <div class="white bg p-a b-t clearfix">
					      	<div class="btn-group pull-right">
					            <a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-right"></i></a>
					            <a href="#" class="btn btn-xs white circle"><i class="fa fa-fw fa-angle-left"></i></a>
					        </div>
					      	<span class="text-sm text-muted">الإجمالي: <strong>11</strong></span>
					    </div>
					    <!-- / -->
					</div>
				</div>
				<div class="details col-xs hidden-lg-up" id="detail_1">
					<div class="row-col white bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="p-a-lg text-center">
                                                                    <img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-128 circle animated rollIn" alt=".">
							      		<div class="animated fadeInUp">
								      		<div>
									      		<span class="text-md m-t block">محمد عبيد محمد عبيد </span>
									      		<small class="text-muted">مشرف ادارى</small>
								      		</div>
								      		<div class="block clearfix m-t">
                                                                                    <p>تم التقييم و القبول</p>
                                                                                </div>
							            </div>
							      	</div>
									<div class="p-a-md animated fadeInUp">
								        <ul class="nav">
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-map-marker"></i>
								                	</span>
								                	<span>المنطقه الصناعيه 6 أكتوبر</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw ion-card"></i>
								                	</span>
								                	<span>114</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-cog"></i>
								                	</span>
								                	<span>ادارة الموارد البشريه</span>
								              	</a>
								            </li>
								            
								        </ul>
							        </div>
							        <!-- / -->
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->

					    <!-- footer -->
					    <div class="p-a b-t clearfix">
					      	<div class="pull-right">
					            <a href="#" class="btn btn-xs white rounded">
					            	<i class="fa fa-trash m-r-xs"></i>
					            	مسح
					            </a>
					        </div>
					      	<a href="#" class="btn btn-xs primary rounded">
				            	<i class="fa fa-pencil m-r-xs"></i>
				            	تعديل
				            </a>
					    </div>
					    <!-- / -->
				    </div>
				</div>
                                <div class="details col-xs hidden-lg-up" id="detail_2">
					<div class="row-col white bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="p-a-lg text-center">
							      		<img src="https://performa.noshor.com/wp-content/themes/performa/_include/images/placeholder-m.png" class="w-128 circle animated rollIn" alt=".">
							      		<div class="animated fadeInUp">
								      		<div>
									      		<span class="text-md m-t block">أحمد علي</span>
									      		<small class="text-muted">رئيس قسم</small>
								      		</div>
								      		<div class="block clearfix m-t">
                                                                                    <p>لم يتم التقييم</p>
                                                                                </div>
							            </div>
							      	</div>
									<div class="p-a-md animated fadeInUp">
								        <ul class="nav">
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-map-marker"></i>
								                	</span>
								                	<span>المنطقه الصناعيه 6 أكتوبر</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw ion-card"></i>
								                	</span>
								                	<span>123</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-cog"></i>
								                	</span>
								                	<span>ادارة الشئون التجاريه</span>
								              	</a>
								            </li>
								            
								        </ul>
							        </div>
							        <!-- / -->
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->

					    <!-- footer -->
					    <div class="p-a b-t clearfix">
					      	<div class="pull-right">
					            <a href="#" class="btn btn-xs white rounded">
					            	<i class="fa fa-trash m-r-xs"></i>
					            	مسح
					            </a>
					        </div>
					      	<a href="#" class="btn btn-xs primary rounded">
				            	<i class="fa fa-pencil m-r-xs"></i>
				            	تعديل
				            </a>
					    </div>
					    <!-- / -->
				    </div>
				</div>
                            <div class="details  col-xs hidden-lg-up" id="detail_3">
					<div class="row-col white bg">
				      	<!-- flex content -->
				      	<div class="row-row">
					      	<div class="row-body scrollable hover">
						      	<div class="row-inner">
							      	<!-- content -->
							      	<div class="p-a-lg text-center">
							      		<div class="w-128 circle primary" style="height: 128px;margin-right: auto;margin-left: auto;"></div>
							      		<div class="animated fadeInUp">
								      		<div>
									      		<span class="text-md m-t block">رأفت كريم</span>
									      		<small class="text-muted">رئيس قسم</small>
								      		</div>
								      		<div class="block clearfix m-t">
                                                                                    <p>تم التقييم و لم يتم القبول بعد</p>
                                                                                </div>
							            </div>
							      	</div>
									<div class="p-a-md animated fadeInUp">
								        <ul class="nav">
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-map-marker"></i>
								                	</span>
								                	<span>المنطقه الصناعيه 6 أكتوبر</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw ion-card"></i>
								                	</span>
								                	<span>456</span>
								              	</a>
								            </li>
								            <li class="nav-item m-b-xs">
								              	<a class="nav-link text-muted block">
								                	<span class="pull-right text-sm">
								                		<i class="fa fa-fw fa-cog"></i>
								                	</span>
								                	<span>الاتفاقيات وعقود كبار العملاء</span>
								              	</a>
								            </li>
								            
								        </ul>
							        </div>
							        <!-- / -->
							    </div>
					      	</div>
					    </div>
				      	<!-- / -->

					    <!-- footer -->
					    <div class="p-a b-t clearfix">
					      	<div class="pull-right">
					            <a href="#" class="btn btn-xs white rounded">
					            	<i class="fa fa-trash m-r-xs"></i>
					            	مسح
					            </a>
					        </div>
					      	<a href="#" class="btn btn-xs primary rounded">
				            	<i class="fa fa-pencil m-r-xs"></i>
				            	تعديل
				            </a>
					    </div>
					    <!-- / -->
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="modal-new">
	<div class="modal-dialog modal-lg">
	  	<div class="modal-content">
	  		<div class="modal-header _600">
	  			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	  			إضافة عامل جديد
	  		</div>
	  		<div class="modal-body">
			    <form class="form-horizontal">
				    <div class="form-group row">
				        <label class="col-lg-2 form-control-label">Name:</label>
				        <div class="col-lg-8">
					        <input type="text" class="form-control">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-2 form-control-label">Title:</label>
				        <div class="col-lg-8">
				          	<input type="text" class="form-control">
				        </div>
				    </div>
				    <div class="form-group row">
				        <label class="col-lg-2 form-control-label">Description</label>
				        <div class="col-lg-10">
				          	<div class="b-a">
					            <div data-ui-jp="summernote" data-ui-options="{height: 150,
						            toolbar: [
						              ['style', ['bold', 'italic', 'underline', 'clear']],
						              ['color', ['color']],
						              ['para', ['ul', 'ol', 'paragraph']],
						              ['height', ['height']]
						            ]}">
							    </div>
				          	</div>
				        </div>
				    </div>
				    <div class="form-group row">
				        <div class="col-lg-8 offset-lg-2">
				          	<button class="btn primary btn-sm p-x-md">Save</button>
				        </div>
				    </div>
			    </form>
		    </div>
	  	</div>
  	</div>
</div>

<!-- ############ PAGE END-->

    </div>
  </div>
  <!-- / -->
  
  
  <?php get_footer(); ?>