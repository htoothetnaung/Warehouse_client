<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockRecordsSeeder extends Seeder
{
    public function run()
    {
        DB::table('stock_records')->insert([
            [
                'record_date' => '2024-12-30',
                'product_id' => 1,
                'warehouse_branch' => 'Dawbon',
                'opening_balance' => 5,
                'received' => 0,
                'dispatched' => 3,
                'closing_balance' => 2,
                'system_users_id' => 1,
            ],
            [
                'record_date' => '2024-12-31',
                'product_id' => 1,
                'warehouse_branch' => 'Dawbon',
                'opening_balance' => 2,
                'received' => 4,
                'dispatched' => 1,
                'closing_balance' => 5,
                'system_users_id' => 1,
            ],
            [
                'record_date' => '2024-12-30',
                'product_id' => 2,
                'warehouse_branch' => 'Dawbon',
                'opening_balance' => 6,
                'received' => 0,
                'dispatched' => 5,
                'closing_balance' => 1,
                'system_users_id' => 1,
            ],
            [
                'record_date' => '2024-12-31',
                'product_id' => 2,
                'warehouse_branch' => 'Dawbon',
                'opening_balance' => 1,
                'received' => 7,
                'dispatched' => 4,
                'closing_balance' => 4,
                'system_users_id' => 1,
            ],
            [
                'record_date' => '2024-12-30',
                'product_id' => 3,
                'warehouse_branch' => 'Dawbon',
                'opening_balance' => 9,
                'received' => 2,
                'dispatched' => 7,
                'closing_balance' => 4,
                'system_users_id' => 1,
            ],
        ]);
    }
}
