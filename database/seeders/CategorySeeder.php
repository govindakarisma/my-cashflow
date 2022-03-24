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
            'name' => 'Sallary (Gaji Bulanan)',
            'slug' => 'sallary-gaji-bulanan',
            'desc' => 'Gaji tetap yang didapatkan',
        ]);

        Category::create([
            'name' => 'Income (Pendapatan Selain Gaji)',
            'slug' => 'income-pendapatan-selain-gaji',
            'desc' => 'Penghasilan tambahan yang tidak tetap',
        ]);

        Category::create([
            'name' => 'Daily Eat (Makan)',
            'slug' => 'daily-eat-makan',
            'desc' => 'Makan dan minum sehari hari sebagai kebutuhan pokok'
        ]);

        Category::create([
            'name' => 'Snacking (Jajan)',
            'slug' => 'snacking-jajan',
            'desc' => 'Jajan atau membeli makanan atau minuman yang tidak termasuk kebutuhan pokok',
        ]);

        Category::create([
            'name' => 'Transportation (Kendaraan)',
            'slug' => 'transportation-kendaraan',
            'desc' => 'Pengeluaran untuk kendaraan seperti BBM, Service, Cuci dan Lain lain',
        ]);

        Category::create([
            'name' => 'Residence (Tempat Tinggal)',
            'slug' => 'residence-tempat-tinggal',
            'desc' => 'Pengeluaran untuk tempat tinggal seperti bayar kos, listrik, beli lampu dan lain-lain',
        ]);

        Category::create([
            'name' => 'Lent (Dipinjamkan)',
            'slug' => 'lent-dipinjamkan',
            'desc' => 'Uang yang dipinjamkan kepada orang lain'
        ]);

        Category::create([
            'name' => 'Borrow (Meminjam)',
            'slug' => 'borrow-meminjam',
            'desc' => 'Uang yang dipinjam dari orang lain'
        ]);

        Category::create([
            'name' => 'Deposit (Setor Tunai)',
            'slug' => 'deposit-setor-tunai',
            'desc' => 'Setor tunai ke BANK'
        ]);

        Category::create([
            'name' => 'Withdraw (Tarik Tunai)',
            'slug' => 'withdraw-tarik-tunai',
            'desc' => 'Tarik tunai dari BANK'
        ]);

        Category::create([
            'name' => 'TopUp (Isi Ulang)',
            'slug' => 'topup-isi-ulang',
            'desc' => 'Mengisi dana di instrumen keuangan digital seperti DANA, Gopay, Shopeepay dan Lain-lain'
        ]);

        Category::create([
            'name' => 'Send Money/Transfer (Kirim Uang)',
            'slug' => 'send-moneytransfer-kirim-uang',
            'desc' => 'Mengirim dana atau transfer uang ke instrumen keuangan seperti Bank, DANA, Gopay, Shopeepay dan Lain-lain'
        ]);

        Category::create([
            'name' => 'Charity (Amal)',
            'slug' => 'charity-amal',
            'desc' => 'Membayar zakat, infak, traktir',
        ]);

        Category::create([
            'name' => 'Cleaning (Kebersihan)',
            'slug' => 'cleaning-kebersihan',
            'desc' => 'Pengeluaran untuk barang yang sifatnya kebersihan pribadi seperti shampo, sabun, facewash, skincare dan lain-lain',
        ]);

        Category::create([
            'name' => 'Other (Lainnya)',
            'slug' => 'other-lainnya',
            'desc' => 'Yang lainnya',
        ]);
    }
}
