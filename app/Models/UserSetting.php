<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserSetting extends Model
{
    use HasFactory;

    protected $guarded = [];


    // protected $fillable = [
    //     'setting_id',
    //     'value_id'
    // ];


    public function setting(): BelongsTo
    {
        return $this->belongsTo(Setting::class);
    }

    public function value(): BelongsTo 
    {
        return $this->belongsTo(Value::class);
    }

}
