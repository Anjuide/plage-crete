<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beach extends Model
{
    // Table name
    protected $table = 'beaches';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    public function user(){
        return $this->belongsTo('App\User');
    }
}
