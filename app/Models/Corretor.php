<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corretor extends Model
{
    protected $table= 'corretores';
    public $timestamps = false;
    protected $fillable = ['name', 'cpf', 'creci'];
}
