<?php

namespace Modules\ConfigModule\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\ConfigModule\Entities\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $setting = Setting::create([
            'name' => 'خدماتي',
            'email' => '5dmaty@info.com',
            'address' => 'شبين الكوم / منوفيه',
            'description' => 'موقع خدمي غير ربحي',
            'mobile' => '01096742565',
            'whatsapp' => '01096742565',
            'facebook' => 'https://www.facebook.com/ahmed.isa.77377/',
            'twitter' => 'https://www.facebook.com/ahmed.isa.77377/',
            'youtube' => 'https://www.facebook.com/ahmed.isa.77377/',
            'instagram' => 'https://www.facebook.com/ahmed.isa.77377/',
            'logo' => '../logo.png',
            'icon' => '../icon.png',
        ]);
    }
}
