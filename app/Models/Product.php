<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // 🔒 Les champs listés ici NE PEUVENT PAS être remplis automatiquement
    // Cela protège des colonnes sensibles comme les IDs ou les timestamps
    // Laravel les ignorera si on utilise create() ou update() avec un tableau
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];

    // ✅ Liste des champs qu'on AUTORISE à être remplis automatiquement
    // Utile quand on veut limiter strictement les colonnes accessibles en create/update
    // Laravel ignorera tout ce qui n'est pas dans ce tableau
    protected $fillable = [
        'name',
        'description',
        'price',
        'image'
    ];
}
