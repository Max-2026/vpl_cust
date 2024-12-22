<?php

namespace App\Services;

use App\Models\Number;
use App\Models\NumberHistory;
use Mavinoo\Batch\BatchFacade as Batch;

class NumberService
{
    public function release_upcoming_numbers()
    {
        NumberHistory::withWhereHas('number', function ($query) {
            $query->whereNotNull('current_user_id')
                ->where('is_active', true)
                ->whereHas('history', function ($query) {
                    $query->groupBy('number_id')
                        ->latest()
                        ->where('activity', 'release_requested');
                });
        })
        ->groupBy('number_id')
        ->latest()
        ->where('activity', 'purchased')
        ->whereDay('created_at', date('j'))
        ->whereNot(function ($query) {
            $query->whereMonth('created_at', date('n'))
                ->whereYear('created_at', date('Y'));
        })
        ->chunk(100, function ($histories) {
            $numbers = [];

            foreach ($histories as $history) {
                $numbers[] = [
                    'id' => $history->number->id,
                    'current_user_id' => null,
                    'is_active' => false,
                ];
            }

            Batch::update(new Number, $numbers, 'id');
        });
    }
}
