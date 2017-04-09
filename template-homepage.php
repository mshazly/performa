<?php 
/*  Template Name: Home Page */
get_header(); ?>
  
  <!-- content -->
  <div id="content" class="app-content box-shadow-z2 bg pjax-container" role="main">
    <div class="app-header white bg b-b">
          <div class="navbar" data-pjax>
                <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up p-r m-a-0">
                  <i class="ion-navicon"></i>
                </a>
                <div class="navbar-item pull-left h5" id="pageTitle">الرئيسيه</div>
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
                  <!--li class="nav-item dropdown pos-stc-xs">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <i class="ion-android-notifications-none w-24"></i>
                      <span class="label up p-a-0 danger"></span>
                    </a>
                    <!-- dropdown >
                    <div class="dropdown-menu pull-right w-xl animated fadeIn no-bg no-border no-shadow">
                        <div class="scrollable" style="max-height: 220px">
                          <ul class="list-group list-group-gap m-a-0">
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="<?php echo get_template_directory_uri(); ?>/_include/images/a0.jpg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                Use awesome <a href="#" class="text-primary">animate.css</a><br>
                                <small class="text-muted">10 minutes ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="<?php echo get_template_directory_uri(); ?>/_include/images/a1.jpg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                <a href="#" class="text-primary">Joe</a> Added you as friend<br>
                                <small class="text-muted">2 hours ago</small>
                              </span>
                            </li>
                            <li class="list-group-item dark-white text-color box-shadow-z0 b">
                              <span class="pull-left m-r">
                                <img src="<?php echo get_template_directory_uri(); ?>/_include/images/a2.jpg" alt="..." class="w-40 img-circle">
                              </span>
                              <span class="clear block">
                                <a href="#" class="text-primary">Danie</a> sent you a message<br>
                                <small class="text-muted">1 day ago</small>
                              </span>
                            </li>
                          </ul>
                        </div>
                    </div>
                    <!-- / dropdown>
                  </li-->
                  <li class="nav-item dropdown">
                    <a class="nav-link clear" data-toggle="dropdown">
                      <span class="avatar w-32">
                        <img src="<?php echo get_template_directory_uri(); ?>/_include/images/a3.jpg" class="w-full rounded" alt="...">
                      </span>
                    </a>
                    <div class="dropdown-menu w dropdown-menu-scale pull-right">
                      <!--a class="dropdown-item" href="profile.html">
                        <span>Profile</span>
                      </a>
                      <a class="dropdown-item" href="setting.html">
                        <span>Settings</span>
                      </a>
                      <a class="dropdown-item" href="app.inbox.html">
                        <span>Inbox</span>
                      </a>
                      <a class="dropdown-item" href="app.message.html">
                        <span>Message</span>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="docs.html">
                        Need help?
                      </a-->
                      <a class="dropdown-item" href="<?php bloginfo('url');?>/login/">Sign out</a>
                    </div>
                  </li>
                </ul>
                <!-- / navbar right -->
          </div>
    </div>
    <div class="app-footer white bg p-a b-t">
      <!--div class="pull-right text-sm text-muted">Version 1.0.1</div-->
      <span class="text-sm text-muted">&copy; 2017 Performa, All rights reserved..</span>
    </div>
    <div class="app-body">

<!-- ############ PAGE START-->

