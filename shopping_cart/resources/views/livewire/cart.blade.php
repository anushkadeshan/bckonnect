<div>

<div class="table-content table-responsive">
    <table>
        <thead>
            <tr>
                <th>remove</th>
                <th>images</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cartItems as $cart)
            <tr>
                <td class="product-remove"><a href="{{ route('cart.destroy', $cart['id']) }}"><i class="pe-7s-close"></i></a></td>
                <td class="product-thumbnail">
                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                </td>
                <td class="product-name"><a href="#">{{$cart['name']}}</a></td>
                <td class="product-price-cart"><span class="amount">${{number_format($cart['price'],2)}}</span></td>
                <td class="product-quantity">
                    <livewire:update-cart-form :cart="$cart" :key="$cart['id']"/>
                </td>
                <td class="product-subtotal">${{number_format(\Cart::session(auth()->id())->get($cart['id'])->getPriceSum(),2)}}</td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
</div>
