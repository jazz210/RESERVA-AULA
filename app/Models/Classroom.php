<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    use HasFactory;
    protected $fillable = [ 
        'name_classroom',
        'ubicacion',
        'reservation_id',


    ];
    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
