<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_about extends Model
{
    protected $table = "tbl_abouts";
    protected $primary = "id_about";
    
    public $incrementing = true;
    
    protected $fillable = [
    	'title', 'description'
    ];
}
