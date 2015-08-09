<?php

use Illuminate\Database\Seeder;

class customerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Model::unguard();

        // Add to customer table
        DB::table('customer')->insert([
        	['name' => 'dasdsadasdsad', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'asfdvds', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'erqr', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'xcvcxv', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'yutu', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'hjhgk', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'xczcxzc', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'wqeqweqwe', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'adsdadadppp', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()],
        	['name' => 'hgfdjfsndadsf', 'contactNumber' => '+639053343746', 'isSuspended' => false, 'created_at' => time(), 'updated_at' => time()]
        ]);

        Model::reguard();
    }
}
