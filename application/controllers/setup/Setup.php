<?php

class Setup extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
        $this->load->model("setup/Background_model","bg");
       
    }

    public function background() {
        $this->data['url_setbackground'] = site_url($this->controller . '/setbackground');
		$this->load->view('setup/v_setup/background', $this->data);
    }
    
    function setbackground() {
        $post = $this->input->post();
        $id = $post['id'];
        $color = $post['color'];
        $font = $post['font'];
        $background = $post['background'];
        $id_user = $this->session->userdata('ses_id_user');

        $checkdata = $this->bg->getbackground($id_user);
        if ($checkdata > 0 ){
            $record = array(
                "user_id"    => $id_user,
                "color_text" => $color,
                "background" => $background
            );
            $this->bg->update_data($id_user, $record);
        } else {
            $record = array(
                "user_id"    => $id_user,
                "color_text" => $color,
                "background" => $background
            );
            $this->bg->insertdata($record);
        }
        
        $jsonmsg = array("valid" => true, "msg" => "status berhasil diupdate");
        echo json_encode($jsonmsg);
    }

      

}
