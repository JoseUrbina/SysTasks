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
    	// The seeder was created manually -> it places first in the db
    	factory(App\Models\User::class)->create([
    		'name' => 'José Urbina',
        	'email' => 'joseantonioug.99@gmail.com',
        	'password' => bcrypt('123456'),
        	'type' => 1
    	]);

    	// Seeder was created with the factory
        factory(App\Models\User::class, 7)->create();
    }
}
