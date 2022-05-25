<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [ 
    'name_teacher',
    'name_subject',
    'schedules',
    'state',
    'booking_date',
    'group',
    'number_students',
    'details',
    'user_id'
];
}
