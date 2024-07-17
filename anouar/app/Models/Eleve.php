<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;
protected $fillable=['nom','prenom','id_club'];
    public function club(){
        return $this->hasOne(Club::class);
    }

}
