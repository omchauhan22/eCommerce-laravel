@extends('master')

@section("content")
<div class="container custom-product my-5">
    <div class="col-sm-10 mx-auto">
        <h2 class="text-center mb-4">Order Summary</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td><strong>Amount</strong></td>
                    <td>₹ {{ $total }}</td>
                </tr>
                <tr>
                    <td><strong>Tax</strong></td>
                    <td>₹ 0</td>
                </tr>
                <tr>
                    <td><strong>Delivery</strong></td>
                    <td>₹ 10</td>
                </tr>
                <tr>
                    <td><strong>Total Amount</strong></td>
                    <td>₹ {{ $total + 10 }}</td>
                </tr>
            </tbody>
        </table>

        <div class="order-form mt-4">
            <h4 class="mb-3">Enter Your Details</h4>
            <form action="/orderplace" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea name="address" placeholder="Enter your address" class="form-control" rows="3" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="payment-method" class="form-label">Payment Method</label><br>
                    <div class="form-check">
                        <input type="radio" id="online-payment" value="online" name="payment" class="form-check-input" required>
                        <label for="online-payment" class="form-check-label">Online Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="emi-payment" value="emi" name="payment" class="form-check-input">
                        <label for="emi-payment" class="form-check-label">EMI Payment</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="payment-delivery" value="cash" name="payment" class="form-check-input">
                        <label for="payment-delivery" class="form-check-label">Payment on Delivery</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Order Now</button>
            </form>
        </div>
    </div>
</div>
@endsection
