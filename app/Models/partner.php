<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partner extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'password',
        'Country',
        'nodes',
        'total_storage',
    ];

}
