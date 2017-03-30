jQuery(function($){ 
  	//-- Enable Use Strict Mode --
  	"use strict";
     
    if($('body').hasClass('page-template-template-appraisal-form')){
        handle_app_form($);
    }
    if($('body').hasClass('page-template-template-employees-list')){
        handle_employees_list($);
    }
        
});

function handle_app_form($){
    $('#tbl_objectives_performance .txt_progress').keyup(function(){
        var ele = $(this),
            val = ele.val(),
            objective_no = ele.attr('object_no'),
            weight_ele = $('#tbl_txt_weight_'+objective_no),
            performance_ele = $('#tbl_txt_performance_'+objective_no),
            weight_60_ele = $('#tbl_txt_weight_60_'+objective_no);
            //console.log(val+','+objective_no+','+weight_ele+','+performance_ele+','+weight_60_ele);
            
        if($.trim(val) != ''){
            val = getNumbers(val);
            var weight_val = getNumbers($.trim(weight_ele.val())),
                performance_val = (val/100)*weight_val,
                weight_60_val  = (performance_val * 60)/100;
            
            console.log(weight_val+','+performance_val+','+weight_60_val);
            performance_ele.val(Math.round(performance_val)+' %');
            weight_60_ele.val(Math.round(weight_60_val)+' %');
            
            calculate_total_objectives($);
        }
        
    });
    
    
    $('#tbl_comptencies .comptencies_degree').keyup(function(){
        var ele = $(this),
            val = ele.val(),
            comp_no = ele.parent().parent().parent().attr('comp_no'),
            parent_tr = $('#tbl_comptencies tr[comp_no='+comp_no+']'),
            comptencies_weight = parent_tr.find('.comptencies_weight').val();
            if($.trim(comptencies_weight) != ''){
                comptencies_weight = getNumbers(comptencies_weight);
            }else{
                comptencies_weight = 0;
            }
        if($.trim(val) != ''){
            val = getNumbers(val);
            var comptencies_performance = (val/100)* comptencies_weight ,
            comptencies_weight = (comptencies_performance * 30)/100;
            parent_tr.find('.comptencies_performance').val(Math.round(comptencies_performance) + ' %');
            parent_tr.find('.comptencies_weight_30').val(Math.round(comptencies_weight) + ' %');
            
            calculate_total_comptencies($);
        }
    });
    
    $('#tbl_behavior .behavior_performance').keyup(function(){
        var ele = $(this),
            val = parseInt(ele.val()),
            comp_no = ele.parent().parent().parent().attr('behavior_no'),
            parent_tr = $('#tbl_behavior tr[behavior_no='+comp_no+']');
           //behavior_performance,behavior_weight 
        if(val){
            var behavior_weight = Math.round(val/(3*10));
            parent_tr.find('.behavior_weight').val(behavior_weight + ' %');
            calculate_total_behavior($);
        }
          
    });
}

function calculate_total_objectives($){
    var tot_performance = 0,
        tot_weight_60 = 0;   
    $('#tbl_objectives_performance .txt_performance').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_performance += this_val;
        }
    });
    
    $('#tbl_objectives_performance .txt_weight_60').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_weight_60 += this_val;
        }
        
    });
    $('#total_objectives_performance').html(tot_performance+' %');
    $('#total_total_objectives_performance_weight').html(tot_weight_60+' %');
    
    caculate_total_weights($);
}

function calculate_total_comptencies($){
    var tot_performance = 0,
        tot_weight_30 = 0;   
    $('#tbl_comptencies .comptencies_performance').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_performance += this_val;
        }
    });
    
    $('#tbl_comptencies .comptencies_weight_30').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_weight_30 += this_val;
        }
        
    });
    $('#total_comp_degree').html(tot_performance+' %');
    $('#total_comp_weight').html(tot_weight_30+' %');
    
    caculate_total_weights($);
}

function calculate_total_behavior($){
    var tot_performance = 0,
        tot_weight_10 = 0;   
    $('#tbl_behavior .behavior_performance').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_performance += this_val;
        }
    });
    
    $('#tbl_behavior .behavior_weight').each(function(){
        var this_val = $.trim($(this).val());
        if(this_val != ''){
            this_val = parseInt(getNumbers(this_val));
            tot_weight_10 += this_val;
        }
        
    });
    $('#total_behavior_performance').html(tot_performance+' %');
    $('#total_behavior_weight').html(tot_weight_10+' %');
    
    caculate_total_weights($);
}


function caculate_total_weights($){
    var tot_weight_10 = parseInt($('#total_behavior_weight').html()),
        tot_weight_30 = parseInt($('#total_comp_weight').html()),
        tot_weight_60 = parseInt($('#total_total_objectives_performance_weight').html()),
        total = 0;

    if(tot_weight_10){
        total += tot_weight_10;
    }
    
    if(tot_weight_30){
        total += tot_weight_30;
    }
    
    if(tot_weight_60){
        total += tot_weight_60;
    }
    
    $('#total_weight').html(total + ' %');
}

function getNumbers(inputString){
    var regex=/\d+\.\d+|\.\d+|\d+/g, 
        results = [],
        n;

    while(n = regex.exec(inputString)) {
        results.push(parseFloat(n[0]));
    }

    return results;
}

function handle_employees_list($){
    var $container = jQuery('#emp_list'),
    filter = '*';
        var isoTopOptn = {
            filter: filter,
            layoutMode: 'vertical',
            originLeft: false,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        };
    $container.isotope(isoTopOptn);
    jQuery('#filter_by_letter a').click(function (e) {
        e.preventDefault();
        var selector = jQuery(this).attr('data-filter');
        $container.isotope({ filter: selector });
        jQuery('#filter_by_letter a').removeClass('active');
        jQuery(this).addClass('active');
        return false;
    });
    
    jQuery('#filter_by_dept li').click(function (e) {
        e.preventDefault();
        var selector = jQuery(this).attr('data-filter');
        $container.isotope({ filter: selector });
        jQuery('#filter_by_dept li').removeClass('active');
        jQuery(this).addClass('active');
        return false;
    });
    
    
}