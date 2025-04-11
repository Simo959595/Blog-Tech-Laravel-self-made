<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederSupplier extends Seeder
{
    /**
     * Run the database seeds.
     */
  
    
    
    public function run()
    {
        $suppliers = [
            [
                'name' => 'Tech Solutions',
                'country' => 'USA',
                'contact_number' => '+1 555-1234',
                'email' => 'contact@techsolutions.com',
                'website' => 'https://www.techsolutions.com/'
            ],
            [
                'name' => 'Gadget World',
                'country' => 'UK',
                'contact_number' => '+44 20 7946 0958',
                'email' => 'info@gadgetworld.co.uk',
                'website' => 'https://www.gadgetworld.co.uk/'
            ],
            [
                'name' => 'Digital Hub',
                'country' => 'Germany',
                'contact_number' => '+49 30 1234567',
                'email' => 'support@digitalhub.de',
                'website' => 'https://www.digitalhub.de/'
            ],
            [
                'name' => 'Future Tech',
                'country' => 'Italy',
                'contact_number' => '+39 06 9876543',
                'email' => 'sales@futuretech.it',
                'website' => 'https://www.futuretech.it/'
            ],
            [
                'name' => 'Asia Electronics',
                'country' => 'China',
                'contact_number' => '+86 10 87654321',
                'email' => 'hello@asiaelectronics.cn',
                'website' => 'https://www.asiaelectronics.cn/'
            ],
            [
                'name' => 'Smart Devices',
                'country' => 'France',
                'contact_number' => '+33 1 23456789',
                'email' => 'contact@smartdevices.fr',
                'website' => 'https://www.smartdevices.fr/'
            ],
            [
                'name' => 'Tech Empire',
                'country' => 'Spain',
                'contact_number' => '+34 91 1234567',
                'email' => 'support@techempire.es',
                'website' => 'https://www.techempire.es/'
            ],
        ];

        foreach ($suppliers as $supplier) {
            DB::table('suppliers')->insert([
                'name'=>$supplier['name'],
                'country'=>$supplier['country'],
                'contact_number'=>$supplier['contact_number'],
                'email'=>$supplier['email'],
                'website'=>$supplier['website'],
            ]);
        }
      
        // DB::table('suppliers')->insert($suppliers);
    }

}