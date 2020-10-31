<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Article::truncate();
        \App\Models\ArticleTranslation::truncate();
            factory(\App\Models\Article::class,100)->create()->each(function($article) {
             $tags_ids = \App\Models\Tag::pluck('id')->toArray();
            $article->tags()->sync(  \Illuminate\Support\Arr::random($tags_ids, rand(1, count($tags_ids)-1)));
                factory(\App\Models\ArticleTranslation::class)->create(['article_id'=>$article->id , 'locale'=>'en']);
                factory(\App\Models\ArticleTranslation::class)->create(['article_id'=>$article->id , 'locale'=>'ar']);
            });

            \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();
    }
}
