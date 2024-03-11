<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abscence extends Model
{
    use HasFactory;

    protected $table = 'abscence';
    public $timestamps = false;
    protected $fillable = [
        'justification',
        'date',
        
    ];
}
