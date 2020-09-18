<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'en'=>[ 'title'=>"management"],
                'color'=>"#21386d",
                'background'=>"#f7f9ff"
             ],[
                'en'=>[ 'title'=>"services"],
                'color'=>"#00b1ff",
                'background'=>"#f2fbff"
             ],[
                'en'=>[  'title'=>"Interviews"],
                'color'=>"#9452ff",
                'background'=>"#f7f2ff"
             ],[
                'en'=>['title'=>"skills"],
                'color'=>"#21386d",
                'background'=>"#e9ebf1"
             ],[
                'en'=>['title'=>"creativity"],
                'color'=>"#fff0f2",
                'background'=>"#f4166b"
             ],[
                'en'=>['title'=>"Tours"],
                'color'=>"#4caf50",
                'background'=>"#f0fff1"
             ],
        ];


        \Illuminate\Support\Facades\Schema::disableForeignKeyConstraints();
        \App\Models\Category::truncate();
        foreach ($categories as $category)
        \App\Models\Category::create($category);
        \Illuminate\Support\Facades\Schema::enableForeignKeyConstraints();

    }
}