<div class="row-col">
	<div class="col-lg b-r">
		<div class="row no-gutter">
			<div class="col-xs-6 col-sm-4 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-ios-grid-view text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">1200</h2>
						<p class="text-muted m-b-md">كل العاملين</p>
						<div>
                                                    <div class="echart_1" style="height:100px" >
                                                      </div>
                                                    <!--span data-ui-jp="sparkline" data-ui-options="[2,3,2,2,1,3,6,3,2,1], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span-->
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-xs-6 col-sm-4 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-up text-primary m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-document text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">637</h2>
						<p class="text-muted m-b-md">العاملين الذين تم تقييمهم</p>
						<div>
                                                    <div class="echart_2" style="height:100px" >
                                                      </div>
                                                   
							<!--span data-ui-jp="sparkline" data-ui-options="[1,1,0,2,3,4,2,1,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span-->
						</div>
					</div>
				</div>
	        </div>
	        <div class="col-xs-6 col-sm-4 b-r b-b">
				<div class="padding">
					<div>
						<span class="pull-right"><i class="fa fa-caret-down text-danger m-y-xs"></i></span>
						<span class="text-muted l-h-1x"><i class="ion-pie-graph text-muted"></i></span>
					</div>
					<div class="text-center">
						<h2 class="text-center _600">402</h2>
						<p class="text-muted m-b-md">العاملين الذين أتموا الموافقه على التقييم</p>
						<div>
                                                    <div class="echart_3" style="height:100px" >
                                                      </div>
							<!--span data-ui-jp="sparkline" data-ui-options="[9,2,5,5,7,4,4,3,2,2], {type:'line', height:20, width: '60', lineWidth:1, valueSpots:{'0:':'#818a91'}, lineColor:'#818a91', spotColor:'#818a91', fillColor:'', highlightLineColor:'rgba(120,130,140,0.3)', spotRadius:0}" class="sparkline inline"></span-->
						</div>
					</div>
				</div>
	        </div>
	        
        </div>
		<div class="padding">
			<div class="row">
			    <div class="col-sm-4">
			        <div class="box">
			          <div class="box-header">
			            <h3>إضافة عامل جديد</h3>
			            <!--small>A general overview of your sales</small-->
			          </div>
			          <!--div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div-->
                                  <div class="text-center" style="height:150px;padding-top: 46px;">
                                      <a class="btn btn-info" href="<?php bloginfo('url')?>/add-new-employee/">إضغط لإضافة عامل جديد</a>
                                            
			            <!--canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [25, 21, 18, 20, 30, 40, 45],
				                          fill: true,
				                          backgroundColor: '#2196f3',
				                          borderColor: '#2196f3',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#2196f3',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#2196f3',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 60
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas-->
				      	</div>
				        <!--div class="box-body info text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-info"><i class="fa fa-caret-up"></i> 20%</span>
				        	<span>Over last Month</span>
				        </div-->
			        </div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="box">
			          <div class="box-header">
			            <h3>تحميل بيانات العاملين في صيغة  CSV</h3>
			            <!--small>Calculated in last 30 days</small-->
			          </div>
			          <!--div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div-->
				        <div class="text-center" style="height:150px;padding-top: 46px;">
                                            <a class="btn btn-success" href="#">تحميل البيانات</a>
			            <!--canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [63, 57, 40, 25, 20, 22, 26],
				                          fill: true,
				                          backgroundColor: '#ef193c',
				                          borderColor: '#ef193c',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#ef193c',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#ef193c',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 100
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas-->
				      	</div>
				        <!---div class="box-body danger text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-danger"><i class="fa fa-caret-down"></i> 25%</span>
				        	<span>Over last Month</span>
				        </div-->
			        </div>
			    </div>
			    <div class="col-sm-4">
			    	<div class="box">
			          <div class="box-header">
			            <h3>معدل التقييمات</h3>
			            <!--small>Calculated in last 7 days</small-->
			          </div>
			          <!--div class="box-tool">
				        <ul class="nav">
				          <li class="nav-item inline">
				            <a class="nav-link">
				              <i class="ion-android-sync m-x-xs"></i>
				            </a>
				          </li>
				          <li class="nav-item inline dropdown">
				            <a class="nav-link" data-toggle="dropdown">
				              <i class="ion-android-menu m-x-xs"></i>
				            </a>
				            <div class="dropdown-menu dropdown-menu-scale pull-right">
				              <a class="dropdown-item" href="#">This week</a>
				              <a class="dropdown-item" href="#">This month</a>
				              <a class="dropdown-item" href="#">This week</a>
				              <div class="dropdown-divider"></div>
				              <a class="dropdown-item">Today</a>
				            </div>
				          </li>
				        </ul>
				      </div-->
                                  <div class="text-center" style="height:150px;padding-top: 46px;">
                                      <h1 class="text-info">60%</h1>      
			            <!--canvas data-ui-jp="chart" data-ui-options="
				            {
				              type: 'line',
				              data: {
				                  labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
				                  datasets: [
				                      {
				                          label: 'Dataset',
				                          data: [10, 15, 25, 40, 60, 75, 80],
				                          fill: true,
				                          backgroundColor: '#22b66e',
				                          borderColor: '#22b66e',
				                          borderWidth: 2,
				                          borderCapStyle: 'butt',
				                          borderDash: [],
				                          borderDashOffset: 0.0,
				                          borderJoinStyle: 'miter',
				                          pointBorderColor: '#22b66e',
				                          pointBackgroundColor: '#fff',
				                          pointBorderWidth: 2,
				                          pointHoverRadius: 4,
				                          pointHoverBackgroundColor: '#22b66e',
				                          pointHoverBorderColor: '#fff',
				                          pointHoverBorderWidth: 2,
				                          pointRadius: [0,4,4,4,4,4,0],
				                          pointHitRadius: 10,
				                          spanGaps: false
				                      }
				                  ]
				              },
				              options: {
				              	scales: {
				              		xAxes: [{
					                   display: false
					                }],
					                yAxes: [{
					                   display: false,
					                   ticks:{
					                   	 min: 0,
					                   	 max: 120
					               	   }
					                }]
				              	},
				              	legend: {
				              		display: false
				              	}
				              }
				            }
				            " height="150">
				            </canvas-->
				      	</div>
				        <!---div class="box-body success text-center p-b-md">
				        	<span class="dark-white rounded m-r p-x p-y-xs text-success"><i class="fa fa-caret-up"></i> 85%</span>
				        	<span>Over last Month</span>
				        </div-->
			        </div>
			    </div>
			</div>

	        
			
			
		</div>
	</div>
	<div class="col-lg w-lg w-auto-md white bg">
		<div>
	        <div class="p-a">
	        	<h6 class="text-muted m-a-0">التحديثات</h6>
	        </div>
	        <div class="streamline streamline-theme m-b">
                    
                    <div class="sl-item b-danger">
                        <div class="sl-content">
                            <div>تأخير(<a href="https://performa.noshor.com/profile/" class="text-info">محمد عبيد محمد عبيد </a>) </div>
                          <div class="sl-date text-muted">منذ 2 دقيقه</div>
                        </div>
                    </div>
                    
                    <div class="sl-item b-info">
                        <div class="sl-content">
                            <div>الاجتماع مع رئيس القطاع (<a href="https://performa.noshor.com/profile/" class="text-info">محمد عبيد محمد عبيد </a>) </div>
                          <div class="sl-date text-muted">الاربعاء 25 مارس</div>
                        </div>
                    </div>
                    
                    <div class="sl-item b-success">
                        <div class="sl-content">
                            <div>تسليم مشروع (<a href="https://performa.noshor.com/profile/" class="text-info">محمد عبيد محمد عبيد </a>) </div>
                          <div class="sl-date text-muted">الثلاثاء 24 مارس</div>
                        </div>
                    </div>
                    
                    <div class="sl-item b-success">
                        <div class="sl-content">
                            <div>تسليم مشروع (<a href="https://performa.noshor.com/profile/" class="text-info">سمير الألفي</a>) </div>
                          <div class="sl-date text-muted">الثلاثاء 24 مارس</div>
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