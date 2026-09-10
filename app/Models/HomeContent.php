<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $table = 'homes';

    protected $fillable = [
        'nama', 'role', 'deskripsi',
        'linkinstagram', 'linkemail', 'linklinkedin',
        'foto', 'cv'
    ];
}