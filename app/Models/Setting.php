<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['padding_top', 'padding_bottom'];
    public $timestamps = false;
}
