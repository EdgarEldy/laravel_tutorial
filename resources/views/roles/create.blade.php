@extends('templates.default')
@section('content')
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Add a role</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="{{url('roles')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Role name :</label>
                            <input type="text" name="name" class="form-control"
                                   class="@error('name') is-invalid @enderror"
                                   placeholder="" value="">
                            @error('name')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="permissions">Select a permission :</label>
                            <select name="permissions[]" id="permissions" multiple
                                    class="standardSelect">
                                <option value=""></option>
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}" {!! (collect(old('permissions'))->contains($permission->id)) ?
                            'selected="selected"' : '' !!}>{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            @error('permissions')
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
