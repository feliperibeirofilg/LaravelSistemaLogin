<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use Notifiable;

    protected $fillable = [
        'ds_setor'
    ];
}
