<?php

namespace Database\Seeders;

use App\Models\Cashflow;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CashflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cashflow::create([
            'cf_id' => 'CF1-30122022',
            'slug' => 'cf1-30122022',
            'date' => '30/12/2022 07:29:46',
            'resource_id' => 2,
            'category_id' => 1,
            'subcategory_id' => 3,
            'desc' => 'First Sallary',
            'debit' => 9472000,
            'credit' => 0,
        ]);
    }
}
