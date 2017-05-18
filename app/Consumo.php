<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $table = 'consumo';
    protected $fillable = ['produto_id','qtde','comanda_id'];
    
    public  function comandas(){
        return $this->belongsTo('App\comanda');
    }
    
    public  function produtos(){
        return $this->belongsTo('App\Produto');
    }
    
}
