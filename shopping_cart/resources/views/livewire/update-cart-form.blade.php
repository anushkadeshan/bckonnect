<div>
    {{--<form action="{{route('cart.update',$cart['id'])}}">--}}
        <input type="number" wire:model="quantity" min="1" wire:change="updateCart" >
</div>
