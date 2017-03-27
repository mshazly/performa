jQuery(function($){ 
  	//-- Enable Use Strict Mode --
  	"use strict";
     
    if($('body').hasClass('page-template-template-appraisal-form')){
        handle_app_form($);
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
            val = ele.val();
        if($.trim(val) != ''){
            val = getNumbers(val);
            
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