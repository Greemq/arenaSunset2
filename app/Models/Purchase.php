<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use HasFactory,SoftDeletes,Translatable;

    protected $fillable = ['order', 'type'];

    public $translatedAttributes = ['title', 'description', 'btn_text'];

    public function scopeFilter($query, $filters)
    {
        if (isset($filters['type']))
            $query->where('type', $filters['type']);
        return $query;
    }
}
