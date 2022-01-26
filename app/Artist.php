<?php

namespace Artist;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    
    protected $fillable = [

        'name',
        'surname',
        'stageName',
        'dateOfBirth'
    ];
}