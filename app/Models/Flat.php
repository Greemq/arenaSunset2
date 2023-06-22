<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Flat extends Model
{

    /**
     *
     * types
     * 1 - 1 room
     * 2- 1,5 room
     * 3 - 2 room
     * 4 - 3 room
     * 5 - 4 room
     */
    use HasFactory, Translatable, SoftDeletes;

    public $translatedAttributes = ['img'];
    protected $with = ['translations'];
    protected $fillable = ['price', 'area', 'type'];


}
