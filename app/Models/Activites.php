<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activites extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'date_debut', 'date_fin', 'lieu', 'type', 'image'
];
    
}
