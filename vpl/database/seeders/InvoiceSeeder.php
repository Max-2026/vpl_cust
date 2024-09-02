<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Invoice;


class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoice::create([
            'user_id' => 1,
            'number_id' => 1,
            'invoice_type_id' => 5,
            'summary' => 'Payment Received - Thank you',
            'amount' => 40,
            'payment_reference_id' =>  null,
            
        ]);
    }
}
