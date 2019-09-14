<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Sendmail {
    private $email_host = 'smtp.gmail.com';
    private $protocol = 'smtp';
    private $host_port = '465';
    private $crypto_type = 'ssl';
    private $email_user = 'info.sh1apps@gmail.com';
    private $password_user = 'Qwe!2345';
    private $email_subtitle = 'WEB APPLICATION SH1';
    private $email_reply = 'info.sh1apps@gmail.com';

    public function postmail($sendto = '', $subject = '', $message = '', $cc = "", $bcc = '') {
        error_reporting(0);
        $CI = & get_instance(); //instance ini digunakan untuk pengganti $this pada controller
        $config = array(
            'protocol' => $this->protocol,
            //'smtp_crypto' => 'ssl',
            'smtp_crypto' => $this->crypto_type,
            'smtp_host' => $this->email_host,
            'smtp_port' => $this->host_port,
            'smtp_user' => $this->email_user,
            'smtp_pass' => $this->password_user,
            'mailtype' => 'html',
            //  'starttls' => true,
            'newline' => "\r\n",
            'crlf' => "\r\n"
        );
        $reply_to = $this->email_reply;
        $CI->load->library('email');
        $CI->email->initialize($config);
        $CI->email->clear(TRUE);
        $CI->email->from($this->email_user, $this->email_subtitle);
        $CI->email->to($sendto);
        $CI->email->bcc($bcc);
        $CI->email->cc($cc);
        $CI->email->reply_to($reply_to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        if (!$CI->email->send()) {
            return array("valid" => false, "message" => $CI->email->print_debugger());
        } else {
            return array("valid" => true, "message" => "Email success send");
        }
    }

    public function postmail_with_attachment($sendto = '', $subject = '', $message = '', $cc = '', $bcc = '', $attachment = '') {
        error_reporting(0);
        $CI = & get_instance(); //instance ini digunakan untuk pengganti $this pada controller
        $config = array(
            'protocol' => $this->protocol,
            //'smtp_crypto' => 'ssl',
            'smtp_crypto' => $this->crypto_type,
            'smtp_host' => $this->email_host,
            'smtp_port' => $this->host_port,
            'smtp_user' => $this->email_user,
            'smtp_pass' => $this->password_user,
            'mailtype' => 'html',
            //'starttls' => true,
            'newline' => "\r\n",
            'crlf' => "\r\n"
        );
        $reply_to = $this->email_reply;
        $CI->load->library('email');
        $CI->email->initialize($config);
        $CI->email->clear(TRUE);
        $CI->email->from($this->email_user, $this->email_subtitle);
        $CI->email->to($sendto);
        $CI->email->bcc($bcc);
        $CI->email->cc($cc);
        $CI->email->reply_to($reply_to);
        $CI->email->subject($subject);
        $CI->email->message($message);
        if ($attachment !== '') {
            if (is_array($attachment)) {
                foreach ($attachment as $item) {
                    $CI->email->attach($item);
                }
            } else {
                $CI->email->attach($attachment);
            }
        }
        if (!$CI->email->send()) {
            return array("valid" => false, "message" => $CI->email->print_debugger());
        } else {
            return array("valid" => true, "message" => "Email success send");
        }
    }

}
