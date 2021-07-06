<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		//ini data login//
		$model = model('UserModel');
		$model->insert([
			'username' => 'rio',
			'useremail' => 'rio123@gmail.com',
			'userpassword' => password_hash('rio123', PASSWORD_DEFAULT),
		]); 
	}
}
