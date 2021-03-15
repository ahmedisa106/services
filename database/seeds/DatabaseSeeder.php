<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(\Modules\AdminModule\Database\Seeders\AdminSeederTableSeeder::class);
        $this->call(\Modules\ConfigModule\Database\Seeders\SettingsTableSeeder::class);
        $this->call(\Modules\AreaModule\Database\Seeders\AreaModuleDatabaseSeeder::class);
    }
}
