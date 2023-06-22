    $(document).on("change","#summary_type_id", function(){
        var base_url = $('#base_url').val().trim();
        var summary_type_id = $(this).val().trim();
        if(summary_type_id === 'wip'){
            var wiphtml = '<table width="100%" id="summarycommomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">WIP Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#summarycommomtablediv').html(wiphtml);
        }else{
            var stockhtml = '<table width="100%" id="summarycommomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">Stock Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#summarycommomtablediv').html(stockhtml);
        }
        $('#summarycommomtable').dataTable({
        	// Processing indicator
        		"bDestroy" : true,
        		"paging": true,
        		"iDisplayLength": 10,
                "deferRender": true,
                "responsive": true,
                "processing": true,
        		"serverSide": true,
                // Initial no order.
                "order": [],
        		
                // Load data from an Ajax source
                "ajax": {
                    "url": base_url+"wipstatusreports_display",
                    "type": "POST"
                },
        		
                //Set column definition initialisation properties
                "columnDefs": [{ 
                    "targets": [0],
                    "orderable": false
                }]
        });
    });
    $(document).on("change","#rate_type", function(){
        var base_url = $('#base_url').val().trim();
        var rate_type = $(this).val().trim();
        var type_id = $('#type_id').val().trim();
        if(type_id === 'wip' && rate_type === 'boq_rate'){
            var wipboqrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOQ Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">WIP Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(wipboqrate);
        }else if(type_id === 'wip' && rate_type === 'bom_rate'){
            var wipbomrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOM Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">WIP Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(wipbomrate);
        }else if(type_id === 'stock' && rate_type === 'boq_rate'){
            var stockboqrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOQ Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">Stock Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(stockboqrate);
        }else if(type_id === 'stock' && rate_type === 'bom_rate'){
            var stockbomrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOM Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">Stock Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(stockbomrate);
        }
        $('#commomtable').dataTable({
        	// Processing indicator
        		"bDestroy" : true,
        		"paging": true,
        		"iDisplayLength": 10,
                "deferRender": true,
                "responsive": true,
                "processing": true,
        		"serverSide": true,
                // Initial no order.
                "order": [],
        		
                // Load data from an Ajax source
                "ajax": {
                    "url": base_url+"wipstatusreports_display",
                    "type": "POST"
                },
        		
                //Set column definition initialisation properties
                "columnDefs": [{ 
                    "targets": [0],
                    "orderable": false
                }]
        });
    });
    $(document).on("change","#type_id", function(){
        var base_url = $('#base_url').val().trim();
        var type_id = $(this).val().trim();
        var rate_type = $('#rate_type').val().trim();
        if(type_id === 'wip' && rate_type === 'boq_rate'){
            var wipboqrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOQ Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">WIP Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(wipboqrate);
        }else if(type_id === 'wip' && rate_type === 'bom_rate'){
            var wipbomrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOM Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">WIP Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(wipbomrate);
        }else if(type_id === 'stock' && rate_type === 'boq_rate'){
            var stockboqrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOQ Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOQ Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">Stock Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(stockboqrate);
        }else if(type_id === 'stock' && rate_type === 'bom_rate'){
            var stockbomrate = '<table width="100%" id="commomtable" class="table table-striped table-bordered table-hover"><thead><tr>'
            +'<th scope="col" style="min-width:30px;width:30px;">Sr.no</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BP Code</th>'
            +'<th scope="col" style="min-width:50x;width:50x;">BOM Sr No</th>'
            +'<th scope="col" style="min-width:150px;width:150px;">Item Description</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Qty</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">BOM Rate</th>'
            +'<th scope="col" style="min-width:50px;width:50px;">Stock Amount</th>'
            +'</tr>'
            +'</thead>'
            +'<tbody></tbody></table>';    
            $('#commomtablediv').html(stockbomrate);
        }
        $('#commomtable').dataTable({
        	// Processing indicator
        		"bDestroy" : true,
        		"paging": true,
        		"iDisplayLength": 10,
                "deferRender": true,
                "responsive": true,
                "processing": true,
        		"serverSide": true,
                // Initial no order.
                "order": [],
        		
                // Load data from an Ajax source
                "ajax": {
                    "url": base_url+"wipstatusreports_display",
                    "type": "POST"
                },
        		
                //Set column definition initialisation properties
                "columnDefs": [{ 
                    "targets": [0],
                    "orderable": false
                }]
        });
    });
    $(document).on("change",".completion_cerf_received", function(){
        var value = $(this).val();
        if(value == 'Yes'){
            var html = '<div class="col-md-3 completion_cerf_receivedrm">'
            +'<div class="form-group">'
            +'<label>Upload Completion Certificate <span class="require" aria-required="true" style="color:#a94442">*</span></label>'
            +'<input type="file" name="emd_doc" id="emd_doc" class="emd_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />'
            +'</div></div>';
            $('#completioncerfreceivedyes').prepend(html);    
        }else{
            $('.completion_cerf_receivedrm').remove();    
        }
    });
    $(document).on("change",".contarct_deposit_emd_recclass", function(){
        var value = $(this).val();
        if(value == 'Yes'){
            var html = '<div class="row">'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label>Received Amount (EMD) <span class="require" aria-required="true" style="color:#a94442">*</span></label>'
            +'<div class="input-icon right"><i class="fa"></i>'
            +'<input type="number" class="form-control " id="received_amt" name="received_amt" placeholder="Received Amount" required>'
            +'</div></div></div>'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label class="">Payment Date (EMD) <span class="required" aria-required="true" style="color:#a94442">*</span></label>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">'
            +'<input type="text" name="payment_date" id="payment_date" class="form-control" readonly="" placeholder="Payment Date">'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>'
            +'</span></div></div></div>'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label>Document Upload (EMD) <span class="require" aria-required="true" style="color:#a94442">*</span></label>'
            +'<input type="file" name="emd_doc" id="emd_doc" class="emd_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />'
            +'</div></div>'
            +'</div>';
            $('#contarct_deposit_emd_div').html(html);    
        }else{
            $('#contarct_deposit_emd_div').html('');    
        }
    });
     $(document).on("change",".contarct_deposit_asd_rec_class", function(){
        var value = $(this).val();
        if(value == 'Yes'){
            var html = '<div class="row">'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label>Received Amount (ASD) <span class="require" aria-required="true" style="color:#a94442">*</span></label>'
            +'<div class="input-icon right"><i class="fa"></i>'
            +'<input type="number" class="form-control " id="asd_received_amt" name="asd_received_amt" placeholder="Received Amount" required>'
            +'</div></div></div>'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label class="">Payment Date (ASD) <span class="required" aria-required="true" style="color:#a94442">*</span></label>'
            +'<div class="input-group date date1" data-date-end-date="0d" data-date-format="dd-MM-yyyy">'
            +'<input type="text" name="asd_payment_date" id="asd_payment_date" class="form-control" readonly="" placeholder="Payment Date">'
            +'<span class="input-group-btn">'
            +'<button class="btn default" type="button"><span class="md-click-circle md-click-animate" style="height: 47px; width: 47px; top: -1.0625px; left: -9.5px;"></span><i class="fa fa-calendar"></i></button>'
            +'</span></div></div></div>'
            +'<div class="col-md-3">'
            +'<div class="form-group">'
            +'<label>Document Upload (ASD) <span class="require" aria-required="true" style="color:#a94442">*</span></label>'
            +'<input type="file" name="asd_doc" id="asd_doc" class="asd_doc" accept=".xlsx,.xls,image/*,.doc, .docx,.ppt, .pptx,.txt,.pdf" />'
            +'</div></div>'
            +'</div>';
            $('#contarct_deposit_asd_div').html(html);    
        }else{
            $('#contarct_deposit_asd_div').html('');    
        }
    });
    $(document).on("change","#filter", function(){
    var value = $(this).val();
    if(value == 'calculated'){
        var html = '<div class="form-group">'
            +'<select class="form-control" name="calculatedfiler" id="calculatedfiler">'
            +'<option value="without_gst">Without GST</option>'
            +'<option value="with_gst">With GST</option>'
            +'</select></div>';
            $('#calculatedfiler').html(html);    
        }else{
            $('#calculatedfiler').html('');    
        }
});

