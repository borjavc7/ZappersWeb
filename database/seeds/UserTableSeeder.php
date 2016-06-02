<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
			[
				'name' 		=> 'borja', 
				'last_name' => 'vera', 
				'email' 	=> 'borjaveracasal90@gmail.com', 
				'user' 		=> 'borgod',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'admin',
				'active' 	=> 1,
				'address' 	=> 'esmeralda nº8, Sevilla',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],
			[
				'name' 		=> 'Ana', 
				'last_name' => 'Lorente', 
				'email' 	=> 'analorente@gmail.com', 
				'user' 		=> 'aminaya',
				'password' 	=> \Hash::make('123456'),
				'type' 		=> 'user',
				'active' 	=> 1,
				'address' 	=> 'pablo picasso, Tomares',
				'created_at'=> new DateTime,
				'updated_at'=> new DateTime
			],

		);

		User::insert($data);
    }
}
