<?php

class MY_Model extends CI_Model {
    public $table;
    public $table_detail;
    public $table_podetail;
    public $prefix_id;
    public $prefix_id_detail;
    public $dateserver;
    public $datetimeserver;

    public function __construct() {
        parent::__construct();
        $tmpfile = explode("_", $this->whoAmI());
        $this->gettimeserver();
        $this->table = strtolower($tmpfile[0]);
        $this->prefix_id = "id_" . $this->table;
    }
    
     public function gettimeserver() {
        $sql = "SELECT NOW() as syntime,CURDATE() as syndate ";
        $result = $this->db->query($sql);
        $row=$this->returndata($result, 'row');
        $this->dateserver = $row->syndate;
        $this->datetimeserver = $row->syntime;
    }
    
    public function getlastincrement() {
        $dbname = $this->db->database;
        $sql = "
                SELECT AUTO_INCREMENT as LastID
                FROM  INFORMATION_SCHEMA.TABLES
                WHERE TABLE_SCHEMA = '$dbname'
                AND   TABLE_NAME   = '$this->table'

               ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'row');
    }
    
    public function getlastincrement_detail() {
        $dbname = $this->db->database;
        $sql = "
                SELECT AUTO_INCREMENT as LastID
                FROM  INFORMATION_SCHEMA.TABLES
                WHERE TABLE_SCHEMA = '$dbname'
                AND   TABLE_NAME   = '$this->table_detail'

               ";
        $result = $this->db->query($sql);
        return $this->returndata($result, 'row');
    }

    public function returndata($result, $type = '') {
        if ($result->num_rows() > 0) {
            if ($type == 'row') {
                return $result->row();
            } else if ($type == 'array') {
                return $result->result_array();
            } else if ($type == 'result') {
                return $result->result();
            } else if ($type = 'count') {
                return $result->num_rows();
            } else {
                return $result;
            }
        } else {
            return null;
        }
    }

    public function setmodel($modelname) {
        $tmpdata = explode("#", $modelname);
        $modelfile = $tmpdata[0];
        $alias = $tmpdata[1];
        $this->load->model($modelfile, $alias);
    }

    function checkindextable($tablename, $Indexname) {
        $dbname = $this->db->database;
        $sql = "    SELECT COUNT(1) IndexIsThere FROM INFORMATION_SCHEMA.STATISTICS
					WHERE table_schema = '$dbname'
					AND   table_name   = '$tablename'
					AND   index_name   = '$Indexname';
		
				";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            $rowdata = $result->row();
            return $rowdata->IndexIsThere;
        } else {
            return null;
        }
    }

    public function get_field_values($tblname, $field) {
        $result = $this->db->query("SHOW COLUMNS FROM $tblname WHERE Field = '$field'");
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    public function checkfield($field) {
        $db = $this->db->database;
        $sql = " SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$db' AND TABLE_NAME = '$this->table' AND COLUMN_NAME='$field' ";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function checkfielddetail($field) {
        $db = $this->db->database;
        $sql = " SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = '$db' AND TABLE_NAME = '$this->table_detail' AND COLUMN_NAME='$field' ";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function whoAmI() {
        return get_called_class();
    }

    public function schema_column() {
        $db = $this->db->database;
        $sql = "
                SELECT 
                    COLUMN_KEY,
                    COLUMN_NAME,
                    DATA_TYPE,
                    COLUMN_COMMENT
                FROM information_schema.columns 
                WHERE 
                    table_schema='$db' 
                    AND table_name='$this->table'
                        
                ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    public function schema_column_detail() {
        $db = $this->db->database;
        $sql = "
                SELECT 
                    COLUMN_KEY,
                    COLUMN_NAME,
                    DATA_TYPE,
                    COLUMN_COMMENT
                FROM information_schema.columns 
                WHERE 
                    table_schema='$db' 
                    AND table_name='$this->table_detail'
                        
                ";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    /* mendapatkan semua data dan hasilnya sebuah array */

    public function buildschema($array) {
        //print_r($array);
        //exit;
        if (is_array($array) && $array !== '') {
            if (empty($array)) {
                return null;
            } else {

                $keydata = array();
                $values = array();
                $setdata = array();
                $where = array();


                foreach ($array as $key => $value) {
                    $keydata[] = $key;
                    $values[] = '"' . $value . '"';
                    $setdata[] = $key . '=' . '"' . $value . '"';
                    if ($key !== 'customequery') {
                        $where[] = ' AND ' . $key . '=' . '"' . $value . '"';
                    } else {
                        $where[] = $value;
                    }
                }

                $firtwhere = str_replace("AND", '', $where[0]);
                $where[0] = $firtwhere;
                $setwhere = implode(" ", $where);

                $return = array(
                    "key" => implode(",", $keydata),
                    "values" => implode(",", $values),
                    "setdata" => implode(",", $setdata),
                    "whereset" => ' WHERE ' . $setwhere,
                );
                return $return;
            }
        } else {
            echo 'kiriman ke fungsi buildschema harus berbentuk data array';
            exit;
        }
    }

    public function selectdata($type_result = '', $table = '', $arraywhere = '', $type_display = 'all', $fields = '', $orderby = '', $groupby = '', $mode_custome = 'off', $querycustome = '') {
        //$type_display = jika all, berarti bintang, jika custome, berarti kirimkan yang mau ditampilkan
        $shema = $this->buildschema($arraywhere);
        $where = $shema['whereset'];

        if ($type_display == 'all') {
            $display = " * ";
        } else {
            $display = $fields;
        }

        if ($mode_custome == 'off') {
            $query = "SELECT $display FROM $table $where $orderby $groupby";
        } else {
            $query = $querycustome;
        }

        //echo $query; exit;

        if ($type_result == 'count') {
            $return = $this->db->query($query)->num_rows();
        } else if ($type_result == 'row') {
            $check = $this->db->query($query)->num_rows();
            if ($check > 0) {
                return $this->db->query($query)->row();
            } else {
                return null;
            }
        } else if ($type_result == 'single') {
            $check = $this->db->query($query)->num_rows();
            if ($check > 0) {
                $row = $this->db->query($query)->result_array();
                return $row[0]["$display"];
            } else {
                return null;
            }
        } else if ($type_result == 'array') {
            $check = $this->db->query($query)->num_rows();
            if ($check > 0) {
                $data = $this->db->query($query)->result_array();
                return $data;
            } else {
                $return = null;
            }
        } else {
            echo 'Tentukan terlebih dahulu hasil data yang di kembalikan';
            exit;
        }
        return $return;
    }

    public function checktable($tablename) {
        $dbname = $this->db->database;
        $sql = "SELECT ENGINE FROM information_schema.tables WHERE table_schema = '$dbname' AND table_name = '$tablename' LIMIT 1;";
        $result = $this->db->query($sql);
        if ($result->num_rows() > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    public function setreturn($obj) {
        if ($obj->num_rows() > 0) {
            return $obj;
        } else {
            return null;
        }
    }

    public function countdata($query) {
        $result = $this->db->query($query);
        return $result->num_rows();
    }

    public function getarraydata($query) {
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return null;
        }
    }

    public function setrun($query) {
        $result = $this->db->query($query);
        return $result;
    }

    public function getrowdata($query) {
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    public function getprefix() {
        return $this->prefix_id;
    }

    public function getprefixdetail() {
        return $this->prefix_id_detail;
    }

    public function getAll() {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->result_array();
        } else {
            return null;
        }
    }

    public function getAlllimit($limit) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->limit($limit);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    function checkData($field, $fieldwhere) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($field, $fieldwhere);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function checkDatadetail($field1, $fieldwhere1, $field2, $fieldwhere2) {
        $checkfiield = $this->checkfielddetail("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($field1, $fieldwhere1);
        $this->db->where($field2, $fieldwhere2);
        $result = $this->db->get($this->table_detail)->num_rows();
        return $result;
    }

    function checkDatafourparam($field1, $fieldwhere1, $field2, $fieldwhere2, $field3, $fieldwhere3, $field4, $fieldwhere4) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($field1, $fieldwhere1);
        $this->db->where($field2, $fieldwhere2);
        $this->db->where($field3, $fieldwhere3);
        $this->db->where($field4, $fieldwhere4);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function checkDatathreeparam($field1, $fieldwhere1, $field2, $fieldwhere2, $field3, $fieldwhere3) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($field1, $fieldwhere1);
        $this->db->where($field2, $fieldwhere2);
        $this->db->where($field3, $fieldwhere3);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    function checkDatatwoparam($field1, $fieldwhere1, $field2, $fieldwhere2) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($field1, $fieldwhere1);
        $this->db->where($field2, $fieldwhere2);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

    public function getGridData() {
        $query = "
                 SELECT a.*                        
                 FROM $this->table a                 
                 ";
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $query .= " WHERE a.statusdata='active' ";
        }

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    function insertdata($record) {
        $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
        }

        $this->db->insert($this->table, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }

    function insertdata_detail($record) {
       $checkfiield = $this->checkfield("createby");
        if ($checkfiield > 0) {
            $record['createby'] = $this->session->userdata('ses_id_user');
            $record['createtime'] = $this->datetimeserver;
        }
        $this->db->insert($this->table_detail, $record);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    public function insertdata_batch($record) {
        $this->db->insert_batch($this->table, $record);
    }

    function getby_id($id) {

        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }

        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    function getby_id_notna($id) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    function getby_id_array($id) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id, $id);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function getby_id_array_notna($id) {
        $this->db->where($this->prefix_id, $id);
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function getby_id_detail($id) {
        $checkfiield = $this->checkfielddetail("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id_detail, $id);
        $result = $this->db->get($this->table_detail);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }

    function getby_id_detail_array($id) {
        $checkfiield = $this->checkfielddetail("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where($this->prefix_id_detail, $id);
        $result = $this->db->get($this->table_detail);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function getby_name($field, $fieldwhere) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where("$field", $fieldwhere);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return null;
        }
    }
    
    function getbyarray_nostatus($array, $type = 'row') {
        if (is_array($array) && !empty($array)) {
            foreach ($array as $key => $value) {
                $this->db->where("$key", $value);
            }
        }        
        $result = $this->db->get($this->table);
        return $this->returndata($result, $type);
    }

    function getby_name_array($field, $fieldwhere) {
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $this->db->where("$field", $fieldwhere);
        $result = $this->db->get($this->table);
        if ($result->num_rows() > 0) {
            $data = $result->result_array();
            return $data[0];
        } else {
            return null;
        }
    }

    function getbyarray($array, $type = 'row') {
        if (is_array($array) && !empty($array)) {
            foreach ($array as $key => $value) {
                $this->db->where("$key", $value);
            }
        }
        $checkfiield = $this->checkfield("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $result = $this->db->get($this->table);
        return $this->returndata($result, $type);
    }

    function getdetailbyarray($array, $type = 'row') {
        if (is_array($array) && !empty($array)) {
            foreach ($array as $key => $value) {
                $this->db->where("$key", $value);
            }
        }
        $checkfiield = $this->checkfielddetail("statusdata");
        if ($checkfiield > 0) {
            $this->db->where("statusdata", "active");
        }
        $result = $this->db->get($this->table_detail);
        return $this->returndata($result, $type);
    }

    function updatedata($id, $record) {
        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
        }
        $this->db->where($this->prefix_id, $id);
        return $this->db->update($this->table, $record);
    }

    function updatedata_detail($id, $record) {
        $checkfiield = $this->checkfield("updateby");
        if ($checkfiield > 0) {
            $record['updateby'] = $this->session->userdata('ses_id_user');
            $record['updatetime'] = $this->datetimeserver;
        }
        $this->db->where($this->prefix_id_detail, $id);
        return $this->db->update($this->table_detail, $record);
    }

    function deletedata($id, $record = array()) {
        $deletenote	 = $this->input->post('alasan');
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';
            $record['deletenote'] = $deletenote;
            $this->db->where($this->prefix_id, $id);
            return $this->db->update($this->table, $record);
        } else {
            $this->delete($id);
        }
        // delete/update hanya ditabel kalibrasi di tabel tools blom
    }

    function deletedata_detail($id, $record = array()) {
        $deletenote	 = $this->input->post('alasan');
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';
            $record['deletenote'] = $deletenote;
            $this->db->where($this->prefix_id_detail, $id);
            return $this->db->update($this->table_detail, $record);
        } else {
            $this->deletedetail($id);
        }
    }

    function deletedata_detail_fromheader($id_header, $record = array()) {
        $deletenote	 = $this->input->post('alasan');
        $checkfiield = $this->checkfield("deleteby");
        if ($checkfiield > 0) {
            $record['deleteby'] = $this->session->userdata('ses_id_user');
            $record['deletetime'] = $this->datetimeserver;
            $record['statusdata'] = 'nonactive';
            $record['deletenote'] = $deletenote;
            $this->db->where('statusdata', 'active');
        }
        $this->db->where($this->prefix_id, $id_header);  
        return $this->db->update($this->table_detail, $record);
    }

    function delete($id) {
        return $this->db->delete($this->table, array($this->prefix_id => $id)
        );
    }

    function deletedetail($id) {
        return $this->db->delete($this->table_detail, array($this->prefix_id_detail => $id)
        );
    }

}
