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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->product_description }}</td>
                        <td>{{ $item->qty }}</td>
                        <td>{{ $item->qty }}</td>

                        <td>
                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
        </table>
    </div>

@endsection

