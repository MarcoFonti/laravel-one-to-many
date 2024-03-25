<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    /* RELAZIONE CON IL MEDELLO PROJECT */
    public function projects() {
        /* MOLTI PROGETTI */
        return $this->hasMany(Project::class);
    }
}