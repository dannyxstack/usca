<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agent extends Model
{
    //
    use HasFactory;

    protected $table = 'agents';

    protected $fillable = [
        'provider_entered_business_name',
        'business_address',
        'business_suburb',
        'business_state',
        'business_country',
    ];
}
