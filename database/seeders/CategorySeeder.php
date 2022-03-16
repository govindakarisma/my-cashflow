<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Sallary',
            'slug' => 'sallary',
        ]);

        Category::create([
            'name' => 'Income',
            'slug' => 'income',
        ]);

        Category::create([
            'name' => 'Makan',
            'slug' => 'makan',
        ]);

        Category::create([
            'name' => 'Jajan',
            'slug' => 'jajan',
        ]);

        Category::create([
            'name' => 'Kendaraan',
            'slug' => 'kendaraan',
        ]);

        Category::create([
            'name' => 'Tempat Tinggal',
            'slug' => 'tempat-tinggal',
        ]);

        Category::create([
            'name' => 'Lent',
            'slug' => 'lent',
        ]);

        Category::create([
            'name' => 'Borrow',
            'slug' => 'borrow',
        ]);

        Category::create([
            'name' => 'Deposit',
            'slug' => 'deposit',
        ]);

        Category::create([
            'name' => 'Withdraw',
            'slug' => 'withdraw',
        ]);

        Category::create([
            'name' => 'Lain-lain',
            'slug' => 'Lain-lain',
        ]);
    }
}
