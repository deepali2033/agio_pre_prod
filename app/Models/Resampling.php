<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resampling extends Model
{
    use HasFactory;

    public function record_initiator()
    {
        return $this->belongsTo(User::class, 'initiator_id');
    }
}
