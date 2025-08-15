@extends('layouts.frontend')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h4 class="text-light">Order Product: {{ $product->name }}</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('order.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="customer_name" class="form-control" required placeholder="Enter your full name">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="customer_phone" class="form-control" required placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="customer_address" class="form-control" required placeholder="Enter your address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Payment Method</label>
                            <select name="payment_method" class="form-control" id="payment_method" required>
                                <option value="">Select Payment Method</option>
                                <option value="bkash">bKash</option>
                                <option value="cod">Cash On Delivery</option>
                            </select>
                        </div>
                        <div id="bkash_fields" style="display:none;">
                            <div class="form-group">
                                <label>bKash Number</label>
                                <input type="text" name="bkash_number" class="form-control" readonly value="+8801705143847" placeholder="Enter bKash number">
                            </div>
                            <div class="form-group">
                                <label>bKash Transaction ID</label>
                                <input type="text" name="bkash_transaction_id" class="form-control" placeholder="Enter bKash transaction ID">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-dark btn-block mt-3">Place Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.getElementById('payment_method').addEventListener('change', function() {
    document.getElementById('bkash_fields').style.display = this.value === 'bkash' ? 'block' : 'none';
});
</script>
@endsection