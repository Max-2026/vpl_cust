<?php

namespace App\Services;

use App\Models\Number;

class BillingService
{
    public function generate_daily_invoices()
    {
        Number::whereNotNull('current_user_id')
            ->where('is_active', true)
            ->whereHas('history', function ($query) {
                $query->where('activity', 'purchased')
                    ->whereDay('created_at', date('d'));
            })
            ->whereDoesntHave('history', function ($query) {
                $query->latest()
                    ->limit(1)
                    ->where('activity', 'release_requested')
                    ->orWhere('activity', 'released');
            })
            ->chunk(1000, function ($numbers) {
                foreach ($numbers as $number) {
                    $this->create_invoice($number);
                }
            });
    }

    private function create_invoice(Number $number)
    {
    }
}
