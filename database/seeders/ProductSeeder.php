<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'item_name' => 'Apple MacBook Pro 14-inch',
                'brand' => 'Apple',
                'category' => 'Laptop',
                'product_segment' => 'Consumer',
                'product_serial_number' => 'MBP14-2025-A1B2C3D4E5',
                'product_image_url' => null,
            ],
            [
                'item_name' => 'Microsoft Surface Studio',
                'brand' => 'Microsoft',
                'category' => 'Desktop PC',
                'product_segment' => 'Consumer',
                'product_serial_number' => 'MSF-STUDIO-5678XYZ123',
                'product_image_url' => null,
            ],
            [
                'item_name' => 'HP EliteBook 840',
                'brand' => 'HP',
                'category' => 'Laptop',
                'product_segment' => 'Consumer',
                'product_serial_number' => 'HP840-G8-12AB34CD56',
                'product_image_url' => null,
            ],
            [
                'item_name' => 'Epson EcoTank ET-3850',
                'brand' => 'Epson',
                'category' => 'Printer',
                'product_segment' => 'Consumer',
                'product_serial_number' => 'EPS-ET3850-QWERT12345',
                'product_image_url' => null,
            ],
            [
                'item_name' => 'WD Black SN850X 1TB SSD',
                'brand' => 'WD',
                'category' => 'Storage Device',
                'product_segment' => 'Consumer',
                'product_serial_number' => 'WDB-SN850X1TB-X123Y456Z',
                'product_image_url' => null,
            ],
        ]);
    }
}
