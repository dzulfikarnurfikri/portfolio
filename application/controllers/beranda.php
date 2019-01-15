<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index(){
		$ip = $_SERVER['REMOTE_ADDR'];
		$browser = $_SERVER['HTTP_USER_AGENT'];
		$data_visitor = array('ip_address' => $ip,'browser' => $browser);
		$insert_visitor = $this->Model_aplikasi->insert_data('tb_visitor', $data_visitor);
		$this->load->view('beranda');
	}

	function send_email(){
		if($this->input->post('nama') == ''){
			$msg['sukses'] = false;
			$msg['notif'] = 'Maaf, Nama harus diisi';
		}elseif($this->input->post('email') == ''){
			$msg['sukses'] = false;
			$msg['notif'] = 'Maaf, Email harus diisi';
		}elseif(filter_var($this->input->post('email'), FILTER_VALIDATE_EMAIL) === false){
			$msg['sukses'] = false;
			$msg['notif'] = 'Maaf, Format email salah';
		}elseif($this->input->post('subjek') == ''){
			$msg['sukses'] = false;
			$msg['notif'] = 'Maaf, Subjek harus diisi';
		}elseif($this->input->post('pesan') == ''){
			$msg['sukses'] = false;
			$msg['notif'] = 'Maaf, Isi pesan harus diisi';
		}else{
			$msg['sukses'] = true;
			$msg['notif'] = 'Pesan kamu berhasil dikirim';
			$email_from = $this->input->post('email');
			$subject = $this->input->post('subjek');
			$nama = $this->input->post('nama');
			$pesan = $this->input->post('pesan');
			$email_to = 'ruangbelajar1@gmail.com';
			$data_message = array('fullname' => $nama, 'email_address' => $email_from, 'subject' => $subject, 'message' => $pesan);
			$insert_message = $this->Model_aplikasi->insert_data('tb_message', $data_message);
			// $url = 'https://api.elasticemail.com/v2/email/send';
			// try{
   //              $post = array('from' => $email_from,
   //                  		'fromName' => $nama,
   //                  		'apikey' => 'aa4d5e56-6bc4-4be2-85aa-b6269f734277',
   //                  		'subject' => $subject,
   //                  		'to' => $email_to,
   //                  		'bodyHtml' => $pesan,
   //                  		'bodyText' => 'ID Anda adalah',
   //                  		'isTransactional' => false);
   //                  		$ch = curl_init();
   //                  		curl_setopt_array($ch, array(
   //                              CURLOPT_URL => $url,
   //                  			CURLOPT_POST => true,
   //                  			CURLOPT_POSTFIELDS => $post,
   //                              CURLOPT_RETURNTRANSFER => true,
   //                              CURLOPT_HEADER => false,
   //                  			CURLOPT_SSL_VERIFYPEER => false
   //                          ));
   //                          $result=curl_exec ($ch);
   //                          curl_close ($ch);
   //                          //echo $result;	
   //                  }
   //                  catch(Exception $ex){
   //                  	echo $ex->getMessage();
   //                  }
		}
		echo json_encode($msg);
	}
}