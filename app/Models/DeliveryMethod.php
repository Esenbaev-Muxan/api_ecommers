<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class DeliveryMethod extends Model
{
    use HasFactory, HasTranslations;


protected $fillable = [
        'name',
        'estimated_time',
        'sum'
    ];


    public array $translatable = ['name', 'estimated_time'];


    public function orders() 
    {
        return $this->hasMany(Order::class);
    }



}
