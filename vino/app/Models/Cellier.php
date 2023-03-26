<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cellier extends Model
{
    const TABLE = 'vino__cellier';

    protected $table = "vino__cellier";

    use HasFactory;

    protected $fillable = [

        'user_id',
        'nom',
        'description'

    ];

    // public function CellierHasUser(){
    //     return $this->hasOne('App\Models\User', 'id', 'users_id');
    // }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // public function bouteille()
    // {
    //     return $this->hasMany(Bouteille::class, 'bouteille__has__cellier')
    //                     ->withPivot([
    //                         'id',
    //                         'quantite',
    //                         'note',
    //                         'created_at',
    //                         'updated_at'
    //                     ]);
    // }
}
