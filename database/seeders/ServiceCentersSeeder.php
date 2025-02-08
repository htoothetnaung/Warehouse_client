<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ServiceCenter;

class ServiceCentersSeeder extends Seeder
{
    public function run()
    {
        $serviceCenters = [
            [
                'service_center_name' => 'TechNest',
                'service_center_address' => 'No-155, Lower Kyi Myin Dine Road',
                'service_center_region' => 'Ahlone',
                'service_contact_number' => '09-1234567890, 018-234567',
            ],
            [
                'service_center_name' => 'DigitalHub',
                'service_center_address' => 'No-45, Kabar Aye Pagoda Road',
                'service_center_region' => 'Bahan',
                'service_contact_number' => '09-9876543210, 018-345678',
            ],
            [
                'service_center_name' => 'CyberCore',
                'service_center_address' => 'Junction City Mall, Level 3',
                'service_center_region' => 'Pabedan',
                'service_contact_number' => '09-5678901234, 018-456789',
            ],
            [
                'service_center_name' => 'Code& Pixel',
                'service_center_address' => 'No-85, Landamadaw Street',
                'service_center_region' => 'Lanmadaw',
                'service_contact_number' => '09-1357924680, 018-567890',
            ],
            [
                'service_center_name' => 'Byte Bazaar',
                'service_center_address' => 'No-56, Pyay Road',
                'service_center_region' => 'Sanchaung',
                'service_contact_number' => '09-2468013579, 018-678901',
            ],
            [
                'service_center_name' => 'NextGen Gadgets',
                'service_center_address' => 'Myanmar Plaza, Level 1',
                'service_center_region' => 'Bahan',
                'service_contact_number' => '09-3579135792, 018-789012',
            ],
            [
                'service_center_name' => 'Infinity Tech Store',
                'service_center_address' => 'No-102, Sule Pagoda Road',
                'service_center_region' => 'Kyauktada',
                'service_contact_number' => '09-4680246801, 018-890123',
            ],
            [
                'service_center_name' => 'GigaWorld Electronics',
                'service_center_address' => 'Dagon Center II',
                'service_center_region' => 'Sanchaung',
                'service_contact_number' => '09-5791357912, 018-901234',
            ],
            [
                'service_center_name' => 'Circuit City Pro',
                'service_center_address' => 'Yuzana Plaza',
                'service_center_region' => 'Mingalar Taung Nyunt',
                'service_contact_number' => '09-6802468023, 018-012345',
            ],
            [
                'service_center_name' => 'The Data Den',
                'service_center_address' => 'No-15, Pansodan Street',
                'service_center_region' => 'Kyauktada',
                'service_contact_number' => '09-7913579134, 018-123456',
            ],
            [
                'service_center_name' => 'Innovate IT',
                'service_center_address' => 'No-29, Myaynigone Zay Street',
                'service_center_region' => 'Sanchaung',
                'service_contact_number' => '09-8024680245, 018-234567',
            ],
            [
                'service_center_name' => 'PC Planet',
                'service_center_address' => 'No-44, Seikanthar Street',
                'service_center_region' => 'Pabedan',
                'service_contact_number' => '09-9135791356, 018-345678',
            ],
            [
                'service_center_name' => 'Future Bytes',
                'service_center_address' => 'Ocean Supercenter',
                'service_center_region' => 'Tamwe',
                'service_contact_number' => '09-0246802467, 018-456789',
            ],
            [
                'service_center_name' => 'SmartEdge Solutions',
                'service_center_address' => 'No-60, University Avenue Road',
                'service_center_region' => 'Kamaryut',
                'service_contact_number' => '09-1357913578, 018-567890',
            ],
            [
                'service_center_name' => 'Cloud Connectors',
                'service_center_address' => 'Pearl Condo',
                'service_center_region' => 'Bahan',
                'service_contact_number' => '09-2468013579, 018-678901',
            ],
            [
                'service_center_name' => 'Mega Tech Mart',
                'service_center_address' => 'Mingalar Market',
                'service_center_region' => 'Mingalar Taung Nyunt',
                'service_contact_number' => '09-3579135790, 018-789012',
            ],
            [
                'service_center_name' => 'Hardware Haven',
                'service_center_address' => 'Junction Mawtin, Level 2',
                'service_center_region' => 'Lanmadaw',
                'service_contact_number' => '09-4680246802, 018-890123',
            ],
            [
                'service_center_name' => 'IT Essentials Co.',
                'service_center_address' => 'Yankin Center',
                'service_center_region' => 'Yankin',
                'service_contact_number' => '09-5791357913, 018-901234',
            ],
            [
                'service_center_name' => 'Tech Fusion Store',
                'service_center_address' => 'No-78, 35th Street',
                'service_center_region' => 'Kyauktada',
                'service_contact_number' => '09-6802468024, 018-012345',
            ],
            [
                'service_center_name' => 'Binary Boutique',
                'service_center_address' => 'No-18, Bogalay Zay Street',
                'service_center_region' => 'Kyauktada',
                'service_contact_number' => '09-7913579135, 018-123456',
            ],
        ];

        foreach ($serviceCenters as $center) {
            ServiceCenter::create($center);
        }
    }
}
