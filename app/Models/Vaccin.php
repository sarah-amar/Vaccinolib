<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccin extends Model
{
    use HasFactory;
    public $primaryKey = "name";
    public $incrementing = false;
    protected $fillable = [
        'name', 'nb_dose', 'date_expiration'
    ];
}
