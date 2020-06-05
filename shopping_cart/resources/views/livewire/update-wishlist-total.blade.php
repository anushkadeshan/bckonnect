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
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr>
                <td class="product-remove"><a href="{{ route('cart.destroy', $product['id']) }}"><i class="pe-7s-close"></i></a></td>
                <td class="product-thumbnail">
                    <a href="#"><img src="assets/img/cart/1.jpg" alt=""></a>
                </td>
                <td class="product-name"><a href="#">{{$product['name']}}</a></td>
                <td class="product-price-cart"><span class="amount">${{number_format($product['price'],2)}}</span></td>
                <td class="product-quantity">
                    <livewire:update-wishlist-quantity :product="$product" :key="$product['id']"/>
                </td>
                <td class="product-subtotal">
                    $ {{number_format($product['price']*$product['pivot']['quantity'],2)}}    
                </td>
                <td class="product-subtotal">
                    <livewire:add-wishlist-to-cart :product="$product" :key="$product['id']" />    
                </td>
                
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
    
</div>
