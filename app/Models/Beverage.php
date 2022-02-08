<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Exceptions\MinorCanntBuyAlcoholicException;

class Beverage extends Model
{
    use HasFactory;

    protected $fillable = [
       'name',
       'type',
    ];

    public function buy(){

        if(auth()->user()->isMinor() ){
            
            throw new MinorCanntBuyAlcoholicException();
         
        }
        return true;
    }


}
