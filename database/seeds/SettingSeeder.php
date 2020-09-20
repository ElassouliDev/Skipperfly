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
            'key'=>'title_en',
            'value'=>'Skipperfly',
        ]);
        \App\Models\Setting::create([
            'key'=>'title_ar',
            'value'=>'Skipperfly',
        ]);


        \App\Models\Setting::create([
            'key'=>'description_en',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'description_ar',
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
            'key'=>'text_notification_en',
            'value'=>'This is an example on notification you can add link or any text notification here',
        ]);
        \App\Models\Setting::create([
            'key'=>'text_notification_ar',
            'value'=>'This is an example on notification you can add link or any text notification here',
        ]);
        \App\Models\Setting::create([
            'key'=>'home_page_image_title_en',
            'value'=>'Enjoy SkipperFly Blog and Make the Best Job',
        ]);
        \App\Models\Setting::create([
            'key'=>'home_page_image_title_ar',
            'value'=>'Enjoy SkipperFly Blog and Make the Best Job',
        ]);

        \App\Models\Setting::create([
            'key'=>'home_page_image_desc_en',
            'value'=>'Improve Your Target Audience by Manage.',
        ]);
        \App\Models\Setting::create([
            'key'=>'home_page_image_desc_en',
            'value'=>'Improve Your Target Audience by Manage.',
        ]);
        \App\Models\Setting::create([
            'key'=>'keywords_ar',
            'value'=>'',
        ]);
        \App\Models\Setting::create([
            'key'=>'keywords_en',
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
