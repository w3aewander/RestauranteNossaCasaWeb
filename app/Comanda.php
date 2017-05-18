<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    protected $table = 'comanda';
    protected $fillable = ['mesa','status','created_at','updated_at'];
    
    public function consumo(){
        return $this->hasMany('App\consumo');
    }
}
