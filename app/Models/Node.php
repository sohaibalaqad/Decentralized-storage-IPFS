<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Node extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ip',
        'status',
        'partner_id',
        'disk_size',
        'used_disk_size',
        'free_disk_size'
    ];
}
