<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

require_once dirname(__FILE__) . '/phpmailer/PHPMailer/PHPMailerAutoload.php';

class phpmail extends PHPMailer {
    function __construct() {
        parent::__construct();
    }

    public function sendemail_citraraya($to = '', $subject = '', $message = '', $cc = '', $bcc = '', $attachment = '') {
        $this->isSMTP();
        $this->Host = 'mail.citraraya.com';
        $this->Port = 587;
        $this->SMTPSecure = 'tsl';
        $this->SMTPAuth = true;
        $this->Username = "noreply@citraraya.com";
        $this->Password = "noreply@911";
        $this->setFrom('noreply@citraraya.com', 'CITRARAYA');
        $this->addReplyTo('noreply@citraraya.com', 'NO REPLY');
        $this->addAddress($to);
        $this->Subject = $subject;
        $this->msgHTML($message);
        if (!$this->send()) {
            return "Mailer Error: " . $this->ErrorInfo;
        } else {
            return "Message sent!";
        }
    }

    public function sendmail_gmail($to = '', $subject = '', $message = '', $cc = '', $bcc = '', $attachment = '') {
        $this->isSMTP();
        $this->Host = 'smtp.gmail.com';
        $this->Port = 587;
        $this->SMTPSecure = 'tls';
        $this->SMTPAuth = true;
        $this->Username = "info.sh1apps@gmail.com";
        $this->Password = "Qwe!2345";
        $this->setFrom('info.sh1apps@gmail.com', 'SH1APPS');
        $this->addReplyTo('info.sh1apps@gmail.com', 'SH1APPS');
        $this->addAddress($to);
        $this->Subject = $subject;
        $this->msgHTML($message);
        if (!$this->send()) {
            return "Mailer Error: " . $this->ErrorInfo;
        } else {
            return "Message sent!";
        }
    }

}
