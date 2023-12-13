<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SurveyCostumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
    ];

    // protected function data(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => json_decode($value, true),
    //         set: fn ($value) => json_encode($value),
    //     );
    // }
}
