<?php
class Admin_model extends CI_Model {
     function __construct() {
        
        $this->column_reminder_order = array(null,'id','notification','created_date');
		$this->column_reminder_search = array('id','notification','created_date');
		$this->reminder_order = array('id' => 'desc');
	    
	    $this->column_noti_order = array(null,'id','notification','created_date');
		$this->column_noti_search = array('id','notification','created_date');
		$this->noti_order = array('id' => 'desc');
	    
	    $this->column_approvwait_order = array(null,'id','activity','status','action_id','action_url','created_by','created_date','modified_on','modified_by','display');
		$this->column_approvwait_search = array('id','activity','status','action_id','action_url','created_by','created_date','modified_on','modified_by','display');
		$this->approvwait_order = array('id' => 'desc');
		
		$this->column_dcc_order = array(null,'challan_id','project_id','dc_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_dcc_search = array('challan_id','project_id','dc_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->dcc_order = array('challan_id' => 'desc');
		
        $this->column_dcvs_order = array(null,'vs_id','project_id','vs_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_dcvs_search = array('vs_id','project_id','vs_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->dcvs_order = array('vs_id' => 'desc');
		
		$this->column_taxinvc_order = array(null,'tax_invc_id','project_id','tax_invc_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_taxinvc_search = array('tax_invc_id','project_id','tax_invc_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->taxinvc_order = array('tax_invc_id' => 'desc');
		
		$this->column_taxinvc_item_order = array(null,'tax_invc_itemid','tax_invc_id','boq_code','hsn_sac_code','item_description','unit','qty','rate');
		$this->column_taxinvc_item_search = array('tax_invc_itemid','tax_invc_id','boq_code','hsn_sac_code','item_description','unit','qty','rate');
		$this->taxinvc_item_order = array('tax_invc_itemid' => 'desc');
		
		$this->column_proinvc_order = array(null,'proforma_id','project_id','proforma_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_proinvc_search = array('proforma_id','project_id','proforma_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->proinvc_order = array('proforma_id' => 'desc');
		
		$this->column_proinvc_item_order = array(null,'proforma_itemid','proforma_id','boq_code','hsn_sac_code','item_description','unit','qty','rate');
		$this->column_proinvc_item_search = array('proforma_itemid','proforma_id','boq_code','hsn_sac_code','item_description','unit','qty','rate');
		$this->proinvc_item_order = array('proforma_itemid' => 'desc');
		
		$this->column_dciwip_order = array(null,'i_wip_id','project_id','i_wip_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_dciwip_search = array('i_wip_id','project_id','i_wip_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->dciwip_order = array('i_wip_id' => 'desc');
		
		$this->column_dcpwip_order = array(null,'p_wip_id','project_id','p_wip_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->column_dcpwip_search = array('p_wip_id','project_id','p_wip_no','created_by','created_on','modified_by','modified_on','display','status','bp_code','customer_name');
		$this->dcpwip_order = array('p_wip_id' => 'desc');
		
		$this->column_dcc_item_order = array(null,'challan_itemid','challan_id','boq_code','hsn_sac_code','item_description','unit','scheduled_qty','design_qty','received_qty');
		$this->column_dcc_item_search = array('challan_itemid','challan_id','boq_code','hsn_sac_code','item_description','unit','scheduled_qty','design_qty','received_qty');
		$this->dcc_item_order = array('challan_itemid' => 'desc');
		
        $this->column_dcvs_item_order = array(null,'vs_itemid','vs_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','stock_qty');
		$this->column_dcvs_item_search = array('vs_itemid','vs_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','stock_qty');
		$this->compliance_item = array('id','month','gstr_1a_confirmation_date','gstr_3b_confirmation_date','tds_confirmation_date','proof_tax_confirmation_date','pro_fund_confirmation_date','esic_confirmation_date');
		$this->dcvs_item_order = array('vs_itemid' => 'desc');
		$this->comp_item_order = array('id' => 'desc');
		
		$this->column_dciwip_item_order = array(null,'i_wip_itemid','i_wip_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','installed_qty');
		$this->column_dciwip_item_search = array('i_wip_itemid','i_wip_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','installed_qty');
		$this->dciwip_item_order = array('i_wip_itemid' => 'desc');
		
		$this->column_dcpwip_item_order = array(null,'p_wip_itemid','p_wip_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','prov_qty');
		$this->column_dcpwip_item_search = array('p_wip_itemid','p_wip_id','boq_code','hsn_sac_code','item_description','unit','avl_qty','prov_qty');
		$this->dcpwip_item_order = array('p_wip_itemid' => 'desc');
		
		$this->column_project_order = array(null, 'p.project_id','p.customer_code','p.customer_name','p.bp_code','p.po_loi_no','p.registered_address','p.created_date','p.updated_date','p.status','p.created_by','tu.fullname');
        $this->column_project_search = array('p.project_id','p.customer_code','p.customer_name','p.bp_code','p.po_loi_no','p.registered_address','p.created_date','p.updated_date','p.status','p.created_by','tu.fullname');
		$this->project_order = array('p.project_id' => 'desc');
     
        $this->column_boq_order = array(null, 'boq_items_id','project_id','bp_code','boq_code','item_description','unit','scheduled_qty','design_qty','rate_basic','gst','non_schedule','status');
        $this->column_boq_search = array('boq_items_id','project_id','bp_code','boq_code','item_description','unit','scheduled_qty','design_qty','rate_basic','gst','non_schedule','status');
		$this->boq_order = array('boq_items_id' => 'desc');
        
        $this->column_boqp_order = array(null, 'boq_items_id','project_id','bp_code','boq_code','item_description','unit','scheduled_qty','design_qty','rate_basic','gst','non_schedule','status');
        $this->column_boqp_search = array('boq_items_id','project_id','bp_code','boq_code','item_description','unit','scheduled_qty','design_qty','rate_basic','gst','non_schedule','status');
		$this->boqp_order = array('boq_items_id' => 'asc');
    }
    public function getReminderListRows($postData,$project_id){
	    $this->_get_reminder_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countReminderListFiltered($postData,$project_id){
        $this->_get_reminder_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countReminderListAll($project_id){
        $this->db->select('*');
		$this->db->from('tbl_admin_remind');
		return $this->db->count_all_results();
    }
    private function _get_reminder_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('tbl_admin_remind');
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_reminder_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_reminder_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_reminder_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->reminder_order)){
            $order = $this->reminder_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getNotiListRows($postData,$project_id){
	    $this->_get_noti_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countNotiListFiltered($postData,$project_id){
        $this->_get_noti_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countNotiListAll($project_id){
        $this->db->select('*');
		$this->db->from('tbl_admin_notif');
		return $this->db->count_all_results();
    }
    private function _get_noti_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('tbl_admin_notif');
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_noti_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_noti_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_noti_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->noti_order)){
            $order = $this->noti_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getApproWaitListRows($postData,$project_id){
	    $this->_get_approvwait_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countApproWaitListFiltered($postData,$project_id){
        $this->_get_approvwait_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countApproWaitListAll($project_id){
        $this->db->select('*');
		$this->db->from('tbl_approval_waiting');
		$this->db->where('action_id',$project_id);
		return $this->db->count_all_results();
    }
    private function _get_approvwait_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('tbl_approval_waiting');
		$this->db->where('action_id',$project_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_approvwait_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_approvwait_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_approvwait_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->approvwait_order)){
            $order = $this->approvwait_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    public function getProInvcItemListRows($postData,$proforma_id){
	    $this->_get_provinvc_item_list_datatables_query($postData,$proforma_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countProInvcItemListFiltered($postData,$proforma_id){
        $this->_get_provinvc_item_list_datatables_query($postData,$proforma_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countProInvcItemListAll($i_wip_id){
        $this->db->select('*');
		$this->db->from('tbl_proforma_invc_items');
		$this->db->where('proforma_id',$proforma_id);
		return $this->db->count_all_results();
    }
    private function _get_provinvc_item_list_datatables_query($postData,$proforma_id){
	    $this->db->select('*');
		$this->db->from('tbl_proforma_invc_items');
		$this->db->where('proforma_id',$proforma_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_proinvc_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_proinvc_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_proinvc_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->proinvc_item_order)){
            $order = $this->proinvc_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getTaxInvcItemListRows($postData,$tax_invc_id){
	    $this->_get_taxvinvc_item_list_datatables_query($postData,$tax_invc_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countTaxInvcItemListFiltered($postData,$tax_invc_id){
        $this->_get_taxvinvc_item_list_datatables_query($postData,$tax_invc_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countTaxInvcItemListAll($tax_invc_id){
        $this->db->select('*');
		$this->db->from('tbl_tax_invc_items');
		$this->db->where('tax_invc_id',$tax_invc_id);
		return $this->db->count_all_results();
    }
    private function _get_taxvinvc_item_list_datatables_query($postData,$tax_invc_id){
	    $this->db->select('*');
		$this->db->from('tbl_tax_invc_items');
		$this->db->where('tax_invc_id',$tax_invc_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_taxinvc_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_taxinvc_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_taxinvc_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->taxinvc_item_order)){
            $order = $this->taxinvc_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCIWIPItemListRows($postData,$i_wip_id){
	    $this->_get_dciwip_item_list_datatables_query($postData,$i_wip_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCIWIPItemListFiltered($postData,$i_wip_id){
        $this->_get_dciwip_item_list_datatables_query($postData,$i_wip_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCIWIPItemListAll($i_wip_id){
        $this->db->select('*');
		$this->db->from('tbl_install_wip_items');
		$this->db->where('i_wip_id',$i_wip_id);
		return $this->db->count_all_results();
    }
    private function _get_dciwip_item_list_datatables_query($postData,$i_wip_id){
	    $this->db->select('*');
		$this->db->from('tbl_install_wip_items');
		$this->db->where('i_wip_id',$i_wip_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_dciwip_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_dciwip_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dciwip_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dciwip_item_order)){
            $order = $this->dciwip_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCPWIPItemListRows($postData,$p_wip_id){
	    $this->_get_dcpwip_item_list_datatables_query($postData,$p_wip_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    
    public function countDCPWIPItemListFiltered($postData,$p_wip_id){
        $this->_get_dcpwip_item_list_datatables_query($postData,$p_wip_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCPWIPItemListAll($p_wip_id){
        $this->db->select('*');
		$this->db->from('tbl_prov_wip_items');
		$this->db->where('p_wip_id',$p_wip_id);
		return $this->db->count_all_results();
    }
    private function _get_dcpwip_item_list_datatables_query($postData,$p_wip_id){
	    $this->db->select('*');
		$this->db->from('tbl_prov_wip_items');
		$this->db->where('p_wip_id',$p_wip_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_dcpwip_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_dcpwip_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcpwip_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcpwip_item_order)){
            $order = $this->dcpwip_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCVSItemListRows($postData,$vs_id){
	    $this->_get_dcvs_item_list_datatables_query($postData,$vs_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCVSItemListFiltered($postData,$vs_id){
        $this->_get_dcvs_item_list_datatables_query($postData,$vs_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function compliance_dataListFiltered($postData){
        $this->_get_compliance_item_list_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCVSItemListAll($vs_id){
        $this->db->select('*');
		$this->db->from('tbl_virtual_stock_items');
		$this->db->where('vs_id',$vs_id);
		return $this->db->count_all_results();
    }
    public function countcompliance_data(){
        $this->db->select('*');
		$this->db->from('table_compliance');
		
		return $this->db->count_all_results();
    }

    public function compliance_data($postData){
	    $this->compliance_list_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }



    
    private function compliance_list_datatables_query($postData){
	    $this->db->select('*');
		$this->db->from('table_compliance');
        // print_r($this->column_dcvs_item_search);
        //      exit ;
		
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->compliance_item as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->compliance_item) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->comp_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->comp_item_order)){
            $order = $this->comp_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }






    private function _get_dcvs_item_list_datatables_query($postData,$vs_id){
	    $this->db->select('*');
		$this->db->from('tbl_virtual_stock_items');
		$this->db->where('vs_id',$vs_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_dcvs_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_dcvs_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcvs_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcvs_item_order)){
            $order = $this->dcvs_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    private function _get_compliance_item_list_datatables_query($postData){
	    $this->db->select('*');
		$this->db->from('table_compliance');
		    //  print_r($this->column_dcvs_item_search);
            //  exit ;
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->compliance_item as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->compliance_item) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->comp_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->comp_item_order)){
            $order = $this->comp_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCCItemListRows($postData,$challan_id){
	    $this->_get_dcc_item_list_datatables_query($postData,$challan_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCCItemListFiltered($postData,$challan_id){
        $this->_get_dcc_item_list_datatables_query($postData,$challan_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCCItemListAll($challan_id){
        $this->db->select('*');
		$this->db->from('tbl_deliv_challan_items');
		$this->db->where('challan_id',$challan_id);
		return $this->db->count_all_results();
    }
    private function _get_dcc_item_list_datatables_query($postData,$challan_id){
	    $this->db->select('*');
		$this->db->from('tbl_deliv_challan_items');
		$this->db->where('challan_id',$challan_id);
		$i = 0;
        if(isset($postData['search']['value'])){
        foreach($this->column_dcc_item_search as $item){
            if($postData['search']['value']){
                if($i===0){
                    $this->db->group_start();
					$this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                if(count($this->column_dcc_item_search) - 1 == $i){
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcc_item_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcc_item_order)){
            $order = $this->dcc_item_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getTAXINVCListRows($postData,$project_id){
	    $this->_get_taxinvc_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countTAXINVCListFiltered($postData,$project_id){
        $this->_get_taxinvc_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countTAXINVCListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_tax_invc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_taxinvc_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_tax_invc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_taxinvc_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_taxinvc_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_taxinvc_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->taxinvc_order)){
            $order = $this->taxinvc_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    public function getPROINVCListRows($postData,$project_id){
	    $this->_get_proinvc_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countPROINVCListFiltered($postData,$project_id){
        $this->_get_proinvc_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countPROINVCListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_proforma_invc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_proinvc_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_proforma_invc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		
		}
       
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_proinvc_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_proinvc_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_proinvc_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->proinvc_order)){
            $order = $this->proinvc_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCIWIPListRows($postData,$project_id){
	    $this->_get_dciwip_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCIWIPListFiltered($postData,$project_id){
        $this->_get_dciwip_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCIWIPListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_dciwip');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_dciwip_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_dciwip');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_dciwip_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_dciwip_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dciwip_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dciwip_order)){
            $order = $this->dciwip_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCPWIPListRows($postData,$project_id){
	    $this->_get_dcpwip_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCPWIPListFiltered($postData,$project_id){
        $this->_get_dcpwip_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCPWIPListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_dcpwip');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_dcpwip_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_dcpwip');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_dcpwip_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_dcpwip_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcpwip_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcpwip_order)){
            $order = $this->dcpwip_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCVSListRows($postData,$project_id){
	    $this->_get_dcvs_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCVSListFiltered($postData,$project_id){
        $this->_get_dcvs_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCVSListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_dcvs');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_dcvs_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_dcvs');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_dcvs_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_dcvs_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcvs_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcvs_order)){
            $order = $this->dcvs_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getDCCListRows($postData,$project_id){
	    $this->_get_dcc_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countDCCListFiltered($postData,$project_id){
        $this->_get_dcc_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countDCCListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_dcc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		return $this->db->count_all_results();
    }
    private function _get_dcc_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_dcc');
		if(!empty($project_id)){
		$this->db->where('project_id',$project_id);
		}
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_dcc_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_dcc_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_dcc_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->dcc_order)){
            $order = $this->dcc_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    public function getPBOQItemListRows($postData,$project_id){
	    $this->_get_boq_p_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countPBOQItemListFiltered($postData,$project_id){
        $this->_get_boq_p_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countPBOQItemListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		return $this->db->count_all_results();
    }
    private function _get_boq_p_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boqp_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boqp_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boqp_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boqp_order)){
            $order = $this->boqp_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getBOQCListRows($postData,$project_id){
	    $this->_get_boq_c_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countBOQCListFiltered($postData,$project_id){
        $this->_get_boq_c_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countBOQCListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('non_schedule','Y');
		$this->db->where('project_id',$project_id);
		return $this->db->count_all_results();
    }
    private function _get_boq_c_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('non_schedule','Y');
		$this->db->where('project_id',$project_id);
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boq_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boq_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boq_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boq_order)){
            $order = $this->boq_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    public function getViewBOQListRows($postData,$project_id){
	    $this->_get_boq_view_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countViewBOQListFiltered($postData,$project_id){
        $this->_get_boq_view_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countViewBOQListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		return $this->db->count_all_results();
    }
    private function _get_boq_view_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boq_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boq_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boq_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boq_order)){
            $order = $this->boq_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getBOQTransListRows($postData,$boq_transaction_cnt,$project_id){
	    $this->_get_boq_trans_list_datatables_query($postData,$boq_transaction_cnt,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countBOQTransListFiltered($postData,$boq_transaction_cnt,$project_id){
        $this->_get_boq_trans_list_datatables_query($postData,$boq_transaction_cnt,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countBOQTransListAll($boq_transaction_cnt,$project_id){
        $this->db->select('*');
		$this->db->from('view_boq_items');
		$this->db->where('project_id',$project_id);
		$this->db->where('steps',$boq_transaction_cnt);
		return $this->db->count_all_results();
    }
    private function _get_boq_trans_list_datatables_query($postData,$boq_transaction_cnt,$project_id){
	    $this->db->select('*');
		$this->db->from('view_boq_items');
		$this->db->where('project_id',$project_id);
		$this->db->where('steps',$boq_transaction_cnt);
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boq_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boq_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boq_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boq_order)){
            $order = $this->boq_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getBOQOperListRows($postData,$project_id){
	    $this->_get_boq_oper_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countBOQOperListFiltered($postData,$project_id){
        $this->_get_boq_oper_list_datatables_query($postData,$project_id);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countBOQOperListAll($project_id){
        $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		return $this->db->count_all_results();
    }
    private function _get_boq_oper_list_datatables_query($postData,$project_id){
	    $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		$this->db->where('project_id',$project_id);
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boq_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boq_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boq_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boq_order)){
            $order = $this->boq_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    
    public function getBOQListRows($postData,$project_id){
        
	    $this->_get_boq_list_datatables_query($postData,$project_id);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countBOQListFiltered($postData,$projectId){
        $this->_get_boq_list_datatables_query($postData,$projectId);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countBOQListAll(){
        $this->db->select('*');
		$this->db->from('view_latest_boq_items');
		return $this->db->count_all_results();
    }
    private function _get_boq_list_datatables_query($postData,$project_id){
        
         
	    $this->db->select('*');
		$this->db->from('view_latest_boq_items');
        if($project_id != null){
            $this->db->where('project_id', $project_id);
        }
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_boq_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_boq_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_boq_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->boq_order)){
            $order = $this->boq_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function getProjectListRows($postData){
	    $this->_get_project_list_datatables_query($postData);
        if($postData['length'] != -1){
            $this->db->limit($postData['length'], $postData['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }
    public function countProjectListFiltered($postData){
        $this->_get_project_list_datatables_query($postData);
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function countProjectListAll(){
        $this->db->select('p.project_id,p.customer_code,p.customer_name,p.bp_code,
	    p.po_loi_no,p.registered_address,p.created_date,p.updated_date,p.status,p.created_by,tu.fullname');
		$this->db->from('tbl_projects p');
		$this->db->join('tbl_user tu', 'tu.user_id = p.created_by');
		return $this->db->count_all_results();
    }
    private function _get_project_list_datatables_query($postData){
	    $this->db->select('p.project_id,p.customer_code,p.customer_name,p.bp_code,
	    p.po_loi_no,p.registered_address,p.created_date,p.updated_date,p.status,p.created_by,tu.fullname');
		$this->db->from('tbl_projects p');
		$this->db->join('tbl_user tu', 'tu.user_id = p.created_by');
		$i = 0;
        // loop searchable columns 
		if(isset($postData['search']['value'])){
        foreach($this->column_project_search as $item){
            // if datatable send POST for search
            if($postData['search']['value']){
                // first loop
                if($i===0){
                    // open bracket
                    $this->db->group_start();
					
                    $this->db->like($item, trim($postData['search']['value']));
                }else{
                    $this->db->or_like($item, trim($postData['search']['value']));
                }
                
                // last loop
                if(count($this->column_project_search) - 1 == $i){
                    // close bracket
                    $this->db->group_end();
                }
            }
            $i++;
        }
		}
         
        if(isset($postData['order'])){
            $this->db->order_by($this->column_project_order[$postData['order']['0']['column']], $postData['order']['0']['dir']);
        }else if(isset($this->project_order)){
            $order = $this->project_order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
    public function bulk_insert_boq_items_data($data) {
       

        $this->db->trans_start();
        for($i=0;$i<count($data);$i++) {  
		    $boq_code = $data[$i]['boq_code'];
		    $project_id = $data[$i]['project_id'];
		    if(!empty($boq_code) && !empty($project_id)){

                $check=$this->db->query("SELECT * FROM `tbl_boq_items` WHERE project_id='".$project_id."' AND boq_code='".$boq_code."' ORDER BY boq_items_id DESC LIMIT 0,1");
                //   var_dump($check->num_rows() > 0);
                //   exit;
                if($check->num_rows() > 0){
                       $existing_data = $check->row();
                       

                        $data[$i]['hsn_sac_code'] = $existing_data->hsn_sac_code;
                        $data[$i]['item_description'] = $existing_data->item_description;
                        $data[$i]['unit'] = $existing_data->unit;
                        $data[$i]['scheduled_qty'] = $existing_data->scheduled_qty;
                        $data[$i]['rate_basic'] = $existing_data->rate_basic;
                        $data[$i]['created_on'] = $existing_data->created_on;
                        $data[$i]['gst'] = $existing_data->gst;
                        $data[$i]['non_schedule'] = $existing_data->non_schedule;
                        $data[$i]['created_by'] = $existing_data->created_by;
                  
                    
                  
    		    $this->db->insert('tbl_boq_items',$data[$i]);
                    
                }else{


                    $this->db->insert('tbl_boq_items',$data[$i]);
                }

        	}
        }
		$query = $this->db->trans_complete(); 
		if($query) {
		    return true;
		}else{
		    return false;
        }      
    }
    public function getTotalBoqTransactionCnt($project_id)
    {
        $query=$this->db->query("SELECT MAX(steps) as `steps` FROM `tbl_boq_items` WHERE `project_id` = '".$project_id."'");
        if($query->num_rows() > 0){
            return $query->row()->steps;
        }else{
            return 'no';
        }
    }
    public function get_bp_code($project_id)
    {
        $query=$this->db->query("SELECT `bp_code` FROM `tbl_projects` WHERE project_id='".$project_id."'");
        if($query->num_rows() > 0){
            return $query->row()->bp_code;
        }else{
            return 0;
        }
    }
    public function get_invoice_no($tax_invc_id)
    {
        $query=$this->db->query("SELECT `tax_invc_no` FROM `tbl_tax_invc` WHERE tax_invc_id='".$tax_invc_id."'");
        if($query->num_rows() > 0){
            return $query->row()->tax_invc_no;
        }else{
            return 0;
        }
    }
    
    public function get_design_qty($project_id,$boq_code)
    {
        $query=$this->db->query("SELECT SUM(IFNULL(`design_qty`,0)) as total_design_qty FROM `tbl_boq_items` WHERE project_id='".$project_id."' AND boq_code='".$boq_code."'");
        if($query->num_rows() > 0){
            return $query->row()->total_design_qty;
        }else{
            return 0;
        }
    }
    public function TaxInvoiceAmount($tax_invc_id)
    {
        $query=$this->db->query("SELECT SUM(IFNULL(`qty`,0) * IFNULL(`rate`,0)) as total_amt FROM `tbl_tax_invc_items` WHERE tax_invc_id='".$tax_invc_id."'");
        if($query->num_rows() > 0){
            return $query->row()->total_amt;
        }else{
            return 0;
        }
    }
    public function get_boq_item_details($project_id,$boq_code)
    {
        $query=$this->db->query("SELECT * FROM `tbl_boq_items` WHERE project_id='".$project_id."' AND boq_code='".$boq_code."' ORDER BY boq_items_id DESC LIMIT 0,1");
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return 0;
        }
    }
    public function get_project_item_details($project_id)
    {
        // $query=$this->db->query("SELECT * FROM `tbl_projects` WHERE project_id='".$project_id."");
        $query = $this->db->query("SELECT * FROM `tbl_projects` WHERE project_id='".$project_id."'");

        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return 0;
        }
    }
    public function get_dc_boq_item_details($project_id,$boq_code)
    {
        $query=$this->db->query("SELECT * FROM `tbl_boq_items` 
        WHERE project_id='".$project_id."' AND boq_code='".$boq_code."' ORDER BY boq_items_id DESC LIMIT 0,1");
        // $query=$this->db->query("SELECT tdc.*, tb.* FROM `tbl_deliv_challan_items` tdc INNER JOIN tbl_boq_items tb ON tb.boq_code = tdc.boq_code 
        // WHERE tb.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.challan_itemid DESC LIMIT 0,1");
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return 0;
        }
    }
    public function get_consinee_details($consignee_id)
    {
        $query=$this->db->query("SELECT * FROM `tbl_deliv_challan_consignee` 
        WHERE id='".$consignee_id."' ORDER BY id DESC LIMIT 0,1");
        // $query=$this->db->query("SELECT tdc.*, tb.* FROM `tbl_deliv_challan_items` tdc INNER JOIN tbl_boq_items tb ON tb.boq_code = tdc.boq_code 
        // WHERE tb.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.challan_itemid DESC LIMIT 0,1");
        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return 0;
        }
    }
    
    public function get_wip_boq_item_details($project_id,$boq_code)
    {
        $queryi = $this->db->query("SELECT tdc.* FROM `tbl_install_wip_items` tdc 
        INNER JOIN tbl_installed_wip iwip ON iwip.i_wip_id = tdc.i_wip_id 
        INNER JOIN tbl_boq_items tb ON iwip.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
        WHERE iwip.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.i_wip_itemid DESC LIMIT 0,1");
        if($queryi->num_rows() > 0){
            return $queryi->row();
        }else{
            $queryip = $this->db->query("SELECT tdc.* FROM `tbl_prov_wip_items` tdc 
            INNER JOIN tbl_provisional_wip pwip ON pwip.p_wip_id = tdc.p_wip_id 
            INNER JOIN tbl_boq_items tb ON pwip.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
            WHERE pwip.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.p_wip_itemid DESC LIMIT 0,1");
            if($queryip->num_rows() > 0){
                return $queryip->row();
            }else{
                return 0;
            }
        }
    }
    public function get_proforma_boq_item_details($project_id,$boq_code)
    {
        $queryi = $this->db->query("SELECT tdc.* FROM `tbl_proforma_invc_items` tdc 
        INNER JOIN tbl_proforma_invc prom ON prom.proforma_id = tdc.proforma_id 
        INNER JOIN tbl_boq_items tb ON prom.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
        WHERE prom.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.proforma_itemid DESC LIMIT 0,1");
        if($queryi->num_rows() > 0){
            return $queryi->row();
        }else{
            return 0;
        }
    }
    
    public function get_dcip_boq_item_details($project_id,$boq_code)
    {
        $query=$this->db->query("SELECT tdc.* FROM `tbl_deliv_challan_items` tdc INNER JOIN tbl_boq_items tb ON tb.boq_code = tdc.boq_code 
        WHERE tb.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.challan_itemid DESC LIMIT 0,1");
        if($query->num_rows() > 0){
            $queryi = $this->db->query("SELECT tdc.* FROM `tbl_install_wip_items` tdc 
            INNER JOIN tbl_installed_wip iwip ON iwip.i_wip_id = tdc.i_wip_id 
            INNER JOIN tbl_boq_items tb ON iwip.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
            WHERE iwip.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.i_wip_itemid DESC LIMIT 0,1");
            if($queryi->num_rows() > 0){
                return 0;
            }else{
                $queryi = $this->db->query("SELECT tdc.* FROM `tbl_prov_wip_items` tdc 
                INNER JOIN tbl_provisional_wip pwip ON pwip.p_wip_id = tdc.p_wip_id 
                INNER JOIN tbl_boq_items tb ON pwip.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
                WHERE pwip.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.p_wip_itemid DESC LIMIT 0,1");
                if($queryi->num_rows() > 0){
                    return 0;
                }else{
                    $queryi = $this->db->query("SELECT tdc.* FROM `tbl_virtual_stock_items` tdc
                    INNER JOIN tbl_virtual_stock vs ON vs.vs_id = tdc.vs_id 
                    INNER JOIN tbl_boq_items tb ON vs.project_id = tb.project_id AND tdc.boq_code = tb.boq_code 
                    WHERE vs.project_id='".$project_id."' AND tb.boq_code='".$boq_code."' ORDER BY tdc.vs_itemid DESC LIMIT 0,1");
                    if($queryi->num_rows() > 0){
                        return 0;
                    }else{
                        return $query->row();
                    }
                }
            }
        }else{
            return 0;
        }
    }
    
    
}
?>