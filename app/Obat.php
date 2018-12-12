<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Obat extends Eloquent
{
    protected $collection = 'obats';
    protected $fillable = [
        '_id', 'nama', 'jumlah', 'created_at',
    ];
}
