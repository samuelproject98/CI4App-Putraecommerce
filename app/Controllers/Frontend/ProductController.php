<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CategoriesModel;
use App\Models\ProductsModel;

class ProductController extends BaseController
{
	public function __construct()
	{
		$this->products = new ProductsModel();
		$this->categories = new CategoriesModel();
	}

	public function index()
	{
		$data = [
			'meta_title' => 'Product',
			'pages_slug' => 'product',
			'products'	=> $this->products->getProducts(),
			'categories' => $this->categories->getCategories(),
			'validation' => \Config\Services::validation()
		];
		return view('frontend/pages/produk', $data);
	}

	public function show()
	{
		$data = [
			'meta_title' => 'Product',
			'pages_slug' => 'product',
			'products' => $this->products->getProducts(),
			'categories' => $this->categories->getCategories(),
			'validation' => \Config\Services::validation()
		];
		return view('frontend/pages/produk', $data);
	}
}
