<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    public $timestamps = false;
    protected $table="users";
    protected $primaryKey="id";
    protected $fillable = [
      'id',  'nama' , 'password'
    ];
}
