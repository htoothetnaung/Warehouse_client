<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesInvoiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('sales_invoices')->insert([
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7126',
                'partner_shops_id' => 1,
                'product_id' => 1,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 5390000,
                'remarks' => 'Space Black 1, Silver 2',
            ],
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7126',
                'partner_shops_id' => 1,
                'product_id' => 2,
                'cash_back_mmk' => 0,
                'quantity' => 2,
                'total_mmk' => 5390000,
                'remarks' => 'Space Black 1, Silver 2',
            ],
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7127',
                'partner_shops_id' => 2,
                'product_id' => 2,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 2550000,
                'remarks' => null,
            ],
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7128',
                'partner_shops_id' => 3,
                'product_id' => 3,
                'cash_back_mmk' => 0,
                'quantity' => 5,
                'total_mmk' => 4000000,
                'remarks' => null,
            ],
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7130',
                'partner_shops_id' => 4,
                'product_id' => 4,
                'cash_back_mmk' => 0,
                'quantity' => 3,
                'total_mmk' => 3600000,
                'remarks' => null,
            ],
            [
                'sale_date' => '2024-12-30',
                'invoice_no' => '7132',
                'partner_shops_id' => 5,
                'product_id' => 5,
                'cash_back_mmk' => 0,
                'quantity' => 20,
                'total_mmk' => 1600000,
                'remarks' => null,
            ],
        ]);
    }
}
