<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rdv extends Model
{
    use HasFactory;

    protected $fillable=[
        'date',
        'heure',
        'debut_heure',
        'fin_heure',
        'rapport',
        'depot',
        'intervenant',
        'jeune_id'
    ];

    public function jeune()
    {
        return $this->belongsTo(Jeune::class);
    }
}
