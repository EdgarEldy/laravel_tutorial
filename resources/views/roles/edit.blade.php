@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Update a user role</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="{{ route('roles.update', $role) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Role name :</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') ?? $role->name }}"
                                class="@error('name') is-invalid @enderror" placeholder="" value="">
                            @error('name')
                                <button class="btn-danger">{{ $message }}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="permissions">Select a permission :</label>
                            <select name="permissions[]" id="permissions" multiple class="standardSelect">
                                <option value=""></option>
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->id }}" {!! collect($rolePermission)->contains($permission->name) ? 'selected="selected"' : '' !!}>
                                        {{ $permission->name }}</option>
                                @endforeach
                            </select>
                            @error('permissions')
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
