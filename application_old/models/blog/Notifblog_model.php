<?php

class Notifblog_model extends MY_Model {

     public function __construct() {
        parent::__construct();
        $this->db = $this->load->database('blog', true);
        $this->table = 'article';
        $this->prefix_id = "id_article";
        
    }

    public function notiflist() {
            $sql = " SELECT count(a.status_article) as total 
                    FROM article a
                    WHERE
                    a.statusdata='active' AND a.status_article ='0' ";
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }

    }

    public function notifdraft() {
        $checkfiield = $this->session->userdata('ses_username');
        if ($this->session->userdata('ses_username') == 'moehamad') {
            $sql = " SELECT count(a.status_article) as total 
                    FROM article a
                    WHERE
                    a.statusdata='active' AND a.status_article ='1' ";
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }

        } else {
               $sql = " SELECT count(a.status_article) as total 
                        FROM article a 
                        WHERE a.done_by='$checkfiield' AND a.statusdata='active' AND a.status_article ='1' ";
                       
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }
        
        }
    }

     public function notifrevisi() {
        $checkfiield = $this->session->userdata('ses_username');
        if ($this->session->userdata('ses_username') == 'moehamad') {
            $sql = " SELECT count(a.status_article) as total 
                    FROM article a
                    WHERE
                    a.statusdata='active' AND a.status_article ='3' ";
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }

        } else {
               $sql = " SELECT count(a.status_article) as total 
                        FROM article a 
                        WHERE a.done_by='$checkfiield' AND a.statusdata='active' AND a.status_article ='3' ";
                       
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }
        
        }
    }

    public function notifreject() {
        $checkfiield = $this->session->userdata('ses_username');
        if ($this->session->userdata('ses_username') == 'moehamad') {
            $sql = " SELECT count(a.status_article) as total 
                    FROM article a
                    WHERE
                    a.statusdata='active' AND a.status_article ='4' ";
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }

        } else {
               $sql = " SELECT count(a.status_article) as total 
                        FROM article a 
                        WHERE a.done_by='$checkfiield' AND a.statusdata='active' AND a.status_article ='4' ";
                       
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }
        
        }
    }

    public function notifpublic() {
        $checkfiield = $this->session->userdata('ses_username');
        if ($this->session->userdata('ses_username') == 'moehamad') {
            $sql = " SELECT count(a.status_article) as total 
                    FROM article a
                    WHERE
                    a.statusdata='active' AND a.status_article ='9' ";
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }

        } else {
               $sql = " SELECT count(a.status_article) as total 
                        FROM article a 
                        WHERE a.done_by='$checkfiield' AND a.statusdata='active' AND a.status_article ='9' ";
                       
            $result = $this->db->query($sql);
            $return = $this->returndata($result, 'row');
            if ($return) {
                return $return->total;
            } else {
                return 0;
            }
        
        }
    }

   
}
