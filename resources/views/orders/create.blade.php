@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add an order</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="{{url('orders')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Select a customer :</label>
                            <select name="customer_id" id="customer_id" class="form-control"
                                    class="@error('customer_id') is-invalid @enderror">
                                <option value="">Select a customer</option>
                                @foreach($customers as $customer)
                                    <option value="{{$customer->id}}">{{$customer->first_name}} {{$customer->last_name}}</option>
                                @endforeach
                            </select>
                            @error('customer_id')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="categories">Select a category </label>
                            <select name="cat_id" id="cat_id" class="form-control">
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Select a product :</label>
                            <select name="product_id" id="product_id" class="form-control"
                                    class="@error('product_id') is-invalid @enderror">
                                    <option value="">Select a product</option>
                            </select>
                            @error('product_id')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="unit_price">Unit price :</label>
                            <input type="text" name="unit_price" id="unit_price" class="form-control"
                                   class="@error('unit_price') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('unit_price')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Qty :</label>
                            <input type="text" name="qty" class="form-control"
                                   class="@error('qty') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('qty')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Total :</label>
                            <input type="text" name="total" class="form-control"
                                   class="@error('total') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('total')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <button type="button" id="button" class="btn btn-primary">Click me</button>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->

@endsection()
