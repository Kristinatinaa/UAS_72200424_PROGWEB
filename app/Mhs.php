<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhs extends Model
{
    protected $table = 'mhs';

    protected $fillable =[
        'nim','nama','gender','jurusan','bidang_mnt'
    ];
}
