<?php
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->insert([
			'full_name' => 'Nosilence Perú',
			'email' => 'root@nosilenceperu.com',
			'password' => bcrypt('lamanzana')
		]);
	}
}