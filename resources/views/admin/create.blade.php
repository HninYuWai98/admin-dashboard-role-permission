@extends('layouts.app');

@section('content')

<section class="content-header bg-dark">
    <div class="container-fluid text-center">
          <h1 class="font-weight-bold">Create Role</h1>
    </div>
  </section>

    <div class="card-body bg-dark text-white col-5 mx-auto mt-5 p-4">

        <form action={{route('admins.store')}} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-7 mb-3 mx-auto">
                <label for="name" class="mb-2">Enter name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Admin name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group col-7 mb-3 mx-auto">
                <label for="email" class="mb-2">Enter email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Admin email" value="{{old('email')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group col-7 mb-3 mx-auto">
                <label for="password" class="mb-2">Enter password</label>
                <input type="password" class="form-control" id="name" name="password" placeholder="Admin password" value="{{old('password')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-group col-7 mx-auto mb-5">
                <label for="role_id" class="mb-1">Roles</label>
                <select name="role_id" class="form-select bg-white text-black w-100" aria-label="Default select example">
                <option selected>Choose Role</option>
                    @foreach ($roles as $role)
                        <option value={{$role->id}}>{{$role->name}}</option>
                    @endforeach
              </select>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="mt-2 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add">
            </div>
        </form>

    </div>





@endsection


