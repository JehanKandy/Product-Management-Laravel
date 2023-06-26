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
                <input type="text" name="product_name" id="" class="form-control"><br>
            </div>
            <div class="form-group">
                <label for="product desc">Product Description : </label>
                <textarea name="product_desc" id="" cols="20" rows="10" class="form-control" style="resize: none;"></textarea><br>
            </div>
            <div class="form-group">
                <label for="product qty">Product Qty : </label>
                <input type="number" name="product_qty" id="" class="form-control"><br>
            </div>
    
        </form>
    </div>
@endsection