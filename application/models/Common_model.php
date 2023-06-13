<?php
class Common_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    public function ProjNotReadNotification($id){
        $query=$this->db->query("SELECT * FROM `tbl_admin_notif` WHERE `display`='Y' AND `read_noti`='N'");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function ProjNotReadReminder($id){
        $query=$this->db->query("SELECT * FROM `tbl_admin_remind` WHERE `display`='Y' AND `read_noti`='N'");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function NotReadNotification(){
        $query=$this->db->query("SELECT * FROM `tbl_admin_notif` WHERE `display`='Y' AND `read_noti`='N'");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
    public function NotReadReminder(){
        $query=$this->db->query("SELECT * FROM `tbl_admin_remind` WHERE `display`='Y' AND `read_noti`='N'");
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return null;
        }
    }
    
    function time_elapsed_string($datetime, $full = false) {
        $now = new DateTime;
        $ago = new DateTime($datetime);
        $diff = $now->diff($ago);
    
        $diff->w = floor($diff->d / 7);
        $diff->d -= $diff->w * 7;
    
        $string = array(
            'y' => 'year',
            'm' => 'month',
            'w' => 'week',
            'd' => 'day',
            'h' => 'hr',
            'i' => 'min',
            's' => 'sec',
        );
        foreach ($string as $k => &$v) {
            if ($diff->$k) {
                $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
            } else {
                unset($string[$k]);
            }
        }
    
        if (!$full) $string = array_slice($string, 0, 1);
        return $string ? implode(', ', $string): 'just now';
    }
    public function SaveMultiData($tablename,$data) {
        $query=$this->db->insert_batch($tablename,$data); 
        if($query) {
            return true; 
        } else {
            return false; 
        } 
    } 
    public function insert_record($tbl_name, $record) {
        return $this->db->insert($tbl_name, $record);
    }
    public function addData($tablename,$data) 
    {
         
          
        $query=$this->db->insert($tablename,$data); 
        $user_id= $this->db->insert_id(); 
        if($query) {
            return $user_id; 
        } 
        else {
            return false; 
        } 
    }
    public function fetchDataDESC($table_name, $asc_by_col_name)
	{		
		$this->db->select('*')->from($table_name)->where('display', 'Y')->order_by($asc_by_col_name, "DESC");  
		$query = $this->db->get();

		if($query->num_rows()>0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function last_custcode()
	{		
		$query = $this->db->query("SELECT `customer_code` FROM `tbl_projects` ORDER BY `project_id` DESC LIMIT 0,1");
        if($query->num_rows()>0)
		{
			return $query->row()->customer_code;
		}
		else
		{
			return 0;
		}
	}
	public function updateDetails($tblname,$where,$condition,$data) 
    {
        $this->db->where($where, $condition); 
        $query = $this->db->update($tblname, $data); 
        return $query; 
    }
	public function selectDetailsWhr($tblname,$where,$condition)
	{
		$this->db->where($where,$condition);
		$query = $this->db->get($tblname);
		if($query->num_rows()== 1){	
			return $query->row();
		}
		else
		{
			return false;
		}			
	}
	public function selectDetailsWhere($tblname,$where,$condition)
	{
		$this->db->where($where,$condition);
		$query = $this->db->get($tblname);
		if($query->num_rows()>= 1){	

            foreach ($query->result() as $row)
            {
                $tbl_data[]=$row;
            }
			return $tbl_data;
		}
		else
		{
			return false;
		}			
	}
	public function existbpcode($bp_code)
	{
		$this->db->where('bp_code',$bp_code);
		$this->db->where('display','Y');
		$query = $this->db->get('tbl_projects');
		if($query->num_rows() > 0){	
			return $query->row();
		}else{
			return false;
		}			
	}
	
	public function tbl_city_name($tbl)
    {
        $query= $this->db->query("SELECT DISTINCT tbl2.city_name FROM $tbl as tbl1 left join tbl_city as tbl2 on tbl2.city_id=tbl1.city_id where tbl1.display='Y' order by tbl2.city_name ASC");
        if($query->num_rows() > 0)
        {
            return $query->result();
        }
        else
        {
            return false;
        }   
    }
    public function selectAllWhrDsc($tblname,$where,$condition,$dsc)
    {
        $this->db->where($where,$condition)->where('display','Y' && 'visibility','Active')->order_by($dsc,"DESC");
        $query = $this->db->get($tblname);
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $tbl_data[]=$row;
            }
            return $tbl_data;
        }
        else
        {
            return false;
        }       
    }
    public function selectAllWhr($tblname,$where,$condition)
    {
        $this->db->where($where,$condition);
        $this->db->where('  ','Y');
        $query = $this->db->get($tblname);
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $tbl_data[]=$row;
            }
            return $tbl_data;
        }
        else
        {
            return false;
        }       
    }
    public function fetchDataDESClimit($table_name, $dsc_by_col_name, $limit)
    {       
        $this->db->select('*')->from($table_name)->where('display', 'Y')->order_by($dsc_by_col_name, "DESC")->limit($limit);
        $qry = $this->db->get();

        if($qry->num_rows()>0)
        {
            foreach ($qry->result() as $row)
            {
                $tbl_data[]=$row;
            }
            return $tbl_data;
        }
        else
        {
            return false;
        }
    }
    public function fetchDataASC($table_name, $asc_by_col_name) 
    {
        $this->db->select('*')->from($table_name)->where('display', 'Y')->order_by($asc_by_col_name, "asc"); 
        $qry = $this->db->get(); 
        if($qry->num_rows()>0) 
        {
            return $qry->result();
        } 
        else 
        {
            return false; 
        } 
    }

    public function alljoin2tbl($tbl1,$tbl2,$where)
    {
        $query=$this->db->query("SELECT * from $tbl1 tbl1 left join $tbl2 tbl2 on tbl1.$where=tbl2.$where where  tbl1.display='Y' AND tbl2.display='Y'");
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $tbl_data[]=$row;
            }
            return $tbl_data;
        }
        else
        {
            return false;
        }
    }

    public function selectMultiDataFor($tblname,$where1,$where2,$condition1,$condition2)
    {
        $this->db->where($where1,$condition1);
        $this->db->where($where2,$condition2);
        $this->db->where('display','Y');
        $query = $this->db->get($tblname);

        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $tbl_data[]=$row;
            }
            return $tbl_data;
        }
        else
        {
            return false;
        }
    }
    public function singlejoin2tbl($tbl1,$tbl2,$where,$condition,$id)
    {
        $query=$this->db->query("SELECT * from $tbl1 tbl1 left join $tbl2 tbl2 on tbl1.$where=tbl2.$where where tbl1.$condition=$id AND tbl1.display='Y' AND tbl2.display='Y'");
        if($query->num_rows()==1)
        {
            return $query->row();
        }
        else
        {
            return false;
        }
    }
    public function duplicate($id,$p_key,$tbl,$where,$value) 
    {
        if (empty($value)) 
        {
            return FALSE; 
        } 
        $query=$this->db->query("SELECT COUNT(*) AS numrows FROM $tbl WHERE $where = ? AND $p_key != ? AND display='Y'",array($value,$id)); 
        if($query->num_rows()==1) 
        {
            return $query->row(); 
        } 
        else 
        {
            return false; 
        } 
    }

    public function deleteRow($table, $id){
        $query=$this->db->query("DELETE from $table WHERE id =$id");
        
            return $query;
        
    }
}
