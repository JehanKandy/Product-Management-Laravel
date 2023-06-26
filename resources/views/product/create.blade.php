@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')
    <div class="admin-card">
        <h4><i class="fas fa-cart-plus"></i> Add New Product</h4>
        <br>
        <hr>

        <form action="{{ url('student') }}" method="POST">
        
        </form>
    </div>
@endsection