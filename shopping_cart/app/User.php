<?php

namespace App;

use App\Shop;
use App\WishList;
use App\ProductReview;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    
    public function shop()
    {
        return $this->hasOne(Shop::class, 'user_id');
    }
    
    public function wishlists()
    {
        return $this->belongsToMany(Product::class, 'wish_lists', 'user_id', 'product_id')->withpivot('quantity');
    }

    
    public function review()
    {
        return $this->hasOne(ProductReview::class);
    }
    
    
}
