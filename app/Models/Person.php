<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'per_id';

    protected $fillable = [
        'per_nome'
    ];
}