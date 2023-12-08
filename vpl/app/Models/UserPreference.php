<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\User;

class UserPreference extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'low_talktime_alert',
        'low_talktime_threshold',
        'monthly_invoices_email',
        'record_calls',
        'monthly_call_records_email',
        'missed_calls_alert_email',
        'missed_calls_alert_sms',
        'prorated_billing',
        'newsletter_email',
        'sms_callback_url',
        'sms_callback_number'
    ];

    public function user(): BelongsTo
    {
        return $this->belnogsTo(User::class);
    }
}
