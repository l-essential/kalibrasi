<?php
class Schedule_mysql_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database('pu', true);
        // $this->db2 = $this->load->database('pu', true);
        $this->table ='e06_new_schedule_detail_user';
        $this->prefix_id = "schedule_id";
        $this->prefix_date02 = "schedule_date";
        $this->prefix_nik = "NIK";
        // $this->table = 'dbo.MS_Karyawan';
        // $this->tbl_dept = 'dbo.MS_Seksi';
        // $this->prefix_id = "NIK";
        // $this->prefix_dept = "KodeSeksi";
    }

     function getGridData() {
        $query = "  SELECT a.*
                    FROM $this->table a ";

                    $checkfiield = $this->session->userdata('ses_department_name');
                    $checkseksi = $this->session->userdata('ses_KodeSeksi');
                    if ($checkfiield != 'admin' && $checkfiield != 'CFO' && $checkfiield != 'CEO' ){
                        $query .= " WHERE a.department = '$checkfiield' AND a.KodeSeksi = '$checkseksi'  ";
                    }       
            return $this->db->query($query);
    }

    function create_schedule($record) {
        $this->db->insert($this->table, $record);
    }

    function update_schedule($date, $name, $record) {
        $this->db->where("schedule_date", $date);
        $this->db->where("namaKaryawan", $name);
        return $this->db->update($this->table, $record);
    }

    // function update_date03($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date04($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date05($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date06($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date07($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date08($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date09($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date10($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date11($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date12($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date13($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date14($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date15($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date16($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date17($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date18($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }
    // function update_date19($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date20($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date21($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date22($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date23($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date24($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date25($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date26($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date27($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date28($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date29($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date30($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    // function update_date32($id, $date, $record) {
    //     $checkfiield = $this->checkfield("updateby");
    //     if ($checkfiield > 0) {
    //         $record['updateby'] = $this->session->userdata('ses_id_user');
    //         $record['updatetime'] = $this->datetimeserver;
    //     }
    //     $this->db->where($this->prefix_nik, $id);
    //     $this->db->where($this->prefix_date02, $date);
    //     return $this->db->update($this->table, $record);
    // }

    function checkData($date, $name) {
        $this->db->where("schedule_date", $date);
        $this->db->where("namaKaryawan", $name);
        $result = $this->db->get($this->table)->num_rows();
        return $result;
    }

}