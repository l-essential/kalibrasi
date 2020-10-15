<?php

class Calendar extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Calendar';
        $this->load->model("e_s/Calendar_model","cld");
    }
    
    public function index() {
       
        $data_calendar = $this->cld->get_list();
		$calendar = array();
		foreach ($data_calendar as $key => $val) 
		{
			$calendar[] = array(
							'id' 	=> intval($val->id), 
							'title' => $val->title, 
							'description' => trim($val->description), 
							'start' => date_format( date_create($val->start_date) ,"Y-m-d H:i:s"),
							'end' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
							'color' => $val->color,
							);
		}

		 $this->data = array();
		 $this->data['get_data']			= json_encode($calendar);
        parent::index();
        
    }

    public function postdata() {
        $param = $this->input->post();
        if ($param['actiondata'] !== 'delete') {
            $param['start_date'] = $this->totime($param['start_date']);
            $param['end_date'] = $this->totime($param['end_date']);
            $this->postdatabyparam($param);
        } else {
            parent::postdata();
        }
    }

    public function home_table() {
            $this->data['title'] = $this->title;
            $this->data['url_index'] = site_url($this->controller);
            $this->data['url_gridhome'] = site_url($this->controller . '/grid_calendar');
            // $this->data['url_addhome'] = site_url($this->controller . '/add');
            // $this->data['url_edithome'] = site_url($this->controller . '/edit');
            // $this->data['url_deletehome'] = site_url($this->controller . '/postdata_table');
            // $this->data['url_post'] = site_url($this->controller . '/postdata_table');
            // $this->data['prefix_id'] = $this->prefix_id;
            $this->load->view($this->view . '/home_table', $this->data);
    }

     public function grid_calendar() {
        $check = $this->cld->GridData_Calendar();
        if (!is_null($check)) {
            $result = $this->cld->GridData_Calendar()->result();
        } else {
            $result = '';
        }
        echo json_encode(array(
            "data" => $result
        ));
    }

}
