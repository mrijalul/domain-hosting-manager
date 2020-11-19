<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datadomain extends Model
{
    protected $table = 'datadomains';
    protected $fillable = ['nama_domain','datacustomer_id','expiry','harga'];
}
