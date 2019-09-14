<?php

class Notification_model extends MY_Model {

    function __construct() {
        parent::__construct();
        $this->pathclass = basename(dirname(__FILE__));
        $this->db = $this->load->database($this->pathclass, true);
    }

    public function getGridData() {
        $id_user = $this->session->userdata('ses_id_user');
        $query = "
                 SELECT 
                        a.*
                 FROM $this->table a
                 WHERE
                   a.status_notification not in ('approve','reject','close')
                 AND a.statusdata='active'  
                 AND a.for_user=$id_user
                     
                 ";

        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return null;
        }
    }

    public function getnotificationuser($for_user) {
        $sqldata = "
                SELECT 
                   a.id_notification,
                   a.groupnotification,
                   a.for_user,
                   a.module,
                   a.title,
                   a.message,
                   a.transaksi,
                   a.keydata,
                   a.status_notification,
                   a.createtime
                 FROM $this->table a
                 WHERE
                    a.statusdata='active'
                    and a.groupnotification='user'
                    and a.status_notification not in ('approve','reject','close')
                    and a.for_user='$for_user'
                 ORDER BY a.createtime desc  
                 LIMIT 2
               ";

        $sqlcount = "
                SELECT 
                   coalesce(count(a.id_notification),0) as totaldata                   
                 FROM $this->table a
                 WHERE
                    a.statusdata='active'
                    and a.groupnotification='user'
                    and a.status_notification not in ('approve','reject','close')
                    and a.for_user='$for_user'
                 ORDER BY a.createtime desc  
               ";

        //echo $sqlcount;
        $resultdata = $this->db->query($sqldata);
        $resultcount = $this->db->query($sqlcount);

        $data = $this->returndata($resultdata, 'array');
        $datacount = $this->returndata($resultcount, 'row');

        $count = 0;
        if ($datacount) {
            $count = $datacount->totaldata;
        }

        $returndata = array(
            "data" => $data,
            "count" => $count,
        );

        return $returndata;
    }

}
