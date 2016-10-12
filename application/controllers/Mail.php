<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {


	public function index()
	{
		$config = Array(
		    "protocol" => "smtp",
		    "smtp_host" => "ssl://smtp.googlemail.com",
		    "smtp_port" => 465,
		    "smtp_user" => "dinhphongmtp@gmail.com",
		    "smtp_pass" => "hungvipno1",
		);
		$this->load->library("email", $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from("dinhphongmtp@gmail.com","Hung");
		$this->email->to("hungnaru@gmail.com");

		$this->email->subject("Gửi từ localhost bằng codigniter");
		$this->email->message("Hello world");
		
		
		if (!$this->email->send())
		{
		    show_error($this->email->print_debugger());
		}else{
		    echo 'Gửi email thành công';
		}  
	}
}

/* End of file mail.php */
/* Location: ./application/controllers/mail.php */