<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    
    public function getData()
    {
        return $this->id . ":" . $this->name . '('. $this->age .')';
    }

    public function scopeNameA($query,$str)
    {
        return $query->where('name','%'.$str.'%');
    }

    public static function boot()
    {
        parent::boot();

        static::addGlobalScope('age',function(Builder $builder)
        {
            $builder->where('age','>',30);
        });
    }

}
