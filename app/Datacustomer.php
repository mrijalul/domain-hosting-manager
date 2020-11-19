<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Datacustomer extends Model
{
    protected $table = 'datacustomers';
    protected $fillable = ['nama_customer','email_customer','alamat_customer','notelp_customer'];
}
