<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{

	public function __construct (){
		parent::__construct();

		$username = $this -> session -> userdata('username');
		$uid = $this -> session -> userdata('uid');

		if(!$username || !$uid)
		{
			pushs('对不起，请先登录。');
			// redirect ('admin/login/index');
		}
	}
}