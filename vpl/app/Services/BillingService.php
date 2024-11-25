<?php

namespace App\Services;

use App\Models\Number;
use App\Models\NumberHistory;
use App\Models\Invoice;

class BillingService
{
    public function generate_daily_invoices()
    {
        $data = NumberHistory::withWhereHas('number', function ($query) {
            $query->whereNotNull('current_user_id');
        })
        ->groupBy('number_id')
        ->latest()
        ->where('activity', 'purchased')
        ->whereDay('created_at', date('j'))
        ->whereNot(function ($query) {
            $query->whereMonth('created_at', date('n'))
                ->whereYear('created_at', date('Y'));
        })
        ->whereDoesntHave('number.invoices', function ($query) {
            $query->whereDate('created_at', date('Y-m-d'));
        })
        ->chunk(100, function ($histories) {
            $invoices = [];

            foreach ($histories as $history) {
                $invoices[] = $this->create_invoice($history->number);
            }

            Invoice::insert($invoices);
        });
}

    private function create_invoice(Number $number)
    {
        if (
            date('j') == '1'
            && $number->history[0]->billing_type == 'prorated'
        ) {
            return [
                'user_id' => $number->current_user_id,
                'number_id' => $number->id,
                'summary' => "Monthly Bill\nNumber: $".$number->number."\nBilling type: Prorated"."\nFor the period of ".date('Y-m-d')." to ".date('Y-m-t')."\nMonthly charges: $".number_format($number->monthly_charges, 2),
                'amount' => $number->monthly_charges,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        } else {
            return [
                'user_id' => $number->current_user_id,
                'number_id' => $number->id,
                'summary' => "Monthly Bill\nNumber: $".$number->number."\nBilling type: Non-Prorated"."\nFor the period of ".date('Y-m-d')." to ".now()->addMonth()->format('Y-m-d')."\nMonthly charges: $".number_format($number->monthly_charges, 2),
                'amount' => $number->monthly_charges,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
}
