<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionarAula extends Model
{
    //use HasFactory;
    protected $table="curso";
   protected $primaryKey="id_aula";
   protected $fillable = ['id_aula','edificio,capacidad'];
}