/*$( ".project-details" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "0px"});
});
$( ".boq-transaction" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "100px"});
});
$( ".boq-view" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "150px"});
});
$( ".boq-operational-view" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "200px"});
});
$( ".delivery-challan" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "250px"});
});
$( ".virtual-stock" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "300px"});
});
$( ".installed-wip" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "350px"});
});
$( ".provisional-wip" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "400px"});
});
$( ".proforma-invoice" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "450px"});
});
$( ".tax-invoice" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "500px"});
});
$( ".waiting-approval" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "650px"});
});
$( ".wip-status" ).on( "mouseover", function() {
    $(".menu-inner-box").animate({scrollLeft: "750px"});
});
*/
$('#btn-nav-previous').click(function(){
    $(".menu-inner-box").animate({scrollLeft: "-=100px"});
});
$('#btn-nav-next').click(function(){
    $(".menu-inner-box").animate({scrollLeft: "+=100px"});
});
$(document).on('click','.popup_save',function()
    {
        var id = $(this).attr('rel');
        var url = $(this).attr('rev');
        var title= $(this).data('title');
        var data={id:id};
        $.ajax({
            url:completeURL(url), 
            data:data,          
            type:'POST',  
            dataType:'json', 
            success: function(data)
            {   
                if(data.redirect) 
                {
                    bootbox.alert(data.msg, function() {
                        setTimeout(function(){
                            document.location.href=data.redirect;                                
                        },1500);
                     });
                }
                else
                {

                    var dialog = bootbox.dialog({
                        message: data.view,
                        title: title, 
                        buttons: { 
                            success: {
                                label: "Submit",
                                className: "btn-success",
                                callback: function() {
                                    var form= '#popup_save';
                                    var url = $(form).attr('action');
                                    // alert(url);
                                    var serialize_data = $(form).serialize();
                                    serialize_data = {serialize_data:serialize_data,id:id};
                                    //alert(serialize_data);                                    

                                    var form2 = $(form);
                                    var error2 = $('.alert-danger', form2);
                                    var success2 = $('.alert-success', form2);

                                    var validate = $(form).validate({
                                        errorElement: 'span', //default input error message container
                                        errorClass: 'help-block', // default input error message class
                                        focusInvalid: false, // do not focus the last invalid input
                                        ignore: "hidden",  // validate all fields including form hidden input,
                                        debug: true,
                                        rules: {
                                            tax_invc_no:{ required: true },
                                            tax_invc_date:{ required: true },
                                        },

                                        invalidHandler: function (event, validator) { //display error alert on form submit              
                                            success2.hide();
                                            error2.show();
                                           /* Metronic.scrollTo(error2, -200);*/
                                        },

                                        errorPlacement: function (error, element) { // render error placement for each input type
                                            var icon = $(element).parent('.input-icon').children('i');
                                            icon.removeClass('fa-check').addClass("fa-warning");  
                                            icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
                                        }, 

                                        highlight: function (element) { // hightlight error inputs
                                            $(element)
                                                .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
                                        },

                                        unhighlight: function (element) { // revert the change done by hightlight
                                            $(element)
                                                .closest('.form-group').removeClass('has-error'); // set error class to the control group
                                        },

                                        success: function (label, element) {
                                            var icon = $(element).parent('.input-icon').children('i');
                                            $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                                            icon.removeClass("fa-warning").addClass("fa-check");
                                        },

                                        submitHandler: function (form) {
                                            
                                        }
                                    }).form();
                                    var $valid = $(form).valid();
                                    if(!$valid) 
                                    {                                                               
                                        return false;
                                    }
                                    else
                                    { 
                                        Metronic.startPageLoading({animate: true});
                                        $(form).ajaxSubmit({
                                            type:'POST',
                                            url:completeURL(url), 
                                            dataType:'json',
                                            data: serialize_data,
                                            success:function(data)
                                            {   
                                               Metronic.stopPageLoading();
                                                if(data.valid)
                                                {  
                                                    if(data.redirect)
                                                    {
                                                        bootbox.alert(data.msg, function() {
                                                            window.location.href = data.redirect;
                                                        }); 
                                                    }
                                                    else
                                                    {
                                                        bootbox.alert(data.msg, function() {
                                                            window.location.href = window.location.href;
                                                        }); 
                                                    }
                                                }   
                                                else
                                                {
                                                    bootbox.alert(data.msg, function() {
                                                        window.location.href = window.location.href;
                                                    }); 
                                                }                                        
                                            }
                                        });
                                    }                                         
                                }
                            },
                            danger: {
                                label: "Cancel",
                                className: "btn-danger",
                                callback: function() { }
                            } 
                        }
                    });
                }
            },
            complete:function()
            {   
                if (jQuery().select2)
                {
                    $('select').select2();   
                }    
            }
        }); 
});
$(document).on('keyup', '#dc_boq_code', function() {

   
    $('#invaliderrorid').html('');
    var boq_code = $(this).val();
    var project_id = $('#project_id').val();
    var url = 'get_dc_boq_item_details';
    if(boq_code == ''){
        $('#hsn_sac_code').val(''); 
        $('#item_description').val('');
        $('#unit').val('');  
        $('#scheduled_qty').val('');  
        $('#design_qty').val('');
        $('#gst').val(''); 
        $('#taxable_amount').val(''); 
        $('#rate_basic').val('');  
        $('#qty').val('');  
        $('#amount').val('');  
        $('#rate').val('');  
        $('#non_schedule_yes').prop('checked', false);
        return
    }

    $.ajax({
            type:'POST',
            url:completeURL(url), 
            dataType:'json',
            data:{project_id:project_id,boq_code:boq_code},
            success:function(result){
                console.log(result);
                if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                    $('#dc_boq_code').val(result.boq_code);    
                    $('#hsn_sac_code').val(result.hsn_sac_code);    
                    $('#hsn_sac_code').prop('readonly', true);
                    $('#item_description').val(result.item_description);    
                    $('#rate').val(result.rate);    
                    $('#gst').val(result.gst);    
                    $('#item_description').prop('readonly', true);
                    $('#unit').val(result.unit);    
                    $('#unit').prop('readonly', true);
                    $('#avl_qty').val('12');    
                    $('#avl_qty').prop('readonly', true);
                }else{    
                    $('#hsn_sac_code').prop('readonly', false);
                    $('#item_description').prop('readonly', false);
                    $('#unit').prop('readonly', false);
                    $('#avl_qty').prop('readonly', false);
                }        
            }
    });
});


