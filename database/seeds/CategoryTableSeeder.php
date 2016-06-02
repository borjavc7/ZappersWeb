<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
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
				'name' => 'Super heroes', 
				'slug' => 'super-heroes', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#440022'
			],
			[
				'name' => 'Geek', 
				'slug' => 'geek', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#445500'
			],
			[
				'name' => 'Peliculas', 
				'slug' => 'peliculas', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#1027F3'
			],
			[
				'name' => 'Juegos', 
				'slug' => 'juegos', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#EF2929'
			],
			[
				'name' => 'Infantil', 
				'slug' => 'infantil', 
				'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', 
				'color' => '#F68DF6'
			]
		);

		Category::insert($data);
    }
}
