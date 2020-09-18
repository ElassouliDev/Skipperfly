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
            'key'=>'description',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'google_play_link',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'facebook',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'twitter',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'linkedin',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'instagram',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'text_notification',
            'value'=>'This is an example on notification you can add link or any text notification here',
        ]);
        \App\Models\Setting::create([
            'key'=>'home_page_image_title',
            'value'=>'Enjoy SkipperFly Blog and Make the Best Job',
        ]);  \App\Models\Setting::create([
            'key'=>'home_page_image_desc',
            'value'=>'Improve Your Target Audience by Manage.',
        ]);
        \App\Models\Setting::create([
            'key'=>'keywords',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
        'key'=>'home_image',
        'value'=>'',
    ]);
        \App\Models\Setting::create([
        'key'=>'logo',
        'value'=>'',
    ]);
    }
}
