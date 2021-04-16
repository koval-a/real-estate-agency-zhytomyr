<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';

    public function Obekts()
    {
        return $this->belongsTo('App\Models\Obekts');
    }
}
