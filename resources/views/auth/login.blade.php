@extends('layouts.guest2')
@section('title','Iniciar Sesión')
@section('content')
<div class=" d-flex justify-content-center align-items-center pt-5 pb-5">
    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">
        <div class="d-flex justify-content-center">
            <img src="{{asset('recursos/user/img/login-icon.svg')}}" alt="login-icon" style="height: 7rem" />
        </div>
        <div class="text-center fs-1 fw-bold">
            Iniciar Sesión
        </div>
        <form action="{{route('login')}}" method="post" class="text-start">
        @csrf
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input  name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
            <div class="text-white w-100 mt-4 fw-semibold shadow-sm">
                <button type="submit" class="btn btn-info ">Iniciar Sesión</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('style')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection
