<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Admin::truncate();
        \App\Models\Admin::create([
            'name'=>"Supper Authors",
            'about'=>"Traveler",
            'password'=>"123456789",
            'email'=>"admin@admin.com",

        ]);

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
