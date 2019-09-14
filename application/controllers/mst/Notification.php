<?php

class Notification extends MY_Controller {

    function __construct() {
        $this->pathclass = basename(dirname(__FILE__));
        parent::__construct();
    }

    public function postdata() {
        $param = $this->input->post();
        $actiondata = $param['actiondata'];
        $id_notification = $param['id_notification'];
        $rejectnote = $param['rejectnote'];
        $rowdata = $this->modeldata->getby_id($id_notification);
        $transaksi = trim(rtrim(ltrim($rowdata->transaksi)));
        if ($rowdata->typedata !== 'information') {
            //jika approve atau reject
            switch ($transaksi) {
                case "Permintaan Pembelian":
                    $this->transaksi_permintaanpembelian($rowdata, $actiondata, $rejectnote);
                    break;

                default:
                    break;
            }
        } else {
            //jika hanya informasi
            $this->modeldata->updatedata($id_notification, array("status_notification" => 'close'));
            $this->dj(array(
                "valid" => true,
                "message" => "Data has been closed"
            ));
        }
    }

    public function transaksi_permintaanpembelian($rowdata, $actiondata, $rejectnote = '') {
        $this->setmodel("pcs/Permintaanpembelian_model#pp");
        $keydata = json_decode($rowdata->keydata, true);
        $index = key($keydata);
        $id = $keydata[$index];
        $rowpp = $this->pp->getdataheaderbyid($id);
        $status_pp = $rowpp->status_pp;
        $status_disetujui = $rowpp->status_disetujui;
        $status_mengetahui = $rowpp->status_mengetahui;

        if ($status_disetujui == 'request' && $status_mengetahui == 'menunggu') {
            $statusdata = 'hod';
        } else if ($status_disetujui == 'approve' && $status_mengetahui == 'request') {
            $statusdata = 'direction';
        } else if ($status_disetujui == 'approve' && $status_mengetahui == 'approve') {
            $statusdata = 'adminpurchase';
        }

        if ($actiondata == 'approve' && $statusdata == 'hod') {
            $record = array(
                "status_disetujui" => "approve",
                "status_mengetahui" => "request",
                "waktu_disetujui" => date('Y-m-d H:i:s'),
            );
            $this->pp->updatedata($id, $record);

            $this->modeldata->updatedata($rowdata->id_notification, array("status_notification" => 'approve'));
            $recordnotif = array(
                "keydata" => json_encode(array("id_permintaanpembelianheader" => $id)),
                "for_user" => $rowpp->mengetahui_oleh,
                "module" => 'Purchasing',
                "transaksi" => 'Permintaan Pembelian',
                "title" => 'Permintaan Pembelian ' . $rowpp->no_pp . ' - ' . $rowpp->pemesan,
                "message" => 'Terdapat permintaan pembelian untuk dilakukan approval dengan No PP.' . $rowpp->no_pp . ', Pemesan ' . $rowpp->pemesan,
            );
            $this->modeldata->insertdata($recordnotif);

            $to = $rowpp->emaildisetujui;
            $subject = "REQUEST APPROVAL MENGETAHUI PEMBELIAN NO." . $rowpp->no_pp . ' - ' . $rowpp->pemesan;
            $cc = $rowpp->email_createby . ',' . $rowpp->emaildisetujui;
            $message = "Dear Bapak/Ibu " . $rowpp->mengetahui . " <br/><br/>";
            $message .= "Berikut ini adalah pengajuan yang dipesan oleh " . $rowpp->pemesan . ', dan telah disetujui oleh ' . $rowpp->disetujui . ', permintaan pembelian sebagai berikut : <br/>';
            $message .= $this->requestpptomengetahui($id) . '<br/>';
            $message .= " Mohon untuk melakukan Approve atau Reject untuk pengajuan tersebut pada aplikasi SH1APPS di alamat http://192.168.100.25:81/sh1apps . <br>Terima kasih";
            $returnmail = $this->sendmail->postmail($to, $subject, $message, $cc);

            $validemail = $returnmail['valid'];
            $messageemail = $returnmail['message'];
            if ($validemail == true) {
                $record = array(
                    "sendmail_mengetahui" => "sudah",
                );
                $this->pp->updatedata($id, $record);
            }

            $valid = true;
            $message = $messageemail;
        } else if ($actiondata == 'reject' && $statusdata == 'hod') {
            $record = array(
                "status_pp" => "reject",
                "status_disetujui" => "reject",
                "batal_disetujui" => $rejectnote,
                "waktu_disetujui" => date('Y-m-d H:i:s'),
            );
            $this->pp->updatedata($id, $record);
            $this->modeldata->updatedata($rowdata->id_notification, array("status_notification" => 'reject'));
            $recordnotif = array(
                "keydata" => json_encode(array("id_permintaanpembelianheader" => $id)),
                "for_user" => $rowpp->createby,
                "typedata" => 'information',
                "status_notification" => 'information',
                "module" => 'Purchasing',
                "transaksi" => 'Permintaan Pembelian',
                "title" => 'Permintaan Pembelian ' . $rowpp->no_pp . ' - ' . $rowpp->pemesan,
                "message" => 'Terdapat permintaan pembelian yang telah dibatalkan dengan No PP.' . $rowpp->no_pp . ', Pemesan ' . $rowpp->pemesan . ' ,dibatalkan oleh ' . $rowpp->disetujui,
            );
            $this->modeldata->insertdata($recordnotif);

            $to = $rowpp->email_createby;
            $subject = "REJECT APPROVAL PEMBELIAN NO." . $rowpp->no_pp . ' - ' . $rowpp->pemesan;
            $cc = $rowpp->emaildisetujui;
            $message = "Dear Bapak/Ibu " . $rowpp->membuat . " <br/><br/>";
            $message .= "Berikut ini adalah pengajuan yang dipesan oleh " . $rowpp->pemesan . ',dan dilakukan pembatalan oleh ' . $rowpp->disetujui . ' dengan permintaan pembelian sebagai berikut : <br/>';
            $message .= $this->requestpptomengetahui($id) . '<br/>';
            $message .= "<br/><br/> Dengan alasan " . $rejectnote . ",<br/>Terima kasih";
            $returnmail = $this->sendmail->postmail($to, $subject, $message, $cc);

            $validemail = $returnmail['valid'];
            $messageemail = $returnmail['message'];

            $valid = true;
            $message = $messageemail;
        } else if ($actiondata == 'approve' && $statusdata == 'direction') {
            $this->load->model("pcs/Parameterdata_model", 'parameterdata');
            $this->load->model("Useraccess_model", 'useraccess');
            $rowparam = $this->parameterdata->getbyarray(array(
                "kode_parameter" => "ADMIN_PURCHASING",
            ));
            if ($rowparam) {
                $users_id = $rowparam->nilai_patemeter;

                $record = array(
                    "status_mengetahui" => "approve",
                    "waktu_mengetahui" => date('Y-m-d H:i:s'),
                );
                $this->pp->updatedata($id, $record);
                $this->modeldata->updatedata($rowdata->id_notification, array("status_notification" => 'approve'));
                $recordnotif = array(
                    "keydata" => json_encode(array("id_permintaanpembelianheader" => $id)),
                    "for_user" => $users_id,
                    "module" => 'Purchasing',
                    "transaksi" => 'Permintaan Pembelian',
                    "title" => 'Permintaan Pembelian ' . $rowpp->no_pp . ' - ' . $rowpp->pemesan,
                    "message" => 'Terdapat permintaan proses pembelian dengan No PP.' . $rowpp->no_pp . ', Pemesan ' . $rowpp->pemesan,
                );
                $this->modeldata->insertdata($recordnotif);

                $to = $this->useraccess->getemailusersbyid($users_id);
                $subject = "REQUEST PROSES PEMBELIAN NO." . $rowpp->no_pp . ' - ' . $rowpp->pemesan;
                $cc = $rowpp->emaildisetujui . ',' . $rowpp->emailmengetahui . ',' . $rowpp->email_createby;
                $message = "Dear Bapak/Ibu di Departmen Purchase <br/><br/>";
                $message .= "Berikut ini adalah pengajuan yang dipesan oleh " . $rowpp->pemesan . ', dan telah disetujui oleh ' . $rowpp->mengetahui . ', permintaan pembelian sebagai berikut : <br/>';
                $message .= $this->requestpptomengetahui($id) . '<br/>';
                $message .= " Mohon untuk dilakukan pembelian pengajuan tersebut, detail informasi silakan akses pada Aplikasi SH1APPS di alamat http://192.168.100.25:81/sh1apps . <br>Terima kasih";
                $returnmail = $this->sendmail->postmail($to, $subject, $message, $cc);
                $validemail = $returnmail['valid'];
                $messageemail = $returnmail['message'];

                $valid = true;
                $message = $messageemail;
            } else {
                $valid = false;
                $message = "No data admin purchase in paramater";
            }
        } else if ($actiondata == 'reject' && $statusdata == 'direction') {
            $record = array(
                "status_pp" => "reject",
                "status_mengetahui" => "reject",
                "batal_mengetahui" => $rejectnote,
                "waktu_mengetahui" => date('Y-m-d H:i:s'),
            );

            $this->pp->updatedata($id, $record);
            $this->modeldata->updatedata($rowdata->id_notification, array("status_notification" => 'reject'));
            $recordnotif = array(
                "keydata" => json_encode(array("id_permintaanpembelianheader" => $id)),
                "for_user" => $rowpp->createby,
                "typedata" => 'information',
                "status_notification" => 'information',
                "module" => 'Purchasing',
                "transaksi" => 'Permintaan Pembelian',
                "title" => 'Permintaan Pembelian ' . $rowpp->no_pp . ' - ' . $rowpp->pemesan,
                "message" => 'Terdapat permintaan pembelian yang telah dibatalkan dengan No PP.' . $rowpp->no_pp . ', Pemesan ' . $rowpp->pemesan . ' ,dibatalkan oleh ' . $rowpp->mengetahui,
            );
            $this->modeldata->insertdata($recordnotif);

            $to = $rowpp->email_createby;
            $subject = "REJECT APPROVAL PEMBELIAN NO." . $rowpp->no_pp . ' - ' . $rowpp->pemesan;
            $cc = $rowpp->emaildisetujui . ',' . $rowpp->emailmengetahui;
            $message = "Dear Bapak/Ibu " . $rowpp->membuat . " <br/><br/>";
            $message .= "Berikut ini adalah pengajuan yang dipesan oleh " . $rowpp->pemesan . ',dan dilakukan pembatalan oleh ' . $rowpp->mengetahui . ' dengan permintaan pembelian sebagai berikut : <br/>';
            $message .= $this->requestpptomengetahui($id) . '<br/>';
            $message .= "<br/><br/> Dengan alasan " . $rejectnote . ",<br/>Terima kasih";
            $returnmail = $this->sendmail->postmail($to, $subject, $message, $cc);
            $validemail = $returnmail['valid'];
            $messageemail = $returnmail['message'];
            $valid = true;
            $message = $messageemail;
        } else if ($actiondata == 'approve' && $statusdata == 'adminpurchase') {
            $this->load->model("Useraccess_model", 'useraccess');
            $this->load->model("pcs/Prosespembelian_model", 'prosespembelian');

            $record = array(
                "id_permintaanpembelianheader" => $id,
                "for_user" => $rowdata->for_user,
            );
            $resultcheck = $this->prosespembelian->getbyarray(array(
                "id_permintaanpembelianheader" => $id
            ));
            if (empty($resultcheck)) {
                $this->prosespembelian->insertdata($record);
                $this->modeldata->updatedata($rowdata->id_notification, array("status_notification" => 'approve'));
                $recordnotif = array(
                    "keydata" => json_encode(array("id_permintaanpembelianheader" => $id)),
                    "for_user" => $rowpp->createby,
                    "typedata" => 'information',
                    "status_notification" => 'information',
                    "module" => 'Purchasing',
                    "transaksi" => 'Permintaan Pembelian',
                    "title" => 'Permintaan Pembelian ' . $rowpp->no_pp . ' - ' . $rowpp->pemesan,
                    "message" => 'Permintaan pembelian yang telah di proses oleh admin purchase dengan No PP.' . $rowpp->no_pp . ', Pemesan ' . $rowpp->pemesan,
                );
                $this->modeldata->insertdata($recordnotif);
            }


            $to = $rowpp->email_createby;
            $emailadminpurchase = $this->useraccess->getemailusersbyid($rowdata->for_user);
            $subject = "PROSES PEMBELIAN NO." . $rowpp->no_pp . ' - ' . $rowpp->pemesan;
            $cc = $rowpp->emaildisetujui . ',' . $rowpp->emailmengetahui . ',' . $emailadminpurchase;
            $message = "Dear Bapak/Ibu " . $rowpp->membuat . " <br/><br/>";
            $message .= "Berikut ini adalah pengajuan yang dipesan oleh " . $rowpp->pemesan . ', dan akan di proses oleh admin purchase, detail pengajuan sebagai berikut : <br/>';
            $message .= $this->requestpptomengetahui($id) . '<br/>';
            $message .= " Mohon untuk menunggu pembelian pengajuan tersebut, detail informasi silakan akses pada Aplikasi SH1APPS di alamat http://192.168.100.25:81/sh1apps . <br>Terima kasih";
            $returnmail = $this->sendmail->postmail($to, $subject, $message, $cc);
            $validemail = $returnmail['valid'];
            $messageemail = $returnmail['message'];
            $valid = true;
            $message = $messageemail;
        }


        $this->dj(array(
            "valid" => $valid,
            "message" => $message,
        ));
    }

    public function requestpptomengetahui($id_permintaanpembelianheader) {
        $this->setmodel("mst/Notification_model#notif");
        $this->setmodel("pcs/Permintaanpembelian_model#pp");
        $result = $this->pp->getdataheaderbyid($id_permintaanpembelianheader);
        $this->data['result'] = $result;
        $this->data['withprint'] = 'N';
        $html = $this->load->view('pcs/v_permintaanpembelian/report_perminataanpembelian', $this->data, true);
        return $html;
    }

}
