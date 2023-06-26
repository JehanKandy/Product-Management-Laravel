@extends('layouts.admin_dash')
@include('layouts.header')

@section('content')
    <div class="admin-card">
        <h3>Name : <b> {{ $product->product_name }} </b></h3><br><br>
        <h3>description : <b> {{ $product->product_description }} </b></h3><br><br>
        <div class="row">
            <div class="col-lg-3">
                Product Name
            </div>
            <div class="col-lg-9">
                {{ $product->product_name  }}
            </div>
        </div>
    </div>
@endsection