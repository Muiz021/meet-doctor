<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\ConfigPayment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ConfigPaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $config_payment = [
            [
                'fee' => '150000',
                'vat' => '20',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ];

        ConfigPayment::insert($config_payment);
    }
}
