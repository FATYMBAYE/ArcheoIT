<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande_Stage extends Model
{
    use HasFactory;
    protected $table = "demande_stages";
     // Relation avec le modèle Stage
     public function stage()
     {
         return $this->belongsTo(Stage::class, 'Id_stage');
     }
    protected $fillable = [] ;
}
