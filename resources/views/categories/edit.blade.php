@extends('templates.default')
@section('content')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit a product category</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="/categories/{{$category->id}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>Category name :</label>
                            <input type="text" name="cat_name" class="form-control"
                                   placeholder="" value="{{$category->cat_name}}">
                            <span class="invalid-feedback"></span>
                        </div>
                        <button type="submit" id="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- /.col-->


@endsection()