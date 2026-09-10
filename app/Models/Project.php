<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['nameproject', 'image', 'deskripsi', 'detail_deskripsi', 'tech_stack', 'demo_url', 'repo_url', 'type'];
}