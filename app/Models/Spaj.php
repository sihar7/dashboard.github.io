<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spaj extends Model
{
    use HasFactory;

    protected $table = 'mst_spaj_submit';
    protected $guarded = [];
    public $timestamps = false;

}
