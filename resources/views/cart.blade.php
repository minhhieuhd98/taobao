@extends('layout')

@section('content')
    <section class="header_text sub">
        <img class="pageBanner" src="/images/pageBanner.png" alt="New products">
        <h4><span>Shopping Cart</span></h4>
    </section>
    <section class="main-content">
        <div class="row">
            <div class="span9">
                <h4 class="title"><span class="text"><strong>Your</strong> Cart</span></h4>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Image</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Total</th>
                    </tr>
                    </thead>
{{--                    @if($items_order ?? ''->count() > 0)--}}
                        <tbody>
{{dd($items_order->count())}}
                        <tr>
                            <td><input type="checkbox" value="option1"></td>
                            <td><a href="product_detail.html"><img alt="" src="/images/ladies/9.jpg"></a></td>
                            <td>Fusce id molestie massa</td>
                            <td><input type="text" placeholder="1" class="input-mini"></td>
                            <td>$2,350.00</td>
                            <td>$2,350.00</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" value="option1"></td>
                            <td><a href="product_detail.html"><img alt="" src="/images/ladies/1.jpg"></a></td>
                            <td>Luctus quam ultrices rutrum</td>
                            <td><input type="text" placeholder="2" class="input-mini"></td>
                            <td>$1,150.00</td>
                            <td>$2,450.00</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" value="option1"></td>
                            <td><a href="product_detail.html"><img alt="" src="/images/ladies/3.jpg"></a></td>
                            <td>Wuam ultrices rutrum</td>
                            <td><input type="text" placeholder="1" class="input-mini"></td>
                            <td>$1,210.00</td>
                            <td>$1,123.00</td>
                        </tr>
                        </tbody>
{{--                    @endif--}}
                </table>
                <hr>
                <p class="cart-total right">
                    <strong>Sub-Total</strong>: $100.00<br>
                    <strong>Eco Tax (-2.00)</strong>: $2.00<br>
                    <strong>VAT (17.5%)</strong>: $17.50<br>
                    <strong>Total</strong>: $119.50<br>
                </p>
                <hr/>
                <p class="buttons center">
                    <button class="btn" type="button">Update</button>
                    <button class="btn" type="button">Continue</button>
                    <button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
                </p>
            </div>
        </div>
    </section>
@endsection
