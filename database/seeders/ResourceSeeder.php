<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Resource::create([
            'name' => 'Cash',
            'slug' => 'cash',
        ]);

        Resource::create([
            'name' => 'Dana Wallet',
            'slug' => 'dana-wallet',
        ]);

        Resource::create([
            'name' => 'Gopay',
            'slug' => 'gopay',
        ]);

        Resource::create([
            'name' => 'Shopee Pay',
            'slug' => 'shopee-pay',
        ]);

        Resource::create([
            'name' => 'BRK',
            'slug' => 'brk',
        ]);

        Resource::create([
            'name' => 'BSI',
            'slug' => 'bsi',
        ]);

        Resource::create([
            'name' => 'Permata RDN',
            'slug' => 'permata-rdn',
        ]);
    }
}
