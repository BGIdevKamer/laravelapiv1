<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\customer;

class invoice extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsTo(customer::class);
    }
}
