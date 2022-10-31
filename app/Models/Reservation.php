<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sick()
    {
        return $this->belongsTo(Sick::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}