<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jeune extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'qpv'
    ];

    public function rdvs()
    {
        return $this->hasMany(Rdv::class);
    }
}
