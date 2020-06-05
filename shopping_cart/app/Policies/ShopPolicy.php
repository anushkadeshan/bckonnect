<?php

namespace App\Policies;

use App\Shop;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ShopPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability){
        if($user->hasRole('admin')){
            return true;
        }
    }
    public function browse(User $user){

        return $user->hasRole('seller');
    }

    public function read(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
        
    }

    public function create(User $user)
    {
        //
    }

    public function edit(User $user, Shop $shop)
    {
        return $user->id == $shop->user_id;
    }

    public function delete(User $user, Shop $shop)
    {
        //
    }

    public function restore(User $user, Shop $shop)
    {
        //
    }

    public function forceDelete(User $user, Shop $shop)
    {
        //
    }
}