$(document).on('keyup', '#boq_code', function() {
    $('#invaliderrorid').html('');
    var boq_code = $(this).val();
    var project_id = $('#project_id').val();
    var url = 'get_boq_item_details';
    if(boq_code == ''){
        $('#hsn_sac_code').val(''); 
        $('#item_description').val('');
        $('#unit').val('');  
        $('#scheduled_qty').val('');  
        $('#design_qty').val('');
        $('#gst').val(''); 
        $('#rate_basic').val('');  
        $('#non_schedule_yes').prop('checked', false);

    }
    console.log(url);
    $.ajax({
            type:'POST',
            url:completeURL(url), 
            dataType:'json',
            data:{project_id:project_id,boq_code:boq_code},
            success:function(result){
                if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                    $('#boq_code').val(result.boq_code);    
                    //$('#boq_code').prop('readonly', true);
                    $('#hsn_sac_code').val(result.hsn_sac_code);    
                    $('#hsn_sac_code').prop('readonly', true);
                    $('#item_description').val(result.item_description);    
                    $('#item_description').prop('readonly', true);
                    $('#unit').val(result.unit);    
                    $('#unit').prop('readonly', true);
                    $('#scheduled_qty').val(result.scheduled_qty);    
                    $('#scheduled_qty').prop('readonly', true);
                    $('#design_qty').val(result.design_qty);    
                   // $('#design_qty').prop('readonly', true);
                    $('#rate_basic').val(result.rate_basic);    
                    $('#rate_basic').prop('readonly', true);    
                    $('#gst').val(result.gst);
                    $('#gst').prop('readonly', true);
                    if(result.non_schedule == 'Y'){
                      $('#non_schedule_yes').prop('checked', true);
                      $('#non_schedule_no').prop('checked', false);
                    }else{
                      $('#non_schedule_yes').prop('checked', false);
                      $('#non_schedule_no').prop('checked', true);
                    }    
                }else{
                    //$('#boq_code').prop('readonly', false);
                    $('#hsn_sac_code').prop('readonly', false);
                    $('#item_description').prop('readonly', false);
                    $('#unit').prop('readonly', false);
                    $('#scheduled_qty').prop('readonly', false);
                    $('#rate_basic').prop('readonly', false);
                    $('#design_qty').prop('readonly', false);
                    $('#gst').prop('readonly', false);
                    $('#non_schedule_yes').prop('checked', false);
                    $('#non_schedule_no').prop('checked', true);
                }        
            }
    });
    
});
$(document.body).on('click', '.date-picker' ,function(){
     if (jQuery().datepicker) {
        $('.date-picker').datepicker({
            orientation: "right",
            autoclose: true
        });
    }
});
$(document).ready(function(){ 
      if (jQuery().datepicker) {
        $('.date-picker').datepicker({
            orientation: "right",
            autoclose: true
        });
    }
    if (jQuery().datepicker) {
        $('.date-picker-18').datepicker({
            orientation: "right",
            autoclose: true,
            endDate: '-18y'
        });
    }
    $(document).on('click','.clearData', function(){
       var formId = '#'+$(this).parents('form').attr('id');
        $(formId).find('input:text, input:password, input:file, select,textarea').val('');
        $(formId).find('button:submit').removeAttr('disabled');
        $(formId).find('input:checkbox').removeAttr('checked').removeAttr('selected');
        $(formId).find('.select2-container').select2('val','0');

        $('html, body').animate({scrollTop:0});
    });
    $(".validate").validationEngine('attach', { 
        promptPosition: "topLeft", showOneMessage: true, maxErrorsPerField: 1, scroll: true 
    });
    $(document).on('click','.chk_login',function(e){
        //alert('hello');
        e.preventDefault();
        var this1 = $(this);
        $('.alert-success').show(); 
        var form = '#'+$(this).closest('form').attr('id');
        $('.chk_login').prop('disabled',true);
        var url = $(form).attr('action');
        var serialize_data = $(form).serialize();
        $.ajax({
            type:'POST',
            url:completeURL(url), 
            dataType:'json',
            data:serialize_data,
            success:function(data)
            {   
                if (data.valid)
                {
                    if(data.redirect)
                    {
                        document.location.href = data.redirect;
                    }
                    else
                    {
                        document.location.href = document.location.href;
                    }
                }
                else
                {
                    this1.closest('form').find('.alert-success').hide();
                    this1.closest('form').find('.alert-danger').html(data.msg).show();  
                    this1.closest('form').find('.alert-danger').fadeOut(3500);   
                    this1.closest('form').find('.password').val('');              
                }                                      
                $('.chk_login').prop('disabled',false);
            }
        });
    });
    $(document).on('click','.common_save',function(e){

        // console.log("i am here");
        var form = '#'+$(this).parents('form').attr('id');
        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);
        var id = $(this).attr('rel');

        jQuery.validator.addMethod("onlyletters", function(value, element) {
        return this.optional(element) || /^[a-z\s]+$/i.test(value);
        }, "Only Alphabetical Characters");

        jQuery.validator.addMethod("percentage", function(value, element) {
        return this.optional(element) || /^\d+\.?\d?\d?%?$/i.test(value);
        }, "Only Number Are Allowed");

        jQuery.validator.addMethod("onlyNumber", function(value, element) {
        return this.optional(element) || /^[0-9]*$/i.test(value);
        }, "Only Number Are Allowed");

        $(form).validate({ 
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: ":hidden",  // validate all fields including form hidden input
            rules: {
                payment_date:{ required: true},
                payment_received_amount:{ required: true,number:true},
                invoice_date:{ required: true},
                invoice_no:{ required: true},
                invoice_amount:{ required: true},
                remark:{ required: true},
                it_tds_amount:{ required: true,number:true},
                tax_deduction_desc:{ required: true},
                tax_deduction_amt:{ required: true,number:true},
                security_deposit_retn_amount:{ required: true,number:true},
                deposit_desc:{ required: true},
                deposit_amount:{ required: true,number:true},
                withheld_desc:{ required: true},
                withheld_amt:{ required: true,number:true},
                labour_cess:{ required: true,number:true},
                debit_note:{ required: true,number:true},
                other_cess_desc:{ required: true},
                other_cess_amt:{ required: true,number:true},
                deduction_desc:{ required: true},
                deduction_amt:{ required: true,number:true},
                payment_advice_received:{ required: true},
                payment_advice_received_date:{ required: true},
                payment_advice_doc:{ required: true},
                gtds_amount:{ required: true,number:true },
                tds_amount:{ required: true,number:true },
                withheld_amount:{ required: true,number:true },
                upload_tds_doc:{ required: true },
                tds_confirmation_date:{ required: true },
                upload_withheld_doc:{ required: true },
                withheld_confirmation_date:{ required: true },
                upload_gtds_doc:{ required: true },
                return_date:{ required: true },
                confirmation_date:{ required: true },
                dc_no:{ required: true },
                virtual_stock_no:{ required: true },
                installed_wip_no:{ required: true },
                prov_wip_no:{ required: true },
                proforma_invoice_no:{ required: true },
                project_id:{ required: true },
                role_name:{ required: true },
                fullname:{ required:true , onlyletters :true },
                email: { required: true, email:true },
                mobile:{ number:true, minlength:10, maxlength:12, required:true },
                address:{ required: true },
                "role_id[]": 
                { 
                    required: true
                },
                "designation_id[]": 
                { 
                    required: true
                },
                username:{ required: true },
                password : {
                    minlength : 5
                },
                cpassword : {
                    minlength : 5,
                    equalTo : "#user_pass"
                },
                unit_name:{ required: true },
                prefix_name:{ required: true },
                tax_name:{ required: true },
                percentage_tax:{ required: true , percentage :true },
                designation_name:{ required: true },
                name_of_company:{ required:true , onlyletters :true },
                company_type:{ required: true },
                name_of_dir_part:{ required:true , onlyletters :true },
                dir_part_contact_no:{ number:true, minlength:10, maxlength:12, required:true },
                dir_part_contact_address:{ required: true },
                dir_cin_act_reng_nos:{ required: true ,onlyNumber: true},
                reg_house_building_no:{ required: true ,onlyNumber: true},
                reg_street:{ required:true },
                reg_country:{ required:true , onlyletters :true },
                corporate_house_building_no:{ required: true ,onlyNumber: true},
                contact_person_name:{ required:true , onlyletters :true },
                comm_mobile_phone:{ number:true, minlength:10, maxlength:12, required:true },
                comm_email:{ required:true, email:true },
                bank_acc_no_vendor:{ required: true ,onlyNumber: true},
                name_of_bank:{ required:true , onlyletters :true },
                name_of_branch:{ required:true , onlyletters :true },
                bank_ifsc_code:{ required:true  },
                bank_address:{ required:true },
                bank_city:{ required:true , onlyletters :true },
                bank_type_of_account:{ required:true },
                ref_vendor_emp_frd:{ required:true },
                reg_city_post_code:{ number:true },
                taxable_amount:{ number:true },
                gst_amount:{ number:true },
                total_amount:{ number:true },
                emd_paid_num:{ number:true },
                asd_paid_num:{ number:true },
                performance_guarantee_num:{ number:true },
                amount_of_risk_cov:{ number:true },
                bill_split_supply:{ percentage:true },
                bill_installation:{ percentage:true },
                testing_commissioning:{ percentage:true },
                bill_handover:{ percentage:true },
                amc_applicable_after:{ number:true },
                "boq_code[]": 
                { 
                    required: true
                },
                "hsn_sac_code[]": 
                { 
                    required: true
                },
                "item_description[]": 
                { 
                    required: true
                },
                "unit[]": 
                { 
                    required: true
                },
                "scheduled_qty[]": 
                { 
                    required: true
                },
                "design_qty[]": 
                { 
                    required: true
                },
                "rate_basic[]": 
                { 
                    required: true
                },
                "gst[]": 
                { 
                    required: true
                },
                "non_schedule[]": 
                { 
                    required: true
                },
            },
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success.hide();
                error.show();
                $('html,body').animate({scrollTop:0});
            },

            errorPlacement: function (error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");  
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },

            highlight: function (element) { // hightlight error inputs
                //alert($(element).attr('name'));
                $(element).closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group   
            },

            unhighlight: function (element) { // revert the change done by hightlight
                
            },

            success: function (label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },

            submitHandler: function (form) {
                $('.common_save').prop('disabled',true);
                var url = $(form).attr('action');
                var serialize_data = $(form).serialize();
                     
                var forms = document.getElementById('save_user');
                var formData = new FormData(forms);
                formData.append('home_addr_proof', home_addr_proof.files[0]);
                formData.append('native_addr_proof', native_addr_proof.files[0]);
                formData.append('local_addr_proof', local_addr_proof.files[0]);
                formData.append('perm_addr_proof', perm_addr_proof.files[0]);
                formData.append('drive_lic_proof', drive_lic_proof.files[0]);
                formData.append('passport_proof', passport_proof.files[0]);
                formData.append('pan_proof', pan_proof.files[0]);
                formData.append('id', id);
                // for (var pair of formData.entries()) {
                //     console.log(pair[0] + ': ' + pair[1]);
                //   }
                serialize_data = {id:id};
                Metronic.startPageLoading({animate: true});
                $(form).ajaxSubmit({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    contentType: false,
                    data:formData,
                    success:function(data)
                    {  
                        Metronic.stopPageLoading(); 
                        $('.common_save').prop('disabled',false);
                        if(data.valid) 
                        {   
                            if(data.redirect)
                            {
                                bootbox.alert(data.msg, function() {
                                    setTimeout(function(){
                                        document.location.href=data.redirect;                                
                                    },1500);
                                });
                            }
                            else
                            {
                                bootbox.alert(data.msg);
                            }
                        }
                        else
                        {
                            if(data.no_popup)
                            {
                               bootbox.alert(data.msg);
                            }
                            else
                            {
                                bootbox.alert(data.msg);
                            }
                        }

                    }
                });
            }
        });
    });
    $(document).on('click','.editRecord', function(){
        var id = $(this).attr('rel');
        var url = $(this).attr('rev');
        $.ajax({
            url : completeURL(url),
            type : 'POST',
            dataType : 'html',
            data:{id:id},
            success:function(data)
            {          
                $('html, body').animate({scrollTop:0});
                $('.form').html($(data).find('.form').html());
            },
            complete:function(){
                Layout.init();
                Metronic.init(); // init metronic core components
                Layout.init();
            }
        }); 
    });
    $(document).on('click','.edit_performa', function(){
        var id = $(this).attr('rel');
        var url = $(this).attr('rev');
        $.ajax({
            url : completeURL(url),
            type : 'POST',
            dataType : 'html',
            data:{id:id},
            success:function(data)
            {    
                console.log(data);      
                $('html, body').animate({scrollTop:0});
                // $('.portlet-body').html($(data).find('.portlet-body').html());
                

                // $('#proformaInvclist').dataTable({
                //     // Processing indicator
                //     "paging": true,
                //     "iDisplayLength": 10,
                //     "deferRender": true,
                //     "responsive": true,
                //     "processing": true,
                //     "serverSide": true,
                //     // Initial no order.
                //     "order": [],
        
                //     // Load data from an Ajax source
                //     "ajax": {
                //         // "url": "<?php echo base_url('project_proformaInvc_list'); ?>",
                //         "url": completeURL('project_proformaInvc_list'),
                //         "type": "POST"
                //     },
        
                //     //Set column definition initialisation properties
                //     "columnDefs": [{
                //         "targets": [0],
                //         "orderable": false
                //     }]
                // });
            },
            complete:function(){
                Layout.init();
                Metronic.init(); // init metronic core components
                Layout.init();

               
            }
        }); 
    });
    $(document).on('click','.deleteRecord' , function(){
        var deleteDiv = $(this);
        bootbox.confirm("Are you sure?", function(result) {
            if(result)
            {
                var id = deleteDiv.attr('rel');
                var url = deleteDiv.attr('rev');
                
                $.ajax({
                    url : completeURL(url),
                    type:'POST',
                    dataType:'json',
                    data:{id:id},
                    success:function(data)
                    {
                        bootbox.alert(data.msg, function() {
                            setTimeout(function(){
                                document.location.href=document.location.href;                                
                            },1500);
                        });
                    }
                });
            }
        }); 
    });
    $(document).on('change','.role_configuration',function(){
        var id = $(this).val();
        Metronic.startPageLoading({animate: true});
        $.ajax({
            type:'POST',
            url:completeURL('fetch_role_config'),
            data:{id:id},
            dataType:'json', 
            success:function(data) 
            {             
                $('.prevelege_data').html(data.view);
            },
            complete:function()
            {
                Metronic.stopPageLoading();
                Metronic.init(); // init metronic core components
                Layout.init(); // init current layout
            }
        }); 
    });
    $(document).on('change','.category_select_all',function(){
       if($(this).is(":checked"))
       {
            $(this).parents('.panel-collapse').find('.portlet-body input[type=checkbox]').each(function( index ) {
                $(this).prop('checked', true); 
            });
       }else
       {
            $(this).parents('.panel-collapse').find('.portlet-body').find('input[type=checkbox]').prop('checked', false);
       }
       $.uniform.update();
    });
    $(document).on('click','.selected_val', function(){
        $('.selected_val').css({"border-color": "#eaeaea", "border-weight":"2px", "border-style":"solid"});
        if($('.address').is(":checked"))
        {
            $(this).css({"border-color": "#32c5d2", "border-weight":"2px", "border-style":"solid"});
        }
    }); 
    $(document).on('change', '.upload_sign_doc_file', function(){
        var url = $('.upload_sign_doc_file').data('url');
        var property = document.getElementById("upload_sign_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.sign_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.sign_doc_filename').html('');
            setTimeout(replce_sign_doc_file, 10);
            $('.sign_doc_filename').val('');
            $('.upload_sign_doc_button').html('Select File');
            $('#signfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.sign_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.sign_doc_filename').html('');
            setTimeout(replce_sign_doc_file, 10);
            $('.sign_doc_filename').val('');
            $('.upload_sign_doc_button').html('Select File');
            $('#signfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.sign_doc_file_error').html('');
            $('#signfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.sign_doc_filename').html(data);
                    setTimeout(replce_sign_doc_file, 50);
                    $('.sign_doc_filename').val(data);
                    $('.upload_sign_doc_button').html('Change');
                    $('#signfileloading').text('');
                }
            });
        }
    });
    
    $(document).on('change','.duplicate',function(){
        var p_key = $(this).data('p_key');
        var id = $(this).attr('rel');
        var tbl = $(this).data('tbl');
        var where = $(this).data('where');
        var value = $(this).val();
        var this1 = $(this);
        $(this).closest('div').find('.help-block').remove();
        $.ajax({
            type:'POST',
            url:completeURL('duplicate'),
            data:{id:id,p_key:p_key,tbl:tbl,where:where,value:value},
            dataType:'json',
            success:function(data)
            { 
                if(data.valid)
                {
                    this1.closest('div').append('<span class="help-block">'+data.msg+'</span>');
                    this1.val("");                    
                    //this1.select2('val','');                    
                    this1.closest('.form-group').addClass('has-error');
                    this1.closest('div').find('i').addClass('fa-warning').removeClass('fa-check');                    
                }
                else
                {
                    this1 .closest('.form-group').removeClass('has-error').addClass('has-success');
                    this1.closest('div').find('i').addClass('fa-check').removeClass('fa-warning');
                }

                
            }
        });
    });
    $(document).on('click','.status_change' , function(){
        var deleteDiv = $(this);
        bootbox.confirm("Are you sure?", function(result) 
        {
            if(result)
            {
                var id = deleteDiv.attr('rel');
                var url = deleteDiv.attr('rev');             
                // var status = deleteDiv.data('status');                
                $.ajax({
                    url : completeURL(url),
                    type:'POST',
                    dataType:'json',
                    data:{id:id,status:status},
                    success:function(data)
                    {
                        bootbox.alert(data.msg, function() {
                            setTimeout(function(){
                                document.location.href=document.location.href;                                
                            },1500);
                        });                       
                    }
                });
            }
        }); 
    });
    $(document).on('change', '.upload_file', function(){
        var url = $('.upload_file').data('url');
        var property = document.getElementById("file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.img_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.img_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.fileinput-filename').html(data);
                    setTimeout(replce_file, 50);
                    $('.file_name').val(data);
                    $('.upload_button').html('Change');
                }
            });
        }
    });
    $(document).on('change', '.upload_emd_paid_file', function(){
        var url = $('.upload_emd_paid_file').data('url');
        var property = document.getElementById("upload_emd_paid_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.emd_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.emd_paid_filename').html('');
            setTimeout(replce_emd_paid_file, 10);
            $('.emd_paid_filename').val('');
            $('.upload_emd_paid_button').html('Select File');
            $('#emdfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.emd_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.emd_paid_filename').html('');
            setTimeout(replce_emd_paid_file, 10);
            $('.emd_paid_filename').val('');
            $('.upload_emd_paid_button').html('Select File');
            $('#emdfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            var form_data = new FormData();
            form_data.append("file", property);
            $('.emd_paid_file_error').html('');
            $('#emdfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.emd_paid_filename').html(data);
                    setTimeout(replce_emd_paid_file, 10);
                    $('.emd_paid_filename').val(data);
                    $('.upload_emd_paid_button').html('Change');
                    $('.emd_paid_file_error').html('');
                    $('#emdfileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_projectdesig_doc_file', function(){
        var url = $('.upload_projectdesig_doc_file').data('url');
        var property = document.getElementById("upload_projectdesig_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.projectdesig_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.projectdesig_doc_filename').html('');
            setTimeout(replce_projectdesig_doc_file, 10);
            $('.projectdesig_doc_filename').val('');
            $('.upload_projectdesig_doc_button').html('Select File');
            $('#projectdesigfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.projectdesig_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.projectdesig_doc_filename').html('');
            setTimeout(replce_projectdesig_doc_file, 10);
            $('.projectdesig_doc_filename').val('');
            $('.upload_projectdesig_doc_button').html('Select File');
            $('#projectdesigfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.projectdesig_doc_file_error').html('');
            $('#projectdesigfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.projectdesig_doc_filename').html(data);
                    setTimeout(replce_projectdesig_doc_file, 50);
                    $('.projectdesig_doc_filename').val(data);
                    $('.upload_projectdesig_doc_button').html('Change');
                    $('#projectdesigfileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_projectcashflw_doc_file', function(){
        var url = $('.upload_projectcashflw_doc_file').data('url');
        var property = document.getElementById("upload_projectcashflw_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.projectcashflw_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.projectcashflw_doc_filename').html('');
            setTimeout(replce_projectcashflw_doc_file, 10);
            $('.projectcashflw_doc_filename').val('');
            $('.upload_projectcashflw_doc_button').html('Select File');
            $('#projectcashflwfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.projectcashflw_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.projectcashflw_doc_filename').html('');
            setTimeout(replce_projectcashflw_doc_file, 10);
            $('.projectcashflw_doc_filename').val('');
            $('.upload_projectcashflw_doc_button').html('Select File');
            $('#projectcashflwfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.projectcashflw_doc_file_error').html('');
            $('#projectcashflwfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.projectcashflw_doc_filename').html(data);
                    setTimeout(replce_projectcashflw_doc_file, 50);
                    $('.projectcashflw_doc_filename').val(data);
                    $('.upload_projectcashflw_doc_button').html('Change');
                    $('#projectcashflwfileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_projectinvstsch_doc_file', function(){
        var url = $('.upload_projectinvstsch_doc_file').data('url');
        var property = document.getElementById("upload_projectinvstsch_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.projectinvstsch_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.projectinvstsch_doc_filename').html('');
            setTimeout(replce_projectinvstsch_doc_file, 10);
            $('.projectinvstsch_doc_filename').val('');
            $('.upload_projectinvstsch_doc_button').html('Select File');
            $('#projectinvstschfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.projectinvstsch_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.projectinvstsch_doc_filename').html('');
            setTimeout(replce_projectinvstsch_doc_file, 10);
            $('.projectinvstsch_doc_filename').val('');
            $('.upload_projectinvstsch_doc_button').html('Select File');
            $('#projectinvstschfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.projectinvstsch_doc_file_error').html('');
            $('#projectinvstschfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.projectinvstsch_doc_filename').html(data);
                    setTimeout(replce_projectinvstsch_doc_file, 50);
                    $('.projectinvstsch_doc_filename').val(data);
                    $('.upload_projectinvstsch_doc_button').html('Change');
                    $('#projectinvstschfileloading').text('');
                }
            });
        }
    });
    
    $(document).on('change', '.upload_draft_doc_file', function(){
        var url = $('.upload_draft_doc_file').data('url');
        var property = document.getElementById("upload_draft_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.draft_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.draft_doc_filename').html('');
            setTimeout(replce_draft_doc_file, 10);
            $('.draft_doc_filename').val('');
            $('.upload_draft_doc_button').html('Select File');
            $('#draftfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.draft_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.draft_doc_filename').html('');
            setTimeout(replce_draft_doc_file, 10);
            $('.draft_doc_filename').val('');
            $('.upload_draft_doc_button').html('Select File');
            $('#draftfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.draft_doc_file_error').html('');
            $('#draftfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.draft_doc_filename').html(data);
                    setTimeout(replce_draft_doc_file, 50);
                    $('.draft_doc_filename').val(data);
                    $('.upload_draft_doc_button').html('Change');
                    $('#draftfileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_projectcmpl_doc_file', function(){
        var url = $('.upload_projectcmpl_doc_file').data('url');
        var property = document.getElementById("upload_projectcmpl_doc_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.projectcmpl_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.projectcmpl_doc_filename').html('');
            setTimeout(replce_projectcmpl_doc_file, 10);
            $('.projectcmpl_doc_filename').val('');
            $('.upload_projectcmpl_doc_button').html('Select File');
            $('#projectcmplfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.projectcmpl_doc_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.projectcmpl_doc_filename').html('');
            setTimeout(replce_projectcmpl_doc_file, 10);
            $('.projectcmpl_doc_filename').val('');
            $('.upload_projectcmpl_doc_button').html('Select File');
            $('#projectcmplfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.projectcmpl_doc_file_error').html('');
            $('#projectcmplfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.projectcmpl_doc_filename').html(data);
                    setTimeout(replce_projectcmpl_doc_file, 50);
                    $('.projectcmpl_doc_filename').val(data);
                    $('.upload_projectcmpl_doc_button').html('Change');
                    $('#projectcmplfileloading').text('');
                }
            });
        }
    });
    
    $(document).on('change', '.upload_asd_paid_file', function(){
        var url = $('.upload_asd_paid_file').data('url');
        var property = document.getElementById("upload_asd_paid_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.asd_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.asd_paid_filename').html('');
            setTimeout(replce_asd_paid_file, 10);
            $('.asd_paid_filename').val('');
            $('.upload_asd_paid_button').html('Select File');
            $('#asdfileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.asd_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.asd_paid_filename').html('');
            setTimeout(replce_asd_paid_file, 10);
            $('.asd_paid_filename').val('');
            $('.upload_asd_paid_button').html('Select File');
            $('#asdfileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            var form_data = new FormData();
            form_data.append("file", property);
            $('.asd_paid_file_error').html('');
            $('#asdfileloading').text('Uploading file, Please wait!');
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.asd_paid_filename').html(data);
                    setTimeout(replce_asd_paid_file, 50);
                    $('.asd_paid_filename').val(data);
                    $('.upload_asd_paid_button').html('Change');
                    $('#asdfileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_security_desposite_file', function(){
        var url = $('.upload_security_desposite_file').data('url');
        var property = document.getElementById("upload_security_desposite_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.security_desposite_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.security_desposite_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.security_desposite_filename').html(data);
                    setTimeout(replce_security_desposite_file, 50);
                    $('.security_desposite_filename').val(data);
                    $('.upload_security_desposite_button').html('Change');
                }
            });
        }
    });
    $(document).on('change', '.upload_performance_paid_file', function(){
        var url = $('.upload_performance_paid_file').data('url');
        var property = document.getElementById("upload_performance_paid_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','png','jpg','jpge','jpeg']) == -1)
        {          
            $('.performance_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">Invalid File format!</lable>');
            $('.performance_paid_filename').html('');
            setTimeout(replce_performance_paid_file, 10);
            $('.performance_paid_filename').val('');
            $('.upload_performance_paid_button').html('Select File');
            $('#perffileloading').text('');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.performance_paid_file_error').html('<lable class="text-danger bold" style="position: absolute;top: 75%;left: 7%;">File size is only upto 2MB!</lable>');
            $('.performance_paid_filename').html('');
            setTimeout(replce_performance_paid_file, 10);
            $('.performance_paid_filename').val('');
            $('.upload_performance_paid_button').html('Select File');
            $('#perffileloading').text('');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            
            $('.performance_paid_file_error').html('');
            $('#perffileloading').text('Uploading file, Please wait!');
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.performance_paid_filename').html(data);
                    setTimeout(replce_performance_paid_file, 10);
                    $('.performance_paid_filename').val(data);
                    $('.upload_performance_paid_button').html('Change');
                    $('#perffileloading').text('');
                }
            });
        }
    });
    $(document).on('change', '.upload_boq_excel_file', function(){
        var url = $('.upload_boq_excel_file').data('url');
        var property = document.getElementById("upload_boq_excel_file").files[0];
        var image_name = property.name;
        var image_extension = image_name.split('.').pop().toLowerCase();
        var image_size = property.size;
        var invalidformat = false;
        var maxFileSize = false;
        if(jQuery.inArray(image_extension, ['doc','pdf','txt','xlsx','.csv']) == -1)
        {          
            $('.boq_file_error').html('<lable class="text-danger bold" style="position: absolute; top: 36%; left: 30%;">Invalid File format!</lable>');
            invalidformat = true;
        }
        if(image_size > 5000000)
        {
            $('.boq_file_error').html('<lable class="text-danger bold" style="position: absolute; top: 36%; left: 30%;">File size is only upto 2MB!</lable>');
            maxFileSize = true;
        }
        if(invalidformat == false && maxFileSize == false)
        {
            var form_data = new FormData();
            form_data.append("file", property);
            $.ajax({
                url:url,
                method:"POST",
                data:form_data,
                contentType:false,
                cache:false,
                processData:false,
                success:function(data)
                {
                    $('.boq_excel_filename').html(data);
                    setTimeout(replce_boq_file, 50);
                    $('.boq_excel_filename').val(data);
                    $('.upload_boq_file_button').html('Change');
                }
            });
        }
    });
    $(document).on('click','.addDynaRow',function()
    {        
        var boq_code = document.getElementById("boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var scheduled_qty = document.getElementById("scheduled_qty").value;
        var design_qty = document.getElementById("design_qty").value;
        var rate_basic = document.getElementById("rate_basic").value;
        var gst = document.getElementById("gst").value;
        var non_schedule = 'N';//document.querySelector("input[type='radio'][name=non_schedule_r]:checked").value;
        if($('#non_schedule_yes').is(':checked')){
        non_schedule = 'Y';    
        }else if($('#non_schedule_no').is(':checked')){
        non_schedule = 'N';    
        }else{
        non_schedule = 'N';    
        }
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || scheduled_qty < 1 || design_qty < 1 || rate_basic < 1){
            $('.invaliderror').addClass('has-error');
        }else{
            boq_code_no = [];
        	$("input[name='boq_code[]']").each(function(){
        		boq_code_no.push($(this).val());
        	});
            
        	if ($.inArray(boq_code, boq_code_no) != -1){
        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                $('#boq_code').val('');
                $('#hsn_sac_code').val('');
                $('#item_description').val('');
                $('#unit').val('');
                $('#scheduled_qty').val('');
                $('#design_qty').val('');
                $('#rate_basic').val('');
                $('#gst').val('');
                //$('#boq_code').prop('readonly', false);
                $('#hsn_sac_code').prop('readonly', false);
                $('#item_description').prop('readonly', false);
                $('#unit').prop('readonly', false);
                $('#scheduled_qty').prop('readonly', false);
                $('#gst').prop('readonly', false);
                $('#non_schedule_yes').prop('checked', false);
                $('#non_schedule_no').prop('checked', true);
            }else{
            var html='<tr><td>'
            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="scheduled_qty[]" value="'+scheduled_qty+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="design_qty[]" value="'+design_qty+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="rate_basic[]" value="'+rate_basic+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="gst[]" value="'+gst+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="non_schedule[]" value="'+non_schedule+'" readonly></td>'
            +'<td>'
            +'<div class="addDeleteButton">'
            +'<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
            +'</div></td></tr>';
            $('.invaliderror').removeClass('has-error');
            $('#invaliderrorid').html('');
            var clonedRow = $(this).parents('tbody.appendDynaRow').find('tr:first').clone();
            clonedRow.find('input:not(.ftype)').val('');
            clonedRow.find('textarea').val('');
            clonedRow.find('select').val(''); 
            clonedRow.find('.select2-container').remove(); 
            clonedRow.find("select").select2();   
            clonedRow.find('.tooltip').css('display','none');  
            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
            clonedRow.find('.tooltips').tooltip({placement: 'top'});
            $(this).parents('#boqitmdisplay tbody').find("tr:last").before(html);
            $('#boq_code').val('');
            $('#hsn_sac_code').val('');
            $('#item_description').val('');
            $('#unit').val('');
            $('#scheduled_qty').val('');
            $('#design_qty').val('');
            $('#rate_basic').val('');
            $('#gst').val('');
            //$('#boq_code').prop('readonly', false);
            $('#hsn_sac_code').prop('readonly', false);
            $('#item_description').prop('readonly', false);
            $('#unit').prop('readonly', false);
            $('#scheduled_qty').prop('readonly', false);
            $('#gst').prop('readonly', false);
            $('#non_schedule_yes').prop('checked', false);
            $('#non_schedule_no').prop('checked', true);
        	}
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });


    $(document).on('click','.deleteParticularRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.appendDynaRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    $(document).on('click','.deletedccRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addDCCRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    
    $(document).on('click','.deletedciwipRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addDCIWIPRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    $(document).on('click','.deleteProformaInvcRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addProformaInvcRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
        var total_amt = 0;
        var gst_amt = 0;
        var final_amt = 0;


        $("input[name='amount[]']").each(function(){
            total_amt = parseFloat($(this).val());
        });
        $('#subtotal').html(total_amt.toFixed(2));
        if(total_amt > 0){
            gst_amt = parseFloat(total_amt) * 0.09;   
        }
        $('.gst_amt').html(gst_amt.toFixed(2));
        final_amt = parseFloat(gst_amt) + parseFloat(gst_amt) + parseFloat(total_amt);
        $('#finaltotal').html(final_amt.toFixed(2));
        





    });
    $(document).on('click','.deleteTaxInvcRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addTaxInvcRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    
    $(document).on('click','.deletedcpwipRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addDCPWIPRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    
    $(document).on('click','.deletedcvsRow', function(){ 
        $(this).closest('tr').remove();   
        var k=0; 
        $("tbody.addDCVSRow  tr").each(function() {
            k++;
            $(this).find('input[type=radio]').val(k);
        });  
    });
    $(document).on('keyup','#qty',function()
    {        
        var qty = document.getElementById("qty").value;
        var rate = document.getElementById("rate").value;
        var gst = document.getElementById("gst").value;
        if(qty > 0 && rate > 0 && gst >0){
            var amount = qty * rate;
            var tax_amount = (gst / 100) * amount;
            
            $('#taxable_amount').val(tax_amount);
            $('#amount').val(amount);
            $('#total_amount').val(amount + tax_amount);
        }else{
            $('#amount').val('0');
            $('#taxable_amount').val('0');
            $('#total_amount').val('0');
        }
    });
    $(document).on('keyup','#rate',function()
    {        
        var qty = document.getElementById("qty").value;
        var rate = document.getElementById("rate").value;
        var gst = document.getElementById("gst").value;
        if(qty > 0 && rate > 0 && gst >0){
            var amount = qty * rate;
            var tax_amount = (gst / 100) * amount;
            $('#taxable_amount').val(tax_amount);
            $('#amount').val(amount);
            $('#taxable_amount').val(amount + tax_amount);
        }else{
            $('#amount').val('0');
            $('#taxable_amount').val('0');
            $('#total_amount').val('0');
        }
    });
    $(document).on('keyup','#gst',function()
    {        
        var qty = document.getElementById("qty").value;
        var rate = document.getElementById("rate").value;
        var gst = document.getElementById("gst").value;
        if(qty > 0 && rate > 0 && gst >0){
            var amount = qty * rate;
            var tax_amount = (gst / 100) * amount;
            $('#taxable_amount').val(tax_amount);
            $('#amount').val(amount);
            $('#total_amount').val(amount + tax_amount);
        }else{
            $('#amount').val('0');
            $('#taxable_amount').val('0');
            $('#total_amount').val('0');
        }
    });
    
    $(document).on('click','.addTaxInvcRow',function()
    {        
      
        var maintml = $(this);
        var boq_code = document.getElementById("dc_boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var qty = document.getElementById("qty").value;
        var rate = document.getElementById("rate").value;
        var taxable_amount = document.getElementById("taxable_amount").value;
        var gst = document.getElementById("gst").value;
            console.log('taxable_amount');
        if(qty > 0 && rate > 0){
            var amount = qty * rate;
            var tax_amount = (gst / 100) * amount;
            var total_amount = amount + tax_amount;
        }else{
            var amount = 0;
            var total_amount = 0;
        }
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || qty < 1 || rate < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            var project_id = $('#project_id').val();
            // var url = 'get_proforma_boq_item_details';
            var url = 'get_boq_item_details';
           
            $.ajax({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    data:{project_id:project_id,boq_code:boq_code},
                    success:function(result){
                        if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                            boq_code_no = [];
                        	$("input[name='boq_code[]']").each(function(){
                        		boq_code_no.push($(this).val());
                        	});
                        	if ($.inArray(boq_code, boq_code_no) != -1){
                        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                                $('#dc_boq_code').val('');
                                $('#hsn_sac_code').val('');
                                $('#item_description').val('');
                                $('#unit').val('');
                                $('#qty').val('');
                                $('#gst').val('');
                                $('#taxable_amount').val('');
                                $('#rate').val('');
                                $('#amount').val('');
                                $('#total_amount').val('');
                                $('#hsn_sac_code').prop('readonly', false);
                                $('#item_description').prop('readonly', false);
                                $('#unit').prop('readonly', false);
                            }else{
                            var html='<tr><td>'
                            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="qty[]" value="'+qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="rate[]" value="'+rate+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="gst[]" value="'+gst+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="amount[]" value="'+amount+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="taxable_amount[]" value="'+taxable_amount+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<td><input type="text" class="form-control" name="total_amount[]" value="'+total_amount+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<div class="addDeleteButton">'
                            +'<span class="tooltips deleteTaxInvcRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
                            +'</div></td></tr>';
                            $('.invaliderror').removeClass('has-error-p');
                            $('#invaliderrorid').html('');
                            var clonedRow = $(this).parents('tbody.addTaxInvcRow').find('tr:first').clone();
                            clonedRow.find('input:not(.ftype)').val('');
                            clonedRow.find('textarea').val('');
                            clonedRow.find('select').val(''); 
                            clonedRow.find('.select2-container').remove(); 
                            clonedRow.find("select").select2();   
                            clonedRow.find('.tooltip').css('display','none');  
                            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
                            clonedRow.find('.tooltips').tooltip({placement: 'top'});
                            $(maintml).parents('#taxinvcdisplay tbody').find("tr:last").before(html);
                            $('#dc_boq_code').val('');
                            $('#hsn_sac_code').val('');
                            $('#item_description').val('');
                            $('#unit').val('');
                            $('#qty').val('');
                            $('#rate').val('');
                            $('#gst').val('');
                            $('#taxable_amount').val('');
                            $('#amount').val('');
                            $('#total_amount').val('');
                            $('#hsn_sac_code').prop('readonly', false);
                            $('#taxable_amount').prop('readonly', false);
                            $('#item_description').prop('readonly', false);
                            $('#unit').prop('readonly', false);
                            var total_amt = 0;
                        	var gst_amt = 0;
                        	var final_amt = 0;
                        	$("input[name='amount[]']").each(function(){
                        		total_amt += parseFloat($(this).val());
                        	});
                        	$('#subtotal').html(total_amt.toFixed(2));
                            if(total_amt > 0){
                                gst_amt = parseFloat(total_amt) * 0.09;   
                            }
                            $('.gst_amt').html(gst_amt.toFixed(2));
                            final_amt = parseFloat(gst_amt) + parseFloat(gst_amt) + parseFloat(total_amt);
                            $('#finaltotal').html(final_amt.toFixed(2));
                            }
                        }else{    
                            $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Not Available!');
                        }        
                    }
            });
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    
    $(document).on('click','.addProformaInvcRow',function()
    {        
        var maintml = $(this);
        var boq_code = document.getElementById("dc_boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var qty = document.getElementById("qty").value;
        var rate = document.getElementById("rate").value;
        if(qty > 0 && rate > 0){
            var amount = qty * rate;
        }else{
            var amount = 0;
        }
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || qty < 1 || rate < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            var project_id = $('#project_id').val();
            // var url = 'get_wip_boq_item_details';
            var url = 'get_boq_item_details';
            $.ajax({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    data:{project_id:project_id,boq_code:boq_code},
                    success:function(result){
                        
                        if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                            boq_code_no = [];
                        	$("input[name='boq_code[]']").each(function(){
                        		boq_code_no.push($(this).val());
                        	});
                        	if ($.inArray(boq_code, boq_code_no) != -1){
                        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                                $('#dc_boq_code').val('');
                                $('#hsn_sac_code').val('');
                                $('#item_description').val('');
                                $('#unit').val('');
                                $('#qty').val('');
                                $('#rate').val('');
                                $('#amount').val('');
                                $('#hsn_sac_code').prop('readonly', false);
                                $('#item_description').prop('readonly', false);
                                $('#unit').prop('readonly', false);
                            }else{
                            var html='<tr><td>'
                            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="qty[]" value="'+qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="rate[]" value="'+rate+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="amount[]" value="'+amount+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<div class="addDeleteButton">'
                            +'<span class="tooltips deleteProformaInvcRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
                            +'</div></td></tr>';
                            $('.invaliderror').removeClass('has-error-p');
                            $('#invaliderrorid').html('');
                            var clonedRow = $(this).parents('tbody.addProformaInvcRow').find('tr:first').clone();
                            clonedRow.find('input:not(.ftype)').val('');
                            clonedRow.find('textarea').val('');
                            clonedRow.find('select').val(''); 
                            clonedRow.find('.select2-container').remove(); 
                            clonedRow.find("select").select2();   
                            clonedRow.find('.tooltip').css('display','none');  
                            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
                            clonedRow.find('.tooltips').tooltip({placement: 'top'});
                            $(maintml).parents('#proformainvcdisplay tbody').find("tr:last").before(html);
                            $('#dc_boq_code').val('');
                            $('#hsn_sac_code').val('');
                            $('#item_description').val('');
                            $('#unit').val('');
                            $('#qty').val('');
                            $('#rate').val('');
                            $('#amount').val('');
                            $('#hsn_sac_code').prop('readonly', false);
                            $('#item_description').prop('readonly', false);
                            $('#unit').prop('readonly', false);
                            var total_amt = 0;
                        	var gst_amt = 0;
                        	var final_amt = 0;
                        	$("input[name='amount[]']").each(function(){
                        		total_amt += parseFloat($(this).val());
                        	});
                        	$('#subtotal').html(total_amt.toFixed(2));
                            if(total_amt > 0){
                                gst_amt = parseFloat(total_amt) * 0.09;   
                            }
                            $('.gst_amt').html(gst_amt.toFixed(2));
                            final_amt = parseFloat(gst_amt) + parseFloat(gst_amt) + parseFloat(total_amt);
                            $('#finaltotal').html(final_amt.toFixed(2));
                            }
                        }else{    
                            $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Not Available!');
                        }        
                    }
            });
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    $(document).on('click','.addDCIWIPRow',function()
    {        
        var maintml = $(this);
        var boq_code = document.getElementById("dc_boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var avl_qty = document.getElementById("avl_qty").value;
        var installed_qty = document.getElementById("installed_qty").value;
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || avl_qty < 1 || installed_qty < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            var project_id = $('#project_id').val();
            var url = 'get_dcip_boq_item_details';
            $.ajax({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    data:{project_id:project_id,boq_code:boq_code},
                    success:function(result){
                        if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                            boq_code_no = [];
                        	$("input[name='boq_code[]']").each(function(){
                        		boq_code_no.push($(this).val());
                        	});
                        	if ($.inArray(boq_code, boq_code_no) != -1){
                        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                                $('#dc_boq_code').val('');
                                $('#hsn_sac_code').val('');
                                $('#item_description').val('');
                                $('#unit').val('');
                                $('#avl_qty').val('');
                                $('#installed_qty').val('');
                                $('#hsn_sac_code').prop('readonly', false);
                                $('#item_description').prop('readonly', false);
                                $('#unit').prop('readonly', false);
                            }else{
                            var html='<tr><td>'
                            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="avl_qty[]" value="'+avl_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="installed_qty[]" value="'+installed_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<div class="addDeleteButton">'
                            +'<span class="tooltips deletedciwipRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
                            +'</div></td></tr>';
                            $('.invaliderror').removeClass('has-error-p');
                            $('#invaliderrorid').html('');
                            var clonedRow = $(this).parents('tbody.addDCIWIPRow').find('tr:first').clone();
                            clonedRow.find('input:not(.ftype)').val('');
                            clonedRow.find('textarea').val('');
                            clonedRow.find('select').val(''); 
                            clonedRow.find('.select2-container').remove(); 
                            clonedRow.find("select").select2();   
                            clonedRow.find('.tooltip').css('display','none');  
                            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
                            clonedRow.find('.tooltips').tooltip({placement: 'top'});
                            $(maintml).parents('#clientdciwipitemdisplay tbody').find("tr:last").before(html);
                            $('#dc_boq_code').val('');
                            $('#hsn_sac_code').val('');
                            $('#item_description').val('');
                            $('#unit').val('');
                            $('#avl_qty').val('');
                            $('#installed_qty').val('');
                            $('#hsn_sac_code').prop('readonly', false);
                            $('#item_description').prop('readonly', false);
                            $('#unit').prop('readonly', false);
                            }
                        }else{    
                            $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Not Available!');
                        }        
                    }
            });
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    
    $(document).on('click','.addDCPWIPRow',function()
    {        
        var maintml = $(this);
        var boq_code = document.getElementById("dc_boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var avl_qty = document.getElementById("avl_qty").value;
        var prov_qty = document.getElementById("prov_qty").value;
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || avl_qty < 1 || prov_qty < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            var project_id = $('#project_id').val();
            var url = 'get_dcip_boq_item_details';
            $.ajax({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    data:{project_id:project_id,boq_code:boq_code},
                    success:function(result){
                        if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                            boq_code_no = [];
                        	$("input[name='boq_code[]']").each(function(){
                        		boq_code_no.push($(this).val());
                        	});
                        	if ($.inArray(boq_code, boq_code_no) != -1){
                        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                                $('#dc_boq_code').val('');
                                $('#hsn_sac_code').val('');
                                $('#item_description').val('');
                                $('#unit').val('');
                                $('#avl_qty').val('');
                                $('#prov_qty').val('');
                                $('#hsn_sac_code').prop('readonly', false);
                                $('#item_description').prop('readonly', false);
                                $('#unit').prop('readonly', false);
                            }else{
                            var html='<tr><td>'
                            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="avl_qty[]" value="'+avl_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="prov_qty[]" value="'+prov_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<div class="addDeleteButton">'
                            +'<span class="tooltips deletedcpwipRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
                            +'</div></td></tr>';
                            $('.invaliderror').removeClass('has-error-p');
                            $('#invaliderrorid').html('');
                            var clonedRow = $(this).parents('tbody.addDCPWIPRow').find('tr:first').clone();
                            clonedRow.find('input:not(.ftype)').val('');
                            clonedRow.find('textarea').val('');
                            clonedRow.find('select').val(''); 
                            clonedRow.find('.select2-container').remove(); 
                            clonedRow.find("select").select2();   
                            clonedRow.find('.tooltip').css('display','none');  
                            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
                            clonedRow.find('.tooltips').tooltip({placement: 'top'});
                            $(maintml).parents('#clientdcpwipitemdisplay tbody').find("tr:last").before(html);
                            $('#dc_boq_code').val('');
                            $('#hsn_sac_code').val('');
                            $('#item_description').val('');
                            $('#unit').val('');
                            $('#avl_qty').val('');
                            $('#prov_qty').val('');
                            $('#hsn_sac_code').prop('readonly', false);
                            $('#item_description').prop('readonly', false);
                            $('#unit').prop('readonly', false);
                            }
                        }else{    
                            $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Not Available!');
                        }        
                    }
            });
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    
    $(document).on('click','.addDCVSRow',function()
    {        
        var maintml = $(this);
        var boq_code = document.getElementById("dc_boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var avl_qty = document.getElementById("avl_qty").value;
        var stock_qty = document.getElementById("stock_qty").value;
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || avl_qty < 1 || stock_qty < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            var project_id = $('#project_id').val();
            var url = 'get_dcip_boq_item_details';
            $.ajax({
                    type:'POST',
                    url:completeURL(url), 
                    dataType:'json',
                    data:{project_id:project_id,boq_code:boq_code},
                    success:function(result){
                        if(result.boq_code !== '' && typeof result.boq_code !== "undefined"){
                            boq_code_no = [];
                        	$("input[name='boq_code[]']").each(function(){
                        		boq_code_no.push($(this).val());
                        	});
                        	if ($.inArray(boq_code, boq_code_no) != -1){
                        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                                $('#dc_boq_code').val('');
                                $('#hsn_sac_code').val('');
                                $('#item_description').val('');
                                $('#unit').val('');
                                $('#avl_qty').val('');
                                $('#stock_qty').val('');
                                $('#hsn_sac_code').prop('readonly', false);
                                $('#item_description').prop('readonly', false);
                                $('#unit').prop('readonly', false);
                            }else{
                            var html='<tr><td>'
                            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="avl_qty[]" value="'+avl_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td><input type="text" class="form-control" name="stock_qty[]" value="'+stock_qty+'" readonly style="font-size: 12px;"></td>'
                            +'<td>'
                            +'<div class="addDeleteButton">'
                            +'<span class="tooltips deletedcvsRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
                            +'</div></td></tr>';
                            $('.invaliderror').removeClass('has-error-p');
                            $('#invaliderrorid').html('');
                            var clonedRow = $(this).parents('tbody.addDCVSRow').find('tr:first').clone();
                            clonedRow.find('input:not(.ftype)').val('');
                            clonedRow.find('textarea').val('');
                            clonedRow.find('select').val(''); 
                            clonedRow.find('.select2-container').remove(); 
                            clonedRow.find("select").select2();   
                            clonedRow.find('.tooltip').css('display','none');  
                            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
                            clonedRow.find('.tooltips').tooltip({placement: 'top'});
                            $(maintml).parents('#clientdcvsitemdisplay tbody').find("tr:last").before(html);
                            $('#dc_boq_code').val('');
                            $('#hsn_sac_code').val('');
                            $('#item_description').val('');
                            $('#unit').val('');
                            $('#avl_qty').val('');
                            $('#stock_qty').val('');
                            $('#hsn_sac_code').prop('readonly', false);
                            $('#item_description').prop('readonly', false);
                            $('#unit').prop('readonly', false);
                            }
                        }else{    
                            $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Not Available!');
                        }        
                    }
            });
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    $(document).on('click','.addDCCRow',function()
    {        
        var boq_code = document.getElementById("boq_code").value;
        var hsn_sac_code = document.getElementById("hsn_sac_code").value;
        var item_description = document.getElementById("item_description").value;
        var unit = document.getElementById("unit").value;
        var scheduled_qty = document.getElementById("scheduled_qty").value;
        var design_qty = document.getElementById("design_qty").value;
        var receive_qty = document.getElementById("receive_qty").value;
        if(boq_code == '' || hsn_sac_code == '' || item_description == '' || unit == '' || scheduled_qty < 1 || design_qty < 1 || receive_qty < 1){
            $('.invaliderror').addClass('has-error-p');
        }else{
            boq_code_no = [];
        	$("input[name='boq_code[]']").each(function(){
        		boq_code_no.push($(this).val());
        	});
        	if ($.inArray(boq_code, boq_code_no) != -1){
        	    $('#invaliderrorid').html('BOQ Sr No ('+boq_code+') Details Already Exist!');
                $('#boq_code').val('');
                $('#hsn_sac_code').val('');
                $('#item_description').val('');
                $('#unit').val('');
                $('#scheduled_qty').val('');
                $('#design_qty').val('');
                $('#receive_qty').val('');
                $('#hsn_sac_code').prop('readonly', false);
                $('#item_description').prop('readonly', false);
                $('#unit').prop('readonly', false);
                $('#scheduled_qty').prop('readonly', false);
            }else{
            var html='<tr><td>'
            +'<input type="text" class="form-control" name="boq_code[]" value="'+boq_code+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="hsn_sac_code[]" value="'+hsn_sac_code+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="item_description[]" value="'+item_description+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="unit[]" value="'+unit+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="scheduled_qty[]" value="'+scheduled_qty+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="design_qty[]" value="'+design_qty+'" readonly style="font-size: 12px;"></td>'
            +'<td><input type="text" class="form-control" name="receive_qty[]" value="'+receive_qty+'" readonly style="font-size: 12px;"></td>'
            +'<td>'
            +'<div class="addDeleteButton">'
            +'<span class="tooltips deletedccRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>'  
            +'</div></td></tr>';
            $('.invaliderror').removeClass('has-error-p');
            $('#invaliderrorid').html('');
            var clonedRow = $(this).parents('tbody.appendDynaRow').find('tr:first').clone();
            clonedRow.find('input:not(.ftype)').val('');
            clonedRow.find('textarea').val('');
            clonedRow.find('select').val(''); 
            clonedRow.find('.select2-container').remove(); 
            clonedRow.find("select").select2();   
            clonedRow.find('.tooltip').css('display','none');  
            //clonedRow.find('div.addDeleteButton').html('<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o"></i></span>');
            clonedRow.find('.tooltips').tooltip({placement: 'top'});
            $(this).parents('#clientdcdisplay tbody').find("tr:last").before(html);
            $('#boq_code').val('');
            $('#hsn_sac_code').val('');
            $('#item_description').val('');
            $('#unit').val('');
            $('#scheduled_qty').val('');
            $('#design_qty').val('');
            $('#receive_qty').val('');
            $('#hsn_sac_code').prop('readonly', false);
            $('#item_description').prop('readonly', false);
            $('#unit').prop('readonly', false);
            $('#scheduled_qty').prop('readonly', false);
            }
        }
        if (jQuery().datepicker) {
            $('.date-picker').datepicker({
                orientation: "right",
                autoclose: true,
            });
        } 
        Metronic.init();
    });
    $(document).on('click','.deleteRow', function(){ 
        var this1 = $(this);
        var id = $(this).attr('rel');
        var url= $(this).attr('rev');
        bootbox.confirm("Are you sure?", function(result) 
        {
            if(result)
            {
                $.ajax({
                    type:'POST',
                    url:completeURL(url),
                    data:{id:id},
                    dataType:'json',
                    success:function(data)
                    {      
                        this1.closest('tr').remove();
                        var k=0; 
                        $("tbody.appendDynaRow tr").each(function() {
                            k++;
                            $(this).find('input[type=radio]').val(k);
                        });
                    }
                });
            }
        });
    });
});
$(document).on('click','.active_link_cmn' , function(){

        var this1 = $(this);

        bootbox.confirm("Are you sure?", function(result) 

        {

            if(result)

            {

                var id = this1.attr('rel');
                
                var url = this1.attr('rev');             

                var status = this1.data('status');                

                $.ajax({

                    url : completeURL(url),

                    type:'POST',

                    dataType:'json',

                    data:{id:id,status:status},

                    success:function(data)

                    {

                        bootbox.alert(data.msg, function() {

                            setTimeout(function(){

                                document.location.href=document.location.href;                                

                            },1500);

                        });                       

                    }

                });

            }

        }); 

    });
function replce_file()
{
    var file_name = $('.file_name span').val();
    $('.file_name').val(data);
};
function replce_emd_paid_file()
{
    var file_name = $('.emd_paid_filename span').attr('src');
    $('.emd_paid_filename').val(data);
};
function replce_asd_paid_file()
{
    var file_name = $('.asd_paid_filename span').val('src');
    $('.asd_paid_filename').val(data);
};
function replce_draft_doc_file()
{
    var file_name = $('.draft_doc_filename span').val('src');
    $('.draft_doc_filename').val(data);
};
function replce_projectinvstsch_doc_file()
{
    var file_name = $('.projectinvstsch_doc_filename span').val('src');
    $('.projectinvstsch_doc_filename').val(data);
};

function replce_projectcashflw_doc_file()
{
    var file_name = $('.projectcashflw_doc_filename span').val('src');
    $('.projectcashflw_doc_filename').val(data);
};

function replce_projectdesig_doc_file()
{
    var file_name = $('.projectdesig_doc_filename span').val('src');
    $('.projectdesig_doc_filename').val(data);
};

function replce_projectcmpl_doc_file()
{
    var file_name = $('.projectcmpl_doc_filename span').val('src');
    $('.projectcmpl_doc_filename').val(data);
};

function replce_sign_doc_file()
{
    var file_name = $('.sign_doc_filename span').val('src');
    $('.sign_doc_filename').val(data);
};

function replce_security_desposite_file()
{
    var file_name = $('.security_desposite_filename span').val('src');
    $('.security_desposite_filename').val(data);
};
function replce_performance_paid_file()
{
    var file_name = $('.performance_paid_filename span').val('src');
    $('.performance_paid_filename').val(data);
}
function replce_boq_file()
{
    var file_name = $('.boq_excel_filename span').val('src');
    $('.boq_excel_filename').val(data);
};

function getCookie(key) 
{
   var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');  
   return keyValue ? keyValue[2] : null;  
} 

function replaceurl(url)
{
    var url1=url.toString().replace("%3A",":"); 
    var url2=url1.toString().replace(/%2F/g,"/");  
    return url2;
}   

function completeURL(url)
{
    try
    {
        var target= getCookie('multicare')+url;
        target=replaceurl(target);
        return replaceurl(target);      
    }
    catch(e)
    {
        alert(e);
    }
}