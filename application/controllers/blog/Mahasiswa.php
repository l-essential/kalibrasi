<?php

class Mahasiswa extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->title = 'Mahasiswa';
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('mahasiswa_model');
    }


    //   public function index() {
    //     // $this->data['total_internal'] = $this->total->total_internal();
    //     // $this->data['total_external'] = $this->total->total_external();
    //     // $this->data['url_grid_eksternal'] = site_url($this->controller . "/grid_eksternal/");
    //     $this->data['url_paging'] = site_url($this->controller . '/paging');
    //     // $this->data['url_grid_eksternal'] = site_url($this->controller . "/grid_eksternal/");
    //     parent::index();
    // }

     function index(){

        //konfigurasi pagination
        $config['base_url'] = site_url('blog/mahasiswa/index'); //site url
        $config['total_rows'] = $this->db->count_all('lessential_blog.mahasiswa'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);

        // Membuat Style pagination untuk BootStrap v4
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $this->data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->mahasiswa_model->get_mahasiswa_list($config["per_page"], $data['page']);           

        $data['pagination'] = $this->pagination->create_links();

        //load view mahasiswa view
        $this->load->view('blog/v_mahasiswa/home',$data);
    }

}
