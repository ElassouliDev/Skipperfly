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
            ['title'=>'Best'],
            ['title'=>'Tour Guide'],
            ['title'=>'Service Pro'],
            ['title'=>'Say'],
            ['title'=>'Exactly'],
            ['title'=>'Man'],
            ['title'=>'Hot'],
            ['title'=>'Summer'],
            ['title'=>'Creative'],
            ['title'=>'Healthy'],
        ] ;


        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Tag::truncate();
        foreach ($tags as $tag)
            \App\Models\Tag::create($tag);

        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
