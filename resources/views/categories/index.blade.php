@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Product categories</div>
            <div class="panel-body">
                <a href="<?= URL_ROOT?>/categories/add"
                   class="btn btn-primary">New</a>

            </div>
        </div>
    </div>


@endsection()