<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table    = 'mapel';
    protected $fillable = ['id', 'nama','jurusan_id', 'created_at', 'updated_at'];
}
