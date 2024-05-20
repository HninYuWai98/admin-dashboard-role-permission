@extends('layouts.app');

@section('content')


<section class="content-header bg-dark">
    <div class="container-fluid text-center">
          <h1 class="font-weight-bold">Edit Brand</h1>
    </div>
</section>

  <div class="card-body bg-dark text-white col-5 mx-auto mt-5 p-4">

    <form action="{{route('users.update', $user->id)}}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3 row">
            <label for="name" class="col-md-4 col-form-label text-md-end text-start">User Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $user->name }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="email" class="col-md-4 col-form-label text-md-end text-start">User Email</label>
            <div class="col-md-6">
                <input type="email" class="form-control @error('name') is-invalid @enderror" id="email" name="email" value="{{$user->email}}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-md-4 col-form-label text-md-end text-start">User Email</label>
            <div class="col-md-6">
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{$user->password}}">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Role</label>
            <div class="col-md-6">
                <select name="role_id" class="form-select bg-white text-black w-100" aria-label="Default select example">
                <option selected>Choose Brand</option>
                    @foreach ($roles as $role)
                    <option
                    @if($user->role_id == $role->id) selected

                    @endif
                    value={{$role->id}}>{{$role->name}}</option>
                @endforeach
            </select>
            </div>
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="mb-3 row">
            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
        </div>
    </form>

</div>
</div>


@endsection
