<div>
    <div class="electro-product-wrapper wrapper-padding pt-95 pb-45">
    <div class="container-fluid">
        <div class="section-title-4 text-center mb-40">
            <h2>Top Products</h2>
        </div>
        <div class="top-product-style">
            <div>
                <div id="electro1">
                    <div class="custom-row-2">
                        @foreach($products as $product)
                        <div class="custom-col-style-2 custom-col-4">
                            <div class="product-wrapper product-border mb-24">
                                <div class="product-img-3">
                                    <a href="product-details.html">
                                        <img src="assets/img/product/electro/1.jpg" alt="">
                                    </a>
                                    <div class="product-action-right">
                                        <a class="animate-right" href="{{route('products.show',$product['id'])}}" title="Quick View">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                        @if(Auth::user())
                                        <livewire:add-to-cart :product="$product" :key="$product['id']" />
                                        <livewire:add-wish-list :product="$product" :key="$product['id']" />
                                        @else
                                        <a class="animate-top" style="cursor:pointer" href="{{route('cart.add',$product['id'])}}" title="Add To Cart">
                                            <i class="pe-7s-cart"></i>
                                        </a>
                                        <a class="animate-left" title="Wishlist" href="{{route('home')}}">
                                            <i class="pe-7s-like"></i>
                                        </a>
                                        @endif

                                        
                                    </div>
                                </div>
                                <div class="product-content-4 text-center">
                                    <div class="product-rating-4">
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star yellow"></i>
                                        <i class="icofont icofont-star"></i>
                                    </div>
                                    <h4><a href="product-details.html">{{$product['name']}}</a></h4>
                                    <span>{{$product['description']}}</span>
                                    <h5>$ {{$product['price']}}</h5>
                                </div>
                            </div>
                        </div>                           
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
