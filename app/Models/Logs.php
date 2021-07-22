<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

    //Models LOGs para salvar com ORM MYSQL do LARAVEL
    protected $fillable = ['logname'];
}
