<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mail extends CI_Controller {


	public function index()
	{
		$config = Array(
		    "protocol" => "smtp",
		    "smtp_host" => "ssl://smtp.googlemail.com",
		    "smtp_port" => 465,
		    "smtp_user" => "kioko9x@gmail.com",
		    "smtp_pass" => "hungvipno1",
		);
		$this->load->library("email", $config);
		$this->email->set_newline("\r\n");
		
		$this->email->from("kioko9x@gmail.com","Hung");
		$this->email->to("hungnaru@gmail.com");

		$this->email->subject("Gửi từ localhost bằng codigniter");
		$this->email->message("Hello world");
		
		
		if (!$this->email->send())
		{
		    show_error($this->email->print_debugger());
		}else{
		    $this->session->set_flashdata('message', 'Không thêm được');
 		    redirect(site_url());
		}  
	}
}
