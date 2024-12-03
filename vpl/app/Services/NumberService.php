<?php

namespace App\Services;

use App\Models\Number;

class NumberService
{
    public function release_numbers()
    {
        return Number::whereNotNull('current_user_id')
            ->where('is_active', true)
            ->withWhereHas('history', function ($query) {
                $query->where('activity', 'release_requested')
                    ->whereDay('created_at', date('j'))
                    ->orderBy('MAX(created_at)', 'desc');
            })
            ->orderBy('current_user_id')->get();
            // ->chunk(100, function ($numbers) {
            //     $invoices = [];

            //     foreach ($numbers as $number) {
            //         $invoices[] = $this->create_invoice($number);
            //     }

            //     Invoice::insert($invoices);
            // });
    }
}
