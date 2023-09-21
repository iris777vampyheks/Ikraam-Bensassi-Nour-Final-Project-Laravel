<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'prix', 'stock'];

    // Définir les relations ici (par exemple, la relation avec la catégorie et le panier)
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function panier()
    {
        return $this->belongsTo(Panier::class);
    }
}
