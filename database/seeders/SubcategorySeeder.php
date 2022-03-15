<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subcategory::create([
            'name' => 'Nmax',
            'slug' => 'nmax',
        ]);

        Subcategory::create([
            'name' => 'R25',
            'slug' => 'r25',
        ]);

        Subcategory::create([
            'name' => 'Vios',
            'slug' => 'vios',
        ]);
    }
}
