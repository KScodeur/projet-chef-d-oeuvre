<?php

namespace App\Models;

use App\Models\Professeur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable=["nom_matiere"];
    public function professeurs()
    {
        return $this->hasMany(Professeur::class);
    }
}
