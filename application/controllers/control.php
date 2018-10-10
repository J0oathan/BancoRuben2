<?php 



defined('BASEPATH') OR exit('No direct script access allowed');

class control extends CI_Controller
 	{	

 			public function holaa()
 			{
 				$this->load->database();
 				$this->load->view('holaa');
 			}
	}


 ?>