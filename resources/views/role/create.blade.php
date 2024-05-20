@extends('layouts.app');

@section('content')

<section class="content-header bg-dark">
    <div class="container-fluid text-center">
          <h1 class="font-weight-bold">Create Role</h1>
    </div>
  </section>

    <div class="card-body bg-dark text-white col-5 mx-auto mt-5 p-4">

        <form action={{route('roles.store')}} method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-7 mb-3 mx-auto">
                <label for="name" class="mb-2">Enter Role</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Role name" value="{{old('name')}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>

            <div class="form-check col-7 mb-3 mx-auto">
                @foreach ($permissions as $permission)
                <div class="px-1">
                    <input class="form-check-input" type="checkbox" value={{ $permission->name }} id="flexCheckChecked" name="permissions[]">
                    <label class="form-check-label" for="flexCheckChecked">
                      {{ $permission->name }}
                    </label>
                </div>
                @endforeach
            </div>

            <div class="mt-2 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add">
            </div>
        </form>

    </div>





@endsection


