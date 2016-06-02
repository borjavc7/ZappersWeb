<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
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
				'name' 			=> 'Zapa Batman',
				'slug' 			=> 'zapa-batman',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://2.bp.blogspot.com/-MGSAVc3CFXQ/Vci-FkmgIqI/AAAAAAAAApw/MlnJQzvcxYE/s1600/IMG_0838.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 1
			],
			[
				'name' 			=> 'Zapa J.Hambre',
				'slug' 			=> 'zapa-j.hambre',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://3.bp.blogspot.com/-evpt6atcNjc/Vci-VpyEtKI/AAAAAAAAArs/-XtbhqDjVEM/s1600/juegos%2Bdel%2Bhambre.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Zapa Star Wars',
				'slug' 			=> 'zapa-starWars',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://2.bp.blogspot.com/-CXjMoLsjDpw/Vci-KF94-KI/AAAAAAAAAqg/ytNHOyJrHMY/s1600/R2D2.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Zapa S.Anillos',
				'slug' 			=> 'zapa-anillos',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 25.00,
				'image' 		=> 'http://1.bp.blogspot.com/-SSW0guY_ShY/Vci-T6P4nQI/AAAAAAAAArg/cVw4c0gi6TM/s1600/hobbit.jpg',
				'visible' 		=> 3,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Zapa Pesadilla',
				'slug' 			=> 'zapa-pesadilla',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://1.bp.blogspot.com/-Vxgys9UZUkQ/Vci-JVF3xNI/AAAAAAAAAqc/CnCpeooD5GM/s1600/Pesadillas%2Bantes%2Bde%2BNAvidad.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'zapa Gryffindor',
				'slug' 			=> 'zapa-gryffindor',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://4.bp.blogspot.com/-rmhu6OBQRAs/VUJARNUvD9I/AAAAAAAAAoE/T-2juHZcQu4/s1600/gryffindor.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 3
			],
			[
				'name' 			=> 'Zapa Zelda',
				'slug' 			=> 'zapa-zelda',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 22.00,
				'image' 		=> 'http://3.bp.blogspot.com/-YAufUrnwYAc/VUI9E8hX65I/AAAAAAAAAng/cnvzccDaP7M/s1600/zelda.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],
			[
				'name' 			=> 'Zapa Mario',
				'slug' 			=> 'zapa-mario',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://2.bp.blogspot.com/-EdfvhGpakuk/VPovGXb7LdI/AAAAAAAAAjw/i33PkE_vcBo/s1600/setas%2B1up.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 4
			],
			[
				'name' 			=> 'Zapa osos',
				'slug' 			=> 'zapa-osos',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://3.bp.blogspot.com/-_ubl01WxGhU/Vci-aBpblvI/AAAAAAAAAsQ/F0_NSBYz1tc/s1600/osos%2Bamarillos.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 5
			],
			[
				'name' 			=> 'Zapa rapunzel',
				'slug' 			=> 'zapa-rapunzel',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://1.bp.blogspot.com/-eQSnw5Aq4GI/Vci-NbHEnWI/AAAAAAAAAqw/2o_2U6UyRoI/s1600/RAPUNZEL.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 5
			],
			[
				'name' 			=> 'Zapa mini',
				'slug' 			=> 'zapa-mini',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://1.bp.blogspot.com/-0oQG8mKzAqo/VUJATdwfwFI/AAAAAAAAAoM/qrxmAEsxnRk/s1600/mini%2Bdisney.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 5
			],
			[
				'name' 			=> 'Zapa super',
				'slug' 			=> 'zapa-super',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://3.bp.blogspot.com/-NZb-a68uJwU/VUJAVqYT-SI/AAAAAAAAAoc/zkS-bHjO1ek/s1600/super%2Bh.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 5
			],
			[
				'name' 			=> 'Zapa doraemon',
				'slug' 			=> 'zapa-doraemon',
				'description' 	=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.',
				'extract' 		=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
				'price' 		=> 20.00,
				'image' 		=> 'http://4.bp.blogspot.com/-nsfNMcFFDOE/VUJAPXHUJPI/AAAAAAAAAn4/94yOe6_l60w/s1600/doraemon.jpg',
				'visible' 		=> 1,
				'created_at' 	=> new DateTime,
				'updated_at' 	=> new DateTime,
				'category_id' 	=> 5
			],
			
		);

		Product::insert($data);
    }
}
