@extends('layouts.login')
@section('content')
<div class="container">
<h2>Checkout</h2>
<!-- checkout-area start -->
<div class="checkout-area ptb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               <div class="coupon-accordion">
                    <!-- ACCORDION START -->
                    <h3</h3>
                    
                    <!-- ACCORDION END -->						
                </div> 
            </div>
        </div>
        <form action="{{route('orders.store')}}" method="post">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="checkbox-form">						
                    <h3>Billing Details</h3>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="country-select">
                                <label>Country <span class="required">*</span></label>
                                <select name="country">
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}"> {{$country->name}} | {{$country->alpha3Code}}</option>
                                    @endforeach
                                </select> 										
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Full Name <span class="required">*</span></label>										
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" autofocus placeholder="" />
                                @error('fullname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Company Name</label>
                                <input type="text" name="company_name" placeholder="" value="{{ old('company_name') }}" autofocus />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address <span class="required">*</span></label>
                                <input type="text" class="form-control @error('street_address') is-invalid @enderror" name="street_address" placeholder="Street address"  value="{{ old('street_address') }}" autofocus/>
                                @error('street_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">									
                                <input type="text"  name="apartment" placeholder="Apartment, suite, unit etc. (optional)" value="{{ old('apartment') }}" autofocus />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Town / City <span class="required">*</span></label>
                                <input class="form-control @error('city') is-invalid @enderror"  name="city" type="text" value="{{ old('city') }}" autofocus />
                                @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>State / County <span class="required">*</span></label>										
                                <input class="form-control @error('state') is-invalid @enderror" type="text" name="state" placeholder="" value="{{ old('state') }}" autofocus />
                                @error('state')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Postcode / Zip <span class="required">*</span></label>										
                                <input class="form-control @error('zip_code') is-invalid @enderror"  name="zip_code" type="text" value="{{ old('zip_code') }}" autofocus/>
                                @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Email Address <span class="required">*</span></label>										
                                <input class="form-control @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}" autofocus />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Phone  <span class="required">*</span></label>										
                                <input class="form-control @error('phone') is-invalid @enderror" name="phone" type="text" value="{{ old('phone') }}" autofocus />
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>								
                    </div>
                    <div class="different-address">
                        <div class="ship-different-title">
                            <h3>
                                <label>Ship to a different address?</label>
                                <input id="ship-box" class="ship-box" name"ship_box" type="checkbox" value="shipping" />
                            </h3>
                        </div>
                        <div id="ship-box-info" class="row">
                            <div class="col-md-12">
                                <div class="country-select">
                                    <label>Country <span class="required">*</span></label>
                                    <select name="shipping_country">
                                    @foreach($countries as $country)
                                        <option value="{{$country->name}}"> {{$country->name}} | {{$country->alpha3Code}}</option>
                                    @endforeach
                                </select>  										
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Full Name <span class="required">*</span></label>										
                                    <input type="text" class="form-control @error('shipping_fullname') is-invalid @enderror" name="shipping_fullname" value="{{ old('shipping_fullname') }}" autofocus placeholder="" />
                                    @error('shipping_fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" name="shipping_company_name" placeholder="" value="{{ old('shipping_company_name') }}" autofocus />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control @error('shipping_street_address') is-invalid @enderror" name="shipping_street_address" placeholder="Street address"  value="{{ old('shipping_street_address') }}" autofocus/>
                                    @error('shipping_street_address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">									
                                    <input type="text"  name="shipping_apartment" placeholder="Apartment, suite, unit etc. (optional)" value="{{ old('shipping_apartment') }}" autofocus />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Town / City <span class="required">*</span></label>
                                    <input class="form-control @error('shipping_city') is-invalid @enderror"  name="shipping_city" type="text" value="{{ old('shipping_city') }}" autofocus />
                                    @error('shipping_city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>State / County <span class="required">*</span></label>										
                                    <input class="form-control @error('shipping_state') is-invalid @enderror" type="text" name="shipping_state" placeholder="" value="{{ old('shipping_state') }}" autofocus />
                                    @error('shipping_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Postcode / Zip <span class="required">*</span></label>										
                                    <input class="form-control @error('shipping_zip_code') is-invalid @enderror"  name="shipping_zip_code" type="text" value="{{ old('shipping_zip_code') }}" autofocus/>
                                    @error('shipping_zip_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>										
                                    <input class="form-control @error('shipping_email') is-invalid @enderror" name="shipping_email" type="email" value="{{ old('shipping_email') }}" autofocus />
                                    @error('shipping_email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>										
                                    <input class="form-control @error('shipping_phone') is-invalid @enderror" name="shipping_phone" type="text" value="{{ old('shipping_phone') }}" autofocus />
                                    @error('shipping_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>	
                        </div>	
                        <div class="order-notes">
                            <div class="checkout-form-list mrg-nn">
                                <label>Order Notes</label>
                                <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                            </div>									
                        </div>
                    </div>													
                </div>
            </div>	
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order">
                    <h3>Your order</h3>
                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name" style="text-align:left">Product</th>
                                    <th class="product-total" style="text-align:right">Total</th>
                                </tr>							
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr class="cart_item">
                                    <td class="product-name" style="text-align:left">
                                        {{$product['name']}} <strong class="product-quantity"> × {{$product['quantity']}}</strong>
                                    </td>
                                    <td class="product-total" style="text-align:right">
                                        <span class="amount" style="text-align:right">${{$product['price']}}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr class="cart-subtotal">
                                    <th style="text-align:left">Cart Subtotal</th>
                                    <td style="text-align:right"><span class="amount">${{\Cart::session(auth()->id())->getSubTotal()}}</span></td>
                                </tr>
                                <tr class="order-total">
                                    <th style="text-align:left">Order Total</th>
                                    <td style="text-align:right"><strong><span class="amount">${{\Cart::session(auth()->id())->getTotal()}}</span></strong>
                                    </td>
                                </tr>								
                                </tfoot>
                        </table>
                    </div>
                    <div class="payment-method">
                        <div class="payment-accordion">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="country-select">
                                        <label>Select Payment Method <span class="required">*</span></label>
                                        <select name="payment_method">  
                                            <option value="cash_on_delivery">Cash on Delivery</option> 
                                            <option value="paypal">Paypal</option> 
                                            <option value="stripe">Stripe</option> 
                                            <option value="Card">Card</option> 
                                        </select> 										
                                    </div>
                                </div>
                            </div>
                            <div class="order-button-payment">
                            @csrf
                            <input type="submit" value="Place order" />
                            </div>								
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>

</div>
@endsection
@section('scripts')
<script>
<script>

</script>
</script>

@endsection