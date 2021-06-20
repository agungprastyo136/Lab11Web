<?php

namespace App\Controllers;

class Page extends BaseController
{	
	public function artikel()
	{
		return view('artikel', [
			'title' => 'Halaman artikel']);

	}

	public function about()
	{
		return view('about', [
			'title' => 'Halaman about']);

	}

	public function contact()
	{
		return view('contact',[
			'title' => "Ini halaman Contact"]);
	}

	public function faqs()
	{
		echo "Ini halaman FAQ";
	}

	public function tos()
	{
		echo "ini halaman Term of Services";
	}

}