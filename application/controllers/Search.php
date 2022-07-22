<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends Front {
	public function index()
	{
		$this->load->view('search_coupan');
	}
}
