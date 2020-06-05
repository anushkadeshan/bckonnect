@extends('layouts.front')

@section('content')
<div class="cart-main-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="cart-heading">Wishlist</h1>
                <livewire:update-wishlist-total/>
            </div>
        </div>
    </div>
</div>
@endsection