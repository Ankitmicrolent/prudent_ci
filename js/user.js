$(document).on('click','.date1',function(){   
      
    $('.date1').datepicker({
        orientation: "right",
        autoclose: true
    });    
});
var fcnt = 1;
$(document).on('click','.addFRow',function()
    {   
        
        var f_name = document.getElementById("f_name0").value;
        var relation = document.getElementById("relation0").value;
        var f_dob = document.getElementById("f_dob0").value;
        var f_age = document.getElementById("f_age0").value;
        var f_education = document.getElementById("f_education0").value;
        var f_occup = document.getElementById("f_occup0").value;
        console.log(f_name)
        console.log(relation)
        console.log(f_dob)
        console.log(f_age)
        console.log(f_occup)
        if(f_name == '' || f_dob == '' || f_age == '' || f_education == '' || f_occup == ''){
            $('.invalidferror').addClass('has-error');
        }else{
            var html='<tr><td>'
            +'<div class="form-group">'
            // +'<select class="form-control select2me" name="relation[]" id="relation'+fcnt+'" required>'
            // +'<option value="">--Select--</option>'
            // +'<option value="Father">Father</option>'
            // +'<option value="Mother">Mother</option>'
            // +'<option value="Sister">Sister(s)</option>'
            // +'<option value="Brother">Brother(s)</option>'
            // +'<option value="Spouse">Spouse</option>'
            // +'<option value="Children">Children</option>'
            // +'</select>'
            +'<input type="text" class="form-control" name="relation[]" id="relation'+fcnt+'" value="'+relation+'" placeholder="Select" required readonly>'
            +'</div>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="f_name[]" id="f_name'+fcnt+'" value="'+f_name+'" placeholder="Name" required readonly>'
            +'</td>'
            +'<td>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">'
            +'<input type="text" name="f_dob[]" id="f_dob'+fcnt+'" value="'+f_dob+'" class="form-control" readonly="" placeholder="DOB" readonly>'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button">'
            +'<span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>'
            +'<i class="fa fa-calendar"></i></button></span></div>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="f_age[]" value="'+f_age+'" id="f_age'+fcnt+'" placeholder="Age" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="f_education[]" value="'+f_education+'" id="f_education'+fcnt+'" placeholder="Education" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="f_occup[]" id="f_occup'+fcnt+'" value="'+f_occup+'" placeholder="Occupation" required readonly>'
            +'</td>'
            +'<td>'
            +'<div class="addDeleteButton">'
            +'<span class="tooltips deleteFRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'
            +'</div></td></tr>';
            $('.invalidferror').removeClass('has-error');
            $('#invalidferrorid').html('');
            var clonedRow = $(this).parents('tbody.addFRow').find('tr:first').clone();
            clonedRow.find('input:not(.ftype)').val('');
            clonedRow.find('textarea').val('');
            clonedRow.find('select').val(''); 
            clonedRow.find('.select2-container').remove(); 
            clonedRow.find("select").select2();   
            clonedRow.find('.tooltip').css('display','none');  
            clonedRow.find('.tooltips').tooltip({placement: 'top'});
            $(this).parents('#familytbl tbody').find("tr:last").before(html);
            fcnt++;
            
            $('#relation0').val('');
            $('#f_name0').val('');
            $('#f_dob0').val('');
            $('#f_age0').val('');
            $('#f_education0').val('');
            $('#f_occup0').val('');
        }
        Metronic.init();
    });
    
    
    var educnt = 1;
    
    $(document).on('click','.addedurow',function()
    {        
        var clg_name = document.getElementById("college0").value;
        var p_year = document.getElementById("passing_year0").value;
        var degree = document.getElementById("degree_diploma0").value;
        var spsub = document.getElementById("special_sub0").value;
        var p_obtain = document.getElementById("percent_obtain0").value;
        
        if(clg_name == '' || p_year == '' || degree == '' || spsub == '' || p_obtain == ''){
            $('.invalideduerror').addClass('has-error');
        }else{
            var html='<tr><td>'
            +'<div class="form-group">'
            // +'<select class="form-control select2me" name="relation[]" id="relation'+fcnt+'" required>'
            // +'<option value="">--Select--</option>'
            // +'<option value="Father">Father</option>'
            // +'<option value="Mother">Mother</option>'
            // +'<option value="Sister">Sister(s)</option>'
            // +'<option value="Brother">Brother(s)</option>'
            // +'<option value="Spouse">Spouse</option>'
            // +'<option value="Children">Children</option>'
            // +'</select>'
            +'<input type="text" class="form-control" name="college[]" id="college'+educnt+'" value="'+clg_name+'" placeholder="Select" required readonly>'
            +'</div>'
            +'</td>'
            // +'<td>'
            // +'<input type="text" class="form-control" name="passing_year[]" id="passing_year'+educnt+'" value="'+p_year+'" placeholder="Name" required readonly>'
            // +'</td>'
            +'<td>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">'
            +'<input type="text" name="passing_year[]" id="passing_year'+educnt+'" value="'+p_year+'" class="form-control" readonly="" placeholder="Year of Passing">'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button">'
            +'<span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>'
            +'<i class="fa fa-calendar"></i></button></span></div>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="degree_diploma[]" value="'+degree+'" id="degree_diploma'+educnt+'" placeholder="Degree/Diploma" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="special_sub[]" value="'+spsub+'" id="special_sub'+educnt+'" placeholder="Specialized Subject" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="percent_obtain[]" id="percent_obtain'+educnt+'" value="'+p_obtain+'" placeholder="Percentage Obtained Subject" required readonly>'
            +'</td>'
            +'<td>'
            +'<div class="addDeleteButton">'
            +'<span class="tooltips deleteduRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'
            +'</div></td></tr>';
            $('.invalideduerror').removeClass('has-error');
            $('#invalideduerrorid').html('');
            var clonedRow = $(this).parents('tbody.addeduRow').find('tr:first').clone();
            clonedRow.find('input:not(.ftype)').val('');
            // clonedRow.find('textarea').val('');
            // clonedRow.find('select').val(''); 
            // clonedRow.find('.select2-container').remove(); 
            // clonedRow.find("select").select2();   
            clonedRow.find('.tooltip').css('display','none');  
            clonedRow.find('.tooltips').tooltip({placement: 'top'});
            $(this).parents('#edutabel tbody').find("tr:last").before(html);
            educnt++;
            $('#college0').val('');
            $('#passing_year0').val('');
            $('#degree_diploma0').val('');
            $('#percent_obtain0').val('');
            $('#special_sub0').val('');
        }
        Metronic.init();
    });
    
    
    
     var empcnt = 1;
    
    $(document).on('click','.addempRow',function()
    {        
        var postion = document.getElementById("position0").value;
        var from = document.getElementById("from0").value;
        var to = document.getElementById("to0").value;
        var empdetail = document.getElementById("employer_details0").value;
        var respo = document.getElementById("responsibilities0").value;
        var ctc = document.getElementById("cost_to_company0").value;
        
        if(postion == '' || from == '' || to == '' || empdetail == '' || respo == '' || ctc == ''){
            $('.invalidemperror').addClass('has-error');
        }else{
            var html='<tr><td>'
            +'<div class="form-group">'
            // +'<select class="form-control select2me" name="relation[]" id="relation'+fcnt+'" required>'
            // +'<option value="">--Select--</option>'
            // +'<option value="Father">Father</option>'
            // +'<option value="Mother">Mother</option>'
            // +'<option value="Sister">Sister(s)</option>'
            // +'<option value="Brother">Brother(s)</option>'
            // +'<option value="Spouse">Spouse</option>'
            // +'<option value="Children">Children</option>'
            // +'</select>'
            +'<input type="text" class="form-control" name="position[]" id="position'+empcnt+'" value="'+postion+'" placeholder="Position Held" required readonly>'
            +'</div>'
            +'</td>'
            // +'<td>'
            // +'<input type="text" class="form-control" name="passing_year[]" id="passing_year'+educnt+'" value="'+p_year+'" placeholder="Name" required readonly>'
            // +'</td>'
            +'<td>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">'
            +'<input type="text" name="from[]" id="from'+empcnt+'" value="'+from+'" class="form-control" readonly="" placeholder="From">'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button">'
            +'<span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>'
            +'<i class="fa fa-calendar"></i></button></span></div>'
            +'</td>'
            +'<td>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-mm-yyyy">'
            +'<input type="text" name="to[]" id="to'+empcnt+'" value="'+to+'" class="form-control" readonly="" placeholder="To">'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button">'
            +'<span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span>'
            +'<i class="fa fa-calendar"></i></button></span></div>'
            +'</td>'
            //  +'<td>'
            // +'<input type="text" class="form-control" name="to[]" value="'+to+'" id="to'+empcnt+'" placeholder="To" required readonly>'
            // +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="employer_details[]" value="'+empdetail+'" id="employer_details'+empcnt+'" placeholder="Employer (Name, address and contact nos.)" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="responsibilities[]" id="responsibilities'+empcnt+'" value="'+respo+'" placeholder="Main Responsibilities" required readonly>'
            +'</td>'
            +'<td>'
            +'<input type="text" class="form-control" name="cost_to_company[]" id="cost_to_company'+empcnt+'" value="'+ctc+'" placeholder="Cost to Company" required readonly>'
            +'</td>'
            +'<td>'
            +'<div class="addDeleteButton">'
            +'<span class="tooltips deletempRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'
            +'</div></td></tr>';
            $('.invalidemperror').removeClass('has-error');
            $('#invalidemperrorid').html('');
            var clonedRow = $(this).parents('tbody.addempRow').find('tr:first').clone();
            clonedRow.find('input:not(.ftype)').val('');
            // clonedRow.find('textarea').val('');
            // clonedRow.find('select').val(''); 
            // clonedRow.find('.select2-container').remove(); 
            // clonedRow.find("select").select2();   
            clonedRow.find('.tooltip').css('display','none');  
            clonedRow.find('.tooltips').tooltip({placement: 'top'});
            $(this).parents('#emptble tbody').find("tr:last").before(html);
            empcnt++;
            $('#position0').val('');
            $('#from0').val('');
            $('#to0').val('');
            $('#employer_details0').val('');
            $('#responsibilities0').val('');
            $('#cost_to_company0').val('');
        }
        Metronic.init();
    });
    
    
     $(document).on('click','.deletempRow', function(){ 
            $(this).closest('tr').remove(); 
        
    });
    
    
    
    
    
    $(document).on('click','.deleteFRow', function(){ 
        $(this).closest('tr').remove();   
        
    });
    $(document).on('click','.deleteduRow', function(){ 
        $(this).closest('tr').remove();   
        
    });
    $(document).on('click','.deleteParticularRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.appendDynaRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });