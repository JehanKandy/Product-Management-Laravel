@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')

    <div class="admin-card">
        <h3>Products</h3>
        <br>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Qty</th>
                    <th>Product Price</th>
                    <th>Product Status</th>
                    <th>Product Add Date</th>
                </tr>
            </thead>
        </table>
    </div>

@endsection

