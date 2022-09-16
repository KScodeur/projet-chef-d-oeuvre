<?php

namespace App\Models;

use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Professeur extends Model
{
    use HasFactory;
    public function matieres()
    {
        return $this->hasMany(Matiere::class);
    }
}
