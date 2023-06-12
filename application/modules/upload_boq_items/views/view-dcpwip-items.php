 <div id="ClientDcItemList">
    <input type="hidden" id="p_wip_no" value="<?php echo base64_encode($p_wip_no); ?>">
    <table width="100%" id="dcpwipitemlist" class="table table-striped table-bordered table-hover">
        <thead>
             <tr>
                 <th style="min-width: 30px;width:30px;font-size:13px;">Sr No</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">BOQ Sr No</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">HSN/SAC Code</th>
                 <th style="min-width: 150px;width:150px;font-size:13px;">Item Description</th>
                 <th style="min-width: 80px;width:80px;font-size:13px;">Unit</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">Avl. Qty</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">Prov. Qty</th>
            </tr>
        </thead>
    </table>
</div>
<style>
    .modal-footer{
        display:none;
    }
    .modal-dialog{
        width:80%;
    }
</style>
<script>
    var p_wip_no = $('#p_wip_no').val().trim(); 
    $('#dcpwipitemlist').dataTable({
	    "bDestroy" : true,
	    "paging": true,
		"iDisplayLength": 10,
        "deferRender": true,
        "responsive": true,
        "processing": true,
		"serverSide": true,
        "order": [],
		"ajax": {
            "url": "<?php echo base_url('project_dcpwip_items'); ?>",
            "type": "POST",
            "data":{p_wip_no:p_wip_no}
        },
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }]
    });
</script>