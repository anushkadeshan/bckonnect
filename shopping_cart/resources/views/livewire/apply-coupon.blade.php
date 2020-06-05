<div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="coupon-all">
                <form wire:submit.prevent="ApplyCoupon">
                    <div class="coupon">
                        <input wire:model="coupon_code" id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Coupon code" type="text">
                        <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                        @if (session()->has("errorCoupon"))
                        <div class="badge badge-danger text-center" role="alert">
                            {{session('errorCoupon')}}
                        </div>       
                        @endif
                        @if (session()->has("successCoupon"))
                            <div class="badge badge-success text-center" role="alert">
                                {{session('successCoupon')}}
                            </div>       
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="cart-page-total">
                <h2>Cart totals</h2>
                <ul>
                    <li>Subtotal<span>${{number_format($subTotal,2)}}</span></li>
                    <li>Coupon Discount<span>${{number_format($discount,2)}}</span></li>
                    <li>Total<span>${{number_format($total,2)}}</span></li>
                </ul>
                <a href="{{route('cart.checkout')}}">Proceed to checkout</a>
            </div>
        </div>
    </div>
    
</div>
