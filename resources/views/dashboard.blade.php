@extends('layouts.app')

@section('content')

{{-- <x-app-layout> --}}
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div> --}}



{{-- </x-app-layout> --}}

<div class="container-fluid">
    <div class="row bg-dark d-flex justify-content-center align-items-center">
        <p class="h1 p-2">Welcome To Admin Dashboard!</p>
        <img src="{{url('/images/undraw_programmer_re_owql.svg')}}" class="w-25 p-4 ml-5" height="50px" alt="">
    </div>
    <div class="row mt-3 mx-auto" style="height: 200px;">

        <div class="col m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3">User List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="{{route('users.index')}}">Click here!</a></button>
        </div>

        <div class="col m-3  shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3">Role List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="{{route('roles.index')}}">Click here!</a></button>
        </div>

        <div class="col m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3">Brand List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="{{route('brands.index')}}">Click here!</a></button>
        </div>
    </div>

    <div class="row mt-3 mx-auto w-100" style="height: 200px;">

        <div class="col m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3 mb-3">Category List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="{{route('categories.index')}}">Click here!</a></button>
        </div>

        <div class="col m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3 mb-3">Product List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="">Click here!</a></button>
        </div>

        <div class="col m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3 mb-3">Customer List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="">Click here!</a></button>
        </div>
    </div>

    <div class="row mt-3 mx-auto w-100" style="height: 200px;">

        <div class="col-4 m-3 shadow-sm text-center bg-white d-flex flex-column justify-content-center align-items-center rounded-lg">
            <h3 class="h3 mb-3">Order List</h3>
            <button type="button" class="btn btn-primary btn-sm w-40"><a href="">Click here!</a></button>
        </div>
    </div>
</div>
@endsection
