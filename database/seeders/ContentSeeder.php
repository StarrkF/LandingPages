<?php

namespace Database\Seeders;

use App\Models\PageType;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageType::create([
            'name'=>'Normal',
        ]);
        PageType::create([
            'name'=>'Blog',
        ]);
        PageType::create([
            'name'=>'Contact',
        ]);
    }
}
