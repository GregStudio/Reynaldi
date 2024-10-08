<?php

namespace Database\Seeders;

use App\Models\WebConfig;
use Illuminate\Database\Seeder;

class WebConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // TYPE[
        //     0 = TEXT,
        //     1 = TEXTAREA,
        //     2 = FILE,
        //     3 = SELECT,
        // ]

        // WEB
        WebConfig::create([
            'name'  => 'app_name',
            'label' => 'Nama Aplikasi',
            'value' => 'Kiat Teknik',
            'type'  => 0
        ]);

        WebConfig::create([
            'name'  => 'app_logo',
            'label' => 'Logo',
            'type'  => 2
        ]);
    }
}
