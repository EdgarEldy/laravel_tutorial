@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Products</div>
            <div class="panel-body">
                <a href="{{url('products/create')}}"
                   class="btn btn-primary">New</a>
                <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                       data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Product name</th>
                        <th>Unit price</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->cat_name}}</td>
                        <td>{{$product->product_name}}</td>
                        <td>{{$product->unit_price}}</td>
                        <td>
                            <div class="card-footer">
                                <a href="products/edit/{{$product->id}}"
                                   class="btn btn-primary">Edit</a>
                                <form action="products/destroy/{{$product->id}}" method="post">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this customer ?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>

                            </div>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection()
