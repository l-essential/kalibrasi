 <!-- begin sidebar scrollbar -->
      <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
         <?php
         
            if ($this->session->userdata('ses_id_role') == 1) {
                $this->load->view('v_dashboard/sidebar_admin');

            } else if ($this->session->userdata('ses_id_role') == 2) {
                $this->load->view('v_dashboard/sidebar_ecommerce');

            }else if ($this->session->userdata('ses_id_role') == 3) {
                $this->load->view('v_dashboard/sidebar_pettycash');

            }else if ($this->session->userdata('ses_id_role') == 4) {
                $this->load->view('v_dashboard/sidebar_report');
            }

        ?>

        <!-- end sidebar nav -->
      </div>