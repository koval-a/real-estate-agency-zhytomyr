<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obekts extends Model
{
    protected $table = 'obekts';

    public function note()
    {
        return $this->hasMany('App\Models\Note');
    }
}
