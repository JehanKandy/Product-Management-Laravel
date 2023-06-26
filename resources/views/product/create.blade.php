@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')
    <div class="admin-card">
        <h4><i class="fas fa-cart-plus"></i> Add New Product</h4>
        <hr>

        <form action="{{ url('student') }}" method="POST">
        @csrf
        
            <div class="form-group">
                <label for="product name">Product Name : </label>
                <input type="text" name="product_name" id="" class="form-control" placeholder="Product Name"><br>
            </div>
            <div class="form-group">
                <label for="product desc">Product Description : </label>
                <textarea name="product_desc" id="" cols="20" rows="10" class="form-control" style="resize: none;" placeholder="Product Description"></textarea><br>
            </div>
            <div class="form-group">
                <label for="product qty">Product Qty : </label>
                <input type="number" name="product_qty" id="" class="form-control" placeholder="Product Qty"><br>
            </div>
            <div class="form-group">
                <label for="product Price">Product Price : </label>
                <input type="number" name="product_price" class="form-control" min="0.00" max="10000.00" step="0.01" placeholder="Product Price"><br>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6">
                        <input type="reset" value="Clear" class="btn btn-secondary">
                    </div>
                    <div class="col-lg-6">
                        <input type="submit" value="Add Product" class="btn btn-success">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection