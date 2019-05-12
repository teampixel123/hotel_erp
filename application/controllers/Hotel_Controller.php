<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_controller extends CI_Controller {
  public function index()
	{
		$this->load->view('pages/add_hotel_info');
	}
	public function add_hotel_info()
	{
		$this->load->view('pages/add_hotel_info');
	}
  public function add_room()
	{
		$this->load->view('pages/add_room');
	}

  public function save_hotel_info(){
    
  }
}
