@extends('layouts.app');

@section('content')


<section class="content-header bg-dark">
    <div class="container-fluid text-center">
          <h1 class="font-weight-bold">Edit Brand</h1>
    </div>
</section>

  <div class="card-body bg-dark text-white col-5 mx-auto mt-5 p-4">

    <form action="{{ route('roles.update', $role->id) }}" method="post">
        @csrf
        @method("PUT")

        <div class="mb-3 row">
            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Brand Name</label>
            <div class="col-md-6">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $role->name }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
        </div>

        <div class="form-check col-7 mb-3 mx-auto">
            @foreach ($permissions as $permission)
                <div class="px-1">
                    <input class="form-check-input" type="checkbox"
                           value="{{ $permission->name }}"
                           name="permissions[]"
                           @if($role->hasPermissionTo($permission->name)) checked @endif>
                    <label class="form-check-label">
                        {{ $permission->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <div class="mb-3 row">
            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
        </div>
    </form>

</div>
</div>


@endsection
