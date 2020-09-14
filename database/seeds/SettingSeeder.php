<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\Setting::truncate();
        \App\Models\Setting::create([
            'key'=>'title',
            'value'=>'Skipperfly',
        ]);
        \App\Models\Setting::create([
            'key'=>'title',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'google_play_link',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'facebook',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'twitter',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'linkedin',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'instagram',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'text_notification',
            'description'=>'This is an example on notification you can add link or any text notification here',
        ]);
        \App\Models\Setting::create([
            'key'=>'home_page_image_title',
            'description'=>'Enjoy SkipperFly Blog and Make the Best Job',
        ]);  \App\Models\Setting::create([
            'key'=>'home_page_image_desc',
            'description'=>'Improve Your Target Audience by Manage.',
        ]);
        \App\Models\Setting::create([
            'key'=>'keywords',
            'description'=>'',
        ]);
        \App\Models\Setting::create([
        'key'=>'home_image',
        'description'=>'',
    ]);
        \App\Models\Setting::create([
        'key'=>'logo',
        'description'=>'',
    ]);
    }
}
