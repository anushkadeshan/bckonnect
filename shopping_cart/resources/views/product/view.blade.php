
@extends('layouts.login')
@section('content')

    <div class="product-details ptb-20 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-5 pr-70">
                        <img src="/assets/img/product-details/l1-details-5.png" alt="">
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12">
                    <div class="sidebar-active product-details-content">
                        <h3>{{$product->name}}</h3>
                        <div class="rating-number">
                            <div class="quick-view-rating">
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                            </div>
                            <div class="quick-view-number">
                                <span>2 Ratting (S)</span>
                            </div>
                        </div>
                        <div class="details-price">
                            <span>${{$product->price}}</span>
                        </div>
                        <p>{{$product->description}}</p>
                        <div class="product-color-2">
                            <h4 class="details-title">Color*</h4>
                            <div class="product-color-style2">
                                <ul>
                                    <li class="orange"></li>
                                    <li class="blue2"></li>
                                    <li class="pink"></li>
                                    <li class="yellow"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-size-2">
                            <h4 class="details-title">Size*</h4>
                            <div class="product-size-style2">
                                <ul>
                                    <li><a href="#">xl</a></li>
                                    <li><a href="#">ml</a></li>
                                    <li><a href="#">m</a></li>
                                    <li><a href="#">sl</a></li>
                                    <li><a href="#">ls</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="quickview-plus-minus">
                            <div class="cart-plus-minus">
                                <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                            </div>
                            <div class="quickview-btn-cart">
                                <a class="btn-hover-black" href="#">add to cart</a>
                            </div>
                            <div class="quickview-btn-wishlist">
                                <a class="btn-hover" href="#"><i class="pe-7s-like"></i></a>
                            </div>
                        </div>
                        <div class="product-details-cati-tag mt-35">
                            <ul>
                                <li class="categories-title">Categories :</li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">electronics</a></li>
                                <li><a href="#">toys</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">jewellery</a></li>
                            </ul>
                        </div>
                        <div class="product-details-cati-tag mtb-10">
                            <ul>
                                <li class="categories-title">Tags :</li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">electronics</a></li>
                                <li><a href="#">toys</a></li>
                                <li><a href="#">food</a></li>
                                <li><a href="#">jewellery</a></li>
                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="categories-title">Share :</li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-flikr"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description-review-area pb-90">
        <div class="container">
            <div class="product-description-review text-center">
                <div class="description-review-title nav" role=tablist>
                    <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                        Description
                    </a>
                    <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                        Reviews (0)
                    </a>
                </div>
                <div class="description-review-text tab-content">
                    <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                    </div>
                    <div class="tab-pane fade" id="pro-review" role="tabpanel">
                        @auth
                        
                        <form action="{{route('review.store')}}" method="post">
                            @csrf
                            <product-review></product-review>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input name="headline" id=""  type="text" value="" placeholder="Headline">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <textarea name="description" id=""  type="text" value="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input name="rating" id=""  type="text" value="" placeholder="Rating">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="button-box">
                                        <button type="submit" class="default-btn floatright">Add Review</button>
                                    </div>
                                </div>
                            </div>
                            <input name="product_id" id=""  type="hidden" value="{{$product->id}}" placeholder="Rating">
                        </form>
                        @else
                            <a href="{{route('login')}}" class="button" data-open="product-review-modal">Be the first to write your review!</a>

                        @endauth

                        @foreach($product->reviews as $review)
                                <li>{{$review->headline}}</li>
                                <li>{{$review->rating}}</li>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area start -->
    <div class="product-area pb-95">
        <div class="container">
            <div class="section-title-3 text-center mb-50">
                <h2>Related products</h2>
            </div>
            <div class="product-style">
                <div class="related-product-active owl-carousel">
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/3.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/4.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/5.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/1.jpg" alt="">
                            </a>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                    <div class="product-wrapper">
                        <div class="product-img">
                            <a href="#">
                                <img src="/assets/img/product/fashion-colorful/2.jpg" alt="">
                            </a>
                            <span>hot</span>
                            <div class="product-action">
                                <a class="animate-left" title="Wishlist" href="#">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <a class="animate-top" title="Add To Cart" href="#">
                                    <i class="pe-7s-cart"></i>
                                </a>
                                <a class="animate-right" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                    <i class="pe-7s-look"></i>
                                </a>
                            </div>
                        </div>
                        <div class="product-content">
                            <h4><a href="#">Arifo Stylas Dress</a></h4>
                            <span>$115.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product area end -->
@endsection
