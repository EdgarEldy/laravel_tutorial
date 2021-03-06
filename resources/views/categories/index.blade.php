@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Product categories</div>
            <div class="panel-body">
                <a href="{{url('categories/create')}}"
                   class="btn btn-primary">New</a>
                <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                       data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category name</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}} </td>
                        <td>{{$category->cat_name}}</td>
                        <td>
                            <div class="card-footer">
                                <a href="categories/edit/{{$category->id}}"
                                   class="btn btn-primary">Edit</a>
                                <form action="categories/destroy/{{$category->id}}" method="post">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this category ?')" class="btn btn-danger btn-sm">Delete</button>
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