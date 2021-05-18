<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'note';

    public function obekts()
    {
        return $this->belongsTo('App\Models\Obekts');
    }
}
