<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$model = model('UserModel');
		$model->insert([
			'username' => 'agung',
			'useremail' => 'agungprastyo136@gmail.com',
			'userpassword' => password_hash('agung', PASSWORD_DEFAULT),
		]); 
	}
}