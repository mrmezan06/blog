<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'site_name' => 'Laravel\'s Blog',
            'address' => 'Bangladesh, Khulna',
            'contact_number' => '+880 130 4613 413',
            'contact_email' => 'admin@LBlog.com',
        ]);
    }
}
