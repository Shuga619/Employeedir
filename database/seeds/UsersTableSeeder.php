<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Administrator',
            'email' => 'admin@admin.bt',
            'password' => bcrypt('qwer1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'Directory Administrator2',
            'email' => 'choning@bnb.bt',
            'password' => bcrypt('qwer1234'),
        ]);
        DB::table('users')->insert([
            'name' => 'Lhaki Delma',
            'email' => 'lhaki@bnb.bt',
            'password' => bcrypt('qwer1234'),
        ]);
    }
}
