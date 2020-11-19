<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataHosting extends Model
{
    protected $table = 'datahostings';
    protected $fillable = ['dataserver_id','harga','datadomain_id'];
}
