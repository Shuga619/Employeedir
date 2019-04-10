<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
        	'code' => '100', 
        	'name' => 'Head Office',
        	'category' => 'headoffice',
        ]);
      	DB::table('locations')->insert([
      		'code' => '000', 
      		'name' => 'Thimphu Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '001', 
      		'name' => 'Phuntsholing Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '002', 
      		'name' => 'Samdrupjongkhar Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '003', 
      		'name' => 'Trashigang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '004', 
      		'name' => 'Gelephu Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '005', 
      		'name' => 'Paro Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '006', 
      		'name' => 'Mongar Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '007', 
      		'name' => 'Wangdue Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '008', 
      		'name' => 'Bumthang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '009', 
      		'name' => 'Samtse Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '010', 
      		'name' => 'Tsirang Branch',
      		'category' => 'branch',
      	]);
      	DB::table('locations')->insert([
      		'code' => '999', 
      		'name' => 'Corporate Branch',
      		'category' => 'branch',
      	]);
      	// Extensions
      	DB::table('locations')->insert([
      		'code' => '200', 
      		'name' => 'Taba Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '300', 
      		'name' => 'Motithang Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '400', 
      		'name' => 'Babesa Extension',
      		'category' => 'extension',
      	]);   
      	DB::table('locations')->insert([
      		'code' => '500', 
      		'name' => 'Olakha Extension',
      		'category' => 'extension',
      	]); 
      	DB::table('locations')->insert([
      		'code' => '600', 
      		'name' => 'Khasadrabchu Extension',
      		'category' => 'extension',
      	]); 
      	// DB::table('locations')->insert([
      	// 	'code' => '101', 
      	// 	'name' => 'Tala Extension',
      	// 	'category' => 'extension',
      	// ]);   
      	// DB::table('locations')->insert([
      	// 	'code' => '01', 
      	// 	'name' => '',
      	// 	'category' => 'extension',
      	// ]); 
      	// DB::table('locations')->insert([
      	// 	'code' => '', 
      	// 	'name' => '',
      	// 	'category' => 'extension',
      	// ]); 
      	// DB::table('locations')->insert([
      	// 	'code' => '', 
      	// 	'name' => '',
      	// 	'category' => 'extension',
      	// ]); 
    }
}
