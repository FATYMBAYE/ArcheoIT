<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stage extends Model
{
    use HasFactory;
    protected $table="stages";
    protected $primaryKey = 'id_stage';
    protected $fillable = [
        "titre",
    "description",
     "cible",
     "dateDebut",
    "dateFin",
    ] ;
}
