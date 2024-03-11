<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matiere extends Model
{
    use HasFactory;
    protected $table = 'matiere';
    public $timestamps = false;
    protected $fillable = [
        'libelle_matiere',
        'annee',
        
    ];
}
