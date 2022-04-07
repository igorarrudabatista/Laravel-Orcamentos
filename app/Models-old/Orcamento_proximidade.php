<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento_proximidade extends Model
{
    use HasFactory;

    public function orcamento(){

        return $this->belongsToMany(Orcamento::class)->withTimestamps();
    }
}
