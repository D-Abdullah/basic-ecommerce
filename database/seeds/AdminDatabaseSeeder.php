<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
              'name'  => 'abdullah khaled',
              'email'  => 'abdullah.khaled.dev@gmail.com',
              'password'  => bcrypt('12345678'),

         ]);
    }
}
