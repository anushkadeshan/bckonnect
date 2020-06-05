<div class="product-action-electro">
<a class="animate-top" title="Add To Cart" style="cursor:pointer" wire:click="addToCart">
    <i class="pe-7s-cart"></i>
</a>
<a class="animate-top" title="Add To Cart" href="{{route('wishlist.remove',$product_id)}}">
    <i class="pe-7s-close"></i>
</a>
</div>