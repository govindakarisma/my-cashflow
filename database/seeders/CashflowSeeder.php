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
            'cfid' => 'CF1-30122022',
            'slug' => 'cf1-30122022',
            'resource_id' => 5,
            'category_id' => 1,
            'subcategory_id' => 6,
            'desc' => 'First Sallary',
            'debit' => 9472000,
            'credit' => 0,
        ]);
    }
}
