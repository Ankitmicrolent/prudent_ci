 <div id="TaxInvoiceItemList">
    <input type="hidden" id="tax_invc_id" value="<?php echo base64_encode($tax_invc_id); ?>">
    <table width="100%" id="taxinvcitemlist" class="table table-striped table-bordered table-hover">
        <thead>
             <tr>
                 <th style="min-width: 30px;width:30px;font-size:13px;">Sr No</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">BOQ Sr No</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">HSN/SAC Code</th>
                 <th style="min-width: 150px;width:150px;font-size:13px;">Item Description</th>
                 <th style="min-width: 80px;width:80px;font-size:13px;">Unit</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">Qty</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">Rate</th>
                 <th style="min-width: 50px;width:50px;font-size:13px;">Amount</th>
            </tr>
        </thead>
        <tbody></tbody>
         <tfoot><tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <!-- <td></td> -->
         <td>Total Amount</td>
         <td id="total_amount"></td>
         <td></td>
         </tr>
         <tfoot><tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <!-- <td></td> -->
         <td>Sub Total</td>
         <td id="sub_total"></td>
         <td></td>
         </tr>
         <tfoot><tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <!-- <td></td> -->
         <td>Gst Amount</td>
         <td id="gst_amount"></td>
         <td></td>
         </tr>
        </tfoot>
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
    var tax_invc_id = $('#tax_invc_id').val().trim(); 
    $('#taxinvcitemlist').dataTable({
	    "bDestroy" : true,
	    "paging": true,
		"iDisplayLength": 10,
        "deferRender": true,
        "responsive": true,
        "processing": true,
		"serverSide": true,
        "order": [],
		"ajax": {
            "url": "<?php echo base_url('project_taxinvc_items'); ?>",
            "type": "POST",
            "data":{tax_invc_id:tax_invc_id}
        },
        "columnDefs": [{ 
            "targets": [0],
            "orderable": false
        }],
        "initComplete": function () {
                    var data = this.api().ajax.json(); // Access the 'extraData' value
                      console.log(data);
                      $('#sub_total').html(data.sub_total);
                      $('#gst_amount').html(data.gst_amount);
                      $('#total_amount').html(data.total_amount);
                   // Print the extraData in an input box
                 //  $('#workorderon').val(extraData);
                  }
    });
</script>