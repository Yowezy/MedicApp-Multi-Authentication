<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'vaccine_name',
        'vaccine_quantity',
        'notes',
        // 'batch_no'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
