<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';
    public $timestamps = false;
    public $primaryKey = 'idTour';
}
