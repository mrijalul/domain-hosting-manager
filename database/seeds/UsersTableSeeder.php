<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			[
				'name'              => 'Super Admin Argia Cyber',
				'email'             => 'developer@argiacyber.com',
				'password'          => bcrypt('4dm1nZup3r'),
				'email_verified_at' => now(),
				'created_at'        => Carbon::now(),
				'updated_at'        => Carbon::now(),
			]
		]);
	}
}
