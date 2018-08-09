<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Volunteer extends Model
{
    protected $table = 'Volunteers';

    public $primaryKey = 'id';

    public $timestamps = true;

    public function user() {
        return $this->belongsTo('App\User');
    }
}
