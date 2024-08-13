<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function favorites()
    {
        return $this->belongsToMany(Product::class);
    }

    public function orders(): HasMany 
    {
        return $this->hasMany(Order::class);
    }


    public function addresses(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function hasFavorite($favorite_id)
    {
        // dd( $this->favorites()->where('product_id', $favorite_id)->exists());
        return $this->favorites()->where('product_id', $favorite_id)->exists();
    }


    public function settings() 
    {
        return $this->hasMany(UserSetting::class, 'user_id', 'id');
    }


    public function paymentCards()
    {
        return $this->hasMany(UserPaymentCards::class);
    }

    public function photos()
    {
        return $this->morphMany(Photo::class, 'photoable');
    }

}
