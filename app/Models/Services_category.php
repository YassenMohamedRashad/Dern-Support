<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services_category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];
}
