@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a product</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="{{url('products')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Select a category :</label>
                            <select name="category_id" id="" class="form-control" class="@error('category_id') is-invalid @enderror">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Product name :</label>
                            <input type="text" name="product_name" class="form-control" class="@error('product_name') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('product_name')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="text" name="unit_price" class="form-control" class="@error('unit_price') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('unit_price')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->


@endsection()