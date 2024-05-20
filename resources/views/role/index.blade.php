@extends('layouts.app')

@section('content')


<section class="content-header bg-dark">
    <div class="container-fluid text-center">
          <h1 class="font-weight-bold">Role List</h1>
    </div>
  </section>

<section class="content box mt-5">
    <div class="col-10 m-auto card">

        <div class="card-body">
            @can('role_create')
                <a href="{{route('roles.create')}}" class="btn btn-primary btn-sm my-2 p-2"><i class="fa-solid fa-circle-plus"></i> Add New Role</a>
            @endcan
            <table class="table table-striped table-bordered table-dark">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $role)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{$role->name}}</td>
                        <td class="col-3">
                            <form action="{{route('roles.destroy',$role->id)}}" method="post">
                                @csrf
                                @method('DELETE')

                                @can('role_update')
                                    <a href="{{route('roles.edit', $role->id)}}" class="btn w-25 btn-primary btn-sm"><i class="bi bi-pencil-square"></i>Edit</a>
                                @endcan

                                @can('role_delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Do you want to delete this product?');"><i class="bi bi-trash"></i> Delete</button>
                                @endcan
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td colspan="6">
                            <span class="text-danger">
                                <strong>No Role Found!</strong>
                            </span>
                    </td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</section>


@endsection
