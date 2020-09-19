<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tags = [
            ['en'=>['title'=>'Best']],
            ['en'=>['title'=>'Tour Guide']],
            ['en'=>['title'=>'Service Pro']],
            ['en'=>['title'=>'Say']],
            ['en'=>['title'=>'Exactly']],
            ['en'=>['title'=>'Man']],
            ['en'=>['title'=>'Hot']],
            ['en'=>['title'=>'Summer']],
            ['en'=>['title'=>'Best']],
            ['en'=>['title'=>'Creative']],
            ['en'=>['title'=>'Healthy']],

        ] ;


        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Tag::truncate();
        foreach ($tags as $tag)
            \App\Models\Tag::create($tag);

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
