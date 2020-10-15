<?php
class Calibration_model extends MY_Model {

    public function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        $this->table = 'e04_ts_calibration';
        $this->table_po = 'e04_ts_calibration_poheader';
        $this->prefix_id = 'calibration_id';
            $this->table_detail = 'e04_ts_calibration_periode';
            $this->prefix_id_detail = 'periode_id';
            $this->table_podetail     = 'e04_ts_calibration_podetail';
        $this->prefix_id_podetail = 'id_position';
                $this->table_location = 'e00_location';
                $this->prefix_id_location = 'id_location';
                    $this->table_position = 'e00_position';
                    $this->prefix_id_position = 'id_position';
                        $this->table_vendor = 'e04_ms_vendor';
                        $this->prefix_id_vendor = 'vendor_id';
                    $this->tbl_cdetail = 'e04_ts_calibration_detail';
                    $this->prefix_id_cdetail = 'calibrationdetail_id';
                $this->tbl_tools = 'e04_ms_tools';
                $this->prefix_id_tools = 'tools_id';
            $this->tbl_dtools = 'e04_ms_tools_detail';
            $this->prefix_id_dtools = 'toolsdetail_id';
    }
    
     public function getAll() {
        $this->db->where('statusdata','active');
        return $this->db->get($this->table)->result_array();
    }

     public function getGridData() {

        // $checkfiield = $this->session->userdata('ses_department_name');
        $query = "  SELECT  a.*,
                           CONCAT(a.location_name, ' - ',a.position_name) as locpos,
                           CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code
                    FROM $this->table a
                    LEFT JOIN $this->tbl_tools b on a.tools_id = b.tools_id 
                    LEFT JOIN $this->table_detail c on a.calibration_id = c.calibration_id 
                    WHERE a.statusdata='active'";
                    //cek calibration_code by user session
        // $checkfiield = $this->session->userdata('ses_department_name');
        //  if ($checkfiield != 'QA' && $checkfiield == 'PROCUREMENT' && $checkfiield != 'DHA' && $checkfiield != 'CEO' && $checkfiield != 'CFO' && $checkfiield != 'IT'){
        //       $query .= " AND a.calibration_code LIKE '$checkfiield%' ORDER BY c.periode_year DESC ";
        // }

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }

        // $checkfiield = $this->session->userdata('ses_department_name');
        // $query = "  SELECT  a.*,
        //                    CONCAT(a.location_name, ' - ',a.position_name) as locpos,
        //                    CONCAT(b.tools_code, ' - ',b.tools_name, ' - ',b.tools_noseri_model) as tools_code,
        //                    d.tools_no_sertifikat
        //             FROM $this->table a
        //             LEFT JOIN $this->tbl_tools b on a.tools_id = b.tools_id 
        //             LEFT JOIN $this->table_detail c on a.calibration_id = c.calibration_id
        //             LEFT JOIN $this->table_podetail d on a.calibration_code = d.calibration_code
        //             WHERE a.statusdata='active'";
        //             //cek calibration_code by user session
        // // $checkfiield = $this->session->userdata('ses_department_name');
        //  if ($checkfiield != 'QA' or $checkfiield != 'DHA' or $checkfiield != 'CEO' or $checkfiield != 'CFO' or $checkfiield != 'IT'){
        //      // $query .= " WHERE a.calibration_code LIKE '$checkfiield%' ORDER BY c.periode_year DESC ";
        // }

        // $result = $this->db->query($query);
        // if ($result->num_rows() > 0) {
        //     return $result;
        // } else {
        //     return null;
        // }
    }

    function getGridDatadetail($idheader) {
        $query = " SELECT 
                    a.*,
                    
                    FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                    FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,
        
                    ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,
                    
                    a.calibration_price as clb_price,
                    
                    e.vendor_name
                    FROM $this->table_podetail a
                    LEFT JOIN $this->table b on a.calibration_code = b.calibration_code
                    LEFT JOIN $this->table_po c on a.c_pohedaer_id = c.c_pohedaer_id
                    LEFT JOIN $this->tbl_tools d on b.tools_id = d.tools_id
                    LEFT JOIN $this->table_vendor e on a.vendor_id = e.vendor_id
                    WHERE 
                    b.$this->prefix_id='$idheader' AND a.statusdata='active' ORDER BY c.date_po DESC ";
            return $this->db->query($query);
    }

    function GridData_kalibrasi($id) {

           $query = " SELECT 
                    a.*,
                    
                    FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,

                    FORMAT( ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100,2) as ppn,
        
                    ((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 ) + (((a.calibration_qty * a.calibration_price) - (a.calibration_disc_rp) - ( a.calibration_qty * a.calibration_price * a.calibration_disc/100)) * 10/100 ) as disc_ppn,
                    
                    a.calibration_price as clb_price,
                    b.startcalibration_date,
                    c.date_po,
                    e.vendor_name
                    FROM $this->table_podetail a
                    LEFT JOIN $this->table b on a.calibration_code = b.calibration_code
                    LEFT JOIN $this->table_po c on a.c_pohedaer_id = c.c_pohedaer_id
                    LEFT JOIN $this->tbl_tools d on b.tools_id = d.tools_id
                    LEFT JOIN $this->table_vendor e on a.vendor_id = e.vendor_id
                    WHERE 
                    b.$this->prefix_id='$id' AND a.statusdata='active' ORDER BY c.date_po DESC ";
            return $this->db->query($query);

     //   $query = " SELECT 
      //              a.*,
      //              CONCAT(a.periode_year, '-',a.periode_date) as date_calibration,
     //               b.*,
      //              c.tools_name,
      //              FORMAT( (a.calibration_qty * a.calibration_price) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100,2) as total_harga,
      //              FORMAT( (a.calibration_qty * a.calibration_price - a.calibration_qty * a.calibration_price * a.calibration_disc/100) * a.calibration_ppn/100,2) as ppn,
      //              (a.calibration_qty * a.calibration_price) - (a.calibration_qty * a.calibration_price * a.calibration_disc)/100 + (a.calibration_qty * a.calibration_price - a.calibration_qty * a.calibration_price * a.calibration_disc/100) * a.calibration_ppn/100  as disc_ppn,
       //             d.vendor_name
       //          FROM $this->table_detail a   
       //          LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
       //          LEFT JOIN $this->tbl_tools c on a.$this->prefix_id_tools = c.$this->prefix_id_tools
       //          LEFT JOIN $this->table_vendor d on a.vendor_id = d.vendor_id
       //          WHERE 
       //          a.$this->prefix_id='$id' AND a.statusdata='active' ORDER BY a.periode_year DESC ";
       // return $this->db->query($query);
    }

     function GridDataCalibration($idheader)
    {
        $query = "
                SELECT
                    a.calibration_code,
                    a.calibrationdetail_name,
                    a.calibrationdetail_code
                FROM $this->tbl_cdetail a
                LEFT JOIN $this->table b on a.$this->prefix_id = b.$this->prefix_id
                WHERE
                        a.$this->prefix_id='$idheader'
                    AND a.statusdata='active'    
                 ";
        return $this->db->query($query);
    }
    

    function preview_getbyid($id) {
        $this->db->select(' a.*, (b.calibration_qty * b.calibration_price) as tes,c.*,d.*');
        $this->db->from($this->table . ' a ');
        $this->db->join($this->table_podetail . ' b ', 'a.calibration_code = b.calibration_code', 'left');
        $this->db->join($this->tbl_tools . ' c ', 'a.tools_id = c.tools_id', 'left');
        $this->db->join($this->table_vendor . ' d ', 'b.vendor_id = d.vendor_id', 'left');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.calibration_id', $id);
        return $this->db->get()->row();

        // $this->db->select(' a.*, (b.calibration_qty * b.calibration_price) as tes,c.*,d.*');
        // $this->db->from($this->table . ' a ');
        // $this->db->join($this->table_detail . ' b ', 'a.calibration_id = b.calibration_id', 'left');
        // $this->db->join($this->tbl_tools . ' c ', 'a.tools_id = c.tools_id', 'left');
        // $this->db->join($this->table_vendor . ' d ', 'b.vendor_id = d.vendor_id', 'left');
        // $this->db->where('a.statusdata', 'active');
        // $this->db->where('a.calibration_id', $id);
        // return $this->db->get()->row();

    }

    function getdetail_tools($id) {
        $this->db->select(' a.*,c.*');
        $this->db->from($this->table_detail . ' a ');
        $this->db->join($this->tbl_dtools . ' c ', 'a.tools_id = c.tools_id');
        $this->db->where('a.statusdata', 'active');
        $this->db->where('a.calibration_id', $id);
        $this->db->group_by('toolsdetail_name'); 
        return $this->db->get()->result_array();
    }

      function getby_calibration($id) {
        $query = " SELECT 
                        a.*
                 FROM $this->table_detail a
                 WHERE 
                 a.statusdata='active'
                 AND a.periode_id=$id
                
                 ";
        return $this->db->query($query)->row();
    }

    function create_kalibrasi($record) {
        $this->db->insert($this->table_detail, $record);
    }


    function updatedata_kalibrasi($id, $record) {
        $this->db->where($this->prefix_id_detail, $id);
        return $this->db->update($this->table_detail, $record);
    }

    function setconfirm($status, $id){
        $this->db->where($this->prefix_id_podetail, $id);
        $query = $this->db->set('status_po', 'Complete');
        return $this->db->update($this->table_podetail, $record);
        // $param->$this->input->post();

        // // $data=array(
        // //     'status_po'=>  $this->input->post('Complete')
        // //              );
        // $query = $this->db->set('status_po', 'Complete');
        // $query = $this->db->where('id_position', $param['id_position']);
        // return $this->db->update($this->table_podetail);
        
        //              var_dump($param);
        //              die();


        // $this->db->insert('e04_ts_calibration_podetail',$data);


    }

     function getby_id($id) {
        $this->db->where($this->prefix_id, $id);
        return $this->db->get($this->table);
    }

     function insertdata($record) {
        $param = $this->input->post();
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id($this->table);
        return $insert_id;
    }

    public function getcalibration($prefix_id, $calibration_code) {
        $this->db->where("$this->prefix_id", $prefix_id);
        $this->db->where("calibration_code", $calibration_code);
        $this->db->where("statusdata", 'active');
        $result = $this->db->get($this->table);
        return $this->returndata($result, 'row');
    }


     function getby_urut($getruang,$h_th,$h_bln)
    {
        $query = " SELECT lastno from _logno where program='$getruang' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query);
    }
    function checkdataurut($getruang,$h_th,$h_bln){
        $query = "SELECT lastno from _logno where program='$getruang' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query)->num_rows(); 
    }

    function insertlogno($record1) {
        $this->db->insert($this->logno, $record1);
    }

    function updatelogno($h_kt,$h_th,$h_bln,$no){
        $query = " UPDATE _logno set lastno='$no' where program='$h_kt' and periode='$h_th' and bln='$h_bln'";
        return $this->db->query($query);
    }

    function addedit_view($id_header) {
        $this->db->select(' a.*');
        $this->db->from($this->table . ' a ');
        $this->db->where($this->prefix_id, $id_header);
        return $this->db->get()->row();
    }

}