<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\MerchantsModel;

class DashboardController extends BaseController
{
	public function __construct()
	{
		$this->db = \Config\Database::connect();
		$this->merchants = new MerchantsModel();
	}

	public function index()
	{
		$title = 'Dashboard';
		$data = [
			'meta_title'	=> $title . ' | Admin Panel',
			'title'			=> $title,
			'pages_slug' 	=> 'dashboard'
		];
		return view('backend/pages/dashboard', $data);
	}
}
