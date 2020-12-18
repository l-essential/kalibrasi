<?php

class Autocomplete extends MY_Controller {

    public function data_tools() {
        $this->setmodel("e04/tools_model#tools");
        $key = trim(utf8_encode($_REQUEST['q']));
        $result = $this->tools->getsearch($key);
        $arraydata = array();
        if ($result) {
            foreach ($result as $row) {
                $arraydata[] = array(
                    'label'  => $row['tools_code'] . " - " . $row['tools_name'] . " - " . $row['tools_noseri_model'],
                    'value'  => $row['tools_name'],
                    'id'     => $row['tools_id'],
                    'code'   => $row['tools_code'],
                );
            }
            $this->dja(array('valid' => true, 'message' => 'Data ditemukan', 'contentdata' => $arraydata));
        } else {
            $this->dja(array('valid' => false, 'message' => 'Tidak ada data', 'contentdata' => ''));
        }
    }

}
