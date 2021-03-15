<?php

namespace Modules\AreaModule\Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\AreaModule\Entities\Government;
use Modules\AreaModule\Entities\Zone;

class AreaModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $government = new Government();
        $government->name = 'المنوفيه';
        $government->save();

        $zone = new Zone();
        $zone->name = 'شبين الكوم';
        $zone->government_id = $government->id;
        $zone->save();

    }
}
