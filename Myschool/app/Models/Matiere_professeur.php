<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere_professeur extends Model
{
    use HasFactory;
    protected $table="matiere_professeur";
    protected $fillable=['professeur_id','matiere_id'];

}
