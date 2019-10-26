<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
           'site_name' => "Torama's Blog",
           'address' => 'Yenagoa, Nigeria',
           'contact_number' => '07776746474747',
           'contact_email' => 'info@torama_blog.com'
          
        ]);
    }
}
