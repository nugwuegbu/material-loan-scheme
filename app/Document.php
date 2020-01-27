<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $fillable=['loan_id','user_id','title','path'];


    public function loan(){
    	return $this->belongsTo(Loan::class);
    }


    public function user(){
    	return $this->belongsTo(User::class);
    } 
}

