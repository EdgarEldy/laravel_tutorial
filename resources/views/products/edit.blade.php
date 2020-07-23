@extends('templates.default')
@section('content')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit a product</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="/products/{{ $product->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="">Category name :</label>
                            <select name="category_id" id="" class="form-control"
                                class="@error('category_id') is-invalid @enderror">
                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                <option value=""></option>
                                <option value="">Select a category...</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <button class="btn-danger">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Product name :</label>
                            <input type="text" name="product_name" class="form-control"
                                class="@error('product_name') is-invalid @enderror" placeholder=""
                                value="{{ $product->product_name }}">
                            @error('product_name')
                            <button class="btn-danger">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Unit price :</label>
                            <input type="text" name="unit_price" class="form-control"
                                class="@error('unit_price') is-invalid @enderror" placeholder=""
                                value="{{ $product->unit_price }}">
                            @error('unit_price')
                            <button class="btn-danger">{{ $message }}</button>
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
