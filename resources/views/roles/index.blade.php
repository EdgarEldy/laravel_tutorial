@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Roles</div>
            @if (session('status.message'))
                            <div class="alert alert-{{ session('status.type') }} alert-dismissible fade show" role="alert">
                                <i class="fa fa-{{ session('status.icon') }} mr-1"></i>{{ session('status.message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
            <div class="panel-body">
                <a href="{{url('roles/create')}}"
                   class="btn btn-success">New</a>
                <table data-toggle="table" data-url=""  data-show-refresh="true" data-show-toggle="true"
                       data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true"
                       data-sort-name="name" data-sort-order="desc">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Permissions</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($roles as $role)
                    <tr>
                        <td>{{$role->id}} </td>
                        <td>{{$role->name}}</td>
                        <td>
                            @forelse ($role->permissions()->pluck('name') as $permission)
                                <label class="badge badge-success">{{ $permission }}</label>
                            @empty
                                <label class="badge badge-danger">None</label>
                            @endforelse
                        </td>
                        <td>
                            <div class="card-footer">
                                <a href="roles/edit/{{$role->id}}"
                                   class="btn btn-primary">Edit</a>
                                <form action="roles/destroy/{{$role->id}}" method="POST">
                                    @csrf
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this role ?')" class="btn btn-danger btn-sm">Delete</button>
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