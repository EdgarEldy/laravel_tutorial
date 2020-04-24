@extends('templates.default')
@section('content')

    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit a customer</div>
            <div class="panel-body">
                <div class="col-md-6">
                    <form role="form" action="/customers/{{$customer->id}}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label>First name :</label>
                            <input type="text" name="first_name" class="form-control" class="@error('first_name') is-invalid @enderror"
                                   placeholder="" value="{{$customer->first_name}}">
                            @error('first_name')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>First name :</label>
                            <input type="text" name="last_name" class="form-control" class="@error('last_name') is-invalid @enderror"
                                   placeholder="" value="{{$customer->last_name}}">
                            @error('last_name')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="text" name="email" class="form-control" class="@error('email') is-invalid @enderror"
                                   placeholder="" value="{{$customer->email}}">
                            @error('email')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Tel :</label>
                            <input type="text" name="tel" class="form-control" class="@error('tel') is-invalid @enderror"
                                   placeholder="" value="{{$customer->tel}}">
                            @error('tel')
                            <button class="btn-danger">{{$message}}</button>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address :</label>
                            <input type="text" name="address" class="form-control" class="@error('address') is-invalid @enderror"
                                   placeholder="" value="{{$customer->address}}">
                            @error('address')
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