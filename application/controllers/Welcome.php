<?php

defined('BASEPATH') OR exit('No direct script access allowed');
require_once VENDOR_PATH . DS . 'phpmailer' . DS . 'phpmailer' . DS . 'PHPMailerAutoload.php';

class Welcome extends MY_Controller {

    public function index($page = 0) {
//Create a new PHPMailer instance
        $mail = new PHPMailer;

//Tell PHPMailer to use SMTP
        $mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
        $mail->SMTPDebug = 0;

//Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';

//Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

//Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

//Whether to use SMTP authentication
        $mail->SMTPAuth = true;

//Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "sujupro@gmail.com";

//Password to use for SMTP authentication
        $mail->Password = "6z86zacC";

//Set who the message is to be sent from
        $mail->setFrom('sujupro@gmail.com', 'First Last');

//Set an alternative reply-to address
//        $mail->addReplyTo('replyto@example.com', 'First Last');

//Set who the message is to be sent to
        $mail->addAddress('svtxphu@gmail.com', 'John Doe');

//Set the subject line
        $mail->Subject = 'PHPMailer GMail SMTP test';

//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//        $mail->msgHTML(file_get_contents('http://m.dantri.com.vn'), dirname(__FILE__));

//Replace the plain text body with one created manually
        $mail->AltBody = 'This is a plain-text message body';
        $mail->Encoding = 'UTF-8';
//Attach an image file
//        $mail->addAttachment('images/phpmailer_mini.png');
        $mail->Body = 'bo may test,bo may test,bo may test,bo may test,bo may test,bo may test,bo may test,';
//send the message, check for errors
        if (!$mail->send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            echo "Message sent!";
        }


        $this->load->model('article_model');
        $this->load->library('pagination');
        $totalRecord = $this->article_model->countAllArticle();
        $perPage = $this->config->config['per_page'];
        $config = $this->configPagination;
        $config['base_url'] = base_url('Welcome/index/');
        $config['total_rows'] = $totalRecord;
        $config['per_page'] = $perPage;
        $this->pagination->initialize($config);
        $this->load->view('layout/header');
        $data['datas'] = $this->article_model->getAll($page, $totalRecord, $perPage);
        $this->load->view('welcome_message', $data);
        $this->load->view('layout/footer');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/Welcome.php */