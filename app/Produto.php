<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['nome','unidade_id','valor_unitario'];
    
    public function unidade(){
        return $this->hasOne('App\Unidade');
    }
    
    public function consumo(){
        return $this->belongsToMany('App\Consumo');
    }
}
