<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('users')->insert(
			[
				'id'          => 1,
				'name'    		=> 'user',
				'email'    		=> 'test@test.com',
				'password'    => Hash::make('12345678'),
				'email_verified_at' => Carbon::now(),
				'created_at'  => Carbon::now(),
				'updated_at'  => Carbon::now(),
			]
		);
	}
}
