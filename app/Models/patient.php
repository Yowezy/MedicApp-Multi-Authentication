<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'hospital_id',
        'national_id',
        'name',
        'age',
        'gender',
        'nationality',
        'phone',
        'state',
        'isVaccinated',
        'isPositive',
        'notes'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
