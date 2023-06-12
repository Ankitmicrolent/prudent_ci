<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_boq_items_controller extends Base_Controller 
{
	public function __construct()
  	{
	    parent::__construct();
	    $this->clear_cache();  
        date_default_timezone_set("Asia/Kolkata"); 
        ini_set('memory_limit', '1024M');
        ini_set('max_execution_time', 2000);
        $value = base_url();
        setcookie("multicare",$value, time()+3600*24,'/'); 
	    $this->load->model('common_model');
        $this->load->model('admin_model');
        error_reporting(E_ALL & ~E_NOTICE);
    }
    public function clear_cache()
    {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }
    public function invoice_closure() 
    {
        $id = $this->uri->segment(2);
        if(isset($id) && !empty($id)){
        $id = base64_decode($id);
        }
        $tax_invc_no = $this->admin_model->get_invoice_no($id);
        $data['tax_invc_no'] = $tax_invc_no;
        $this->load->view('invoice-closure',$data);
    }
    public function payment_receipt() 
    {
        $id = $this->uri->segment(2);
        if(isset($id) && !empty($id)){
        $id = base64_decode($id);
        }
        $tax_invc_no = $this->admin_model->get_invoice_no($id);
        $data['tax_invc_no'] = $tax_invc_no;
        $this->load->view('payment-advice',$data);
    }
    public function boq_exceptional_approval() 
    {
        $this->load->view('boq-exceptional-approval');
    }
    
    public function get_dc_item_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="dc_boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$avl_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="avl_qty" placeholder="Avl. Qty" style="font-size: 12px;">';
		$stock_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="stock_qty" placeholder="Stock Qty" style="font-size: 12px;">';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addDCVSRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$avl_qty_d,
			$stock_qty_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_dcpwip_item_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="dc_boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$avl_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="avl_qty" placeholder="Avl. Qty" style="font-size: 12px;">';
		$prov_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="prov_qty" placeholder="Prov. Qty" style="font-size: 12px;">';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addDCPWIPRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$avl_qty_d,
			$prov_qty_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_dciwip_item_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="dc_boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$avl_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="avl_qty" placeholder="Avl. Qty" style="font-size: 12px;">';
		$installed_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="installed_qty" placeholder="Installed Qty" style="font-size: 12px;">';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addDCIWIPRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$avl_qty_d,
			$installed_qty_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    
    public function get_install_prov_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="dc_boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$qty_d = '<input type="number" min="1" class="form-control invaliderror" id="qty" placeholder="Qty" style="font-size: 12px;">';
		$rate_d = '<input type="number" min="1" class="form-control invaliderror" id="rate" placeholder="Rate" style="font-size: 12px;">';
		$amount_d = '<input type="number" min="1" class="form-control invaliderror" id="amount" placeholder="Amount" style="font-size: 12px;" readonly>';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addProformaInvcRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$qty_d,
			$rate_d,
			$amount_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_proforma_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="dc_boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$qty_d = '<input type="number" min="1" class="form-control invaliderror" id="qty" placeholder="Qty" style="font-size: 12px;">';
		$rate_d = '<input type="number" min="1" class="form-control invaliderror" id="rate" placeholder="Rate" style="font-size: 12px;">';
		$amount_d = '<input type="number" min="1" class="form-control invaliderror" id="amount" placeholder="Amount" style="font-size: 12px;" readonly>';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addTaxInvcRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$qty_d,
			$rate_d,
			$amount_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_client_dc_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$scheduled_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="scheduled_qty" placeholder="Sche. Qty" style="font-size: 12px;">';
		$design_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="design_qty" placeholder="Des. Qty" style="font-size: 12px;">';
		$rece_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="receive_qty" placeholder="Received Qty" style="font-size: 12px;">';
		
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addDCCRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$scheduled_qty_d,
			$design_qty_d,
			$rece_qty_d,
			$action_d
		);	
		if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_boq_item_by_project() 
		{
		$project_id = $this->input->post('project_id');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		
		$data = $row = $newarr = $datad = array();
		$boq_code_d = '<input type="text" class="form-control invaliderror" id="boq_code" placeholder="BOQ Sr No" style="font-size: 12px;">';
		$hsn_sac_code_d = '<input type="text" class="form-control invaliderror" id="hsn_sac_code" placeholder="HSN/SAC Code" style="font-size: 12px;">';
		$item_description_d = '<input type="text" class="form-control invaliderror" id="item_description" placeholder="Item Description" style="font-size: 12px;">';
		$unit_d = '<input type="text" class="form-control invaliderror" id="unit" placeholder="Unit" style="font-size: 12px;">';
		$scheduled_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="scheduled_qty" placeholder="Sche. Qty" style="font-size: 12px;">';
		$design_qty_d = '<input type="number" min="1" class="form-control invaliderror" id="design_qty" placeholder="Des. Qty" style="font-size: 12px;">';
		$rate_basic_d = '<input type="number" min="1" class="form-control invaliderror" id="rate_basic" placeholder="Rate Basic" style="font-size: 12px;">';
		$gst_d = '<input type="number" min="0" class="form-control invaliderror" id="gst" placeholder="GST %" style="font-size: 12px;">';
			
		$non_schedule_d = '<div class="dflx">';
		$non_schedule_d .='<input type="radio" name="non_schedule_r" id="non_schedule_yes" value="Y"><span style="padding: 1px 5px 0px 5px;">Y</span>';
		$non_schedule_d .='<input type="radio" name="non_schedule_r" id="non_schedule_no" value="N" checked><span style="padding: 1px 0px 0px 5px;">N</span>';
		$non_schedule_d .='</div>';
			
		$action_d = '';
		$action_d .='<div class="addDeleteButton">';
		$action_d .='<span class="tooltips addDynaRow" data-placement="top" data-original-title="Add" style="cursor: pointer;"><i class="fa fa-plus" style="color:#000"></i></span>';
		$action_d .='</div>';
		
		$datad[] = array(
		    $boq_code_d,
			$hsn_sac_code_d,
			$item_description_d,
			$unit_d,
			$scheduled_qty_d,
			$design_qty_d,
			$rate_basic_d,
			$gst_d,
			$non_schedule_d,
			$action_d
		);	
		/*$memData = $this->admin_model->getPBOQItemListRows($_POST,$project_id);
		$allCount = $this->admin_model->countPBOQItemListAll($project_id);
		$countFiltered = $this->admin_model->countPBOQItemListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $design_qty = $member->design_qty; }else { $design_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			
			$boq_code_h = '<input type="text" class="form-control" name="boq_code[]" value="'.$boq_code.'" readonly>';
			$hsn_sac_code_h = '<input type="text" class="form-control" name="hsn_sac_code[]" value="'.$hsn_sac_code.'" readonly>';
			$item_description_h = '<input type="text" class="form-control" name="item_description[]" value="'.$item_description.'" readonly>';
			$unit_h = '<input type="text" class="form-control" name="unit[]" value="'.$unit.'" readonly>';
			$scheduled_qty_h = '<input type="text" class="form-control" name="scheduled_qty[]" value="'.$scheduled_qty.'" readonly>';
			$design_qty_h = '<input type="number" class="form-control" name="design_qty[]" value="'.$design_qty.'">';
			$rate_basic_h = '<input type="number" class="form-control" name="rate_basic[]" value="'.$rate_basic.'">';
			$gst_h = '<input type="text" class="form-control" name="gst[]" value="'.$gst.'" readonly>';
			$non_schedule_h = '<input type="text" class="form-control" name="non_schedule[]" value="'.$non_schedule.'" readonly="">';
			
			$action = '';
			$action .='<div class="addDeleteButton">';
			$action .='<span class="tooltips deleteParticularRow" data-placement="top" data-original-title="Remove" style="cursor: pointer;"><i class="fa fa-trash-o" style="color:#a94442"></i></span>';
			$action .='</div>';
			
			$data[] = array(
			$boq_code_h,
			$hsn_sac_code_h,
			$item_description_h,
			$unit_h,
			$scheduled_qty_h,
			$design_qty_h,
			$rate_basic_h,
			$gst_h,
			$non_schedule_h,
			$action
			);
        }*/
        if(isset($data) && !empty($data)){
        $newarr = array_merge($data,$datad);   
        }else{
        $newarr = $datad;   
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $newarr,
        );
        echo json_encode($output);
		}

    }
    public function get_boq_item_details() 
		{
		$res = array();
		$project_id = $this->input->post('project_id');
        $boq_code = $this->input->post('boq_code');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)
		&& isset($project_id) && !empty($project_id)
		&& isset($boq_code) && !empty($boq_code)){
		$member = $this->admin_model->get_boq_item_details($project_id,$boq_code);
		if(isset($member) && !empty($member)){
		    if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $res['boq_items_id'] = $member->boq_items_id; }else { $res['boq_items_id'] = '0'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $res['project_id'] = $member->project_id; }else { $res['project_id'] = '0'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $res['boq_code'] = $member->boq_code; }else { $res['boq_code'] = ''; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $res['hsn_sac_code'] = $member->hsn_sac_code; }else { $res['hsn_sac_code'] = ''; }
			if(isset($member->item_description) && !empty($member->item_description)) { $res['item_description'] = $member->item_description; }else { $res['item_description'] = ''; }
			if(isset($member->unit) && !empty($member->unit)) { $res['unit'] = $member->unit; }else { $res['unit'] = ''; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $res['scheduled_qty'] = $member->scheduled_qty; }else { $res['scheduled_qty'] = ''; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $res['design_qty'] = $member->design_qty; }else { $res['design_qty'] = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $res['rate_basic'] = $member->rate_basic; }else { $res['rate_basic'] = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $res['gst'] = $member->gst; }else { $res['gst'] = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $res['non_schedule'] = $member->non_schedule; }else { $res['non_schedule'] = 'N'; }
		}
		}
		echo json_encode($res);
	}
	
	public function get_dcip_boq_item_details() 
		{
		$res = array();
		$project_id = $this->input->post('project_id');
        $boq_code = $this->input->post('boq_code');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)
		&& isset($project_id) && !empty($project_id)
		&& isset($boq_code) && !empty($boq_code)){
		$member = $this->admin_model->get_dcip_boq_item_details($project_id,$boq_code);
		if(isset($member) && !empty($member)){
		    if(isset($member->challan_itemid) && !empty($member->challan_itemid)) { $res['challan_itemid'] = $member->challan_itemid; }else { $res['challan_itemid'] = '0'; }
			if(isset($member->challan_id) && !empty($member->challan_id)) { $res['challan_id'] = $member->challan_id; }else { $res['challan_id'] = '0'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $res['boq_code'] = $member->boq_code; }else { $res['boq_code'] = ''; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $res['hsn_sac_code'] = $member->hsn_sac_code; }else { $res['hsn_sac_code'] = ''; }
			if(isset($member->item_description) && !empty($member->item_description)) { $res['item_description'] = $member->item_description; }else { $res['item_description'] = ''; }
			if(isset($member->unit) && !empty($member->unit)) { $res['unit'] = $member->unit; }else { $res['unit'] = ''; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $res['scheduled_qty'] = $member->scheduled_qty; }else { $res['scheduled_qty'] = ''; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $res['design_qty'] = $member->design_qty; }else { $res['design_qty'] = '0'; }
			if(isset($member->received_qty) && !empty($member->received_qty)) { $res['received_qty'] = $member->received_qty; }else { $res['received_qty'] = '0'; }
		 }
		}
		echo json_encode($res);
	}
	public function get_dc_boq_item_details() 
		{
		$res = array();
		$project_id = $this->input->post('project_id');
        $boq_code = $this->input->post('boq_code');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)
		&& isset($project_id) && !empty($project_id)
		&& isset($boq_code) && !empty($boq_code)){
		$member = $this->admin_model->get_dc_boq_item_details($project_id,$boq_code);
		if(isset($member) && !empty($member)){
		    if(isset($member->challan_itemid) && !empty($member->challan_itemid)) { $res['challan_itemid'] = $member->challan_itemid; }else { $res['challan_itemid'] = '0'; }
			if(isset($member->challan_id) && !empty($member->challan_id)) { $res['challan_id'] = $member->challan_id; }else { $res['challan_id'] = '0'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $res['boq_code'] = $member->boq_code; }else { $res['boq_code'] = ''; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $res['hsn_sac_code'] = $member->hsn_sac_code; }else { $res['hsn_sac_code'] = ''; }
			if(isset($member->item_description) && !empty($member->item_description)) { $res['item_description'] = $member->item_description; }else { $res['item_description'] = ''; }
			if(isset($member->unit) && !empty($member->unit)) { $res['unit'] = $member->unit; }else { $res['unit'] = ''; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $res['scheduled_qty'] = $member->scheduled_qty; }else { $res['scheduled_qty'] = ''; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $res['design_qty'] = $member->design_qty; }else { $res['design_qty'] = '0'; }
			if(isset($member->received_qty) && !empty($member->received_qty)) { $res['received_qty'] = $member->received_qty; }else { $res['received_qty'] = '0'; }
		 }
		}
		echo json_encode($res);
	}
	public function get_wip_boq_item_details() 
		{
		$res = array();
		$project_id = $this->input->post('project_id');
        $boq_code = $this->input->post('boq_code');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)
		&& isset($project_id) && !empty($project_id)
		&& isset($boq_code) && !empty($boq_code)){
		$member = $this->admin_model->get_wip_boq_item_details($project_id,$boq_code);
		if(isset($member) && !empty($member)){
		    if(isset($member->challan_itemid) && !empty($member->challan_itemid)) { $res['challan_itemid'] = $member->challan_itemid; }else { $res['challan_itemid'] = '0'; }
			if(isset($member->challan_id) && !empty($member->challan_id)) { $res['challan_id'] = $member->challan_id; }else { $res['challan_id'] = '0'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $res['boq_code'] = $member->boq_code; }else { $res['boq_code'] = ''; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $res['hsn_sac_code'] = $member->hsn_sac_code; }else { $res['hsn_sac_code'] = ''; }
			if(isset($member->item_description) && !empty($member->item_description)) { $res['item_description'] = $member->item_description; }else { $res['item_description'] = ''; }
			if(isset($member->unit) && !empty($member->unit)) { $res['unit'] = $member->unit; }else { $res['unit'] = ''; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $res['scheduled_qty'] = $member->scheduled_qty; }else { $res['scheduled_qty'] = ''; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $res['design_qty'] = $member->design_qty; }else { $res['design_qty'] = '0'; }
			if(isset($member->received_qty) && !empty($member->received_qty)) { $res['received_qty'] = $member->received_qty; }else { $res['received_qty'] = '0'; }
		 }
		}
		echo json_encode($res);
	}
	public function get_proforma_boq_item_details() 
		{
		$res = array();
		$project_id = $this->input->post('project_id');
        $boq_code = $this->input->post('boq_code');
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)
		&& isset($project_id) && !empty($project_id)
		&& isset($boq_code) && !empty($boq_code)){
		$member = $this->admin_model->get_proforma_boq_item_details($project_id,$boq_code);
		if(isset($member) && !empty($member)){
		    if(isset($member->proforma_itemid) && !empty($member->proforma_itemid)) { $res['challan_itemid'] = $member->proforma_itemid; }else { $res['challan_itemid'] = '0'; }
			if(isset($member->proforma_id) && !empty($member->proforma_id)) { $res['challan_id'] = $member->proforma_id; }else { $res['challan_id'] = '0'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $res['boq_code'] = $member->boq_code; }else { $res['boq_code'] = ''; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $res['hsn_sac_code'] = $member->hsn_sac_code; }else { $res['hsn_sac_code'] = ''; }
			if(isset($member->item_description) && !empty($member->item_description)) { $res['item_description'] = $member->item_description; }else { $res['item_description'] = ''; }
			if(isset($member->unit) && !empty($member->unit)) { $res['unit'] = $member->unit; }else { $res['unit'] = ''; }
			if(isset($member->qty) && !empty($member->qty)) { $res['qty'] = $member->qty; }else { $res['qty'] = ''; }
			if(isset($member->rate) && !empty($member->rate)) { $res['rate'] = $member->rate; }else { $res['rate'] = '0'; }
			if(isset($member->rate) && !empty($member->rate)) { $res['amount'] = $member->qty * $member->rate; }else { $res['amount'] = '0'; }
		 }
		}
		echo json_encode($res);
	}
	
    
    public function project_taxinvc_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$tax_invc_id = $this->input->post('tax_invc_id');
        if(isset($tax_invc_id) && !empty($tax_invc_id)){
            $tax_invc_id = base64_decode($tax_invc_id);
        }else{
            $tax_invc_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getTaxInvcItemListRows($_POST,$tax_invc_id);
		$allCount = $this->admin_model->countTaxInvcItemListAll($tax_invc_id);
		$countFiltered = $this->admin_model->countTaxInvcItemListFiltered($_POST,$tax_invc_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->tax_invc_id) && !empty($member->tax_invc_id)) { $tax_invc_id = $member->tax_invc_id; }else { $tax_invc_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->qty) && !empty($member->qty)) { $qty = $member->qty; }else { $qty = 0; }
			if(isset($member->rate) && !empty($member->rate)) { $rate = $member->rate; }else { $rate = 0; }
			$amount = 0;
			$amount = $qty * $rate;
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$qty,
			sprintf('%0.2f', $rate),
			sprintf('%0.2f', $amount)
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_proinvc_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$proforma_id = $this->input->post('proforma_id');
        if(isset($proforma_id) && !empty($proforma_id)){
            $proforma_id = base64_decode($proforma_id);
        }else{
            $proforma_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getProInvcItemListRows($_POST,$proforma_id);
		$allCount = $this->admin_model->countProInvcItemListAll($proforma_id);
		$countFiltered = $this->admin_model->countProInvcItemListFiltered($_POST,$proforma_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->proforma_id) && !empty($member->proforma_id)) { $proforma_id = $member->proforma_id; }else { $proforma_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->qty) && !empty($member->qty)) { $qty = $member->qty; }else { $qty = 0; }
			if(isset($member->rate) && !empty($member->rate)) { $rate = $member->rate; }else { $rate = 0; }
			$amount = 0;
			$amount = $qty * $rate;
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$qty,
			sprintf('%0.2f', $rate),
			sprintf('%0.2f', $amount)
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcpwip_list_p() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCPWIPItemListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCPWIPItemListAll($project_id);
		$countFiltered = $this->admin_model->countDCPWIPItemListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->p_wip_no) && !empty($member->p_wip_no)) { $p_wip_no = $member->p_wip_no; }else { $p_wip_no = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->avl_qty) && !empty($member->avl_qty)) { $avl_qty = $member->avl_qty; }else { $avl_qty = '-'; }
			if(isset($member->prov_qty) && !empty($member->prov_qty)) { $prov_qty = $member->prov_qty; }else { $prov_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$boq_code,
			$item_description,
			$prov_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcpwip_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$p_wip_no = $this->input->post('p_wip_no');
        if(isset($p_wip_no) && !empty($p_wip_no)){
            $p_wip_no = base64_decode($p_wip_no);
        }else{
            $p_wip_no = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCPWIPItemListRows($_POST,$p_wip_no);
		$allCount = $this->admin_model->countDCPWIPItemListAll($p_wip_no);
		$countFiltered = $this->admin_model->countDCPWIPItemListFiltered($_POST,$p_wip_no);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->p_wip_no) && !empty($member->p_wip_no)) { $p_wip_no = $member->p_wip_no; }else { $p_wip_no = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->avl_qty) && !empty($member->avl_qty)) { $avl_qty = $member->avl_qty; }else { $avl_qty = '-'; }
			if(isset($member->prov_qty) && !empty($member->prov_qty)) { $prov_qty = $member->prov_qty; }else { $prov_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$avl_qty,
			$prov_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dciwip_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$i_wip_no = $this->input->post('i_wip_no');
        if(isset($i_wip_no) && !empty($i_wip_no)){
            $i_wip_no = base64_decode($i_wip_no);
        }else{
            $i_wip_no = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCIWIPItemListRows($_POST,$i_wip_no);
		$allCount = $this->admin_model->countDCIWIPItemListAll($i_wip_no);
		$countFiltered = $this->admin_model->countDCIWIPItemListFiltered($_POST,$i_wip_no);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->i_wip_no) && !empty($member->i_wip_no)) { $i_wip_no = $member->i_wip_no; }else { $i_wip_no = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->avl_qty) && !empty($member->avl_qty)) { $avl_qty = $member->avl_qty; }else { $avl_qty = '-'; }
			if(isset($member->installed_qty) && !empty($member->installed_qty)) { $installed_qty = $member->installed_qty; }else { $installed_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$avl_qty,
			$installed_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dciwip_list_p() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCIWIPItemListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCIWIPItemListAll($project_id);
		$countFiltered = $this->admin_model->countDCIWIPItemListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->i_wip_no) && !empty($member->i_wip_no)) { $i_wip_no = $member->i_wip_no; }else { $i_wip_no = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->avl_qty) && !empty($member->avl_qty)) { $avl_qty = $member->avl_qty; }else { $avl_qty = '-'; }
			if(isset($member->installed_qty) && !empty($member->installed_qty)) { $installed_qty = $member->installed_qty; }else { $installed_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$avl_qty,
			$installed_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcpwip_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCPWIPListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCPWIPListAll($project_id);
		$countFiltered = $this->admin_model->countDCPWIPListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->p_wip_id) && !empty($member->p_wip_id)) { $p_wip_id = $member->p_wip_id; }else { $p_wip_id = '-'; }
			if(isset($member->p_wip_no) && !empty($member->p_wip_no)) { $p_wip_no = $member->p_wip_no; }else { $p_wip_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$p_wip_id.'" title="Edit Provisional WIP" rev="edit_provisional_wip" data-original-title="Edit Installed WIP"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="edit tooltips" rel="'.$p_wip_id.'" title="Delete Provisional WIP" rev="delete_provisional_wip" data-original-title="Delete Installed WIP"><i class="fa fa-trash" style="color:#a94442; font-size: 15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_provisional_wip" rel="'.$p_wip_id.'" title="Click here to Approved Record" data-status="Y">Approve</a>';
			
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_dcpwip_items" rel="'.$p_wip_id.'" data-title="(#'.$p_wip_no.') Provisional WIP Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$p_wip_no.'</a>';
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcvs_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$vs_id = $this->input->post('vs_id');
        if(isset($vs_id) && !empty($vs_id)){
            $vs_id = base64_decode($vs_id);
        }else{
            $vs_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCVSItemListRows($_POST,$vs_id);
		$allCount = $this->admin_model->countDCVSItemListAll($vs_id);
		$countFiltered = $this->admin_model->countDCVSItemListFiltered($_POST,$vs_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->vs_id) && !empty($member->vs_id)) { $vs_id = $member->vs_id; }else { $vs_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->avl_qty) && !empty($member->avl_qty)) { $avl_qty = $member->avl_qty; }else { $avl_qty = '-'; }
			if(isset($member->stock_qty) && !empty($member->stock_qty)) { $stock_qty = $member->stock_qty; }else { $stock_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$avl_qty,
			$stock_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
    public function project_dcc_list_p() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCCItemListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCCItemListAll($project_id);
		$countFiltered = $this->admin_model->countDCCItemListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->challan_id) && !empty($member->challan_id)) { $challan_id = $member->challan_id; }else { $challan_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '-'; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $design_qty = $member->design_qty; }else { $design_qty = '-'; }
			if(isset($member->received_qty) && !empty($member->received_qty)) { $received_qty = $member->received_qty; }else { $received_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$boq_code,
			$item_description,
			$received_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcc_items() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$challan_id = $this->input->post('challan_id');
        if(isset($challan_id) && !empty($challan_id)){
            $challan_id = base64_decode($challan_id);
        }else{
            $challan_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCCItemListRows($_POST,$challan_id);
		$allCount = $this->admin_model->countDCCItemListAll($challan_id);
		$countFiltered = $this->admin_model->countDCCItemListFiltered($_POST,$challan_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->challan_id) && !empty($member->challan_id)) { $challan_id = $member->challan_id; }else { $challan_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->hsn_sac_code) && !empty($member->hsn_sac_code)) { $hsn_sac_code = $member->hsn_sac_code; }else { $hsn_sac_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '0'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '-'; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $design_qty = $member->design_qty; }else { $design_qty = '-'; }
			if(isset($member->received_qty) && !empty($member->received_qty)) { $received_qty = $member->received_qty; }else { $received_qty = '-'; }
			
			$data[] = array(
			$i,
			$boq_code,
			$hsn_sac_code,
			$item_description,
			$unit,
			$design_qty,
			$received_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
    public function project_dciwip_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCIWIPListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCIWIPListAll($project_id);
		$countFiltered = $this->admin_model->countDCIWIPListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->i_wip_id) && !empty($member->i_wip_id)) { $i_wip_id = $member->i_wip_id; }else { $i_wip_id = '-'; }
			if(isset($member->i_wip_no) && !empty($member->i_wip_no)) { $i_wip_no = $member->i_wip_no; }else { $i_wip_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$p_wip_id.'" title="Edit Installed WIP" rev="edit_provisional_wip" data-original-title="Edit Installed WIP"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="edit tooltips" rel="'.$p_wip_id.'" title="Delete Installed WIP" rev="delete_provisional_wip" data-original-title="Delete Installed WIP"><i class="fa fa-trash" style="color:#a94442; font-size: 15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_provisional_wip" rel="'.$p_wip_id.'" title="Click here to Approved Record" data-status="Y">Approve</a>';
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_dciwip_items" rel="'.$i_wip_id.'" data-title="(#'.$i_wip_no.') Installed WIP Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$i_wip_no.'</a>';
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcvs_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCVSListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCVSListAll($project_id);
		$countFiltered = $this->admin_model->countDCVSListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->vs_id) && !empty($member->vs_id)) { $vs_id = $member->vs_id; }else { $vs_id = '-'; }
			if(isset($member->vs_no) && !empty($member->vs_no)) { $vs_no = $member->vs_no; }else { $vs_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_dcvs_items" rel="'.$vs_id.'" data-title="(#'.$vs_no.') Warehouse Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$vs_no.'</a>';
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$vs_id.'" title="Edit Warehouse" rev="edit_virtual_stock" data-original-title="Edit Warehouse"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="edit tooltips" rel="'.$vs_id.'" title="Delete Warehouse" rev="delete_virtual_stock" data-original-title="Delete Warehouse"><i class="fa fa-trash" style="color:#a94442; font-size: 15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_proforma_invoice" rel="'.$proforma_id.'" title="Click here to Approved Record" data-status="Y">Approve</a>';
			
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
    public function project_proformaInvc_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getPROINVCListRows($_POST,$project_id);
		$allCount = $this->admin_model->countPROINVCListAll($project_id);
		$countFiltered = $this->admin_model->countPROINVCListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->proforma_id) && !empty($member->proforma_id)) { $proforma_id = $member->proforma_id; }else { $proforma_id = '0'; }
			if(isset($member->proforma_no) && !empty($member->proforma_no)) { $proforma_no = $member->proforma_no; }else { $proforma_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			$htmlp = '';
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_proforma_invoice_items" rel="'.$proforma_id.'" data-title="(#'.$proforma_no.') Proforma Invoice Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$proforma_no.'</a>';
			
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$proforma_id.'" title="Edit Proforma Invoice" rev="edit_proforma_invoice" data-original-title="Edit Proforma Invoice"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="popup_save" href="javascript:void(0);" rev="convert_to_tax_invoice" rel="'.$proforma_id.'" title="(#'.$proforma_no.') Convert to Tax Invoice" data-status="allow"><img src="'.base_url().'uploads/images/tax_icon.jpg" width="20px" height="20px"></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="popup_save" href="javascript:void(0);" rev="download_proforma_invoice" rel="'.$proforma_no.'" data-title="(#'.$proforma_no.') Download Proforma Invoice" data-status="allow"><i class="fa fa-download" style="color:#000; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="delete tooltips" rel="'.$proforma_id.'" title="Delete Proforma Invoice" rev="delete_proforma_invoice" data-original-title="Delete Proforma Invoice"><i class="fa fa-trash" style="color:#F3565D; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_proforma_invoice" rel="'.$proforma_id.'" title="Click here to Approved Record" data-status="Y" style="margin-top:5px;">Approve</a>';
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_taxInvc_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getTAXINVCListRows($_POST,$project_id);
		$allCount = $this->admin_model->countTAXINVCListAll($project_id);
		$countFiltered = $this->admin_model->countTAXINVCListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->tax_invc_id) && !empty($member->tax_invc_id)) { $tax_invc_id = $member->tax_invc_id; }else { $tax_invc_id = '0'; }
			if(isset($member->tax_invc_no) && !empty($member->tax_invc_no)) { $tax_invc_no = $member->tax_invc_no; }else { $tax_invc_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			$amt = 0;
			$amtp = $this->admin_model->TaxInvoiceAmount($tax_invc_id);
            if(isset($amtp) && !empty($amtp)) { $amt = sprintf('%0.2f', $amtp); }else { $amt = '0'; }
			$htmlp = '';
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_tax_invoice_items" rel="'.$tax_invc_id.'" data-title="(#'.$tax_invc_no.') Tax Invoice Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$tax_invc_no.'</a>';
			
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$tax_invc_id.'" title="Edit Tax Invoice" rev="edit_tax_invoice" data-original-title="Edit Tax Invoice"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="popup_save" href="javascript:void(0);" rev="download_tax_invoice" rel="'.$tax_invc_no.'" data-title="(#'.$tax_invc_no.') Download Tax Invoice" data-status="allow"><i class="fa fa-download" style="color:#000; font-size:15px;"></i></a>';
			//$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="edit tooltips" rel="'.$tax_invc_id.'" title="Print Tax Invoice" rev="print_tax_invoice" data-original-title="Print Tax Invoice" download><i class="fa fa-print" style="color:#000; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="'.base_url().'payment-receipt/'.base64_encode($tax_invc_id).'" title="Payment Receipt"><img src="'.base_url().'uploads/images/tax_invoice_2.png" width="20px" height="20px"></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="'.base_url().'invoice-closure/'.base64_encode($tax_invc_id).'" title="Invoice Closure"><img src="'.base_url().'uploads/images/tax_invoice_1.png" width="20px" height="20px"></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="javascript:;" class="delete tooltips" rel="'.$tax_invc_id.'" title="Delete Tax Invoice" rev="delete_tax_invoice" data-original-title="Delete Tax Invoice"><i class="fa fa-trash" style="color:#F3565D; font-size:15px;"></i></a>';
			$html .= '<br><a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_tax_invoice" rel="'.$tax_invc_id.'" title="Click here to Approved Record" data-status="Y" style="margin-top:5px;">Approve</a>';
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$amt,
			$amt,
			$amt,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_dcc_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $project_id = base64_decode($project_id);
        }else{
            $project_id = 0;
        }
		$data = $row = array();
		$memData = $this->admin_model->getDCCListRows($_POST,$project_id);
		$allCount = $this->admin_model->countDCCListAll($project_id);
		$countFiltered = $this->admin_model->countDCCListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->challan_id) && !empty($member->challan_id)) { $challan_id = $member->challan_id; }else { $challan_id = '-'; }
			if(isset($member->dc_no) && !empty($member->dc_no)) { $dc_no = $member->dc_no; }else { $dc_no = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->customer_name) && !empty($member->customer_name)) { $customer_name = $member->customer_name; }else { $customer_name = '-'; }
			if(isset($member->status) && !empty($member->status) && $member->status !='Under Approval') { $status = $member->status; }else { $status = 'Under Approval'; }
			if(isset($member->created_on) && !empty($member->created_on)) { $created_on = $member->created_on; }else { $created_on = '-'; }
			$htmlp = '<a class="popup_save" href="javascript:void(0);" rev="view_dcc_items" rel="'.$challan_id.'" data-title="(#'.$dc_no.') Delivery Challan Item List" data-status="allow" style="margin-top:10px;"><span class="md-click-circle md-click-animate" style="height: 97px; width: 97px; top: -38.5312px; left: 29.4896px;"></span> '.$dc_no.'</a>';
			
			$html = '';
			$html .= '<a href="javascript:;" class="edit tooltips" rel="'.$challan_id.'" title="Edit Delivery Challan" rev="edit_delivery_challan" data-original-title="Edit Proforma Invoice"><i class="fa fa-edit" style="color:#3598dc; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="'.base_url().'uploads/sample_excel/client_delivery_challan.xlsx" class="edit tooltips" rel="'.$challan_id.'" title="Download Delivery Challan" rev="download_proforma_invoice" data-original-title="Download Delivery Challan" download><i class="fa fa-download" style="color:#000; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a href="'.base_url().'uploads/sample_excel/client_delivery_challan.xlsx" class="edit tooltips" rel="'.$challan_id.'" title="Print Delivery Challan" rev="download_proforma_invoice" data-original-title="Print Delivery Challan" download><i class="fa fa-print" style="color:#000; font-size:15px;"></i></a>';
			$html .= '&nbsp;&nbsp;&nbsp;<a class="btn btn-success btn-xs active_link_cmn" href="javascript:void(0);" rev="approved_delivery_challan" rel="'.$challan_id.'" title="Click here to Approved Record" data-status="Y">Approve</a>';
			$data[] = array(
			$i,
			$htmlp,
			$bp_code,
			$customer_name,
			$status,
			$created_on,
			$html
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
    
    public function view_tax_invoice_items()   
    {   
      $tax_invc_id = $this->input->post('id');
	  $data['tax_invc_id'] = $tax_invc_id;
      $view = $this->load->view('view-taxinvc-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function view_proforma_invoice_items()   
    {   
      $proforma_id = $this->input->post('id');
	  $data['proforma_id'] = $proforma_id;
      $view = $this->load->view('view-proinvc-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function convert_to_tax_invoice()   
    {   
      $proforma_id = $this->input->post('id');
	  $data['proforma_id'] = $proforma_id;
      $view = $this->load->view('convert-tax-invoice',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    
    public function view_dcc_items()   
    {   
      $challan_id = $this->input->post('id');
	  $data['challan_id'] = $challan_id;
      $view = $this->load->view('view-dc-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function download_tax_invoice()   
    {   
      $tax_invc_no = $this->input->post('id');
	  $data['tax_invc_no'] = $tax_invc_no;
      $view = $this->load->view('download-tax-invoice',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function download_proforma_invoice()   
    {   
      $proforma_no = $this->input->post('id');
	  $data['proforma_no'] = $proforma_no;
      $view = $this->load->view('download-proforma-invoice',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function view_dcvs_items()   
    {   
      $vs_id = $this->input->post('id');
	  $data['vs_id'] = $vs_id;
      $view = $this->load->view('view-dcvs-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function view_dciwip_items()   
    {   
      $i_wip_no = $this->input->post('id');
	  $data['i_wip_no'] = $i_wip_no;
      $view = $this->load->view('view-dciwip-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    public function view_dcpwip_items()   
    {   
      $p_wip_no = $this->input->post('id');
	  $data['p_wip_no'] = $p_wip_no;
      $view = $this->load->view('view-dcpwip-items',$data,TRUE);
      $this->json->jsonReturn(array('view'=>$view));
    }
    
    
    public function boq_transaction_display() 
		{
		$boq_transaction_cnt = $this->input->post('boq_transaction_cnt');
        $project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQTransListRows($_POST,$boq_transaction_cnt,$project_id);
		$allCount = $this->admin_model->countBOQTransListAll($boq_transaction_cnt,$project_id);
		$countFiltered = $this->admin_model->countBOQTransListFiltered($_POST,$boq_transaction_cnt,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $design_qty = $member->design_qty; }else { $design_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$scheduled_qty,
			$design_qty,
			$rate_basic,
			$gst,
			$non_schedule
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_boq_item_list() 
		{
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQListRows($_POST);
		$allCount = $this->admin_model->countBOQListAll();
		$countFiltered = $this->admin_model->countBOQListFiltered($_POST);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->design_qty) && !empty($member->design_qty)) { $design_qty = $member->design_qty; }else { $design_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$scheduled_qty,
			$design_qty,
			$rate_basic,
			$gst,
			$non_schedule
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function boq_scha_list_display() 
		{
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }    
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQOperListRows($_POST,$project_id);
		$allCount = $this->admin_model->countBOQOperListAll($project_id);
		$countFiltered = $this->admin_model->countBOQOperListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			$design_qty = $this->admin_model->get_design_qty($project_id,$boq_code);
		    if(isset($design_qty) && !empty($design_qty)) { $design_qty = $design_qty; }else { $design_qty = '0'; }
			$oper_qty = 0;
			if($scheduled_qty < $design_qty){
			$oper_qty = $scheduled_qty;    
			}else{
			$oper_qty = $design_qty;    
			}
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$scheduled_qty,
			$oper_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    
    public function boq_schc_list_display() 
		{
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQCListRows($_POST,$project_id);
		$allCount = $this->admin_model->countBOQCListAll($project_id);
		$countFiltered = $this->admin_model->countBOQCListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			$design_qty = $this->admin_model->get_design_qty($project_id,$boq_code);
		    if(isset($design_qty) && !empty($design_qty)) { $design_qty = $design_qty; }else { $design_qty = '0'; }
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$design_qty,
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function boq_schb_list_display() 
		{
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQOperListRows($_POST,$project_id);
		$allCount = $this->admin_model->countBOQOperListAll($project_id);
		$countFiltered = $this->admin_model->countBOQOperListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			$design_qty = $this->admin_model->get_design_qty($project_id,$boq_code);
		    if(isset($design_qty) && !empty($design_qty)) { $design_qty = $design_qty; }else { $design_qty = '0'; }
			$var_qty = 0;
			if($scheduled_qty < $design_qty){
			$var_qty = $design_qty - $scheduled_qty;    
			}
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$scheduled_qty,
			$var_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function boq_schbn_list_display() 
		{
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }
		$user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getBOQOperListRows($_POST,$project_id);
		$allCount = $this->admin_model->countBOQOperListAll($project_id);
		$countFiltered = $this->admin_model->countBOQOperListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			
			$design_qty = $this->admin_model->get_design_qty($project_id,$boq_code);
		    if(isset($design_qty) && !empty($design_qty)) { $design_qty = $design_qty; }else { $design_qty = '0'; }
			
			$qty = 0;
			$var_qty = 0;
			$qty = $design_qty - $scheduled_qty;    
			if($qty < 0){
			$var_qty = $scheduled_qty - $design_qty;    
			}
			$data[] = array(
			$i,
			$bp_code,
			$boq_code,
			$item_description,
			$unit,
			$scheduled_qty,
			$var_qty
			);
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function project_boq_list_display() 
		{
		$project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
        $project_id = base64_decode($project_id);
        }
        $filter = $this->input->post('filter');
        if(isset($filter) && !empty($filter)){
        $filter = $filter;
        }else{
        $filter = 'original';    
        }
        $calculatedfiler = $this->input->post('calculatedfiler');
        if(isset($calculatedfiler) && !empty($calculatedfiler)){
        $calculatedfiler = $calculatedfiler;
        }else{
        $calculatedfiler = 'without_gst';    
        }
        $user_id = $this->session->userData('user_id');
		if(isset($user_id) && !empty($user_id)){
		$data = $row = array();
		$memData = $this->admin_model->getViewBOQListRows($_POST,$project_id);
		$allCount = $this->admin_model->countViewBOQListAll($project_id);
		$countFiltered = $this->admin_model->countViewBOQListFiltered($_POST,$project_id);
        $i = $_POST['start'];
		foreach($memData as $member){
            $i++;
            if(isset($member->boq_items_id) && !empty($member->boq_items_id)) { $boq_items_id = $member->boq_items_id; }else { $boq_items_id = '-'; }
			if(isset($member->project_id) && !empty($member->project_id)) { $project_id = $member->project_id; }else { $project_id = '-'; }
			if(isset($member->boq_code) && !empty($member->boq_code)) { $boq_code = $member->boq_code; }else { $boq_code = '-'; }
			if(isset($member->item_description) && !empty($member->item_description)) { $item_description = $member->item_description; }else { $item_description = '-'; }
			if(isset($member->unit) && !empty($member->unit)) { $unit = $member->unit; }else { $unit = '-'; }
			if(isset($member->scheduled_qty) && !empty($member->scheduled_qty)) { $scheduled_qty = $member->scheduled_qty; }else { $scheduled_qty = '0'; }
			if(isset($member->rate_basic) && !empty($member->rate_basic)) { $rate_basic = $member->rate_basic; }else { $rate_basic = '0'; }
			if(isset($member->gst) && !empty($member->gst)) { $gst = $member->gst; }else { $gst = '0'; }
			if(isset($member->non_schedule) && !empty($member->non_schedule)) { $non_schedule = $member->non_schedule; }else { $non_schedule = 'N'; }
			if(isset($member->status) && !empty($member->status) && $status == 'Y') { $status = 'Approved'; }else { $status = 'Not Approved'; }
			if(isset($member->bp_code) && !empty($member->bp_code)) { $bp_code = $member->bp_code; }else { $bp_code = '0'; }
			if(isset($member->is_billing_inter_state) && !empty($member->is_billing_inter_state)) { $is_billing_inter_state = $member->is_billing_inter_state; }else { $is_billing_inter_state = 'N'; }
			
			$design_qty = $this->admin_model->get_design_qty($project_id,$boq_code);
		    if(isset($design_qty) && !empty($design_qty)) { $design_qty = $design_qty; }else { $design_qty = '0'; }
			
		    $IGST = 0;
			$SGST = 0;
			$CGST = 0;
			$gst_amount=0;
			$sgst_amount=0;
			$cgst_amount=0;
			$ea_qty = 0;
			$scheduled_amount = 0;
			$scheduled_amount_wgst = 0;
			$sell_qty = 0;
			$positive_var = 0;
			$negative_var = 0;
			$positive_var_amount = 0;
			$positive_var_amount_wgst = 0;
			$negative_var_amount = 0;
			$negative_var_amount_wgst = 0;
			$sell_amount = 0;
			$sell_amount_wgst = 0;
			$non_sch_amount = 0;
			$non_sch_amount_wgst = 0;
			$fianl_amount = 0;
			$fianl_amount_wgst = 0;
			if($scheduled_qty >= $design_qty){
			$negative_var =  $scheduled_qty - $design_qty;
			}else{
			$positive_var =  $scheduled_qty - $design_qty; 
			$positive_var =  abs($positive_var); 
			$ea_qty = $positive_var;
			}
			$sell_qty = $scheduled_qty + $positive_var - $negative_var;
			$scheduled_amount = $scheduled_qty * $rate_basic;
			$positive_var_amount = $positive_var * $rate_basic;
			$negative_var_amount = $negative_var * $rate_basic;
			$sell_amount = $sell_qty * $rate_basic;
			if($non_schedule == 'Y'){
			    $non_sch_amount = $design_qty * $rate_basic;
			}
			$fianl_amount = $design_qty * $rate_basic;
			if($gst > 0){
			if($is_billing_inter_state == 'Y'){
    		    $gst_amount = $rate_basic  * ($gst/100); 
			    $scheduled_amount_wgst = $scheduled_qty * ($rate_basic + $gst_amount);
			    $positive_var_amount_wgst = $positive_var * ($rate_basic + $gst_amount);
			    $negative_var_amount_wgst = $negative_var * ($rate_basic + $gst_amount);
			    $sell_amount_wgst = $design_qty * ($rate_basic + $gst_amount);
			    $fianl_amount_wgst = $design_qty * ($rate_basic + $gst_amount);
			}else{
    			$SGST = $gst / 2;
    		    $CGST = $gst / 2;
    		    $sgst_amount = $rate_basic  * ($SGST/100); 
			    $cgst_amount = $rate_basic  * ($CGST/100); 
			    $scheduled_amount_wgst = $scheduled_qty * ($rate_basic + $sgst_amount + $cgst_amount);
			    $positive_var_amount_wgst = $positive_var * ($rate_basic + $sgst_amount + $cgst_amount);
			    $negative_var_amount_wgst = $negative_var * ($rate_basic + $sgst_amount + $cgst_amount);
			    $sell_amount_wgst = $sell_qty * ($rate_basic + $sgst_amount + $cgst_amount);
			    $non_sch_amount_wgst = $design_qty * ($rate_basic + $sgst_amount + $cgst_amount);
			    $fianl_amount_wgst = $design_qty * ($rate_basic + $sgst_amount + $cgst_amount);
			}
			}
			if($filter == 'original'){
			    $data[] = array(
    			$i,
    			$status,
    			$bp_code,
    			$boq_code,
    			$item_description,
    			$unit,
    			$scheduled_qty);
			}else{
			    if($calculatedfiler == 'without_gst' && $filter == 'calculated'){
			        $data[] = array(
        			$i,
        			$status,
        			$bp_code,
        			$boq_code,
        			$item_description,
        			$unit,
        			$scheduled_qty,
        			$positive_var,
        			$negative_var,
        			$sell_qty,
        			$ea_qty,
        			sprintf('%0.2f', $scheduled_amount),
        			sprintf('%0.2f', $positive_var_amount),
        			sprintf('%0.2f', $negative_var_amount),
        			sprintf('%0.2f', $sell_amount),
        			sprintf('%0.2f', $non_sch_amount),
        			sprintf('%0.2f', $fianl_amount));
			    }else{
			        $data[] = array(
        			$i,
        			$status,
        			$bp_code,
        			$boq_code,
        			$item_description,
        			$unit,
        			$scheduled_qty,
        			$positive_var,
        			$negative_var,
        			$sell_qty,
        			$ea_qty,
        			sprintf('%0.2f', $scheduled_amount),
        			sprintf('%0.2f', $scheduled_amount_wgst),
        			sprintf('%0.2f', $positive_var_amount),
        			sprintf('%0.2f', $positive_var_amount_wgst),
        			sprintf('%0.2f', $negative_var_amount),
        			sprintf('%0.2f', $negative_var_amount_wgst),
        			sprintf('%0.2f', $sell_amount),
        			sprintf('%0.2f', $sell_amount_wgst),
        			sprintf('%0.2f', $non_sch_amount),
        			sprintf('%0.2f', $non_sch_amount_wgst),
        			sprintf('%0.2f', $fianl_amount),
        			sprintf('%0.2f', $fianl_amount_wgst)
        			);       
			    }
    		}
        }
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $allCount,
            "recordsFiltered" => $countFiltered,
            "data" => $data,
        );
        echo json_encode($output);
		}

    }
    public function publish_boq_items_bulk_upload() {
        $project_id = $this->input->post('project_id');
        $user_id = $this->session->userData("user_id");
		if(isset($user_id) && !empty($user_id)){
    		if(isset($project_id) && !empty($project_id)){
    		    $steps = $this->admin_model->getTotalBoqTransactionCnt($project_id);
    		    if(isset($steps) && $steps !='no'){
    		        $steps = $steps + 1;
    		    }else{
    		        $steps = 0;
    		    }
                if(isset($_FILES['boq_excel_file']['name']))//Code for to take image from form and check isset
                {
                    $boq_excel_file=$_FILES['boq_excel_file']['name']; //here [] name attribute
                    $arr_boq_excel_file = array('upload_path' =>'./uploads/boq_excel_file/',
                        'fieldname' => 'boq_excel_file',
                        'encrypt_name' => TRUE,        
                        'overwrite' => FALSE,
                        'allowed_types' => '*' );
                    $arr_boq_excel_file = $this->imageupload->image_upload($arr_boq_excel_file);
                    $error= $this->upload->display_errors();
                    if(isset($arr_boq_excel_file) && !empty($arr_boq_excel_file)) {
                        $userData = $this->upload->data(); 
                        $category_img = $userData['file_name'];
                    }
                    $path = $_FILES["boq_excel_file"]["tmp_name"];
                    require_once APPPATH . "/third_party/PHPExcel.php";
                    $inputFileName = $path;
                    try {
                        $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                        $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                        $objPHPExcel = $objReader->load($inputFileName);
                        $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                        $flag = true;
                        $i=0;
        				$insertdata = array();
                        foreach ($allDataInSheet as $value) {
                            if($flag){
                                $flag =false;
                                continue;
                            }
                            if(isset($value['A']) && !empty($value['A'])) { $boq_code = $value['A']; }else { $boq_code = '0'; }
                			if(isset($value['B']) && !empty($value['B'])) { $hsn_sac_code = $value['B']; }else { $hsn_sac_code = '0'; }
                			if(isset($value['C']) && !empty($value['C'])) { $item_description = $value['C']; }else { $item_description = ''; }
                			if(isset($value['D']) && !empty($value['D'])) { $unit = $value['D']; }else { $unit = ''; }
                			if(isset($value['E']) && !empty($value['E'])) { $scheduled_qty = $value['E']; }else { $scheduled_qty = '0'; }
                			if(isset($value['F']) && !empty($value['F'])) { $design_qty = $value['F']; }else { $design_qty = '0'; }
                			if(isset($value['G']) && !empty($value['G'])) { $rate_basic = $value['G']; }else { $rate_basic = '0'; }
                			if(isset($value['H']) && !empty($value['H'])) { $gst = $value['H']; }else { $gst = '0'; }
                			if(isset($value['I']) && !empty($value['I'])) { $non_schedule = $value['I']; }else { $non_schedule = ''; }
                			
                			$inserdata[$i]['project_id'] = $project_id;
                            $inserdata[$i]['boq_code'] = $boq_code;
                            $inserdata[$i]['hsn_sac_code'] =  $hsn_sac_code;
        					$inserdata[$i]['item_description'] =  $item_description;
        					$inserdata[$i]['unit'] =  $unit;
        					$inserdata[$i]['scheduled_qty'] =  $scheduled_qty;
        					$inserdata[$i]['design_qty'] =  $design_qty;
        					$inserdata[$i]['rate_basic'] =  $rate_basic;
        					$inserdata[$i]['gst'] =  $gst;
        					$inserdata[$i]['non_schedule'] =  $non_schedule;
        					$inserdata[$i]['created_by'] =  $user_id;
        					$inserdata[$i]['created_on'] =  date('Y-m-d H:i:s');
        					$inserdata[$i]['modified_by'] =  $user_id;
        					$inserdata[$i]['modified_on'] =  date('Y-m-d H:i:s');
        					$inserdata[$i]['steps'] =  $steps;
        					if (isset($inserdata) && !empty($inserdata)) {
        						$result = $this->admin_model->bulk_insert_boq_items_data($inserdata);   
        						$this->json->jsonReturn(array(  
        							'valid'=>TRUE,
        							'msg'=>'<div class="alert modify alert-success">BOQ Items Uploaded Successfully!</div>',
        							'redirect' => base_url().'upload-boq-items'
        						));
        					}else{
        						 $this->json->jsonReturn(array(  
        							'valid'=>FALSE,
        							'msg'=>'<div class="alert modify alert-danger">Error! While Uploading Data empty!</div>'
        						));
        					}
                        }
                    } catch (Exception $e) {
                       die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                                . '": ' .$e->getMessage());
                    }
                }else{
                    $this->json->jsonReturn(array(  
        				'valid'=>FALSE,
        				'msg'=>'<div class="alert modify alert-danger">Error! While Uploading Data empty!</div>'
        			));
                }
    		}else{
    		    $this->json->jsonReturn(array(  
        			'valid'=>FALSE,
        			'msg'=>'<div class="alert modify alert-danger">Please select project!</div>'
        		));
    		}    
		}else{
		    $this->json->jsonReturn(array(  
        		'valid'=>FALSE,
        		'msg'=>'<div class="alert modify alert-danger">Please loggedin!</div>'
        	));
		}
    }
    public function get_all_project_list(){
        $user_id=$this->session->userData("user_id");
        $res = array();
        $project_data = $this->common_model->fetchDataDesc('tbl_projects','project_id');
        if(isset($project_data) && !empty($project_data) && isset($user_id) && !empty($user_id)){
            $i=0;
            foreach($project_data as $key){
                $res[$i]['id']  = $key->project_id;
                $res[$i]['text']  = $key->bp_code.' ('.$key->customer_name.')';
                $i++;
            }
        }
        echo json_encode(array("users"=>$res));
    }
	public function upload_boq_items() 
    {
        $this->load->view('upload-boq-items');
    }
	public function upload_boq_items_file()
    {
        if($_FILES['file']['name'] != '')
        {
            $test =explode(".", $_FILES['file']['name']);
            $extension = end($test);
            $name = rand(100000000, 999999999) . '.' . $extension;
            $location = './uploads/upload_boq_file/'.$name;
            move_uploaded_file($_FILES['file']['tmp_name'], $location);
            $file_path = base_url().'uploads/upload_boq_file/'.$name;
            echo $name;
        }
    }
    public function save_boq_file_dataold()
    {
    	$user_id = $this->session->userdata('user_id');
        if(isset($user_id) && !empty($user_id)){
            $project_id = $this->input->post('project_id');
            if(isset($project_id) && !empty($project_id)){
                $boq_code_r = $this->input->post('boq_code_r');
                if(isset($boq_code_r) && !empty($boq_code_r)) {$boq_code_r = trim($boq_code_r); } else {$boq_code_r = ''; }
                $hsn_sac_code_r = $this->input->post('hsn_sac_code_r');
                if(isset($hsn_sac_code_r) && !empty($hsn_sac_code_r)) {$hsn_sac_code_r = trim($hsn_sac_code_r); } else {$hsn_sac_code_r = ''; }
                $item_description_r = $this->input->post('item_description_r');
                if(isset($item_description_r) && !empty($item_description_r)) {$item_description_r = trim($item_description_r); } else {$item_description_r = ''; }
                $item_description_r = $this->input->post('item_description_r');
                if(isset($item_description_r) && !empty($item_description_r)) {$item_description_r = trim($item_description_r); } else {$item_description_r = ''; }
                
            }else{
                
            }
        }else{
            
        }
        $id = $this->input->post('id');
        $project_code =$this->input->post('project_code');
        $boq_code =$this->input->post('boq_code');
        $boq_item_file =$this->input->post('boq_item_file');
    }
    public function save_client_dc_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $dc_no = $this->input->post('dc_no');
        if(isset($project_id) && !empty($project_id) && isset($dc_no) && !empty($dc_no)){
            $delivery_challan = $this->common_model->selectDetailsWhr('tbl_delivery_challan','dc_no',$dc_no);
            if(isset($delivery_challan) && empty($delivery_challan)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $scheduled_qty = $this->input->post('scheduled_qty');
            if(isset($scheduled_qty) && !empty($scheduled_qty)) {$scheduled_qty = $scheduled_qty; } else {$scheduled_qty=''; }
            if(isset($scheduled_qty) && empty($scheduled_qty)){
            $error = 'Y';
            $error_message = 'Please enter Scheduled Qty!';
            }
            $design_qty = $this->input->post('design_qty');
            if(isset($design_qty) && !empty($design_qty)) {$design_qty = $design_qty; } else {$design_qty=''; }
            if(isset($design_qty) && empty($design_qty)){
            $error = 'Y';
            $error_message = 'Please enter Design Qty!';
            }
            $receive_qty = $this->input->post('receive_qty');
            if(isset($receive_qty) && !empty($receive_qty)) {$receive_qty = $receive_qty; } else {$receive_qty=''; }
            if(isset($receive_qty) && empty($receive_qty)){
            $error = 'Y';
            $error_message = 'Please enter Received Qty!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($scheduled_qty) && empty($scheduled_qty)
            && isset($design_qty) && empty($design_qty)
            && isset($receive_qty) && empty($receive_qty)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter  delivery challan Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'dc_no'=>$dc_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $challan_id = $this->common_model->addData('tbl_delivery_challan',$main_arr);
                        if($challan_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($scheduled_qty[$i]) && !empty($scheduled_qty[$i])) {$scheduled_qty_s = $scheduled_qty[$i]; } else {$scheduled_qty_s=''; }            
                                if(isset($design_qty[$i]) && !empty($design_qty[$i])) {$design_qty_s = $design_qty[$i]; } else {$design_qty_s=''; }            
                                if(isset($receive_qty[$i]) && !empty($receive_qty[$i])) {$receive_qty_s = $receive_qty[$i]; } else {$receive_qty_s=''; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($scheduled_qty_s) && !empty($scheduled_qty_s)
                                && isset($design_qty_s) && !empty($design_qty_s)
                                && isset($receive_qty_s) && !empty($receive_qty_s)){
                                    $save_arr[] = array('challan_id'=>$challan_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'scheduled_qty'=>$scheduled_qty_s,'design_qty'=>$design_qty_s,'received_qty'=>$receive_qty_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_deliv_challan_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Client Delivery Challan Details Saved Successfully!</div>',
                            'redirect' => base_url().'client-delivery-challan'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid client delivery challan Details!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Client delivery challan no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    
    public function save_provisional_wip_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $p_wip_no = $this->input->post('prov_wip_no');
        if(isset($project_id) && !empty($project_id) && isset($p_wip_no) && !empty($p_wip_no)){
            $provisional_wip = $this->common_model->selectDetailsWhr('tbl_provisional_wip','p_wip_no',$p_wip_no);
            if(isset($provisional_wip) && empty($provisional_wip)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $avl_qty = $this->input->post('avl_qty');
            if(isset($avl_qty) && !empty($avl_qty)) {$avl_qty = $avl_qty; } else {$avl_qty=''; }
            if(isset($avl_qty) && empty($avl_qty)){
            $error = 'Y';
            $error_message = 'Please enter Avl Qty!';
            }
            $prov_qty = $this->input->post('prov_qty');
            if(isset($prov_qty) && !empty($prov_qty)) {$prov_qty = $prov_qty; } else {$prov_qty=''; }
            if(isset($prov_qty) && empty($prov_qty)){
            $error = 'Y';
            $error_message = 'Please enter Provisional Qty!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($avl_qty) && empty($avl_qty)
            && isset($prov_qty) && empty($prov_qty)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter Provisional WIP Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'p_wip_no'=>$p_wip_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $p_wip_id = $this->common_model->addData('tbl_provisional_wip',$main_arr);
                        if($p_wip_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($avl_qty[$i]) && !empty($avl_qty[$i])) {$avl_qty_s = $avl_qty[$i]; } else {$avl_qty_s=''; }            
                                if(isset($prov_qty[$i]) && !empty($prov_qty[$i])) {$prov_qty_s = $prov_qty[$i]; } else {$prov_qty_s=''; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($avl_qty_s) && !empty($avl_qty_s)
                                && isset($prov_qty_s) && !empty($prov_qty_s)){
                                    $save_arr[] = array('p_wip_id'=>$p_wip_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'avl_qty'=>$avl_qty_s,'prov_qty'=>$prov_qty_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_prov_wip_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Provisional WIP Details Saved Successfully!</div>',
                            'redirect' => base_url().'add-provisional-wip'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Provisional WIP!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Provisional WIP no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    
    public function save_tax_invoice_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $tax_invc_no = $this->input->post('tax_invoice_no');
        if(isset($project_id) && !empty($project_id) && isset($tax_invc_no) && !empty($tax_invc_no)){
            $tax_invc = $this->common_model->selectDetailsWhr('tbl_tax_invc','tax_invc_no',$tax_invc_no);
            if(isset($tax_invc) && empty($tax_invc)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $qty = $this->input->post('qty');
            if(isset($qty) && !empty($qty)) {$qty = $qty; } else {$qty=''; }
            if(isset($qty) && empty($qty)){
            $error = 'Y';
            $error_message = 'Please enter Qty!';
            }
            $rate = $this->input->post('rate');
            if(isset($rate) && !empty($rate)) {$rate = $rate; } else {$rate=''; }
            if(isset($rate) && empty($rate)){
            $error = 'Y';
            $error_message = 'Please enter Rate!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($qty) && empty($qty)
            && isset($rate) && empty($rate)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter Tax Invoice Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'tax_invc_no'=>$tax_invc_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $tax_invc_id = $this->common_model->addData('tbl_tax_invc',$main_arr);
                        if($tax_invc_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($qty[$i]) && !empty($qty[$i])) {$qty_s = $qty[$i]; } else {$qty_s=0; }            
                                if(isset($rate[$i]) && !empty($rate[$i])) {$rate_s = $rate[$i]; } else {$rate_s=0; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($qty_s) && !empty($qty_s)
                                && isset($rate_s) && !empty($rate_s)){
                                    $save_arr[] = array('tax_invc_id'=>$tax_invc_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'qty'=>$qty_s,'rate'=>$rate_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_tax_invc_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Tax Invoice Details Saved Successfully!</div>',
                            'redirect' => base_url().'create-tax-invoice'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Tax Invoice!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Tax Invoice no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    public function save_proforma_invoice_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $proforma_no = $this->input->post('proforma_invoice_no');
        if(isset($project_id) && !empty($project_id) && isset($proforma_no) && !empty($proforma_no)){
            $proforma_invc = $this->common_model->selectDetailsWhr('tbl_proforma_invc','proforma_no',$proforma_no);
            if(isset($proforma_invc) && empty($proforma_invc)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $qty = $this->input->post('qty');
            if(isset($qty) && !empty($qty)) {$qty = $qty; } else {$qty=''; }
            if(isset($qty) && empty($qty)){
            $error = 'Y';
            $error_message = 'Please enter Qty!';
            }
            $rate = $this->input->post('rate');
            if(isset($rate) && !empty($rate)) {$rate = $rate; } else {$rate=''; }
            if(isset($rate) && empty($rate)){
            $error = 'Y';
            $error_message = 'Please enter Rate!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($qty) && empty($qty)
            && isset($rate) && empty($rate)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter Proforma Invoice Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'proforma_no'=>$proforma_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $proforma_id = $this->common_model->addData('tbl_proforma_invc',$main_arr);
                        if($proforma_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($qty[$i]) && !empty($qty[$i])) {$qty_s = $qty[$i]; } else {$qty_s=0; }            
                                if(isset($rate[$i]) && !empty($rate[$i])) {$rate_s = $rate[$i]; } else {$rate_s=0; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($qty_s) && !empty($qty_s)
                                && isset($rate_s) && !empty($rate_s)){
                                    $save_arr[] = array('proforma_id'=>$proforma_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'qty'=>$qty_s,'rate'=>$rate_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_proforma_invc_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Proforma Invoice Details Saved Successfully!</div>',
                            'redirect' => base_url().'create-proforma-invoice'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Proforma Invoice!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Proforma Invoice no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    public function save_installed_wip_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $i_wip_no = $this->input->post('installed_wip_no');
        if(isset($project_id) && !empty($project_id) && isset($i_wip_no) && !empty($i_wip_no)){
            $installed_wip = $this->common_model->selectDetailsWhr('tbl_installed_wip','i_wip_no',$i_wip_no);
            if(isset($installed_wip) && empty($installed_wip)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $avl_qty = $this->input->post('avl_qty');
            if(isset($avl_qty) && !empty($avl_qty)) {$avl_qty = $avl_qty; } else {$avl_qty=''; }
            if(isset($avl_qty) && empty($avl_qty)){
            $error = 'Y';
            $error_message = 'Please enter Avl Qty!';
            }
            $installed_qty = $this->input->post('installed_qty');
            if(isset($installed_qty) && !empty($installed_qty)) {$installed_qty = $installed_qty; } else {$installed_qty=''; }
            if(isset($installed_qty) && empty($installed_qty)){
            $error = 'Y';
            $error_message = 'Please enter Installed Qty!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($avl_qty) && empty($avl_qty)
            && isset($installed_qty) && empty($installed_qty)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter Installed WIP Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'i_wip_no'=>$i_wip_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $i_wip_id = $this->common_model->addData('tbl_installed_wip',$main_arr);
                        if($i_wip_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($avl_qty[$i]) && !empty($avl_qty[$i])) {$avl_qty_s = $avl_qty[$i]; } else {$avl_qty_s=''; }            
                                if(isset($installed_qty[$i]) && !empty($installed_qty[$i])) {$installed_qty_s = $installed_qty[$i]; } else {$installed_qty_s=''; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($avl_qty_s) && !empty($avl_qty_s)
                                && isset($installed_qty_s) && !empty($installed_qty_s)){
                                    $save_arr[] = array('i_wip_id'=>$i_wip_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'avl_qty'=>$avl_qty_s,'installed_qty'=>$installed_qty_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_install_wip_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Installed WIP Details Saved Successfully!</div>',
                            'redirect' => base_url().'add-installed-wip'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Installed WIP!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Installed WIP no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    public function save_virtual_stock_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        $virtual_stock_no = $this->input->post('virtual_stock_no');
        if(isset($project_id) && !empty($project_id) && isset($virtual_stock_no) && !empty($virtual_stock_no)){
            $virtual_stock = $this->common_model->selectDetailsWhr('tbl_virtual_stock','vs_no',$virtual_stock_no);
            if(isset($virtual_stock) && empty($virtual_stock)){
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $avl_qty = $this->input->post('avl_qty');
            if(isset($avl_qty) && !empty($avl_qty)) {$avl_qty = $avl_qty; } else {$avl_qty=''; }
            if(isset($avl_qty) && empty($avl_qty)){
            $error = 'Y';
            $error_message = 'Please enter Avl Qty!';
            }
            $stock_qty = $this->input->post('stock_qty');
            if(isset($stock_qty) && !empty($stock_qty)) {$stock_qty = $stock_qty; } else {$stock_qty=''; }
            if(isset($stock_qty) && empty($stock_qty)){
            $error = 'Y';
            $error_message = 'Please enter Stock Qty!';
            }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($avl_qty) && empty($avl_qty)
            && isset($stock_qty) && empty($stock_qty)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter Warehouse Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        $main_arr = array('project_id'=>$project_id,'vs_no'=>$virtual_stock_no,'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'display'=>'Y','status'=>'Under Approval');
                        $vs_id = $this->common_model->addData('tbl_virtual_stock',$main_arr);
                        if($vs_id){
                            for($i=0;$i<count($boq_code);$i++){
                                if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                                if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                                if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                                if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                                if(isset($avl_qty[$i]) && !empty($avl_qty[$i])) {$avl_qty_s = $avl_qty[$i]; } else {$avl_qty_s=''; }            
                                if(isset($stock_qty[$i]) && !empty($stock_qty[$i])) {$stock_qty_s = $stock_qty[$i]; } else {$stock_qty_s=''; }            
                                
                                if(isset($boq_code_s) && !empty($boq_code_s)
                                && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                                && isset($item_description_s) && !empty($item_description_s)
                                && isset($unit_s) && !empty($unit_s)
                                && isset($avl_qty_s) && !empty($avl_qty_s)
                                && isset($stock_qty_s) && !empty($stock_qty_s)){
                                    $save_arr[] = array('vs_id'=>$vs_id,'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                    'unit'=>$unit_s,'avl_qty'=>$avl_qty_s,'stock_qty'=>$stock_qty_s,
                                    'created_by'=>$user_id,'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'));    
                                }
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_virtual_stock_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">Warehouse Details Saved Successfully!</div>',
                            'redirect' => base_url().'move-to-warehouse'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid Warehouse!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Warehouse no already exist!</div>'
            ));    
        }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    public function save_boq_item_details() 
    {
        $save_arr = array();
        $project_id = $this->input->post('project_id');
        if(isset($project_id) && !empty($project_id)){
            $steps = $this->admin_model->getTotalBoqTransactionCnt($project_id);
    		if(isset($steps) && $steps !='no'){
    		    $steps = $steps + 1;
    		}else{
    		    $steps = 0;
    	    }
            $error = 'N';
            $error_message = '';
            $user_id = $this->session->userdata('user_id');
            if(isset($user_id) && empty($user_id)){
            $error = 'Y';
            $error_message = 'Please loggedin!';
            }
            $boq_code = $this->input->post('boq_code');
            if(isset($boq_code) && !empty($boq_code)) {$boq_code = $boq_code; } else {$boq_code=''; }
            if(isset($boq_code) && empty($boq_code)){
            $error = 'Y';
            $error_message = 'Please enter BOQ Sr No!';
            }
            $hsn_sac_code = $this->input->post('hsn_sac_code');
            if(isset($hsn_sac_code) && !empty($hsn_sac_code)) {$hsn_sac_code = $hsn_sac_code; } else {$hsn_sac_code=''; }
            if(isset($hsn_sac_code) && empty($hsn_sac_code)){
            $error = 'Y';
            $error_message = 'Please enter HSN/SAC Code!';
            }
            $item_description = $this->input->post('item_description');
            if(isset($item_description) && !empty($item_description)) {$item_description = $item_description; } else {$item_description=''; }
            if(isset($item_description) && empty($item_description)){
            $error = 'Y';
            $error_message = 'Please enter Item Description!';
            }
            $unit = $this->input->post('unit');
            if(isset($unit) && !empty($unit)) {$unit = $unit; } else {$unit=''; }
            if(isset($unit) && empty($unit)){
            $error = 'Y';
            $error_message = 'Please enter Unit!';
            }
            $scheduled_qty = $this->input->post('scheduled_qty');
            if(isset($scheduled_qty) && !empty($scheduled_qty)) {$scheduled_qty = $scheduled_qty; } else {$scheduled_qty=''; }
            if(isset($scheduled_qty) && empty($scheduled_qty)){
            $error = 'Y';
            $error_message = 'Please enter Scheduled Qty!';
            }
            $design_qty = $this->input->post('design_qty');
            if(isset($design_qty) && !empty($design_qty)) {$design_qty = $design_qty; } else {$design_qty=''; }
            if(isset($design_qty) && empty($design_qty)){
            $error = 'Y';
            $error_message = 'Please enter Design Qty!';
            }
            $rate_basic = $this->input->post('rate_basic');
            if(isset($rate_basic) && !empty($rate_basic)) {$rate_basic = $rate_basic; } else {$rate_basic=''; }
            if(isset($rate_basic) && empty($rate_basic)){
            $error = 'Y';
            $error_message = 'Please enter Rate Basic!';
            }
            $gst = $this->input->post('gst');
            if(isset($gst) && !empty($gst)) {$gst = $gst; } else {$gst=''; }
            $non_schedule = $this->input->post('non_schedule');
            if(isset($non_schedule) && !empty($non_schedule)) {$non_schedule = $non_schedule; } else {$non_schedule=''; }
            if(isset($boq_code) && empty($boq_code)
            && isset($hsn_sac_code) && empty($hsn_sac_code)
            && isset($item_description) && empty($item_description)
            && isset($unit) && empty($unit)
            && isset($scheduled_qty) && empty($scheduled_qty)
            && isset($design_qty) && empty($design_qty)
            && isset($rate_basic) && empty($rate_basic)){
                $this->json->jsonReturn(array(
                    'valid'=>FALSE,
                    'msg'=>'<div class="alert modify alert-danger">Please Enter BOQ Items Details!!</div>'
                ));    
            }else{
                if($error == 'N'){
                    if(isset($boq_code) && !empty($boq_code)){
                        for($i=0;$i<count($boq_code);$i++){
                            if(isset($boq_code[$i]) && !empty($boq_code[$i])) {$boq_code_s = $boq_code[$i]; } else {$boq_code_s=''; }
                            if(isset($hsn_sac_code[$i]) && !empty($hsn_sac_code[$i])) {$hsn_sac_code_s = $hsn_sac_code[$i]; } else {$hsn_sac_code_s=''; }
                            if(isset($item_description[$i]) && !empty($item_description[$i])) {$item_description_s = $item_description[$i]; } else {$item_description_s=''; }            
                            if(isset($unit[$i]) && !empty($unit[$i])) {$unit_s = $unit[$i]; } else {$unit_s=''; }            
                            if(isset($scheduled_qty[$i]) && !empty($scheduled_qty[$i])) {$scheduled_qty_s = $scheduled_qty[$i]; } else {$scheduled_qty_s=''; }            
                            if(isset($design_qty[$i]) && !empty($design_qty[$i])) {$design_qty_s = $design_qty[$i]; } else {$design_qty_s=''; }            
                            if(isset($rate_basic[$i]) && !empty($rate_basic[$i])) {$rate_basic_s = $rate_basic[$i]; } else {$rate_basic_s=''; }            
                            if(isset($gst[$i]) && !empty($gst[$i])) {$gst_s = $gst[$i]; } else {$gst_s='0'; }            
                            if(isset($non_schedule[$i]) && !empty($non_schedule[$i])) {$non_schedule_s = $non_schedule[$i]; } else {$non_schedule_s ='N'; }
                            
                            if(isset($boq_code_s) && !empty($boq_code_s)
                            && isset($hsn_sac_code_s) && !empty($hsn_sac_code_s)
                            && isset($item_description_s) && !empty($item_description_s)
                            && isset($unit_s) && !empty($unit_s)
                            && isset($scheduled_qty_s) && !empty($scheduled_qty_s)
                            && isset($design_qty_s) && !empty($design_qty_s)
                            && isset($rate_basic_s) && !empty($rate_basic_s)){
                                $save_arr[] = array('project_id'=>$project_id,
                                'boq_code'=>$boq_code_s,'hsn_sac_code'=>$hsn_sac_code_s,'item_description'=>$item_description_s,
                                'unit'=>$unit_s,'scheduled_qty'=>$scheduled_qty_s,'design_qty'=>$design_qty_s,'rate_basic'=>$rate_basic_s,
                                'gst'=>$gst_s,'non_schedule'=>$non_schedule_s,'created_by'=>$user_id,
                                'created_on'=>date('Y-m-d H:i:s'),'modified_by'=>$user_id,'modified_on'=>date('Y-m-d H:i:s'),'steps'=>$steps);    
                            }
                        }
                    }
                    if(isset($save_arr) && !empty($save_arr)){
                        $this->common_model->SaveMultiData('tbl_boq_items',$save_arr);
                        $this->json->jsonReturn(array(
                            'valid'=>TRUE,
                            'msg'=>'<div class="alert modify alert-info">BOQ Items Details Saved Successfully!</div>',
                            'redirect' => base_url().'add-boq-items'
                        ));    
                    }else{
                        $this->json->jsonReturn(array(
                            'valid'=>FALSE,
                            'msg'=>'<div class="alert modify alert-danger">Please Enter Valid BOQ Items Details!!</div>'
                        ));    
                    }
                }else{
                    $this->json->jsonReturn(array(
                        'valid'=>FALSE,
                        'msg'=>'<div class="alert modify alert-danger">'.$error_message.'</div>'
                    ));
                }
            }
        }else{
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger">Please Select Project!</div>'
            ));    
        }
    }
    public function save_boq_file_data()
    {
    	$id=$this->input->post('id');
        $project_code =$this->input->post('project_code');
        $boq_code =$this->input->post('boq_code');
        $boq_item_file =$this->input->post('boq_item_file');

        $inputFileName ='uploads/upload_boq_file/'.$boq_item_file;
        if(file_exists($inputFileName))
        {
            $object = PHPExcel_IOFactory::load($inputFileName);
            $Errosdata=array();
            foreach($object->getWorksheetIterator() as $worksheet)
            {
                $highestRow = $worksheet->getHighestRow();
                $highestColumn = $worksheet->getHighestColumn();
                for($row=3; $row<$highestRow; $row++)
                {
                    $user_id=$this->session->userdata('user_id');
                    $boq_items=array();
                    $boq_items_srno= $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $hsn_sac_code = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $item_description = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $unit = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $scheduled_qty = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $design_qty = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $rate_basic = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $gst = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $unit_basic_amount = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $non_schedule = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
                    
                    $boq_items = array(
                        'project_code' => $project_code,
                        'boq_code' => $boq_code,
                        'boq_items_srno' => $boq_items_srno,
                        'hsn_sac_code' => $hsn_sac_code, 
                        'item_description' => $item_description,
                        'unit' => $unit,  
                        'scheduled_qty' => $scheduled_qty,
                        'design_qty' => $design_qty,
                        'rate_basic' => $rate_basic,
                        'gst' => $gst,
                        'unit_basic_amount' => $unit_basic_amount,
                        'non_schedule' => $non_schedule,
                        'modified_on'=>date('Y-m-d H:i:s'),
                        'modified_by'=>$user_id, 
                        'display' =>'Y',
                    );
                    $boq_items['created_by']=$user_id;
                    $boq_items['created_on']=date('Y-m-d H:i:s');
                    $result=$this->common_model->addData('tbl_boq_items',$boq_items);
                }
                if($result)
                {
                    $this->json->jsonReturn(array(
                        'valid'=>TRUE,
                        'msg'=>'<div class="alert modify alert-info"><strong>Welldone!</strong> BOQ Items Details Saved Successfully.</div>',
                        'redirect' => base_url().'list-boq-items'
                    ));
                }
            }
        }
        else
        {
            $this->json->jsonReturn(array(
                'valid'=>FALSE,
                'msg'=>'<div class="alert modify alert-danger"><strong>Oops!</strong> File Does not exist.</div>'
            ));
        }
    }
    public function client_delivery_challan() 
    {
        $this->load->view('client-delivery-challan');
    }
    public function add_virtual_stock() 
    {
        $this->load->view('add-virtual-stock');
    }
    public function add_installed_wip() 
    {
        $this->load->view('add-installed-wip');
    }
    public function add_provisional_wip() 
    {
        $this->load->view('add-provisional-wip');
    }
    public function add_boq_items() 
    {
        $this->load->view('add-boq-items');
    }
    public function list_boq_items() 
    {
        $this->load->view('list-boq-items');
    }
    public function list_boq_items_operational_b() 
    {
        $this->load->view('list-boq-items-operational-b');
    }
    public function list_boq_items_operational_b_negative() 
    {
        $this->load->view('list-boq-items-operational-b-negative');
    }
    public function create_proforma_invoice() 
    {
        $this->load->view('create-proforma-invoice');
    }
    public function create_tax_invoice() 
    {
        $this->load->view('create-tax-invoice');
    }
}
