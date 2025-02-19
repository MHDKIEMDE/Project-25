<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;

    protected $fillable = ['images', 'loyers', 'nbre_C', 'pays_id', 'ville_id', 'google_map', 'description', 'quartier_id', 'equipements', 'typeMaison', 'user_id'];

    public function pays()
    {
        return $this->belongsTo(Pays::class);
    }

    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }

    public function quartier()
    {
        return $this->belongsTo(Quartier::class);
    }

    public function typeMaison()
    {
        return $this->belongsTo(TypeMaison::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function user()
    {
        return
            $this->belongsTo(User::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipements::class);
    }
}
