@extends('templates.default')
@section('content')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a product category</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="{{url('categories')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category name :</label>
                            <input type="text" name="cat_name" class="form-control"
                                   placeholder="" value="">
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