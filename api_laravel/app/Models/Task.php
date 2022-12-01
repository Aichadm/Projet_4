<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    
    use HasFactory;
    protected $table = 'tasks' ;

    protected $fillable = [
        'name'
    ];

    public $timestamps = true;
}
