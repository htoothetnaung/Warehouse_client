<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PartnerShopsSeeder::class,
            SystemUsersSeeder::class,
            ServiceCentersSeeder::class,
            StockRecordsSeeder::class,
            SalesInvoiceSeeder::class,
        ]);
    }
}
