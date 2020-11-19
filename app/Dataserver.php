<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dataserver extends Model
{
    protected $table = 'dataservers';
    protected $fillable = ['nama_server','ip_server'];
}
